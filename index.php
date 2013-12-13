<!DOCTYPE html>
<html>

    <head>
    	<?php
    		include ('inc/head.php');
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
		  <div id="description">
			</br><h3>Parce que vous avez faim
			<br/>Parce que vous aimez déguster de bons petits plats
			<br/>Parce que vous aimez cuisiner
			<br/>Parce que vous aimez partagez votre savoir 
			<br/>Pour tout ca, vous êtes sur le bon site !
			<br/>Bienvenue
		  </div>
		  <div id="menu">
			<a href="evenement.php?eve=1">
			<div class="choix choix-1">
				<img width="400" height="250" src="img/accueil/noel2.jpg" class="imgChoix1" alt="choix-1"/>
				<div class="nom_menu nom_menu1">
					Préparer des repas de fête
				</div>
			</div>
			</a>
			<a href="evenement.php?eve=3">
			<div class="choix choix-2">
				<img width="400" height="250" src="img/accueil/copine.jpg" class="imgChoix2" alt="choix-1"/>
				<div class="nom_menu nom_menu2">
					Cuisiner des ptits plats entre copines
				</div>
			</div>
			</a>
			<a href="evenement.php?eve=2">
			<div class="choix choix-3">
				<img width="400" height="250" src="img/accueil/scout2.jpg" class="imgChoix3" alt="choix-1"/>
				<div class="nom_menu nom_menu3">
					La cuisine adaptée aux scouts
				</div>
			</div>
			</a>
			<a href="evenement.php?eve=4">
			<div class="choix choix-4">
				<img width="400" height="250" src="img/accueil/rapide.jpg" class="imgChoix4" alt="choix-1"/>
				<div class="nom_menu nom_menu4">
					J'suis pressée et j'ai faim !
				</div>
			</div>
			</a>
		  </div>
		  
		</div>
		
		<?php
			include('inc/je-veux-bar.php');
		?>

		<div id="footer">
		  <h6>Copyright Valentine Berge, 2013, tous droits réservés.</h6>
		</div>
	</div>
	
	<script type="text/javascript" src="js/jquery-min.js"></script>
	<script type="text/javascript" src="js/jquery.flip.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.choix-1').hover(function() {
				$('.imgChoix1').css('opacity','0.5')
				$('.nom_menu1').css('opacity','1')
			},
			function() {
				$('.imgChoix1').css('opacity','1')
				$('.nom_menu1').css('opacity','0')
			})
			
			$('.choix-2').hover(function() {
				$('.imgChoix2').css('opacity','0.5')
				$('.nom_menu2').css('opacity','1')
			},
			function() {
				$('.imgChoix2').css('opacity','1')
				$('.nom_menu2').css('opacity','0')
			})
			
			$('.choix-3').hover(function() {
				$('.imgChoix3').css('opacity','0.5')
				$('.nom_menu3').css('opacity','1')
			},
			function() {
				$('.imgChoix3').css('opacity','1')
				$('.nom_menu3').css('opacity','0')
			})
			
			$('.choix-4').hover(function() {
				$('.imgChoix4').css('opacity','0.5')
				$('.nom_menu4').css('opacity','1')
			},
			function() {
				$('.imgChoix4').css('opacity','1')
				$('.nom_menu4').css('opacity','0')
			})
		})
		
	</script>
    </body>

</html>
