<?php
include 'validate.php';

$check="SELECT * FROM register;";
			$checked=mysqli_query($connect,$check);



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border='1px' cellpadding=10 style='border-collapse:collapse;'>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Username</th>
<th>Mobile</th>
<?php
$lastid = mysql_insert_id();
echo "last id : ".$lastid;
while($rows=mysqli_fetch_assoc($checked))
{

 ?>
<tr>
<td><?php echo $rows['id']."\n"; ?> </td>
<td><?php echo $rows['name']."\n"; ?> </td>
<td><?php echo $rows['email']."\n"; ?> </td>
<td><?php echo $rows['password']."\n"; ?> </td>
<td><?php echo $rows['username']."\n"; ?> </td>
<td><?php echo $rows['mobile']."\n"; ?> </td>

</tr>

<?php
}
?>



</body>
</html>
	



</table>


	



