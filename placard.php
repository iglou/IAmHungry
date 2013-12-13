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
		
		<div id="content" style="height: 940px;">
		  <div id="Titreplacard">
			Dans mon placard et mon frigo, j'ai toujours...
		  </div>
		  <div id="etagere">
			<img src="img/etagere.png">
		  </div>
		  <!--ETAGE1-->
		  <div class="objet_placard" id="canelle">
			<a data-toggle="tooltip" title="de la canelle avec les pommes"><img src="img/placard/canelle.png"/></a>
		  </div>
		  <div class="objet_placard" id="curry">
			 <a data-toggle="tooltip" title="du curry pour le poulet"><img src="img/placard/curry.png"/></a>
		  </div>
		  <div class="objet_placard" id="sel">
			 <a data-toggle="tooltip" title="du sel pour relever le goût"><img src="img/placard/sel.png"/></a>
		  </div>
		  <div class="objet_placard" id="poivre">
			 <a data-toggle="tooltip" title="du poivre, mais pas trop !"><img src="img/placard/poivre.png"/></a>
		  </div>
		  <!--ETAGE2-->
		  <div class="objet_placard" id="sucre">
			<a data-toggle="tooltip" title="du sucre"><img src="img/placard/sucre.png"/></a>
		  </div>
		  <div class="objet_placard" id="farine">
			 <a data-toggle="tooltip" title="de la farine"><img src="img/placard/farine.png"/></a>
		  </div>
		  <div class="objet_placard" id="levure">
			 <a data-toggle="tooltip" title="de la levure"><img src="img/placard/levure.png"/></a>
		  </div>
		  <div class="objet_placard" id="huileolive">
			 <a data-toggle="tooltip" title="de l'huile d'olive avec les légumes"><img src="img/placard/huileolive.png"/></a>
		  </div>
		  <div class="objet_placard" id="vinaigre">
			 <a data-toggle="tooltip" title="un peu de vinaigre pour une bonne vinaigrette"><img src="img/placard/vinaigre.png"/></a>
		  </div>
		  <!--ETAGE3-->
		  <div class="objet_placard" id="stmoret">
			 <a data-toggle="tooltip" title="du Saint Moret"><img src="img/placard/stmoret.png"/></a>
		  </div>		  		
		  <div class="objet_placard" id="parmesan">
			 <a data-toggle="tooltip" title="du parmesan pour le crumble salé!"><img src="img/placard/parmesan.png"/></a>
		  </div>
		  <div class="objet_placard" id="lait">
			 <a data-toggle="tooltip" title="du lait"><img src="img/placard/lait.png"/></a>
		  </div>		  
		  <div class="objet_placard" id="vinblanc">
			 <a data-toggle="tooltip" title="du vin blanc à boire ou à cuisiner"><img src="img/placard/vinblanc.png"/></a>
		  </div>
		  <div class="objet_placard" id="beurre">
			<a data-toggle="tooltip" title="un peu de beurre"><img src="img/placard/beurre.png"/></a>
		  </div>
		  <div class="objet_placard" id="chevre">
			 <a data-toggle="tooltip" title="du chèvre un peu partout"><img src="img/placard/chevre.png"/></a>
		  </div>
		  <div class="objet_placard" id="fromageblanc">
			 <a data-toggle="tooltip" title="du fromage blanc"><img src="img/placard/fromageblanc.png"/></a>
		  </div>
		  <div class="objet_placard" id="moutarde">
			 <a data-toggle="tooltip" title="de la moutarde pour relever le goût"><img src="img/placard/moutarde.png"/></a>
		  </div>
		  <div class="objet_placard" id="oeuf">
			 <a data-toggle="tooltip" title="des oeufs"><img src="img/placard/oeuf.png"/></a>
		  </div>


		  <!--ETAGE4-->
		  <div class="objet_placard" id="chocolat">
			<a data-toggle="tooltip" title="du chocolat de cuisine"><img src="img/placard/chocolat.png"/></a>
		  </div>
		  <div class="objet_placard" id="miel">
			 <a data-toggle="tooltip" title="du miel pour aller avec le chèvre"><img src="img/placard/miel.png"/></a>
		  </div>
		  <div class="objet_placard" id="speculoos">
			 <a data-toggle="tooltip" title="des spéculoos"><img src="img/placard/speculoos.png"/></a>
		  </div>
		  <div class="objet_placard" id="fruit">
			 <a data-toggle="tooltip" title="des fruits de saison"><img src="img/placard/fruit.png"/></a>
		  </div>
		  <div class="objet_placard" id="oignon">
			 <a data-toggle="tooltip" title="des petits oignons"><img src="img/placard/oignon.png"/></a>
		  </div>
		  <div class="objet_placard" id="legume">
			 <a data-toggle="tooltip" title="des légumes de saison"><img src="img/placard/legume.png"/></a>
		  </div>
		  <div class="objet_placard" id="basilic">
			 <a data-toggle="tooltip" title="du basilic pour la salade"><img src="img/placard/basilic.png"/></a>
		  </div>
		  <div class="objet_placard" id="ciboulette">
			 <a data-toggle="tooltip" title="de la ciboulette bien fraiche"><img src="img/placard/ciboulette.png"/></a>
		  </div>
		  <div class="objet_placard" id="thym">
			 <a data-toggle="tooltip" title="du thym"><img src="img/placard/thym.png"/></a>
		  </div>
		  </div>
		  
		<?php
				include('inc/boutoncote.php');
				include('inc/je-veux-bar.php');
		?>
		
		<script src="js/tooltip.js" type="text/javascript"></script>

		<div id="footer">
			<?php
				include('inc/footer.php');
			?>
		</div>
	</div>
    </body>

</html>
