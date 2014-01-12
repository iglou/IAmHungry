<?php
// Get Data	
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$url = strip_tags($_POST['url']);
$message = strip_tags($_POST['message']);

// Send Message
mail( "berge.valentine@gmail.com", "Contact I am hungry",
"Name: $name\nEmail: $email\nWebsite: $url\nMessage: $message\n",
"From: I am hungry! <berge.valentine@gmail.com>" );
?>