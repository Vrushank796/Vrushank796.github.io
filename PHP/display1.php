<html>
	<head>
		<title>Welcome</title>
	</head>
	<body>
		<h2>All Users</h2>
	</body>
</html>
<?php
	$c=mysqli_connect("root","password","mysql");
	$q2="SELECT * from `user data`";
	$v=mysqli_query($c,$q2);
	while($r=mysqli_fetch_assoc($v))
	{
		echo "<br>".$r["ID"]."  ".$r["Name"]."  ".$r["Address"]."  
                                    ".$r["Email"]."  ".$r["Mob_Number"];
	}
?>
