<?php 

session_start();
?>

<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="homestyle.css">
  <title>Signup Form</title>
</head>
<body <div class="myDiv">

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
  <a href="contact.html">Contact Us</a>
  <a href="loginform.php">Sign up</a>
  <a href="logged_in.php">Sign in</a>
</div>
<br>
  <center><div class="btun"><a href="loginform.php">Sign up</a>
  </div>
<form method="POST" action="login.php">

<input type="text" name="name" placeholder="Full Name" title="Enter Full Name Here"></input>
<br>
<input type="text" name="email" placeholder="E-Mail ID"  title="Enter Email ID Here"></input>
<br>
<input type="text" maxlength="10" name="mob"  placeholder="Mobile number"  title="Enter Mobile number Here">
<br>
<input type="text" maxlength="80" name="address"  placeholder="Address"  title="Enter your address Here">
<br>
<input type="text" maxlength="6" name="gender"  placeholder="Gender"  title="Male or Female">
<br>
<input type="text" name="username" placeholder="Username"  title="Enter username Here"></input>
<br>
<input type="password" name="pass" placeholder="Password"  title="Enter Password Here"></input>
<br>
<button type="submit" name="submit" class="button">Submit</button>
</form>
<br>
<div class="btun">
<a href="logged_in.php">Log In</a>
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
  
