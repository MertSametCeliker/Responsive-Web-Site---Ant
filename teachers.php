<?php
	include 'db.php' ;
?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>Ant İzmir Disleksi Kadromuz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Ant - Website" />
	<meta name="author" content="merkulove">
	<meta name="keywords" content="" />
	<link rel="icon" href="assets/img/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<style>
		/* Navigation bar container */
		.navigation-bar nav ul {
			list-style: none;
			padding: 0;
			margin: 0;
			display: flex;
			white-space: nowrap; /* Menü başlıklarını tek satırda tutar */
		}

		/* List items styling */
		.navigation-bar nav ul li {
			position: relative;
			margin-right: 20px; /* Menü başlıkları arasındaki boşluk */
		}

		.navigation-bar nav ul li a {
			text-decoration: none;
			color: #333; /* Metin rengi */
		}

		/* Alt menüler için stil */
		.navigation-bar nav ul li ul {
			display: none; /* Alt menüyü varsayılan olarak gizler */
			position: absolute;
			top: 100%;
			left: 0;
			list-style: none;
			padding: 10px;
			background: #fff;
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
		}

		/* Alt menüyü görünür yapma */
		.navigation-bar nav ul li:hover > ul {
			display: block;
		}

		/* Sosyal medya ikonları için stil */
		.social-links {
			display: flex;
			list-style: none;
			margin-left: auto;
			white-space: nowrap;
		}

		.social-links li {
			margin-left: 10px;
		}

	</style>
</head>


<body>

	<div class="wrapper">
		

		<header>
			<div class="container">
				<div class="header-content d-flex flex-wrap align-items-center">
					<div class="logo">
							<a href="index.php" title="">
								<img src="assets/img/logo.png" alt="Logo" style="top: 10; left: 120; width: 200px; height: auto; margin: 0px;">
							</a>
						</div><!--logo end-->
					<ul class="contact-add d-flex flex-wrap">
						<li>
							<div class="contact-info">
								<img src="assets/img/icon1.png" alt="">
								<div class="contact-tt">
									<h4>Ara</h4>
									<span><?php 
											$sql = $db->query("SELECT ara FROM genelbilgi")->fetch(PDO::FETCH_ASSOC);
											echo $sql['ara']; 
											?>
									</span>
								</div>
							</div><!--contact-info end-->
						</li>
						<li>
							<div class="contact-info">
								<img src="assets/img/icon2.png" alt="">
								<div class="contact-tt">
									<h4>Çalışma Saatleri</h4>
									<span><?php 
												$sql = $db->query("SELECT calismasaat FROM genelbilgi")->fetch(PDO::FETCH_ASSOC);
												echo $sql['calismasaat']; 
												?></span>
								</div>
							</div><!--contact-info end-->
						</li>
						<li>
							<div class="contact-info">
								<img src="assets/img/icon3.png" alt="">
								<div class="contact-tt">
									<h4>Adres</h4>
									<span><?php 
												$sql = $db->query("SELECT adres FROM genelbilgi")->fetch(PDO::FETCH_ASSOC);
												echo $sql['adres']; 
												?></span>
								</div>
							</div><!--contact-info end-->
						</li>
					</ul><!--contact-information end-->
					<div class="menu-btn">
						<a href="#">
							<span class="bar1"></span>
							<span class="bar2"></span>
							<span class="bar3"></span>
						</a>
					</div><!--menu-btn end-->
				</div><!--header-content end-->
				<div class="navigation-bar d-flex flex-wrap align-items-center">
					<nav>
						<ul>
							<li><a class="active" href="index.php" title="">Ana Sayfa</a></li>
							<li><a class="active" href="about.php" title="">Hakkımızda</a>
								<ul>
									<li><a href="events.php" title="">Etkinlikler</a>
									</li>
								</ul>
							</li>
							<li><a href="classes.php" title="">Sınıflar</a>
							</li>
							<li><a href="teachers.php" title="">Eğitmenler</a>
							</li>
							</li>
							<li><a href="disleksinedir.php" title="">Disleksi Nedir ?</a>
							</li>
							<li><a href="contacts.php" title="">İletişim</a></li>
						</ul>
					</nav><!--nav end-->
					<ul class="social-links ml-auto">
						<li><a href="https://www.facebook.com/people/Ant-%C4%B0zmir-%C3%96zel-E%C4%9Fitim/100083237333300/" title=""><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://www.instagram.com/antizmir.disleksi/" title=""><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div><!--navigation-bar end-->
			</div>
		</header><!--header end-->

		<div class="responsive-menu">
			<ul>
				<li><a href="index.php" title="">Ana Sayfa</a></li>
				<li><a href="about.php" title="">Hakkımızda</a></li>
				<li><a href="events.php" title="">Etkinlikler</a></li>
				<li><a href="classes.php" title="">Sınıflar</a></li>
				<li><a href="teachers.php" title="">Eğitmenler</a></li>
				<li><a href="disleksinedir.php" title="">Disleksi Nedir ?</a></li>
				<li><a href="contacts.php" title="">İletişim</a></li>
			</ul>
		</div><!--responsive-menu end-->


					<section class="pager-section">
						<div class="container">
							<div class="pager-content text-center">
								<h2>Eğitmenlerimiz</h2>
								<ul>
									<li><a href="index.php" title="">Ana Sayfa</a></li>
									<li><span>Eğitmenlerimiz</span></li>
								</ul>
							</div><!--pager-content end-->
							<h2 class="page-titlee">Antİzmir</h2>
						</div>
						</section><!--pager-section end-->

<section class="page-content">
    <div class="container">
	<h2 style="text-align: center; font-size: 2em; font-weight: bold; color:orange">KURUCULARIMIZ</h2>
	<!-- Kurucular (2 kutucuk yan yana ve ortalanmış) -->
        <div style="display: flex; justify-content: center; flex-wrap: wrap;">
            <div style="text-align: center; padding: 20px; width: 100%; max-width: 300px;">
                <img src="assets/img/ismail.png" alt="Kurucu 1" style="width: 100%; height: auto;">
                <h3><span>
                <?php 
                    $sql = $db->query("SELECT adsoyad FROM kadro WHERE id = 7")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['adsoyad']; 
                ?>
                </span></h3>
                <span><span>
                <?php 
                    $sql = $db->query("SELECT rol FROM kadro WHERE id = 7")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['rol']; 
                ?>
                </span></span>
            </div>
            <div style="text-align: center; padding: 20px; width: 100%; max-width: 300px;">
                <img src="assets/img/naciye.png" alt="Kurucu 2" style="width: 100%; height: auto;">
                <h3><span>
                <?php 
                    $sql = $db->query("SELECT adsoyad FROM kadro WHERE id = 6")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['adsoyad']; 
                ?>
                </span></h3>
                <span><span>
                <?php 
                    $sql = $db->query("SELECT rol FROM kadro WHERE id = 6")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['rol']; 
                ?>
                </span></span>
            </div>
        </div>
		<h2 style="text-align: center; font-size: 2em; font-weight: bold; color:orange">MÜDÜR</h2>

        <!-- Müdür (tek kutucuk ortalanmış) -->
        <div style="text-align: center; padding: 20px;">
            <img src="assets/img/gulsah.png" alt="Müdür" style="width: 100%; max-width: 300px; height: auto;">
            <h3><span>
            <?php 
                $sql = $db->query("SELECT adsoyad FROM kadro WHERE id = 1")->fetch(PDO::FETCH_ASSOC);
                echo $sql['adsoyad']; 
            ?>
            </span></h3>
            <span><span>
            <?php 
                $sql = $db->query("SELECT rol FROM kadro WHERE id = 1")->fetch(PDO::FETCH_ASSOC);
                echo $sql['rol']; 
            ?>
            </span></span>
        </div>
		<h2 style="text-align: center; font-size: 2em; font-weight: bold; color:orange">UZMAN PSİKOLOGLARIMIZ</h2>

        <!-- Psikologlar (2 kutucuk yan yana ve ortalanmış) -->
        <div style="display: flex; justify-content: center; flex-wrap: wrap;">
            <div style="text-align: center; padding: 20px; width: 100%; max-width: 300px;">
                <img src="assets/img/hatice.png" alt="Psikolog 1" style="width: 100%; height: auto;">
                <h3><span>
                <?php 
                    $sql = $db->query("SELECT adsoyad FROM kadro WHERE id = 4")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['adsoyad']; 
                ?>
                </span></h3>
                <span><span>
                <?php 
                    $sql = $db->query("SELECT egitim FROM kadro WHERE id = 4")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['egitim']; 
                ?>
                </span></span>
            </div>
            <div style="text-align: center; padding: 20px; width: 100%; max-width: 300px;">
                <img src="assets/img/yagmur.png" alt="Psikolog 2" style="width: 100%; height: auto;">
                <h3><span>
                <?php 
                    $sql = $db->query("SELECT adsoyad FROM kadro WHERE id = 5")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['adsoyad']; 
                ?>
                </span></h3>
                <span><span>
                <?php 
                    $sql = $db->query("SELECT egitim FROM kadro WHERE id = 5")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['egitim']; 
                ?>
                </span></span>
            </div>
        </div>
		<h2 style="text-align: center; font-size: 2em; font-weight: bold; color:orange">UZMAN ÖĞRETİCİLERİMİZ</h2>

        <!-- Öğretmenler (4 kutucuk yan yana ve ortalanmış) -->
        <div style="display: flex; justify-content: center; flex-wrap: wrap;">
            <div style="text-align: center; padding: 20px; width: 100%; max-width: 250px;">
                <img src="assets/img/esra.png" alt="Öğretmen 1" style="width: 100%; height: auto;">
                <h3><span>
                <?php 
                    $sql = $db->query("SELECT adsoyad FROM kadro WHERE id = 8")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['adsoyad']; 
                ?>
                </span></h3>
                <span><span>
                <?php 
                    $sql = $db->query("SELECT egitim FROM kadro WHERE id = 8")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['egitim']; 
                ?>
                </span></span>
            </div>
            <div style="text-align: center; padding: 20px; width: 100%; max-width: 250px;">
                <img src="assets/img/helin.png" alt="Öğretmen 2" style="width: 100%; height: auto;">
                <h3><span>
                <?php 
                    $sql = $db->query("SELECT adsoyad FROM kadro WHERE id = 3")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['adsoyad']; 
                ?>
                </span></h3>
                <span><span>
                <?php 
                    $sql = $db->query("SELECT egitim FROM kadro WHERE id = 3")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['egitim']; 
                ?>
                </span></span>
            </div>
            <div style="text-align: center; padding: 20px; width: 100%; max-width: 250px;">
                <img src="assets/img/nevin.png" alt="Öğretmen 3" style="width: 100%; height: auto;">
                <h3><span>
                <?php 
                    $sql = $db->query("SELECT adsoyad FROM kadro WHERE id = 2")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['adsoyad']; 
                ?>
                </span></h3>
                <span><span>
                <?php 
                    $sql = $db->query("SELECT egitim FROM kadro WHERE id = 2")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['egitim']; 
                ?>
                </span></span>
            </div>
            <div style="text-align: center; padding: 20px; width: 100%; max-width: 250px;">
                <img src="assets/img/devrim.png" alt="Öğretmen 4" style="width: 100%; height: auto;">
                <h3><span>
                <?php 
                    $sql = $db->query("SELECT adsoyad FROM kadro WHERE id = 9")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['adsoyad']; 
                ?>
                </span></h3>
                <span><span>
                <?php 
                    $sql = $db->query("SELECT egitim FROM kadro WHERE id = 9")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['egitim']; 
                ?>
                </span></span>
            </div>
        </div>
    </div>
</section>

<!-- Responsive Tasarım için CSS -->
<style>
    @media only screen and (max-width: 768px) {
        .container div {
            width: 100% !important;
        }
    }
</style>

		<section class="newsletter-section">
			<div class="container">
				<div class="newsletter-sec">
					<div class="row align-items-center">
						<div class="col-lg-4">
							<div class="newsz-ltr-text">
							<h2>Bize Katılın <br /> ve Takipte Kalın!</h2>
							<a href="contacts.php" title="" class="btn-default">Bize Ulaşın <i class="fa fa-long-arrow-alt-right"></i></a>
							</div><!--newsz-ltr-text end-->
							</div>
						<div class="col-lg-8">
							<form class="newsletter-form">
								<div class="row">
									<div class="col-md-4">
									</div>
									<div class="form-group">
											<input type="name" name="name" placeholder="İsim Soyisim">
										</div><!--form-group end-->
									<div class="col-md-4">
											<div class="form-group">
											<input type="email" name="email" placeholder="E-mail">
										</div><!--form-group end-->
										</div><!--form-group end-->
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="message" placeholder="Mesaj"></textarea>
										</div><!--form-group end-->
									</div>
								</div>
							</form><!--newsletter-form end-->
						</div>
					</div>
				</div><!--newsletter-sec end-->
			</div>
		</section><!--newsletter-sec end-->

		<footer>
			<div class="container">
				<div class="top-footer">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="widget widget-about">
								<img src="assets/img/logo21.png" alt="" style="top: 10; right: 120; width: 250px; height: auto; margin: 0px;">
							</div><!--widget-about end-->
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="widget widget-contact">
								<ul class="contact-add">
									<li>
										<div class="contact-info">
											<img src="assets/img/icon1.png" alt="">
											<div class="contact-tt">
												<h4>Ara</h4>
												<span><?php 
												$sql = $db->query("SELECT ara FROM genelbilgi")->fetch(PDO::FETCH_ASSOC);
												echo $sql['ara']; 
												?></span>
											</div>
										</div><!--contact-info end-->
									</li>
									<li>
										<div class="contact-info">
											<img src="assets/img/icon2.png" alt="">
											<div class="contact-tt">
												<h4>Çalışma Saatleri</h4>
												<span><?php 
												$sql = $db->query("SELECT calismasaat FROM genelbilgi")->fetch(PDO::FETCH_ASSOC);
												echo $sql['calismasaat']; 
												?></span>
											</div>
										</div><!--contact-info end-->
									</li>
									<li>
										<div class="contact-info">
											<img src="assets/img/icon3.png" alt="">
											<div class="contact-tt">
												<h4>Adres</h4>
												<span><?php 
												$sql = $db->query("SELECT adres FROM genelbilgi")->fetch(PDO::FETCH_ASSOC);
												echo $sql['adres']; 
												?></span>
											</div>
										</div><!--contact-info end-->
									</li>
								</ul>
							</div><!--widget-contact end-->
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="widget widget-links">
								<h3 class="widget-title">Hızlı Bağlantılar</h3>
								<ul>
									<li><a href="about.php" title="">Hakkımızda </a></li>
									<li><a href="classes.php" title="">Sınıflarımız</a></li>
									<li><a href="teachers.php" title="">Okul Öğretmenleri </a></li>
									<li><a href="events.php" title="">Son Etkinlikler </a></li>
								</ul>
							</div><!--widget-links end-->
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="widget widget-iframe">
							<?php 
				$query = $db->query("SELECT * FROM harita ", PDO::FETCH_ASSOC);
				if ( $query->rowCount() ){
					while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
						echo   "<iframe src='".$row["harita_linki"]."' width='600' height='450' frameborder='0' style=" ;" 
									allowfullscreen='' 
									aria-hidden='false'
									tabindex='0' '></iframe>";}}
				?>
							</div><!--widget-iframe end-->
					</div>
				</div><!--top-footer end-->
				<div class="bottom-footer">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6 col-sm-6">
						<p>© Copyrights 2024 Ant Tüm hakları saklıdır. Created by <span><a href="https://www.instagram.com/mert_celikerr/">Mert Samet Çeliker</a></span></p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<ul class="social-links">
								<li><a href="https://www.facebook.com/people/Ant-%C4%B0zmir-%C3%96zel-E%C4%9Fitim/100083237333300/" title=""><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://www.instagram.com/antizmir.disleksi/" title=""><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div><!--bottom-footer end-->
			</div>
		</footer><!--footer end-->

		<!--back to top begin-->
		<button class="back-to-top">
			<i class="fas fa-arrow-up"></i>
		</button>
		<!--back to top end-->

	</div>



<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/html5lightbox.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/tweenMax.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

</html>