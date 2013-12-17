<!DOCTYPE html>
<html>

	<head>
	<link rel="stylesheet" href="css/bootstrap.css"/>
    <?php
    	include ('inc/head.php');
		include ('inc/query.php');
    ?>
    </head>
 
    <body background="img/fond-fibre-gris.jpg">	
		<div id="wrap">
			<header>
				<?php
					include ('inc/header.php');
				?>
			</header>
			<content>
			<p>Merci, la recette a bien été ajouté</p>
			<p>Pense à ajouter les 2 photos pour la recette !</p>
			<?php
				addRecipe($_POST["Titre"], $_POST["Type"], $_POST["Difficulte"], $_POST["NbPersonnes"], $_POST["TpsPrepa"],  $_POST["TpsCuisson"], $_POST["Ingredients"], $_POST["Preparation"],  $_POST["Conseils"], $_POST["Auteur"]);
				//header ("Refresh: 5;URL=adm.php");
			?>
			</content>
		</div>
	</body>
</html>