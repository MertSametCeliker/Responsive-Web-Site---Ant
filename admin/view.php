<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Görselleri Görüntüle</title>
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

		.container {
			width: 100%;
			max-width: 1200px;
			margin-top: 50px;
			padding: 20px;
			text-align: center;
		}

		h1 {
			color: #D4A017;
			font-size: 2.5rem;
			margin-bottom: 30px;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
		}

		/* Görsellerin gösterimi için grid */
		.image-grid {
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
			grid-gap: 20px;
			justify-items: center;
		}

		.image-item {
			position: relative;
			width: 250px;
			height: 250px;
			overflow: hidden;
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			background-color: #ffffff;
			transition: transform 0.3s ease;
		}

		.image-item:hover {
			transform: scale(1.05);
		}

		.image-item img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.image-item .image-title {
			position: absolute;
			bottom: 10px;
			left: 10px;
			color: #ffffff;
			background-color: rgba(0, 0, 0, 0.5);
			padding: 5px;
			font-size: 1rem;
			border-radius: 5px;
		}

		/* Bağlantılar */
		.a-link {
			display: block;
			margin-top: 30px;
			color: #5f4b3f;
			text-decoration: none;
			font-size: 1.1rem;
			border: 2px solid #5f4b3f;
			padding: 10px 20px;
			border-radius: 5px;
			width: fit-content;
			margin-bottom: 20px;
			transition: background-color 0.3s ease;
		}

		.a-link:hover {
			background-color: #D4A017;
			color: #fff;
			text-decoration: none;
		}
	</style>
</head>

<body>

	<div class="container">
		<h1>Yüklenen Görseller</h1>

		<div class="image-grid">
			<?php
			$stmt = $pdo->prepare('SELECT * FROM images');
			$stmt->execute();
			$imagelist = $stmt->fetchAll();

			foreach ($imagelist as $image) {
			?>
				<div class="image-item">
					<img src="<?= $image['image'] ?>" alt="<?= $image['name'] ?>">
					<div class="image-title"><?= htmlspecialchars($image['name']) ?></div>
				</div>
			<?php
			}
			?>
		</div>

		<a href="uploadindex.php" class="a-link">Yeni Görsel Yükle</a>
	</div>

</body>

</html>
