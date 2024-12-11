<?php
// Hata ayarları
ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
    $pdo = new PDO("mysql:host=1111111;dbname=1111111111", "username", "password");
    echo "Veritabanı bağlantısı başarılı!";
} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
    exit();
}

// Gelen 'table' ve 'id' değerlerinin güvenliğini sağla
$table = preg_replace("/[^a-zA-Z0-9_]+/", "", $_GET['table']);
$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

if (!$id || !$table) {
    echo "Geçersiz veri.";
    exit();
}

// POST isteği kontrolü
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fields = array_keys($_POST);
    $values = array_values($_POST);
    $values[] = $id; // ID'yi sonuna ekle

    // SQL sorgusunu dinamik olarak hazırla
    $setPart = implode(' = ?, ', $fields) . ' = ?';
    $sql = "UPDATE $table SET $setPart WHERE id = ?";

    // Sorguyu çalıştır
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute($values)) {
        header("Location: admin.php?table=" . urlencode($table));
        exit();
    } else {
        echo "Güncelleme sırasında bir hata oluştu.";
    }
}

// Seçilen kaydı al
$stmt = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
$stmt->execute(['id' => $id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

// Eğer kayıt bulunmazsa, hata göster
if (!$row) {
    echo "Kayıt bulunamadı.";
    exit();
}

// Tablonun kolon isimlerini getir
$fields = [];
$descStmt = $pdo->query("DESCRIBE $table");
while ($column = $descStmt->fetch(PDO::FETCH_ASSOC)) {
    $fields[] = $column['Field'];
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Düzenle</title>
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
        <h1>Kayıt Düzenle</h1>
        <form action="" method="post">
            <?php foreach ($fields as $field): ?>
                <?php if ($field !== 'id'): ?>
                    <label for="<?= htmlspecialchars($field) ?>"><?= htmlspecialchars(ucfirst($field)) ?>:</label>
                    <input type="text" id="<?= htmlspecialchars($field) ?>" name="<?= htmlspecialchars($field) ?>" value="<?= htmlspecialchars($row[$field]) ?>" required>
                <?php endif; ?>
            <?php endforeach; ?>
            <input type="submit" value="Düzenle">
        </form>
        <a href="admin.php?table=<?= urlencode($table) ?>" class="back-link">| Geri Dön |</a>
    </div>
</body>
</html>
