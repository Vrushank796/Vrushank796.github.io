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


	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<title></title>
</head>
<body>


<center>
<pre id="demo3"> Miner Status :                                               Offline</pre>
<a href="logged_out.php">Log Out</a>
<p id="demo2"> Hash Rate :</p>
<p id="demo4"></p>
<p id="demo5"> Total balance :</p>

<p id="demo"></p>
<form action="wallet.php" method="POST"></form>
<button   onclick="myTimer = setInterval(myCounter, 100)">Start Miner</button><br><br>
<button onclick="clearInterval(myTimer)">Pause Miner</button><br>
<br><button><a href="wallet.php" style="text-decoration: none;" target="_blank">Wallet</a></button>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>

var bal=0

function myCounter() {
	document.getElementById('demo3').innerHTML=" Miner Status :                                               Online";	
  document.getElementById("demo").innerHTML = Math.floor(Math.random()*6)+30;
bal=bal+0.5;
  document.getElementById("demo4").innerHTML =bal.toFixed(3);
  
if(bal%10==0){

   var date = bal;
   
        $.ajax({
            url: './wallet.php', 
            type: "POST",
            dataType:'text', 
            data: {'date': date},
            success: function(data){
                console.log("successfully");
            }
        })
    }


}

</script>
</center>
</body>
</html>

