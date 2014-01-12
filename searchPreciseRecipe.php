<!DOCTYPE html>
<html>
	 <head>
		<link rel="stylesheet" href="css/bootstrap.css"/>
    	<?php
    		include ('inc/head.php');
			include ('inc/query.php');
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
			<div id="TitreRecettes" class="animated bounceInRight">
				Chercher une recette
			</div>
			<br/>
			<?php
				include ('inc/typeBar.php');
			?>
		  
			<div id ="searchPrecise">
				<br/>
				<form class="form-horizontal" id="form-recherche-recette" enctype="multipart/form-data" action="resultatSearchRecipe.php" method="post">
					<div class="form-group">	
						<label for="ingredient1" class="col-sm-3 control-label">Dans mon frigo, j'ai : </label> 
						<div class="col-sm-4">
							<input class="form-control" type="text" name="ingredient1"/>
						</div>
					</div>
					<div class="form-group">	
						<label for="ingredient2" class="col-sm-3 control-label"></label> 
						<div class="col-sm-4">
							<input class="form-control" type="text" name="ingredient2"/>
						</div>
					</div>
					<div class="form-group">	
						<label for="ingredient3" class="col-sm-3 control-label"></label> 
						<div class="col-sm-4">
							<input class="form-control" type="text" name="ingredient3"/>
						</div>
					</div>
						
					<div class="form-group">
						<label for="type" class="col-sm-3 control-label">Je veux cuisiner</label>
						<div class="col-sm-4">
							<select class="form-control" name="type">
								<option value="1">une boisson</option>
								<option value="2">un apéritif</option>
								<option value="3">une entrée</option>
								<option value="4">un plat</option>
								<option value="5">un dessert</option>
								<option value="6">quelque chose d'autre</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">	
						<label for="rapide" class="col-sm-3 control-label">Je suis préssé :</label> 
						<div class="col-sm-4">
							<input type="radio" name="temps" value="oui"> OUI&nbsp;&nbsp;
							<input type="radio" name="temps" value="non"> NON
						</div>
					</div>					
					<input type="submit" class="btn btn-primary btn-lg btn-block" style="background-color:#e84946; text-align:center;" value="Je cherche" />
				</form>	
			</div>
			
			<?php
				include('inc/boutoncote.php');
			?>
		</div>
	
		<div id="footer">
			<?php
				include('inc/footer.php');
			?>		
		</div>
	
	</div>
    </body>
</html>
