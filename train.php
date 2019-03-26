<?php 

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
		<style>
	table {

  border-collapse: collapse;
}

table, th, td {
	text-align: center;
	width:700px;
 margin-left:22%; 
 margin-right:30%;
	overflow:hidden;
	color:white;
   opacity: .9;
  background-color: #3399ff;
  border-radius: 15px;
 
}
</style>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="homestyle.css">
	<title>Book ticket</title>
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
  <a href="trainschedule.php">Train Schedule</a>
  <a href="contact.html">Contact Us</a>
  <a href="loginform.php">Sign up</a>
  <a href="logged_in.php">Sign in</a>
</div>
<br>


<?php
$From = mysqli_real_escape_string($conn,$_POST['from']);
$To = mysqli_real_escape_string($conn,$_POST['to']);
$sql = "SELECT distinct d1.*
FROM  schedule d1 
INNER JOIN schedule d2 ON d2.trainno = d1.trainno
WHERE d1.stnname = '".$From."' AND d2.stnname = '".$To."'  AND d1.distance < d2.distance";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table>
	<tr>
	<th>Train No    </th>
	<th>Train Name  </th>
	<th>Station code</th>
	<th>Station Name</th>
	<th>Arrives&nbsp&nbsp</th>
	<th>Departs&nbsp&nbsp</th>
	<th>Halt time&nbsp</th>
	</tr>";
    while($row = mysqli_fetch_assoc($result)) 
    {
       echo "<tr>";
    echo "<td>" . $row['trainno'] . "</td>";
    echo "<td>" . $row['trainname'] . "</td>";
    echo "<td>" . $row['stncode'] . "</td>";
    echo "<td>" . $row['stnname'] . "</td>";
    echo "<td>" . $row['arrives'] . "</td>";
    echo "<td>" . $row['departs'] . "</td>";
    echo "<td>" . $row['halttime'] . "</td>";
    echo "<td>";
    echo "<form name=\"Availability & Fare\" action=\"payment.php\" method=\"post\">";
    echo "<input type=\"submit\" class=\"btn\" value=\"Availability & fare\">";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<script>alert('Please select source and destination and date  again');window.location='bt.php';</script>";
    exit;
}

mysqli_close($conn);
?> 

</body>
</html>

    