<?php

// configuration
$url = 'http://nuestroproyectodiez.info/editar/index.php';
$file = 'regalos.txt';

// check if form has been submitted
if (isset($_POST['text']))
{
    // save the text contents
    file_put_contents($file, $_POST['text']);

    // redirect to form again
    header(sprintf('File: %s', $url));
    printf('<a href="%s">Archivo editado. Pincha aquí para volver</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
$text = file_get_contents($file);

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
		<!--[if lte IE 8]><script src="/css/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" href="/css/skel.css" />
			<link rel="stylesheet" href="/css/style.css" />
			<link rel="stylesheet" href="/css/style-wide.css" />
			<link rel="stylesheet" href="/css/style-noscript.css" />

		<!--[if lte IE 8]><link rel="stylesheet" href="/css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="/css/ie/v9.css" /><![endif]-->
	</head>

	<body class="index">
	
		<!-- Header -->
		<header id="header" class="alt">
			<h1 id="logo"><a href="/index.html"><span>Nuestro Proyecto</span> Diez</a></h1>
			<nav id="nav">
				<ul>
					<li><a href="/index.html" class="button special">Volver a la web</a></li>
				</ul>
			</nav>
		</header>

		<article id="main">
			<section class="wrapper style3 container special">
				<header class="major">
					<h2>Editar listado de apuntados</h2>
					<p>Elimina el carácter # de las líneas que desees publicar.</p>
				</header>
				<!-- HTML form -->
				<form action="" method="post">
				<textarea name="text" style="min-height: 500px"><?php echo htmlspecialchars($text) ?></textarea>
				<input type="submit" value="Guardar" />
				</form>

			</section>
					
		</article>


	</body>
</html>