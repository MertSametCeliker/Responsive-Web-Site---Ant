<?php
session_start();

// Sabit kullanıcı bilgileri (örnek: kullanıcı adı ve şifre)
$kullanici_bilgileri = [

];

// Giriş işlemi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kullanici_adi = htmlspecialchars($_POST['kullanici_adi']);
    $sifre = htmlspecialchars($_POST['sifre']);

    // Kullanıcı adı ve şifreyi kontrol et
    if (isset($kullanici_bilgileri[$kullanici_adi]) && $kullanici_bilgileri[$kullanici_adi] == $sifre) {
        // Kullanıcıyı oturumda sakla
        $_SESSION['user_logged_in'] = true;
        header("Location: admin.php");  // Giriş başarılıysa anasayfaya yönlendir
        exit;
    } else {
        // Hata mesajı
        $hata = "Kullanıcı adı veya şifre hatalı!";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJp3Zy3iU+jTG6fCj-9X6U5uJaxl9uYXHevbdtTYW9W9u5uKvFuFstIHwF5t" crossorigin="anonymous">
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Arial', sans-serif;
        }
        .login-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }
        .login-box {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-box img {
            width: 150px;
            margin-bottom: 20px;
        }
        .login-box h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #2575fc;
            border: none;
            border-radius: 5px;
            color: white;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #6a11cb;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <!-- Logo -->
            <img src="logo2.png" alt="Logo" style="width: 300px; height: auto;">
            <h2>Giriş Yap</h2>
            <form method="POST" action="">
                <input type="text" id="kullanici_adi" name="kullanici_adi" class="form-control" placeholder="Kullanıcı Adı" required>
                <input type="password" id="sifre" name="sifre" class="form-control" placeholder="Şifre" required>
                <input type="submit" class="btn btn-primary" value="Giriş Yap">
            </form>
            <?php
            if (isset($hata)) {
                echo "<p class='error-message'>$hata</p>";
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS (Optional for any interactive features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
