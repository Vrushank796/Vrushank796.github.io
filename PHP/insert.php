<?php		
	$n=$_GET["name"];
	$a=$_GET["addr"];
	$e=$_GET["email"];
	$m=$_GET["mobno"];
	$c = mysqli_connect("localhost","root","","loginsystem");
	$q1 = "INSERT INTO `user data` (`Name`,`Address`,`Email`,
	 `Mob_Number`) VALUES 
                      ('".$n."', '".$a."', '".$e."', '".$m."')";
	$result = mysqli_query($c,$q1);
	if ( false===$result ) 
	{
		echo"Error" . mysqli_error($c);
	}
	header ("location:display.php");
	mysqli_close($c);
?>
