<?php	

//*********************************************************************************************************************//
//*******************************************************  SELECT  ****************************************************//
//*********************************************************************************************************************//

function connection() {
	$host = "mysql.hostinger.fr";
	$user = "u311115548_val";
	$password = "0M7ERUwU";
	$database = "u311115548_repas";

	//$host = "localhost";
	//$user = "root";
	//$password = "";
	//$database = "repas";
	
	$con=mysqli_connect($host,$user,$password,$database);
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	return $con;
}

function getCountRecettes() {
	$mysqli = connection();

	$query = "SELECT COUNT(*) FROM recette;";

	if ($result = $mysqli->query($query)) {

	    /* Lecture des valeurs */
	    while ($row = $result->fetch_row()) {
        	echo $row[0];
    	}

	}
	return $row[0];
}

function getRandomRecette(){
	$mysqli = connection();
	$mysqli->set_charset("utf8");
	$offset= 16;
	$query = "SELECT IdRecette, Titre FROM recette ORDER BY RAND() LIMIT 1;";
	$compteur= 0;
	
	while ($compteur!= $offset){
		if ($result = $mysqli->query($query)) {
			/* Lecture des valeurs */
			$memory = $result;
			while ($row = $result->fetch_assoc()) {
				echo  "
					<div id='emplacementRecette' class='EMPLRecette'>
						<a href='recipe.php?id=";
				echo $row["IdRecette"];
        		echo "'>
							<img src='img/recettes/";
				echo $row["IdRecette"];
				echo ".jpg'>";
				echo "<span class='TitreRecette'>";
        	if (strlen($row["Titre"]) > 26) {
                echo substr($row["Titre"], 0, 26).'...';
            }
            else{
                echo $row["Titre"];
            }
			echo "</span>";
				
				echo"	</a>
				</div>";
			}
		}
		$compteur++;
	}
}

function getRecetteFromType($Type){
    $mysqli = connection();
	$mysqli->set_charset("utf8");
	$query = "SELECT * FROM recette WHERE Type =".$Type;
	$nom_type = "SELECT nomType FROM  type WHERE idType =".$Type;
    
	if ($result = $mysqli->query($nom_type)) {

	    while ($row = $result->fetch_assoc()) {
			echo "<div id='TitreRecettes' class='animated bounceInLeft'>".$row["nomType"]."</div> ";
		}
	}
	echo "<span id='compteur'>Actuellement, ";
	echo getCountRecettesByType($_GET["id"]); 
	echo 'délicieuses recettes disponibles.';
	echo "</span>";
	
    include ('typeRecette.php');
    include ('inc/searchBar.php');
	
	if ($result = $mysqli->query($query)) {

	    while ($row = $result->fetch_assoc()) {
        	echo  "
        		<div id='emplacementRecette' class='EMPLRecette'>
					<a href='recipe.php?id=";
			echo $row["IdRecette"];
        	echo "'>";
        	echo "<img class='imgRecette' src='img/recettes/";
			echo $row["IdRecette"];
			echo ".jpg'>";
			
			echo "<span class='TitreRecette'>";
			//echo strlen($row["Titre"]);
        	if (strlen($row["Titre"]) > 26) {
                echo substr($row["Titre"], 0, 26).'...';
            }
            else{
                echo $row["Titre"];
            }			
			echo "</span>";
			echo "</a></div>";
    	}
	}
}

function getRecipe($id) {
	$mysqli = connection();
	$mysqli->set_charset("utf8");

	$query = "SELECT IdRecette, Titre, Type, Difficulte, NbPersonnes, Ingredients, Preparation, Conseils, Auteur FROM recette WHERE IdRecette= ".$id." LIMIT 1;";

	if ($result = $mysqli->query($query)) {

	    /* Lecture des valeurs */
	    while ($row = $result->fetch_assoc()) {
        	echo  "
			<div id='polaroid' >
				<div id='TitreRecette'>";
			echo $row["Titre"];
			echo "</div>	
				<div id='difficulte' class='rotate'>
					Difficulté : ";
			
			$diff = $row["Difficulte"];
			while($diff != 0){
				echo"<img src='img/etoile1.png'>";
				$diff--;
			}
			
			echo "</div>
				<div id='nbPersonne' class='rotate'>
				Pour ";
			
			$nb_pers = $row["NbPersonnes"];
			while($nb_pers != 0){
				echo"<img src='img/bonhomme.png'>";
				$nb_pers--;
			}
			
			echo " personnes
				</div>
				<div id='photoRecette'>
				<img src='img/recettes/";
			echo $row["IdRecette"];
			echo "R.jpg'>
				</div>
				<div id='titreIngredient'>
					Ingrédients
				</div>
				<div id='ingredients'>";
			echo $row["Ingredients"];
			echo "</div>
				<div id='titrePreparation'>
				Préparation
				</div>
				<div id='preparation'>";
			echo $row["Preparation"];	
			echo "</div>
				<div id='titreConseils'>
					Le conseil en plus
				</div>
				<div id='conseil'>";
			echo $row["Conseils"];
			echo "</div>";
			echo "<span id='titreAuteur'>
					Auteur : 
				</span>
				<span id='auteur'>";
			echo $row["Auteur"];
			echo "</span>";
			echo "</div>";
    	}
	}
}


function getRecetteFromSearch($search){
    $mysqli = connection();
	$mysqli->set_charset("utf8");
    $query = "SELECT IdRecette, Titre FROM recette WHERE Titre LIKE '%".$search."%' OR Preparation LIKE '%".$search."%' OR Ingredients LIKE '%".$search."%';";
    echo "<div id='phraseResult'><span id='nbrRestults'></span> résultats pour '".$search."'</div> ";
    if ($result = $mysqli->query($query)) {
        $cpt = 0;
        while ($row = $result->fetch_assoc()) {
            echo  "
        		<div id='emplacementRecette' class='EMPLRecette'>
				<a href='recipe.php?id=";
			echo $row["IdRecette"];
        	echo "'><img class='imgRecette' src='img/recettes/";
			echo $row["IdRecette"];
			echo ".jpg'>";
			
			echo "<span class='TitreRecette'>";
			//echo strlen($row["Titre"]);
        	if (strlen($row["Titre"]) > 26) {
                echo substr($row["Titre"], 0, 26).'...';
            }
            else{
                echo $row["Titre"];
            }					
			echo "</span>";
			echo "</a></div>";
        }
    }
}

function getCountRecettesByType($Type) {
	$mysqli = connection();
	$mysqli->set_charset("utf8");

	$query = "SELECT COUNT(*) FROM recette WHERE Type=".$Type.";";

	if ($result = $mysqli->query($query)) {

	    /* Lecture des valeurs */
	    while ($row = $result->fetch_row()) {
        	echo $row[0];
    	}
	}
	return $row[0];
}

function getOneRandomRecette(){
	$mysqli = connection();
	$mysqli->set_charset("utf8");
	$query = "SELECT IdRecette FROM recette ORDER BY RAND() LIMIT 1;";
	
	if ($result = $mysqli->query($query)) {
		$memory = $result;
		while ($row = $result->fetch_assoc()) {
			echo  getRecipe($row["IdRecette"]);
		}
	}
}

function getNameEvenement($eve){
	$mysqli = connection();
	$mysqli->set_charset("utf8");
	$query = "SELECT DescriptionEvenement FROM evenement WHERE IdEvenement=".$eve.";";
	
	if ($result = $mysqli->query($query)) {
		$memory = $result;
		while ($row = $result->fetch_assoc()) {
			echo $row["DescriptionEvenement"];
		}
	}
}

function getIdEve($eve){
	$mysqli = connection();
	$mysqli->set_charset("utf8");
	$query = "SELECT IdEvenement FROM evenement WHERE IdEvenement=".$eve.";";
	
	if ($result = $mysqli->query($query)) {
		$memory = $result;
		while ($row = $result->fetch_assoc()) {
			echo $row["IdEvenement"];
		}
	}
}

function getCountRecettesEve($eve){
	$mysqli = connection();
	$query = "SELECT COUNT(*) FROM recette WHERE Evenement=".$eve.";";

	if ($result = $mysqli->query($query)) {
	    while ($row = $result->fetch_row()) {
        	echo $row[0];
    	}
	}
	return $row[0];
}

function getNameEve($eve){
	$mysqli = connection();
	$mysqli->set_charset("utf8");
	$query = "SELECT NomEvenement FROM evenement WHERE IdEvenement=".$eve.";";
	
	if ($result = $mysqli->query($query)) {
		$memory = $result;
		while ($row = $result->fetch_assoc()) {
			echo $row["NomEvenement"];
		}
	}
}

function getRecetteFromTypeEve($eve, $id){
	$mysqli = connection();
	$mysqli->set_charset("utf8");
	$query = "SELECT * FROM recette WHERE Type =".$id."&& Evenement=".$eve.";";
	$nom_type = "SELECT nomType FROM  type WHERE idType =".$Type;
    
	if ($result = $mysqli->query($nom_type)) {
	    while ($row = $result->fetch_assoc()) {
			echo "<div id='TitreRecettes' class='animated bounceInLeft'>".$row["nomType"]."</div> ";
		}
	}
	
    include ('typeRecetteEve.php');
    include ('inc/searchBar.php');
	
	if ($result = $mysqli->query($query)) {

	    while ($row = $result->fetch_assoc()) {
        	echo  "<div id='emplacementRecette' class='EMPLRecette'>
					<a href='recipe.php?id=";
			echo $row["IdRecette"];
        	echo "'>";
        	echo "<img class='imgRecette' src='img/recettes/";
			echo $row["IdRecette"];
			echo ".jpg'>";
			
			echo "<span class='TitreRecette'>";
        	if (strlen($row["Titre"]) > 26) {
                echo substr($row["Titre"], 0, 26).'...';
            }
            else{
                echo $row["Titre"];
            }			
			echo "</span>";
			echo "</a></div>";
    	}
	}
}

function getRandomRecetteEve($eve){
	$mysqli = connection();
	$mysqli->set_charset("utf8");
	$offset= 8;
	$query = "SELECT IdRecette, Titre, Type, Preparation FROM recette WHERE Evenement=".$eve." ORDER BY RAND() LIMIT 1;";
	$compteur= 0;
	
	while ($compteur!= $offset){
		if ($result = $mysqli->query($query)) {
			/* Lecture des valeurs */
			$memory = $result;
			while ($row = $result->fetch_assoc()) {
				echo "<a href='recipe.php?id=";
				echo $row["IdRecette"];
				echo "'>
					<div id='emplacementRecetteEve'>	
						<img src='img/recettes/";
				echo $row["IdRecette"];
				echo ".jpg'>
						<div class='contenuEve'>
							<p class='TitreRecetteEve'>";
				if (strlen($row["Titre"]) > 45) {
                echo substr($row["Titre"], 0, 45).'...';
				}
				else{
					echo $row["Titre"];
				}
				echo "</p>	
							<p class='PreparationEve'><strong>Préparation</strong> : ";
				if (strlen($row["Preparation"]) > 400) {
                echo substr($row["Preparation"], 0, 400).'...';
				}
				else{
					echo $row["Preparation"];
				}
				echo "</p>
						</div>
					</div>
				</a>";
			}
		}
		$compteur++;
	}
}

//*********************************************************************************************************************//
//*******************************************************  INSERT  ****************************************************//
//*********************************************************************************************************************//

function addRecipe($Titre, $Type, $Difficulte, $NbPersonnes, $TpsPrepa, $TpsCuisson, $Ingredients, $Preparation, $Conseils, $Auteur) {
	$con = connection();
	$query = "INSERT INTO recette(Titre , Type, Difficulte, NbPersonnes, TpsPrepa, TpsCuisson, Ingredients, Preparation, Conseils, Auteur) VALUES (".$Titre.", ".$Type.", ".$Difficulte.", ".$NbPersonnes.", ".$TpsPrepa.", ".$TpsCuisson.", ".$Ingredients.", ".$Preparation.", ".$Conseils.", ".$Auteur.");";	
	mysqli_query($con,$query);
	mysqli_close($con);
}


	
?>