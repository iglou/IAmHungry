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

<?php

	echo("Merci pour votre bonne recette, elle sera bienntôt validé!");
	header ("Refresh: 3;URL=index.php");

/*function submit()
{
	if(isset($_POST) and !empty($_POST['day']) and !empty($_POST['month']) and !empty($_POST['year']))
	{
		include ("inc/connexion.php");

		$jour=$_POST["day"];
		$mois=$_POST["month"];
		$annee=$_POST["year"];
		$date_repas= $jour.'/'.$mois.'/'.$annee;
				
		$req = $bdd->prepare("INSERT INTO repas(Date, RecuRecois, Type, Titre, Commentaire) VALUES(:date_repas, :recurecois, :type, :titre, :commentaire)");
		$req->execute(array(
			'date_repas' => $date_repas,
			'recurecois' => $_POST['invitation'],
		    'type' => $_POST['type'],
		    'titre' => $_POST['titre'],
		    'commentaire' => $_POST['commentaire']
		    ));
		 
		$req = "INSERT INTO repas(Date, RecuRecois, Type, Titre, Commentaire) VALUES('$date_repas', '$_POST['invitation']', '$_POST['type']', '$_POST['titre']', '$_POST['commentaire']')");
		
		echo 'Le repas a bien été créé !';
		
		
		$reponse = $bdd->query('SELECT * FROM invite') or die(print_r($bdd->errorInfo()));

		while ($donnees = $reponse->fetch())
		{
		?>
			<p>
			<strong>Invité</strong> : <?php echo $donnees['Prenom'].$donnees['Nom']; ?><br />
			Le surnom de cet invité est : <?php echo $donnees['Surnom']; ?><br />
		   </p>
		<?php
		}
		$reponse->closeCursor(); // Termine le traitement de la requête
			
	}
}*/

?>