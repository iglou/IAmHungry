<!DOCTYPE html>
<html lang="fr">

	<head>
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
		  <h1> Organiser un repas presque parfait</h1>
		</div>
		<br/>
		  
		<form method="post" action="organiser.php" id="formlaireOrganiser">	  
			<fieldset>
				Choisir une date
				<select name="day">
				<option value="1">01</option>
				<option value="2">02</option>
				<option value="3">03</option>
				<option value="4">04</option>
				<option value="5">05</option>
				<option value="6">06</option>
				<option value="7">07</option>
				<option value="8">08</option>
				<option value="9">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				</select> 
				
				<select name="month">
				<option value=""></option>
				<option value="1">Janvier</option>
				<option value="2">Février</option>
				<option value="3">Mars</option>
				<option value="4">Avril</option>
				<option value="5">Mai</option>
				<option value="6">Juin</option>
				<option value="7">Juillet</option>
				<option value="8">Aout</option>
				<option value="9">Septembre</option>
				<option value="10">Octobre</option>
				<option value="11">Novembre</option>
				<option value="12">Décembre</option>
				</select>
				
				<select name="year">
				<option value=""></option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				</select>                  
			  
			  
			  
				<input type="radio" name="invitation" value=true> Je reçois
				<input type="radio" name="invitation" value=false> Je suis reçu
				Type de repas <select name="type">
					<option value="diner">Diner</option>
					<option value="apero_dinatoire">Apéro dinatoire</option>
					<option value="brunch">Brunch</option>
					<option value="dejeuner">Déjeuner</option>
					<option value="pic_nic">Pic nic</option>
					<option value="autre">Autre</option>
			  </select>
			  </br>Titre de mon repas <input type="text" name="titre">
			  </br>Un commentaire <textarea name="commentaire" rows=4 cols=40 wrap=virtual></textarea>
			  
			  <!--</br>Nombre d'invités : <input type="nombre" name="nbInvite" placeholder="4" required -webkit-border-radius="10px">
			  
			  <h3>Mes invités : </h3>	  
			  Ajouter un nouvel invité à ma liste : <input type="text" name="invite" placeholder="Nom de l'invité"  -webkit-border-radius="10px">
			  -->
			  <a title="Créer mon repas" href="#" onclick="submit(); return false;"><span>Créer ce dîner</span></a>
			</fieldset>
		</form>
	</content>
	
    <footer>
	  </br></br><a href="index.php" style="text-decoration:none;"><h6>Back</h6></a>
      <h6>Copyright Valentine Berge, 2013, tous droits réservés.</h6>
    </footer>
	
	</div>

    </body>
</html>
