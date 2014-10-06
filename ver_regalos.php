<?php
require_once("Spyc.php");
?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Nuestro Proyecto Diez</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Enlace entre Patricia y Nacho" />
		<meta name="keywords" content="boda patricia nacho" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>

	<body class="index">
	
		<!-- Header -->
		<header id="header" class="alt">
			<h1 id="logo"><a href="index.html"><span>Nuestro Proyecto</span> Diez</a></h1>
			<nav id="nav">
				<ul>
					<li><a href="index.html" class="button special">Volver a la web</a></li>
				</ul>
			</nav>
		</header>

		<article id="main">
			<section class="wrapper style3 container special">
				<header class="major">
					<h2>Regalos <strong>apuntados</strong></h2>
				</header>

				
				<?php
					$data = spyc_load_file('regalos.txt');
					foreach($data as $regalo => $nombres) { 
					?>
					<div class="row">
						<div class="4u">
							<section>
								<a href="#" class="image featured"><img src="images/regalos/<?php echo $regalo;?>.jpg" alt="" /></a>
								<header>
									<h3>Regalo <?php echo $regalo;?></h3>
								</header>
							</section>
						</div>
						<div class="8u">
							<section>
								<ul style="list-style-type: square; text-align: left; margin-left: 2em;">
									<?php 
										foreach($nombres as $nombre) {
											$nombre = rtrim($nombre);
											echo "<li>$nombre</li>";
										}
									?>
								</ul>
							</section>
						</div>
					</div>	
				<?php } ?>
				
					
			</section>
					
		</article>
		<!-- Footer -->
		<footer id="footer">
			
			<ul class="copyright">
				<li>2014</li><li>Patricia & Nacho</li>
			</ul>
		
		</footer>

	</body>
</html>