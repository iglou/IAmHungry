<?php
// Get Data	
$mail = strip_tags($_POST['mail']);
$nomRecette = strip_tags($_POST['nomRecette']);
$type = strip_tags($_POST['type']);
$difficulte = strip_tags($_POST['difficulte']);
$nbPersonnes = strip_tags($_POST['nbPersonnes']);
$tpsPrepa = strip_tags($_POST['tpsPrepa']);
$tpsCuisson = strip_tags($_POST['tpsCuisson']);
$ingredients = strip_tags($_POST['ingredients']);
$preparation = strip_tags($_POST['preparation']);
$conseils = strip_tags($_POST['conseils']);
$auteur = strip_tags($_POST['auteur']);
$photo = strip_tags($_POST['photo']);

// Send Message
mail( "berge.valentine@gmail.com", "Recette depuis I am hungry",
"Mail: $mail\n
nomRecette: $nomRecette\n
type: $type\n
nbPersonnes: $nbPersonnes\n
tpsPrepa: $tpsPrepa\n
tpsCuisson: $tpsCuisson\n
ingredients: $ingredients\n
preparation: $preparation\n
conseils: $conseils\n
auteur: $auteur\n
photo: $photo\n",

"From: Recette I am hungry! <berge.valentine@gmail.com>" );
?>