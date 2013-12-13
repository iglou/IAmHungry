<!DOCTYPE html>
<html>
<head>
  <?php
    include 'inc/head.php';
    include 'inc/query.php';
  ?>
  
  
</head>
	<body background="img/fond-fibre-gris.jpg">
	
	<div id="wrap">
		<div id="header">
			<?php
				include ('inc/header.php');
			?>
		</div>

		<div id="content">  
			<?php
				getRecetteFromType($_GET["id"]);
			?>
		</div>
		
		<?php
			include('inc/boutoncote.php');
		?>
		
		<div id="footer">
			<a href="recette.php" style="text-decoration:none;"><h6>Retour aux recettes</h6></a>
			<?php
				include('inc/footer.php');
			?>
		</div>
	</div>

</body>
</html>