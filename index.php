<?php
try {
     $db = new PDO("mysql:host=111111111;dbname=1111111111", "username", "password");
} catch (PDOException $e) {
     print $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>Ant İzmir Disleksi</title>
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
		
		<div class="main-section">

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
								<li><a href="about.php" title="">Hakkımızda</a>
									<ul>
										<li><a href="events.php" title="">Etkinlikler</a>
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


			<section class="main-banner">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7 col-md-7">
							<div class="banner-text wow fadeInLeft" data-wow-duration="1000ms">
								<h2>Her Şeyi Daha Akıllıca Öğrenmenin Yolu<span></span></h2>
								<p>Ant İzmir olarak, Balçovada bulunan tek disleksi merkezi olarak faaliyetlerimizi sürdürmekteyiz. Amacımız, dört farklı modülde eğitim verip kalabalık bir merkez oluşturmak değil; tek bir modül ile, her çocuğun bireysel ihtiyaçlarına odaklanarak kaliteli ve sakin bir eğitim ortamı sunmaktır. Hiçbir çocuğu geride bırakmadan onları potansiyellerinin en üst seviyesine taşımak, en büyük hedefimizdir.</p>
							</div>
						</div>
						<div class="col-lg-5 col-md-5">
							<div class="banner-img wow zoomIn" data-wow-duration="1000ms">
								<img src="assets/img/anasayfa1.png" alt="" style="height: 600px;">
							</div><!--banner-img end-->
							<div class="elements-bg wow zoomIn" data-wow-duration="1000ms"></div>
						</div>
					</div>
				</div>
			</section><!--main-banner end-->
			
			<h2 class="main-title">Ant İzmir Disleksi</h2>

		</div><!--main-section end-->

		<section class="about-us-section">
			<div class="container" style="text-align: center;"> <!-- text-align ekledim -->
				<div class="section-title text-center">
					<h2><span>Ant'a</span> Hoşgeldiniz</h2>
					<p><span>Her gün öğrenen ve her gün öğreten bir kurum! </span></p>
				</div><!--section-title end-->
				<div class="about-sec">
					<div class="container">
						<div class="row justify-content-center"> <!-- justify-content-center eklendi -->
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="abt-col wow fadeInUp" data-wow-duration="1000ms">
									<img src="assets/img/icon5.png" alt="">
									<h3>Uzman Öğretmenler</h3>
									<p>Alanında uzman kadromuz ile öğrencilerimize üstün kalitede eğitim</p>
								</div><!--abt-col end-->
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
									<img src="assets/img/icon9.png" alt="">
									<h3>Öğrenci Destek Hizmeti</h3>
									<p>Uzman kadromuz ile öğrencilerimize her konuda destek olmaktayız</p>
								</div><!--abt-col end-->
							</div>
						</div>
					</div>
				</div><!--about-rw end-->
				<div class="abt-img">
					<ul class="masonary">
						<li class="width1 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/anasayfa2.png" data-group="set1" title="" class="html5lightbox"><img src="assets/img/anasayfa2.png" alt=""></a></li>
						<li class="width2 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/anasayfa4.png" data-group="set1" title="" class="html5lightbox"><img src="assets/img/anasayfa4.png" alt=""></a></li>
						<li class="width3 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/anasayfa6.png" data-group="set1" title="" class="html5lightbox"><img src="assets/img/anasayfa6.png" alt=""></a></li>
						<li class="width4 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/ansayfa9.png" data-group="set1" title="" class="html5lightbox"><img src="assets/img/ansayfa9.png" alt=""></a></li>
						<li class="width5 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/anasayfa7.png" data-group="set1" title="" class="html5lightbox"><img src="assets/img/anasayfa7.png" alt=""></a></li>
						<li class="width6 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/anasayfa3.png" data-group="set1" title="" class="html5lightbox"><img src="assets/img/anasayfa3.png" alt=""></a></li>
						<li class="width7 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/anasayfa5.png" data-group="set1" title="" class="html5lightbox"><img src="assets/img/anasayfa5.png" alt=""></a></li>
						<li class="width8 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/anasayfa10.png" data-group="set1" title="" class="html5lightbox"><img src="assets/img/anasayfa10.png" alt=""></a></li>
						<li class="width9 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/anasayfa8.png" data-group="set1" title="" class="html5lightbox"><img src="assets/img/anasayfa8.png" alt=""></a></li>
						<li class="width10 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/anasayfa11.png" data-group="set1" title="" class="html5lightbox"><img src="assets/img/anasayfa11.png" alt=""></a></li>
					</ul>
				</div><!-- abt-img end-->
			</div>
		</section><!--about-us-section end-->
		<section class="classes-section">
    <div class="container">
        <div class="sec-title">
            <h2>Sınıflarımız</h2>
            <p>Temiz ve donanımlı sınıflarımız sayesinde öğrencilerimize bire bir ve grup şeklinde eğitimler vermekteyiz.</p>
        </div><!--sec-title end-->
        
        <div style="display: flex; justify-content: space-between; flex-wrap: nowrap;">
            <div style="width: 23%;">
                <div class="classes-col">
                    <div class="class-thumb">
                        <img src="assets/img/1680x1120siniffffff.png" alt="" class="w-100">
                        <a href="contacts.php" title="" class="crt-btn"></a>
                    </div>
                </div><!--classes-col end-->
            </div>
            
            <div style="width: 23%;">
                <div class="classes-col">
                    <div class="class-thumb">
                        <img src="assets/img/1818x1134sinifffffffff.png" alt="" class="w-100">
                        <a href="contacts.php" title="" class="crt-btn"></a>
                    </div>
                </div><!--classes-col end-->
            </div>

            <div style="width: 23%;">
                <div class="classes-col">
                    <div class="class-thumb">
                        <img src="assets/img/sinif1440x960.png" alt="" class="w-100">
                        <a href="contacts.php" title="" class="crt-btn"></a>
                    </div>
                </div><!--classes-col end-->
            </div>

            <div style="width: 23%;">
                <div class="classes-col">
                    <div class="class-thumb">
                        <img src="assets/img/1440x960sinif.png" alt="" class="w-100">
                        <a href="contacts.php" title="" class="crt-btn"></a>
                    </div>
                </div><!--classes-col end-->
            </div>
        </div>
    </div>
</section><!--classes-section end-->


		<section class="teachers-section">
			<div class="container">
				<div class="section-title text-center">
					<h2>Alanında Uzman <br /> Eğitmenler</h2>
					<p>Alanında uzman eğitmenlerimiz ile öğrencilerimiz için üstün kalite bir eğitim sunmaktayız.</p>
				</div><!--section-title end-->
				<div class="teachers">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
							<div class="teacher">
								<div class="teacher-img">
									<img src="assets/img/esra.png" alt="" class="w-100">
									<div class="sc-div">
										<ul>
											<li><a href="https://www.instagram.com/antizmir.disleksi/" title=""><i class="fab fa-instagram"></i></a></li>
											<li><a href="https://www.facebook.com/people/Ant-%C4%B0zmir-%C3%96zel-E%C4%9Fitim/100083237333300/" title=""><i class="fab fa-facebook-f"></i></a></li>
										</ul>
										<span><img src="assets/img/plus.png" alt=""></span>
									</div>
								</div>
								<div class="teacher-info">
									<h3><a href="teacher-single.php" title=""><span>
                <?php 
                    $sql = $db->query("SELECT adsoyad FROM kadro WHERE id = 8")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['adsoyad']; 
                ?>
                </span></a></h3>
									<span><span>
                <?php 
                    $sql = $db->query("SELECT egitim FROM kadro WHERE id = 8")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['egitim']; 
                ?>
                </span></span>
								</div>
							</div><!--teacher end-->
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
							<div class="teacher">
								<div class="teacher-img">
									<img src="assets/img/helin.png" alt="" class="w-100">
									<div class="sc-div">
										<ul>
											<li><a href="https://www.instagram.com/antizmir.disleksi/" title=""><i class="fab fa-instagram"></i></a></li>
											<li><a href="https://www.facebook.com/people/Ant-%C4%B0zmir-%C3%96zel-E%C4%9Fitim/100083237333300/" title=""><i class="fab fa-facebook-f"></i></a></li>
										</ul>
										<span><img src="assets/img/plus.png" alt=""></span>
									</div>
								</div>
								<div class="teacher-info">
									<h3><a href="teacher-single.php" title=""> <?php 
                    $sql = $db->query("SELECT adsoyad FROM kadro WHERE id = 3")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['adsoyad']; 
                ?></a></h3>
									<span> <?php 
                    $sql = $db->query("SELECT egitim FROM kadro WHERE id = 3")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['egitim']; 
                ?></span>
								</div>
							</div><!--teacher end-->
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
							<div class="teacher">
								<div class="teacher-img">
									<img src="assets/img/nevin.png" alt="" class="w-100">
									<div class="sc-div">
										<ul>
											<li><a href="https://www.instagram.com/antizmir.disleksi/" title=""><i class="fab fa-instagram"></i></a></li>
											<li><a href="https://www.facebook.com/people/Ant-%C4%B0zmir-%C3%96zel-E%C4%9Fitim/100083237333300/" title=""><i class="fab fa-facebook-f"></i></a></li>
										</ul>
										<span><img src="assets/img/plus.png" alt=""></span>
									</div>
								</div>
								<div class="teacher-info">
									<h3><a href="teacher-single.php" title=""> <?php 
                    $sql = $db->query("SELECT adsoyad FROM kadro WHERE id = 2")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['adsoyad']; 
                ?></a></h3>
									<span> <?php 
                    $sql = $db->query("SELECT egitim FROM kadro WHERE id = 2")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['egitim']; 
                ?></span>
								</div>
							</div><!--teacher end-->
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
							<div class="teacher">
								<div class="teacher-img">
									<img src="assets/img/devrim.png" alt="" class="w-100">
									<div class="sc-div">
										<ul>
											<li><a href="https://www.instagram.com/antizmir.disleksi/" title=""><i class="fab fa-instagram"></i></a></li>
											<li><a href="https://www.facebook.com/people/Ant-%C4%B0zmir-%C3%96zel-E%C4%9Fitim/100083237333300/" title=""><i class="fab fa-facebook-f"></i></a></li>
										</ul>
										<span><img src="assets/img/plus.png" alt=""></span>
									</div>
								</div>
								<div class="teacher-info">
									<h3><a href="teacher-single.php" title=""> <?php 
                    $sql = $db->query("SELECT adsoyad FROM kadro WHERE id = 9")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['adsoyad']; 
                ?></a></h3>
									<span> <?php 
                    $sql = $db->query("SELECT egitim FROM kadro WHERE id = 9")->fetch(PDO::FETCH_ASSOC);
                    echo $sql['egitim']; 
                ?></span>
								</div>
									<div style="display: flex; justify-content: center; margin-top: 20px;">
									</div>
								</div>
								<br>
							</div><!--teacher end-->
						</div>
					</div>
				</div><!--teachers end-->
			</div>
			<div style="text-align: center;">
				<center><a href="teachers.php" style="right: auto;" title="" class="btn-default">Kadromuz <i class="fa fa-long-arrow-alt-right"></i></a></center>
			</div>
		</section>

		<section class="course-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="find-course">
							<div class="sec-title">
					</div>
				</div>
			</div>
		</section><!--course-section end-->
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
								<img src="assets/img/logo21.png" alt="" style="top: 60; right: 120; width: 250px; height: auto; margin: 0px;">
								<p></p>
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
								<iframe 
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.146534308197!2d27.046958822088207!3d38.39044150329913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd96c06d15aaf%3A0xc7be7843010a60e3!2sYour%20Location!5e0!3m2!1sen!2sus!4v1600134759928" 
									width="600" 
									height="450" 
									frameborder="0" 
									style="border:0;" 
									allowfullscreen="" 
									aria-hidden="false" 
									tabindex="0">
								</iframe>
							</div><!--widget-iframe end-->
						</div>						
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