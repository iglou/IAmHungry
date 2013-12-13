<!DOCTYPE html>
<html>

	<head>
	<link rel="stylesheet" href="css/bootstrap.css"/>
    <?php
    	include ('inc/head.php');
    ?>
    </head>
 
    <body background="img/fond-fibre-gris.jpg">
	<div id="wrap">
	
    <header>
		<?php
			include ('inc/header.php');
		?>
    </header>
	
	<content>
	<div id="TitreAjout">
      <h1> Ajouter une recette</h1>
	  <br/>
	</div>
	
	<form class="form-horizontal" id="form-ajout-recette" enctype="multipart/form-data" action="donnees.php" method="post">
	<div class="form-group">	
		<label for="nomRecette" class="col-sm-2 control-label">Nom de la recette :</label> 
		<div class="col-sm-10">
			<input class="form-control" type="text" name="nomRecette"/>
		</div>
	</div>
		
	<div class="form-group">
		<label for="type" class="col-sm-2 control-label">Type :</label>
		<div class="col-sm-10">
			<select class="form-control" name="type">
				<option value="1">Boisson</option>
				<option value="2">Apéritif</option>
				<option value="3">Entrée</option>
				<option value="4">Plat</option>
				<option value="5">Dessert</option>
				<option value="6">Divers</option>
			</select>
		</div>
	</div>
	
	<div class="form-group">
		<label for="difficulte" class="col-sm-2 control-label">Difficulté :</label>
		<div class="col-sm-10">
			<select class="form-control" name="difficulte">
				<option value="1">Facile</option>
				<option value="2">Moyen</option>
				<option value="3">Difficile</option>
			</select>
		</div>
	</div>
		
	<div class="form-group">
		<label for="nbPersonnes" class="col-sm-2 control-label">Recette pour </label>
		<div class="col-sm-10">
			<input type="number" name="nbPersonnes" min="1"> personnes
		</div>
	</div>
	
	<div class="form-group">
		<label for="tpsPrepa" class="col-sm-2 control-label">Temps de préparation : </label>
		<div class="col-sm-10">
			<input type="number" name="tpsPrepa"  min="1"> minutes
		</div>
	</div>
	
	<div class="form-group">
		<label for="tpsCuisson" class="col-sm-2 control-label">Temps de cuisson : </label>
		<div class="col-sm-10">
			<input type="number" name="tpsCuisson" min="1"> minutes
		</div>
	</div>
	
	<div class="form-group ingr">
		<label for="ingredients" class="col-sm-2 control-label">Ingrédients : </label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="ingredients"/>
		</div>
	</div>	
	
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<input class="btn btn-default addIngredient" type="button" name="ajoutIngredient" value="Ajouter un ingrédient" style="background-color:#e84946" style="color:white;"> 
		</div>
	</div>
	
	<div class="form-group">
		<label for="preparation" class="col-sm-2 control-label">Préparation : </label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="3" name="preparation"></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<label for="conseils" class="col-sm-2 control-label">Conseils : </label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="conseils" />
		</div>
	</div>
	
	<div class="form-group">
		<label for="auteur" class="col-sm-2 control-label">Auteur : </label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="auteur" />
		</div>
	</div>
	
	<div class="form-group">
		<input type="hidden" name="MAX_FILE_SIZE" value="12345" />
		<label for="photo" class="col-sm-2 control-label">Photo (400*400px) : </label>
		<div class="col-sm-10">
			<input type="file" name="photo" />
		</div>
	</div>
	
		<input type="submit" class="btn btn-primary btn-lg btn-block" style="background-color:#e84946; text-align:center;" value="Envoyer ma bonne recette" />
	</form>	

	</content>
	
    <footer>
		<?php
			include('inc/footer.php');
		?>
    </footer>
	
	</div>
	<script>
		$(document).ready(function(){
			$('.addIngredient').click(function(){
				$('.ingr:last').after('<div class="form-group ingr"><label for="ingredients" class="col-sm-2 control-label"></label><div class="col-sm-10"><input class="form-control" type="text" name="ingredients"/></div></div>');
			})
		})
	</script>
    </body>
</html>
