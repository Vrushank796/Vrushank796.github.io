<?php 

session_start();
?>

<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="homestyle.css">
  <title>Train Schedule</title>
  <style>
   body
   {
    color:#3399FF;
    font-size:25px;
    text-align:center;
     }  
    input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}
  </style>
 </head> 
 <body <div class="myDiv">
    <div class="bg1"></div></div> 
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
  <a href="#">Train Schedule</a>
  <a href="contact.html">Contact Us</a>
  <a href="loginform.php">Sign up</a>
  <a href="logged_in.php">Sign in</a>
</div>
<br>
  <center>
<form method="POST" action="train1.php">
<div class="autocomplete" style="width:300px;">
  <h2><font color="blue">Train schedule</font></h2>
<input type="text" name="trainnum" maxlength="5" id="trainnum" placeholder="Enter Train Number"  title="Enter Train no"></input>
<br>
</div>
<br>
<button type="submit" name="submit" class="button">Submit</button>

</form>
<br>