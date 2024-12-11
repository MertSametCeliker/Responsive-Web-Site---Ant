<?php
	include 'db.php' ;
?>


<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>Disleksi Nedir ? Ant İzmir Disleksi</title>
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
	
<style>
    .section-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 1rem;
        text-align: center;
        color: #2c3e50;
    }

    .video-title {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        color: #34495e;
    }

    .description {
        font-size: 1rem;
        line-height: 1.5;
        margin-bottom: 1.5rem;
        color: #7f8c8d;
    }

    .subheading {
        font-size: 1.3rem;
        font-weight: bold;
        margin-top: 1.5rem;
        margin-bottom: 1rem;
        color: #2980b9;
    }

    .features-list,
    .support-strategies {
        margin-left: 20px;
        color: #2c3e50;
    }

    .images-title {
        font-size: 1.5rem;
        margin-top: 2rem;
        margin-bottom: 1rem;
        text-align: center;
        color: #2c3e50;
    }

    .img-fluid {
        width: 100%;
        height: auto;
    }

    .rounded {
        border-radius: 10px;
    }

    .shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .video-container {
        text-align: center;
        margin-bottom: 2rem;
    }
	ul.custom-list {
            list-style-type: none; /* Varsayılan madde işaretlerini kaldır */
            padding: 0; /* Varsayılan iç boşluğu kaldır */
        }
        ul.custom-list li::before {
            content: "✔️"; /* İstediğiniz madde işaretini buraya yazabilirsiniz */
            margin-right: 8px; /* Madde işareti ile metin arasına boşluk ekle */
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
								<h2>Disleksi Nedir ?</h2>
								<ul>
									<li><a href="index.php" title="">Ana Sayfa</a></li>
									<li><span>Disleksi Nedir ?</span></li>
								</ul>
							</div><!--pager-content end-->
							<h2 class="page-titlee">Ant İzmir</h2>
						</div>
						</section><!--pager-section end-->


						<section class="page-content">
    <div class="container">
        <h2 class="section-title">Disleksi Nedir?</h2>
        
        <div class="video-container mb-4">
            <iframe width="560" height="315" src="assets/img/disleksinedir.mp4" title="Dyslexia Explanation" frameborder="0" allowfullscreen controls muted></iframe>
        </div>

        <p class="description">Disleksi, bireylerin yazılı dil üzerinde normalden daha fazla zorluk çekmesine neden olan bir öğrenme bozukluğudur. Genellikle okuma, yazma ve heceleme alanlarında belirgin güçlüklerle kendini gösterir. Disleksi, genel bir zeka geriliği değildir; bu, bireylerin çoğunun ortalama veya üzerinde bir zeka seviyesine sahip olduğu anlamına gelir.</p>

        <h3 class="subheading">Disleksinin Temel Özellikleri</h3>
        <ol class="features-list">
            <li>Nörolojik Bir Bozukluk: Disleksi, bireylerin beynindeki dil işleme ile ilgili farklılıklar nedeniyle ortaya çıkar. Bu, okuma sırasında harflerin ve kelimelerin algılanmasında zorluk yaratır.</li>
            <li>Farklı Öğrenme Biçimleri: Disleksiye sahip bireyler, öğrenme sürecinde geleneksel yöntemlerden farklı yaklaşımlar gerektirir. Görsel, işitsel ve dokunsal öğrenme stillerine dayalı destekleyici stratejiler, öğrenmelerini kolaylaştırabilir.</li>
            <li>Belirtiler:
                <ul class="custom-list">
                    <li>Okuma Güçlüğü: Bireyler, kelimeleri doğru telaffuz etmekte ve anlamakta zorluk çekebilirler. Okuma hızları genellikle yavaştır.</li>
                    <li>Heceleme Problemleri: Disleksiye sahip kişiler, kelimeleri hecelerken yanlış hecelemeler yapabilir veya kelimeleri yazarken harfleri karıştırabilirler.</li>
                    <li>Yazma Sorunları: Yazarken, doğru kelimeleri bulmakta ve yazma düzenini takip etmekte güçlük çekebilirler. Bu, yazılı ifadelerinin karmaşık ve düzensiz görünmesine yol açar.</li>
                    <li>Kelime Hatırlama Zorluğu: Bireyler, kelimeleri hatırlamakta ve kelimeleri doğru bir şekilde çağrıştırmakta zorlanabilirler.</li>
                </ul>
            </li>
            <li>Duygusal Etkiler: Disleksi, bireylerin özgüvenini etkileyebilir. Okulda yaşanan zorluklar ve akran baskısı, kaygı ve düşük özsaygıya yol açabilir. Bu nedenle, duygusal destek sağlamak, disleksi ile başa çıkmada kritik bir öneme sahiptir.</li>
            <li>Erken Teşhis ve Müdahale: Disleksinin erken teşhisi, bireylerin öğrenme süreçlerini olumlu yönde etkileyebilir. Özel eğitim yöntemleri, bireylerin güçlü yönlerini geliştirmeye odaklanırken, zayıf yönlerini aşmalarına yardımcı olabilir.</li>
        </ol>

        <h3 class="subheading">Destekleyici Stratejiler</h3>
        <ul class="support-strategies custom-list">
            <li>Özel Eğitim Programları: Disleksiye sahip bireyler için özel eğitim programları, bireysel ihtiyaçlara göre tasarlanmalıdır. Bu programlar, okuma ve yazma becerilerini geliştirmeyi hedefler.</li>
            <li>Teknoloji Kullanımı: Eğitimde teknoloji kullanımı, disleksiye sahip bireyler için faydalı olabilir. Örneğin, metin okuma uygulamaları, kelime işlemciler ve sesli kitaplar, öğrenmeyi destekleyen araçlar olarak kullanılabilir.</li>
            <li>Aile ve Öğretmen Desteği: Ailelerin ve öğretmenlerin, disleksiye sahip bireylerin zorluklarını anlamaları ve destekleyici bir ortam sunmaları önemlidir. Bu, bireylerin kendilerini daha güvende hissetmelerine yardımcı olabilir.</li>
        </ul>

        <h3 class="subheading">Sonuç</h3>
        <p class="description">Disleksi, yazılı dilin öğrenilmesi konusunda belirgin zorluklar yaratan bir durumdur. Ancak, uygun destek ve stratejilerle bireyler disleksi ile başa çıkabilir ve akademik başarıya ulaşabilirler. Bilinçlenme ve erken müdahale, disleksiye sahip bireylerin hayat kalitesini artırmada önemli rol oynar.</p>

        <div class="row">
            <div class="col-md-4 mb-3">
                <img src="assets/img/4x3.1.png" alt="Görsel 1" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-4 mb-3">
                <img src="assets/img/4x3.2.png" alt="Görsel 2" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-4 mb-3">
                <img src="assets/img/4x3.3.png" alt="Görsel 3" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>


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