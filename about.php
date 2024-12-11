<?php
	include 'db.php' ;
?>



<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>Ant İzmir Disleksi Hakkımızda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="ANT - Website" />
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
					<h2>Hakkımızda</h2>
					<ul>
						<li><a href="index.php" title="">Ana Sayfa</a></li>
						<li><span>Hakkımızda</span></li>
					</ul>
				</div><!--pager-content end-->
				<h2 class="page-titlee">Antİzmir</h2>
			</div>
		</section><!--pager-section end-->

		<section class="about-page-content">
			<div class="container">
				<div class="abt-page-row">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6">
							<div class="section-title">
								<h2><span>Ant'a</span> Hoşgeldiniz</h2>
								<p style="margin-top: 0; margin-bottom: 0; text-indent: 20px;">
									Ant İzmir Disleksi Merkezi, 2019 yılında İzmir’in Alsancak semtinde kurularak eğitim dünyasında özgün bir yer edinmiştir. İlk faaliyet yılımızda yaşanan İzmir depremi sonrası, çocuklarımızın güvenliği ve huzuru için daha sakin ve güvenli bir ortam sunma hedefiyle Balçova’nın Korutürk Mahallesi’nde bulunan triplex villamıza taşındık. Milli Eğitim Bakanlığı'nın belirlediği tüm şartları başarıyla yerine getirerek, resmî olarak Özel Ant İzmir Özel Eğitim ve Rehabilitasyon Merkezi adıyla hizmet vermeye başladık.
								</p>
								<p style="margin-top: 0; margin-bottom: 0; text-indent: 20px;">
									Ant İzmir olarak, sadece öğrenme güçlüğü (disleksi) üzerine uzmanlaşmayı tercih ettik. Bu bilinçli tercihimiz, kurumumuzun Balçova bölgesinde tek disleksi merkezi olarak öne çıkmasını sağlamıştır. Amacımız, dört farklı modülde eğitim verip kalabalık bir merkez oluşturmak değil; tek bir modül ile, her çocuğun bireysel ihtiyaçlarına odaklanarak kaliteli ve sakin bir eğitim ortamı sunmaktır. Hiçbir çocuğu geride bırakmadan onları potansiyellerinin en üst seviyesine taşımak, en büyük hedefimizdir.
								</p>
								<p style="margin-top: 0; margin-bottom: 0; text-indent: 20px;">
									Eğitim anlayışımızda, öğretmenin sadece diplomasına değil, duruşuna, yaklaşımına, sabrına ve çocuk sevgisine büyük önem veriyoruz. İyi bir öğretmenin, bir çocuğun en büyük şansı olduğuna inanıyoruz. Bu yüzden, kurumumuzda yalnızca akademik yeterlilik değil, insani değerler de ön plandadır. Mutlu çocukların, mutlu aileler yarattığına; mutlu ailelerin ise mutlu ve başarılı çocuklar yetiştirdiğine gönülden inanıyoruz.
								</p>
								<p style="margin-top: 0; margin-bottom: 0; text-indent: 20px;">
									Ant İzmir’de, bir çocuğun akademik başarısının yanında duygusal ve sosyal gelişimi de büyük bir öneme sahiptir. Kendini kapatmış bir çocuğun, önce duygusal ihtiyaçlarının karşılanması gerektiğini biliyoruz. Çünkü, ne kadar donanımlı olursa olsun, doğru iletişim kurulmadan bir öğretmenin çocuğa etkili bir katkı sağlayamayacağını iyi biliyoruz. İşte bu yaklaşımla, çocuklarımızın gelişim süreçlerine büyük bir özen gösteriyoruz.
								</p>
								<a href="teachers.php" title="" class="btn-default">Kadromuz <i class="fa fa-long-arrow-alt-right"></i></a>
							</div><!--section-title end-->
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="avt-img">
							<video width="601" height="645" controls autoplay muted>
								<source src="assets/img/aboutvideo.mp4" type="video/mp4">
								Your browser does not support the video tag.
							</video>
							</div><!--avt-img end-->
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6">
							<div class="avt-img">
							<img src="assets/img/aboutphoto1.jpg" alt="" width="575" height="592">
							</div><!--avt-img end-->
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="act-inffo">
								<span>Hakkımızda </span>
								<h2><?php 
											$sql = $db->query("SELECT baslik FROM icerikler WHERE id = 2")->fetch(PDO::FETCH_ASSOC);
											echo $sql['baslik']; 
											?> </h2>
								<p><?php 
											$sql = $db->query("SELECT metin FROM icerikler WHERE id = 2")->fetch(PDO::FETCH_ASSOC);
											echo $sql['metin']; 
											?></p>

								<ul>
									<li>Çocuk gelişim testleri,</li>
									<li>MOXO dikkat ölçme testi,</li>
									<li>WISC-R (Çocuklar İçin Zeka Testi) testi,</li>
								</ul>
								<p>kurumumuzda yapılmaktadır.</p>
							</div><!--act-inffo end-->
						</div>
					</div>
				</div><!--abt-page-row end-->
			</div>
		</section><!--about-page-content end-->

		<section class="benifit-section">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="section-title">
							<h2><?php 
											$sql = $db->query("SELECT baslik FROM icerikler WHERE id = 3")->fetch(PDO::FETCH_ASSOC);
											echo $sql['baslik']; 
											?></h2>
								<p style="margin-top: 0; margin-bottom: 0; text-indent: 20px;">
								<?php 
											$sql = $db->query("SELECT metin FROM icerikler WHERE id = 3")->fetch(PDO::FETCH_ASSOC);
											echo $sql['metin']; 
											?>								</p>
								<a href="contacts.php" title="" class="btn-default">İletişim <i class="fa fa-long-arrow-alt-right"></i></a>
						</div><!--section-title end-->
					</div>
					<div class="col-lg-6">
						<div class="about-us-section p-0">
							<div class="about-sec">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="abt-col">
											<img src="assets/img/icon5.png" alt="">
											<h3>Uzman Öğretmenler</h3>
											<p>Alanında uzman kadromuz ile öğrencilerimize üstün kalitede eğitim</p>
										</div><!--abt-col end-->
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="abt-col">
											<img src="assets/img/icon9.png" alt="">
											<h3>Öğrenci Destek Hizmeti</h3>
											<p>Uzman kadromuz ile öğrencilerimize her konuda destek olmaktayız</p>
										</div><!--abt-col end-->
									</div>
										</div><!--abt-col end-->
									</div>
								</div>
							</div><!--about-rw end-->
						</div>
					</div>
				</div>
			</div>
		</section><!--benifit-section end-->

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