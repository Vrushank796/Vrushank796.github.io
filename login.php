<?php
session_start();

include 'validate.php';
if(isset($_POST['submit']))
{


$Name = mysqli_real_escape_string($connect,$_POST['name']);
$Email = mysqli_real_escape_string($connect,$_POST['email']);
$Mob = mysqli_real_escape_string($connect,$_POST['mob']);
$Pass = mysqli_real_escape_string($connect,$_POST['pass']);
$Username = mysqli_real_escape_string($connect,$_POST['username']);
$Addr = mysqli_real_escape_string($connect,$_POST['address']);
$Gender = mysqli_real_escape_string($connect,$_POST['gender']);
$check="SELECT * FROM register WHERE username = '$Username' or email='$Email' or mob='$Mob' or password = '$Pass;";
			$checked=mysqli_query($connect,$check);





if(empty($Name) || empty($Email) || empty($Mob) || empty($Pass) || empty($Username) || empty($Addr) || empty($Gender))
{
	$_SESSION['error']="Some or all fields are empty";
	
	header("Location: loginform.php?login=empty");
	
	exit();
}
else
{
if(!preg_match("/^[a-zA-Z ]{2,50}$/", $Name) && !filter_var($Email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[0]?[789]\d{9}$/", $Mob)){

	$_SESSION['error']="Name email and mobile number are invalid";
	header("Location: loginform.php?login=err_name&err_email&err_mobile");
	exit();

}

else
{
	if(!preg_match("/^[a-zA-Z ]{2,50}$/", $Name) && !filter_var($Email,FILTER_VALIDATE_EMAIL))
	{
		$_SESSION['error']="Name  and email are invalid";
	header("Location: loginform.php?login=err_name&err_email");
	exit();				

	}
	else
	{
		if(!preg_match("/^[a-zA-Z ]{2,50}$/", $Name) && !preg_match("/^[0]?[789]\d{9}$/", $Mob))
		{
			$_SESSION['error']="Name  and mobile number are invalid";
	header("Location: loginform.php?login=err_name&err_mobile");
	exit();				
		}
		else
		{
			if(!filter_var($Email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[0]?[789]\d{9}$/", $Mob))
			{
					$_SESSION['error']="Email  and mobile number are invalid";
	header("Location: loginform.php?login=err_email&err_mobile");
	exit();				
			}

	
if(!preg_match("/^[a-zA-Z ]{2,50}$/", $Name))
	{

		$_SESSION['error']="Name is invalid";
	header("Location: loginform.php?login=err_name");		
	exit();

	}


	else
	{

		if(!filter_var($Email,FILTER_VALIDATE_EMAIL))
		{

			$_SESSION['error']="Email is invalid";
	header("Location: loginform.php?login=err_email");		
	exit();



		}

		else
		{
			if(!preg_match("/^[0]?[789]\d{9}$/", $Mob))
			{
				$_SESSION['error']="Mobile number is invalid";
	header("Location: loginform.php?login=err_mobile");		
	exit();				
						}

					




					else{


if(mysqli_num_rows($checked) > 0)
{

	$_SESSION['error']="User already exists";
	header("Location: loginform.php?login=usertaken");
	exit();
}
}
}
}
}
}
}
}




$insert = "INSERT INTO register(name,email,username,mob,password,gender,address) VALUES('$Name','$Email','$Username','$Mob','$Pass','$Gender','$Addr');";

mysqli_query($connect,$insert);

$_SESSION['success']="You are logged in";
header("Location: homepage.html?login=true");
exit();
}



else
{
	$_SESSION['error']="Manually loaded or refreshed";
	header("Location: loginform.php?login=false");
	exit();
}
?>




