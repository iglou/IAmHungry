<html>
<head><title>Stock d'images</title></head>
<body>
<?php
	include ("connexion.php");
	$req = "SELECT NomImg, IdImg FROM photo ORDER BY NomImg";
	$ret = mysql_query ($req) or die (mysql_error ());
	while ( $col = mysql_fetch_row ($ret) )
	{
	echo "<a href=\"apercu.php?id=".$col[1].
	"\">".$col[0]."</a><br />";
	}
?>
</body>
</html>