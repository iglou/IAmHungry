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
    	include ('inc/searchBar.php');
    ?>
    <?php
		getRecetteFromBigSearch($_POST["ingredient1"], $_POST["ingredient2"], $_POST["ingredient3"], $_POST["type"], $_POST["temps"]);
	?>
    </div>
	
	<?php
		include('inc/boutoncote.php');
	?>
	
     <div id="footer">
		</br></br><a href="recette.php" style="text-decoration:none;"><h6>Retour aux recettes</h6></a>
		<?php
			include('inc/footer.php');
		?>
    </div>
  </div>

</body>
</html>