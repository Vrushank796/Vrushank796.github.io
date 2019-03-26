<?php 

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login Form</title>
</head>
<body 
<div class="myDiv">
    <div class="bg"></div></div>


	 <div class="navbar">
  <a href="homepage.html">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn">Train 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="bt.php">Book ticket</a>
      <a href="#">Cancel ticket</a>
      <a href="#">PNR Enquiry</a>
    </div>
  </div> 
  <a href="#">Seat Availability</a>
  <a href="#">Fare Enquiry</a>
  <a href="trainschedule.php">Train Schedule</a>
  <a href="contact.php">Contact Us</a>
  <a href="loginform.php">Sign up</a>
  <a href="logged_in.php">Sign in</a>
</div>
<br>
	<center><div class="btun"> <a href="loginform.php">Sign up</a></div>
<form method="POST" action="logged_in_validate.php">

<input type="text" name="username" placeholder="Username"></input>
<br>
<input type="password" name="pass" placeholder="Password"></input>
<br>
<button type="submit" name="submit" class="button">Submit</button>
</form>
<br>
<div class="btun">
<a href="logged_in.php">Log In</a><br><br>


	</div>

<?php

if(isset($_SESSION['error'])){

echo $_SESSION['error'];
}


if(isset($_SESSION['success']))
	{

echo $_SESSION['success'];
}


?>

</center>
	</body>
	</html>
<?php


unset($_SESSION['error']);
unset($_SESSION['success']);

?>
	