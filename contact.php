<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contactez moi</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/jquery.form.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<script>
$(function(){
$('#contact').validate({
submitHandler: function(form) {
    $(form).ajaxSubmit({
    url: 'process.php',
    success: function() {
    $('#contact').hide();
    $('#contact-form').append("<p class='thanks'>Merci. J'y réponds dès que possible!</p><p><a href='index.php'>Retour à l'accueil</a></p>")
    }
    });
    }
});         
});
</script>
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

		<div id="contact-form">	

		<form class="form-horizontal contact" id="contact" method="post" action="">
			<fieldset>	
			<label for="name">Name</label>
			<input type="text" name="name" placeholder="Nom" title="Entre ton nom bel inconnu !" class="required">

			<label for="email">E-mail</label>
			<input type="email" name="email" placeholder="nom@domaine.com" title="Sans adresse mail, pas de réponse!" class="required email">

			<label for="website">Website</label>
			<input type="url" name="url" placeholder="http://moi.fr">

			<label for="message">Question/Comment</label>
			<textarea name="message"></textarea>

			<input type="submit" name="submit" class="button" id="submit" value="Send Message" />
			</fieldset>
		</form>
	</content>
</div><!-- /end #contact-form -->
</div>

<script src="js/modernizr-min.js"></script>
<script>
if (!Modernizr.input.placeholder){
      $('input[placeholder], textarea[placeholder]').placeholder();
}
</script>
</body>
</html>