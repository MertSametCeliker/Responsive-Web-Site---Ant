<?php
session_start();

// Kullanıcı giriş yapmamışsa login sayfasına yönlendir
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");  // Login sayfasına yönlendir
    exit;
}

// db.php içinde
try {
    $pdo = new PDO("mysql:host=111111;dbname=1111111", "username", "password");
    echo "Veritabanı bağlantısı başarılı!";
} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
    <link rel="stylesheet"> <!-- Yeni CSS dosyası eklendi -->
    <script>
        // Tablo seçildiğinde çalışacak fonksiyon
        function handleTableChange(table) {
            if (table) {
                if (table === 'images') {
                    // Eğer "images" tablosu seçildiyse, uploadindex.php'ye yönlendir
                    window.location.href = 'uploadindex.php';
                } else {
                    // Diğer tablolarda normal işlem yapılacak
                    window.location.href = 'admin.php?table=' + table;
                }
            }
        }

        // Yeni form verilerini oluşturmak için kullanacağımız fonksiyon
        function showForm(table) {
            fetch(`get_fields.php?table=${table}`)
                .then(response => response.json())
                .then(data => {
                    const formContainer = document.getElementById('formContainer');
                    formContainer.innerHTML = '';  // Önceki formu temizle
                    formContainer.action = `add.php?table=${table}`;  // Form gönderisini "add.php"'ye yönlendirecek

                    // Dinamik form alanlarını ekle
                    data.fields.forEach(field => {
                        // "id" alanını formda göstermiyoruz
                        if (field !== 'id') {
                            formContainer.innerHTML += `
                                <label for="${field}">${field}:</label>
                                <input type="text" id="${field}" name="${field}" required><br>
                            `;
                        }
                    });

                    formContainer.innerHTML += `<input type="submit" value="Ekle">`;  // Submit butonu
                });
        }
    </script>
    <style>
        /* Genel Ayarlar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #e1f5fe; /* Açık mavi, arka planda yumuşak bir etki */
            color: #424242;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        header {
            text-align: center;
            padding: 20px 0;
            background-color: #ec407a; /* Canlı pembe */
            color: white;
            border-radius: 10px;
        }

        header h1 {
            font-size: 2.5rem;
        }

        /* Tablo Seçim */
        .table-selection {
            margin-bottom: 20px;
        }

        .table-selection h2 {
            font-size: 1.8rem;
            color: #8e24aa; /* Mor */
            margin-bottom: 10px;
        }

        select {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            background-color: #81c784; /* Yeşil */
            border: 1px solid #66bb6a;
            border-radius: 5px;
        }

        /* Tablo Stili */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .data-table th, .data-table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #9e9e9e;
        }

        .data-table th {
            background-color: #8e24aa; /* Mor */
            color: white;
        }

        .data-table td a {
            margin-right: 10px;
            text-decoration: none;
            color: white;
            background-color: #ec407a; /* Canlı pembe */
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .data-table td a:hover {
            background-color: #d81b60; /* Koyu pembe */
        }

        /* Form Alanları */
        form {
            margin-top: 30px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #8e24aa; /* Mor */
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            margin-bottom: 10px;
            border: 1px solid #66bb6a; /* Yeşil */
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 15px;
            background-color: #81c784; /* Yeşil */
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #66b3bb; /* Yeşil tonları */
        }

        /* Responsive Tasarım */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            header h1 {
                font-size: 2rem;
            }

            select, input[type="text"], input[type="submit"] {
                font-size: 1rem;
            }

            .data-table th, .data-table td {
                padding: 10px;
            }

            .data-table td a {
                padding: 5px 8px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Veritabanı Yönetimi</h1>
            <!-- Çıkış yap butonu -->
            <a href="logout.php" class="logout-btn">Çıkış Yap</a>
        </header>
    </div>
    <main>
        <section class="table-selection">
            <h2>Tablo Seçin</h2>
            <form action="" method="get">
                <select name="table" onchange="handleTableChange(this.value)" required>
                    <option value="">Seçiniz</option>
                    <?php
                        $stmt = $pdo->query("SHOW TABLES");
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            foreach ($row as $table) {
                                $selected = (isset($_GET['table']) && $_GET['table'] == $table) ? 'selected' : '';
                                echo "<option value='$table' $selected>$table</option>";
                            }
                        }
                    ?>
                </select>
            </form>
        </section>

        <?php
        if (isset($_GET['table']) && !empty($_GET['table'])) {
            $table = $_GET['table'];
            $stmt = $pdo->query("DESCRIBE $table");
            $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (empty($columns)) {
                echo "<p>Tablo yapısı alınamadı. Lütfen tablo adını kontrol edin.</p>";
            } else {
                echo "<h2>$table Kayıtları</h2>";
                echo "<table class='data-table'>
                        <tr>";
                foreach ($columns as $column) {
                    echo "<th>" . htmlspecialchars($column['Field']) . "</th>";
                }
                echo "<th>İşlem</th></tr>";

                $stmt = $pdo->query("SELECT * FROM $table");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    foreach ($columns as $column) {
                        echo "<td>" . htmlspecialchars($row[$column['Field']]) . "</td>";
                    }
                    echo "<td>
                            <a href='edit.php?table=$table&id={$row['id']}'>Düzenle</a>
                            <a href='delete.php?table=$table&id={$row['id']}'>Sil</a>
                        </td>
                    </tr>";
                }
                echo "</table>";

                echo "<h3>Yeni Kayıt Ekle</h3>";
                echo "<form id='formContainer' action='add.php?table=$table' method='post'></form>";
                echo "<script>showForm('$table');</script>";
            }
        }
        ?>
    </main>
</body>
</html>
