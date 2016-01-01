<?php session_start(); $_SESSION['captcha'] = array( mt_rand(0,9), mt_rand(1, 9) ); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8" />
	<title>Reznitskiygallery.com</title>
	<meta name="description" content="Галерея Романа Резницкого" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name='yandex-verification' content='52b438787c3636ec' />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="image/ico" href="favicon.ico?v=2"/>
	<link rel="stylesheet" href="libs/bootstrap-3.3.6/dist/css/bootstrap.min.css" />
	<!-- <link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" /> -->
	<!-- <link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css" /> -->
	<!-- <link rel="stylesheet" href="libs/countdown/jquery.countdown.css" /> -->
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/media.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>
	<!-- <script src="libs/waypoints/waypoints-1.6.2.min.js"></script> -->
	<!-- <script src="libs/scrollto/jquery.scrollTo.min.js"></script> -->
	<!-- <script src="libs/owl-carousel/owl.carousel.min.js"></script> -->
	<!-- <script src="libs/countdown/jquery.plugin.js"></script> -->
	<!-- <script src="libs/countdown/jquery.countdown.min.js"></script> -->
	<!-- <script src="libs/countdown/jquery.countdown-ru.js"></script> -->
	<!-- <script src="libs/landing-nav/navigation.js"></script> -->
	<script src="js/notify.min.js"></script>
	<script src="js/common.js"></script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<?php include_once("yandexmetrika.php") ?>
<div id="parallax" data-speed="2.1" data-type="background">
	<div class="logo" data-speed="1.5" data-type="logo"><img src="images/logo.png" alt=""></div>
</div>
<div id="wrapper" class="container-fluid">
	<div class="row first-row">
		<div class="col-sm-5">
			<img src="images/chair_new.jpg" width="100%" alt="">
			<p>Основа моих работ - яркие цвета, не менее яркие женщины и сюжеты, позаимствованные из современной жизни.</p>
		</div>
		<div class="col-sm-7">
			<p>Добро пожаловать! Меня зовут Роман и я рад приветствовать вас в ReznitskyGallery, моей персональной галерее живописи!</p>
			<p>Картины, которые вы увидите, - это не только продолжение традиций популярного сегодня жанра поп-арт и любимого мной Роя Лихтенштейна, но и личный творческий опыт и раздумья о времени, в котором мы живем.</p>
			<img src="images/back_new.jpg" width="100%" alt="">
		</div>
	</div>
	<div class="row second-row">
		<div class="col-sm-10">
			<img src="images/artist_new.jpg" width="100%" alt="Artist">
			<p>Через картины я выражаю свои эмоции, которые рождаются внутри.</p>
		</div>
	</div>
	<div class="row third-row">
		<div class="col-sm-7">
			<img src="images/floor_new.jpg" width="100%" alt="">
			<p>Если Вам понравилась какая-либо картина, Вы можете знать – эта картина Ваша! Заказать просмотр и купить любую картину, представленную в галерее, Вы можете просто позвонив по телефону в любое удобное время.</p>
		</div>
		<div class="col-sm-5">
			<img src="images/wall_new.jpg" width="100%" alt="">
		</div>
	</div>
	<div class="row fourth-row">
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a rel="group" id="single_image" href="images/1_big.jpg"><img src="images/1_small.jpg" width="100%" alt=""/></a>
		</div>
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a rel="group" id="single_image" href="images/2_big.jpg"><img src="images/2_small.jpg" width="100%" alt=""/></a>
		</div>
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a rel="group" id="single_image" href="images/3_big.jpg"><img src="images/3_small.jpg" width="100%" alt=""/></a>
		</div>
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a title="" rel="group" id="single_image" href="images/4_big.jpg"><img src="images/4_small.jpg" width="100%" alt=""/></a>
		</div>
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a rel="group" id="single_image" href="images/5_big.jpg"><img src="images/5_small.jpg" width="100%" alt=""/></a>
		</div>
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a rel="group" id="single_image" href="images/6_big.jpg"><img src="images/6_small.jpg" width="100%" alt=""/></a>
		</div>
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a rel="group" id="single_image" href="images/7_big.jpg"><img src="images/7_small.jpg" width="100%" alt=""/></a>
		</div>
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a rel="group" id="single_image" href="images/8_big.jpg"><img src="images/8_small.jpg" width="100%" alt=""/></a>
		</div>
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a rel="group" id="single_image" href="images/9_big.jpg"><img src="images/9_small.jpg" width="100%" alt=""/></a>
		</div>
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a rel="group" id="single_image" href="images/10_big.jpg"><img src="images/10_small.jpg" width="100%" alt=""/></a>
		</div>
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a rel="group" id="single_image" href="images/11_big.jpg"><img src="images/11_small.jpg" width="100%" alt=""/></a>
		</div>
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a rel="group" id="single_image" href="images/12_big.jpg"><img src="images/12_small.jpg" width="100%" alt=""/></a>
		</div>
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a rel="group" id="single_image" href="images/13_big.jpg"><img src="images/13_small.jpg" width="100%" alt=""/></a>
		</div>
		<div class="gal-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a rel="group" id="single_image" href="images/14_big.jpg"><img src="images/14_small.jpg" width="100%" alt=""/></a>
		</div>
	</div>
	<div class="row contact-form">
		<div class="col-xs-11 col-md-4 title">
			<h3>Contact</h3>
		</div>
		<div class="col-xs-11 col-md-5 col-md-offset-5">
			<form id="contact-form" action="mail.php" method="POST" role="form">
				<div class="form-group name-field">
					<label class="sr-only" for="inputName">Name</label>
					<input id="inputName" type="text" name="name" class="form-control" placeholder="Name" data-validation="required" data-validation-error-msg="Please enter your name">
				</div>
				<div class="form-group email-field">
					<label class="sr-only" for="inputEmail">E-mail</label>
					<input id="inputEmail" type="text" name="email"  class="form-control" placeholder="E-mail" data-validation="email" data-validation-error-msg="Please enter your E-mail">
				</div>
				<div class="form-group message-field">
					<label class="sr-only" for="inputMessage">Message</label>
					<textarea id="inputMessage" name="message" placeholder="Message" class="form-control" cols="30" rows="10" data-validation="required" data-validation-error-msg="Please enter your message"></textarea>
				</div>
				<div class="form-group captcha form-inline">
					<label for="inputCaptcha">What is the sum of <?=$_SESSION['captcha'][0]?> + <?=$_SESSION['captcha'][1]?>?
										(security question)</label>
					<input id="inputCaptcha" name="captcha" class="form-control" data-validation="spamcheck" data-validation-captcha="<?=($_SESSION['captcha'][0]+$_SESSION['captcha'][1])?>"/>
				</div>
				<div class="submit-group">
					<input type="submit" name="submit" class="btn btn-lg form-control" value="Submit">
				</div>
			</form>
		</div>
	</div>
	<div class="row footer">
		<div class="col-sm-10">
			<p id="mos">MOSCOW</p>
			<p>+7 (926) 723 37 05 <br>
			<a href="mailto:reznitskiygallery@gmail.com">reznitskiygallery@gmail.com</a>
			</p>
		</div>
		<div class="col-sm-1">
			<a href="https://www.facebook.com/profile.php?id=100004420753575"><img id="fb" src="images/fb.png" height="59" width="72" alt=""></a>
		</div>
		<div class="col-sm-1">
			<img  id="vk" src="images/vk.png" height="59" width="59" alt="">
		</div>
		<!-- <div class="col-sm-2" widht="141" background-color="#ffffff">
			<a href="https://www.facebook.com/profile.php?id=100004420753575"><img id="fb" src="images/fb.png" height="59" width="72" alt=""></a>
			<img  id="vk" src="images/vk.png" height="59" width="59" alt="">
		</div> -->
	</div>
</div>
<!-- <img class="centered" src="images/underconstruction.jpg" height="458" width="467" alt="reznitskiygallery.com"> -->
</body>
</html>