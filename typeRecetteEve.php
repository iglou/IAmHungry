<?php

echo
	'<div id="typeRecette">	
		<div id=boutonBoisson class="boutonType">
			<a href="typeEve.php?eve='.$_GET["eve"].'&id=1" >Boissons</a>
		</div>

		<div id=boutonAperitif class="boutonType">
			<a href="typeEve.php?eve='.$_GET["eve"].'&id=2" >Apéritifs</a>
		</div>

		<div id=boutonEntree class="boutonType">
			<a href="typeEve.php?eve='.$_GET["eve"].'&id=3" >Entrées</a>
		</div>

		<div id=boutonPlat class="boutonType">
			<a href="typeEve.php?eve='.$_GET["eve"].'&id=4" >Plats</a>
		</div>

		<div id=boutonDessert class="boutonType">
			<a href="typeEve.php?eve='.$_GET["eve"].'&id=5" >Desserts</a>
		</div>

		<div id=boutonDivers class="boutonType">
			<a href="typeEve.php?eve='.$_GET["eve"].'&id=6" >Divers</a>
		</div>
	</div>'
?>