<?php

include 'validate.php';
session_start();



if(isset($_POST['submit']))

{

	$pass = mysqli_real_escape_string($connect,$_POST['pass']);
$username = mysqli_real_escape_string($connect,$_POST['username']);
$_SESSION['user']=$username;

$log="SELECT * FROM `register` WHERE username = '$username' and password = '$pass';";

$logged=mysqli_query($connect,$log);



if(empty($pass) || empty($username))
{
	$SESSION['error']="Some or all fields are empty";
	header("Location: logged_in.php?login=empty");
	exit();
}

else
{
	if(mysqli_num_rows($logged) > 0)
{


	$_SESSION['success']="You are logged in";
	header("Location: homepage.html?login=true");
		session_regenerate_id();
	
	exit();

	
}



else{

	$_SESSION['error']="No user exists please sign up first or You entered the wrong username and password combination";
	header("Location: logged_in.php?login=userfalse");
	exit();

}
}
}
else
{
$_SESSION['error']="Manually loaded or refreshed";
	header("Location: logged_in.php?login=false");
	exit();

}


?>