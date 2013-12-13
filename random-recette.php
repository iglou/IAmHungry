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
		<div id="header">
		<?php
			include ('inc/header.php');
		?>
		</div>
		
		<div id="content">
			<div id="TitreRandom" class="animated bounceInRight">
			  Random recette
			</div>
			<br/>
			
			<?php
				include ('typeRecette.php');
				include ('inc/searchBar.php');
				echo getOneRandomRecette();
			?>
		
			<div id="NextRandom">
				<a href="random-recette.php"><button class="btn btn-primary btn-lg " style="background-color:#e84946; text-align:center;"> J'en veux une autre ! </button></a>
			</div>
		
		</div>
	</div>
		
	<?php
		include('inc/boutoncote.php');
	?>
	
	<div id="footer">
		<?php
			include('inc/footer.php');
		?>
	</div>
    </body>
</html>
