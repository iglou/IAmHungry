 <!DOCTYPE html>
<html>
<head>
  <?php
    include 'inc/head.php';
    include 'inc/query.php';
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
				<?php
					getRecetteFromTypeEve($_GET["eve"], $_GET["id"]);
				?>
			</div>
			
			<?php
				include('inc/boutoncote.php');
			?>
			
			<div id="footer">
				<a href="evenement.php?eve=<?php getIdEve($_GET["eve"]);?>" style="text-decoration:none;"><h6>Retour aux recettes de <?php getNameEve($_GET["eve"]);?></h6></a>
				<?php
					include('inc/footer.php');
				?>
			</div>
		</div>

	</body>
</html>