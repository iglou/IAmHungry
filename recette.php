<!DOCTYPE html>
<html>
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
			<div id="TitreRecettes" class="animated bounceInRight">
			  Voir mes recettes préférées
			</div>
			<br/>

			<span id='compteur'>Actuellement, 
			  <?php
				echo getCountRecettes();
			  ?> délicieuses recettes disponibles.
			</span>
			
			<?php
					include ('typeRecette.php');
					include ('inc/searchBar.php');
			?>
		  
			<div id ="random">
				<?php
				  getRandomRecette();
				?>
			</div>
			
			<?php
				include('inc/boutoncote.php');
				include('inc/je-veux-bar.php');
			?>
		</div>
	
		<div id="footer">
			<?php
				include('inc/footer.php');
			?>		
		</div>
	
	</div>
    </body>
</html>
