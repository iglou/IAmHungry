<!DOCTYPE html>
<html>

    <head>
    	<?php
    		include ('inc/head.php');
    	?>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css">
		<script type="text/javascript" src="js/jquery.flexslider.js"></script>
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
				include('inc/typeBar.php');
			?>

			<!-- Carousel -->
			<div class="flexslider">
			<ul class="slides">
				<li><a href="evenement.php?eve=1"><img src="img/accueil/slide1.jpg" alt="" /></a></li>
				<li><a href="evenement.php?eve=3"><img src="img/accueil/slide2.jpg" alt="" /></a></li>
				<li><a href="evenement.php?eve=2"><img src="img/accueil/slide3.jpg" alt="" /></a></li>
				<li><a href="evenement.php?eve=5"><img src="img/accueil/slide4.jpg" alt="" /></a></li>
			</ul>
			</div>
			<!-- /Carousel -->
		
		<?php
			include('inc/boutoncote.php');
		?>		  
		</div>

		<div id="footer">
			<?php
				include('inc/footer2.php');
			?>
		</div>
	</div>
	
	<script charset="utf-8" type="text/javascript">
	   $(window).load(function() {
		  $('.flexslider').flexslider();
	   });
	</script>
    </body>
</html>
