<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Docker PHP Sample</title>

		<!-- Loading third party fonts -->
		<link href="./fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="./css/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>
        <?php
		ini_set("display_errors", 1);
        require __DIR__.'/vendor/autoload.php';
        //$greeting = new \App\Greeting();
        
        $log = new Monolog\Logger('name');
        $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
        $log->warning('Foo');
        ?>
		<div class="site-content">
			<main class="main-content">
				<div class="container shrinked">
					<h3 class="section-title center-aligned"><span><?php //echo $greeting->sayWeAreComing(); ?></span></h3>
					<h1 class="section-title center-aligned">
						We are preparing something new. <br/><br/>
						<span>Stay tuned!</span>
					</h1>
					<p> Quote of the day</p>
					<p>“When the winds of change blow, some people build walls and others build windmills.“
						<br>
						Unknown- Ancient chinese provert
					</p>
				</div>	<!-- .container -->
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container shrinked">
					<i class="fa-solid fa-recycle"></i>
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div> <!-- .social-links -->

					<div class="colophon">Copyright 2024 Khetbari</div>

				</div>	<!-- .container -->
			</footer> <!-- .site-footer -->
		</div>
		
	</body>

</html>