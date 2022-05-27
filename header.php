<?php  
include 'content.php';
// $json = file_get_contents($json_managers, false);
$managers =  (array) json_decode(json_encode( $json_managers));
// var_dump($managers);



?>
<!DOCTYPE HTML>
<!--
	Arcana= by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Notre equipe</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/styles.css" />
		<link rel="icon" href="images/logo.jpg">

	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">
					<!-- Nav -->
					<nav id="nav">
						<ul>
						<li class="current"><a href="index.php">Accueil</a></li>
							<li><a href="candidature.php"> Candidature</a></li>
							<li><a href="notrehistoire.php">Notre Histoire</a></li>
							<li><a href="temoignage.php">Temoignages</a></li>
							<li><a href="faq.php">FAQ</a></li>
						</ul>
					</nav>


				</div>