<!DOCTYPE html>
<html lang="fr">

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
		  <div id="Titreplacard">
			Ma balance de secours!
		  </div>
		  <div id="balance-cuisine">
				<div id="formContenants">
					<input type="radio" name="contenant" value="cac">1 cuillère à café<br>
					<input type="radio" name="contenant" value="cas">1 cuillère à soupe<br>
					<input type="radio" name="contenant" value="verre">1 verre<br>
					<input type="radio" name="contenant" value="tac">1 tasse à café<br>
				</div>
				<div id="formIngredients">
					<input type="radio" name="ingredient" value="farine">Farine<br>
					<input type="radio" name="ingredient" value="sucre">Sucre<br>
					<input type="radio" name="ingredient" value="sel">Sel<br>
					<input type="radio" name="ingredient" value="huile">Huile<br>
					<input type="radio" name="ingredient" value="liquide">Liquide<br>
					<input type="radio" name="ingredient" value="semoule">Semoule<br>
					<input type="radio" name="ingredient" value="riz">Riz<br>
					<input type="radio" name="ingredient" value="beurre">Beurre mou<br>
					<input type="radio" name="ingredient" value="miel">Miel<br>
					<input type="radio" name="ingredient" value="cacao">Cacao en poudre, café<br>
					<input type="radio" name="ingredient" value="creme">Crème fraîche<br>
					<input type="radio" name="ingredient" value="chapelure">Chapelure<br>
				</div>
				<div id="res">
					<button > = </button>
				</div>
			<div id="resultats">
			0 grammes
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
	</div>

	<script src="js/js.js" type="text/javascript"></script>
    </body>

</html>
