<?php
try { 
	$db = new PDO("mysql:host=localhost;dbname=test", "username", "password"); 
} 
	catch ( PDOException $e ){ 
	print $e->getMessage(); 
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="image">Görsel Seçin:</label>
    <input type="file" name="image" id="image" required>
    <input type="submit" value="Yükle">
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
        // Dosya bilgilerini alma
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Geçerli dosya uzantıları
        $allowedfileExtensions = ['jpg', 'gif', 'png', 'jpeg'];

        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Dosyayı yükleme dizinine taşımak
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension; // Benzersiz bir dosya adı oluşturma
            $uploadFileDir = './uploaded_images/';
            $dest_path = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                // Veritabanına kaydetme
                $stmt = $pdo->prepare("INSERT INTO images (image_path) VALUES (:image_path)");
                $stmt->bindParam(':image_path', $dest_path);
                $stmt->execute();
                
                echo "Görsel başarıyla yüklendi ve veritabanına kaydedildi.";
            } else {
                echo "Görsel yüklenirken bir hata oluştu.";
            }
        } else {
            echo "Geçersiz dosya uzantısı. Lütfen jpg, gif, png veya jpeg uzantılı bir dosya yükleyin.";
        }
    }

 foreach ($images as $image) {
        echo '<img src="' . htmlspecialchars($image['image_path']) . '" width="200" />';
    }

?>

</form>


</body>
</html>
