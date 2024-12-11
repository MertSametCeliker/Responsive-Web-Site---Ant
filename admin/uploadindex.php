<?php 
include "db.php";

if(isset($_POST['submit'])) {

	// Count total files
	$countfiles = count($_FILES['files']['name']);

	// Prepared statement
	$query = "INSERT INTO images (name, image) VALUES(?, ?)";

	$statement = $pdo->prepare($query);

	// Loop all files
	for($i = 0; $i < $countfiles; $i++) {

		// File name
		$filename = $_FILES['files']['name'][$i];
	
		// Location
		$target_file = './uploads/'.$filename;
	
		// File extension
		$file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
		$file_extension = strtolower($file_extension);
	
		// Valid image extension
		$valid_extension = array("png", "jpeg", "jpg");
	
		if(in_array($file_extension, $valid_extension)) {

			// Upload file
			if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_file)) {

				// Execute query
				$statement->execute(array($filename, $target_file));
			}
		}
	}
	
	echo "File upload successfully";
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ürün Görseli Yükleme</title>
	<style>
		/* Genel stil */
		body {
			font-family: 'Arial', sans-serif;
			background-color: #f5f5f5;
			color: #5f4b3f;
			margin: 0;
			padding: 0;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			background-image: url('https://www.w3schools.com/w3images/bread.jpg');
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
		}

		h1 {
			color: #D4A017;
			font-size: 2.5rem;
			margin: 20px 0;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
		}

		/* Form stili */
		form {
			background-color: rgba(255, 255, 255, 0.8);
			padding: 30px;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			width: 100%;
			max-width: 500px;
			margin: 20px 0;
		}

		/* Input ve button stilleri */
		input[type="file"] {
			background-color: #f8c57e;
			border: 2px solid #d4a017;
			border-radius: 5px;
			padding: 10px;
			width: 100%;
			color: #5f4b3f;
			font-size: 1rem;
		}

		input[type="file"]:hover {
			background-color: #d4a017;
			cursor: pointer;
		}

		input[type="submit"] {
			background-color: #d4a017;
			border: none;
			color: white;
			padding: 12px 30px;
			text-transform: uppercase;
			font-size: 1.2rem;
			cursor: pointer;
			border-radius: 5px;
			width: 100%;
			margin-top: 20px;
		}

		input[type="submit"]:hover {
			background-color: #c68a17;
		}

		/* Bağlantılar */
		a {
			color: #5f4b3f;
			text-decoration: none;
			font-size: 1rem;
			margin-top: 15px;
			display: inline-block;
		}

		a:hover {
			text-decoration: underline;
			color: #c68a17;
		}

		/* Mesaj */
		.message {
			text-align: center;
			color: green;
			font-size: 1.2rem;
			margin-top: 20px;
		}

		/* Responsive tasarım */
		@media (max-width: 600px) {
			h1 {
				font-size: 2rem;
			}

			form {
				padding: 20px;
				width: 90%;
			}
		}
	</style>
</head>

<body>
	<h1>Görsel Yükle</h1>

	<form method="post" action="" enctype="multipart/form-data">
		<input type="file" name="files[]" multiple />
		<input type="submit" value="Yükle" name="submit" />
	</form>

	<a href="view.php">Görselleri Görüntüle</a>

	<?php if (isset($_POST['submit'])): ?>
		<div class="message">Dosyalar başarıyla yüklendi.</div>
	<?php endif; ?>

</body>

</html>
