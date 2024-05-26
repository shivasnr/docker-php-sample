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
        require __DIR__.'/vendor/autoload.php';
        $greeting = new \App\Greeting();
        
        // $log = new Monolog\Logger('name');
        // $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
        // $log->warning('Foo');
        ?>
		<div class="site-content">
			<main class="main-content">
				<div class="container shrinked">
					<h1 class="section-title center-aligned"><?php echo $greeting->sayWeAreComing(); ?></h1>
				</div>	<!-- .container -->
			</main> <!-- .main-content -->
		</div>
		
	</body>

</html>