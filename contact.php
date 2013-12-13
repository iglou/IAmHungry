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
	
		<div id="TitreOrganiser">
		  <h1> Contacter la webmaster</h1>
		</div>
		<br/>
		  
		<form class="form-horizontal" id="form-ajout-recette" novalidate>
			<div class="form-group">
				<label for="Nom" class="col-sm-2 control-label">Nom</label> 
				<div class="col-sm-10"><input type="text" class="form-control" name="name" placeholder="Name" required data-validation-required-message="Il faut que je sache qui tu es, bel inconnu !"/></div>
			</div>
			
			<div class="form-group">
			<label for="Email" class="col-sm-2 control-label">Email</label> 
				<div class="col-sm-10"><input type="text" class="form-control" name="email" placeholder="Email" required data-validation-required-message="Sans adresse, pas de réponse !" /></div>
			</div>
			
			<div class="form-group">
				<label for="Message" class="col-sm-2 control-label">Message</label> 
				<div class="col-sm-10">
					<textarea name="message" class="form-control" rows="3" placeholder="Message" id="message" required data-validation-required-message="Un ptit mot doux quand même !" minlength="5"  data-validation-minlength-message="Allez ! Au moins 5 lettres!" ></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="submit" class="col-sm-2 control-label"></label> 
				<div class="col-sm-10">
					<input name="submit" class="form-control" style="background-color:#e84946; font-size: 20px;" type=submit value="Send Message">
				</div>
			</div>
		</form>
	</content>
	
    <footer>
	  </br></br><a href="index.php" style="text-decoration:none;"><h6>Back</h6></a>
      <h6>Copyright Valentine Berge, 2013, tous droits réservés.</h6>
    </footer>
	
	</div>

    </body>
</html>
