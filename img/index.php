<!DOCTYPE html>
<html lang="fr">

    <head>
    	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
		<title>La page demandée n'existe pas</title>
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="stylesheet" href="../css/style.css"/>		
    </head>

    <body background="fond-fibre-gris.jpg">
	
	<div id="wrap">
		<div id="header">
			<div id="logo">
				<a href="../index.php">
					<img class="logoIMG" src="logo.png">
				</a>
			</div>
		
			<div id="banniere">
				<a href="../index.php">
				<img src="banniere.png">
				</a>
			</div>
		</div>

<?php

	echo("La page demandée n'existe pas");
	header ("Refresh: 2;URL=../index.php");
?>