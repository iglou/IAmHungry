<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
	 <head>
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
			<div id="TitreRecettes<?php getNameEve($_GET["eve"]);?>" class="animated bounceInRight">
			  <?php
				getNameEvenement($_GET["eve"]);
			  ?>
			</div>
			<br/>
		
			<span id='compteur'>Actuellement, 
			  <?php
				getCountRecettesEve($_GET["eve"]);
			  ?> délicieuses recettes de <?php getNameEve($_GET["eve"]);?> disponibles.
			</span>
			
			<?php
					include('inc/typeBar.php');
					include ('inc/searchBar.php');
			?>
				<?php
					getRandomRecetteEve($_GET["eve"]);
				?>
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
	
	</div>
    </body>
</html>
