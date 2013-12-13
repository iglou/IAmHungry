<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=1.0,Transition=3)">
	
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
			<div id="TitreRevoir">
			  <h1> Revoir mes repas organises</h1>
			</div>
			<br/>
		  <form method="post" action="verif.php">
			Choisir une période : entre <input type="date" name="date" required -webkit-border-radius="10px"> 
			et <input type="date" name="date" required -webkit-border-radius="10px">
			<input type="submit" value="OK">
		  </form>
		  
		  <div id="emplacementMenu">
			<a href="#">
				<img class="imgRevoir" alt="choupy" src="img/repas/choupy.jpg">
				Repas avec Choupy
				</br>Le 4 octobre 2013
			</a>
		  </div>
		  
		  <div id="emplacementMenu">
			<a href="#">
				<img class="imgRevoir" alt="rats" src="img/repas/rats.jpg">
				</br>La Corse entre rats
				</br>Le 25 juillet 2013
			</a>
		  </div>
		  
		  <div id="emplacementMenu">
			<a href="#">
				<img class="imgRevoir" alt="venise" src="img/repas/venise.jpg">
				Repas à Venise
				</br>Le 29 juin 2013
			</a>
		  </div>

		  <div id="emplacementMenu">
			<a href="#">
				<img class="imgRevoir" alt="steMax" src="img/repas/steMaxime.jpg">
				Repas à Sainte Maxime
				</br>Le 22 juin 2013
			</a>
		  </div>
		  
		  <div id="emplacementMenu">
			<a href="#">
				<img class="imgRevoir" alt="concoursCocktail" src="img/repas/concoursCocktail.jpg">
				Concours cocktail à Risoul
				</br>Le 22 juin 2013
			</a>
		  </div>
		  
		  <div id="emplacementMenu">
			<a href="#">
				<img class="imgRevoir" alt="frauville" src="img/repas/frauville.jpg">
				Soirée romaine à Frauville
				</br>Le 3 janvier 2013
			</a>
		  </div>
		  
		  <div id="emplacementMenu">
			<a href="#">
				<img class="imgRevoir" alt="dinde" src="img/repas/dinde.jpg">
				Fourrage de dinde
				</br>Le 31 décembre 2012
			</a>
		  </div>
		  
		  <div id="emplacementMenu">
			<a href="#">
				<img class="imgRevoir" alt="fontaineChocolat" src="img/repas/fontainechocolat.jpg">
				Fontaine de chocolat
				</br>Le 1er novembre 2012
			</a>
		  </div>
		</div>
		
		<div id="footer">
		  <a href="index.php" style="text-decoration:none;"><h6>Back</h6></a>
		  <h6>Copyright Valentine Berge, 2013, tous droits réservés.</h6>
		</div>
	</div>
    </body>
</html>
