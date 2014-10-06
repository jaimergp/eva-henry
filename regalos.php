<?php
require_once("Spyc.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];

//open the file and choose the mode
$data = spyc_load_file('regalos.txt');

array_push($data[$id], $nombre);

$yaml = Spyc::YAMLDump($data);

$fp = fopen("regalos.txt", "w");
$fw = fwrite($fp, $yaml);
fclose($fp);

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
		<script type="text/javascript">
		<!--
		function delayer(){
		    window.location = "listadebodas.html#main"
		}
		//-->
		</script>
	</head>

	<body class="index" onLoad="setTimeout('delayer()', 5000)">
	
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
					<h2>Datos añadidos</h2>
				</header>
				<p>En unos segundos volverás a la página anterior. Si no sucede así, por favor pincha <a href="listadebodas.html#main">aquí</a>.</p>
			</section>
					
		</article>
		<!-- Footer -->
		<footer id="footer">
			
			<ul class="copyright">
				<li>2014</li><li>Eva &amp; Henry</li>
			</ul>
		
		</footer>

	</body>
</html>