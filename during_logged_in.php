<?php
session_start();



if(isset($_SESSION['success']))
{

	echo "<center><div>"."Hello user  ".$_SESSION['user']." </div><br>";
}




?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
<div>
<a href="logged_in.php">Log Out</a>
<br>
</div>

</body>
</html>