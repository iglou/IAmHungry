<?php
	echo '<div id="menu-1">
	<a href="recette.php"><img class="img-rond-accueil" src="img/accueil/rond1.png"/></a>';
	$i=2;
	while($i<=7){
		echo '<a href="type.php?id='.($i-1).'"><img class="img-rond-accueil" src="img/accueil/rond'.$i.'.png"/></a>';
		$i++;}
	echo '<a href="randomRecette.php"><img class="img-rond-accueil" src="img/accueil/rond8.png"/></a>
	</div>';
?>