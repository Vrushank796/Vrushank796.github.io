<html>
<body>
	<table width="200" border="1">
		<tr>
		<td width="85">Name</td>
		<td width="99">Password</td>
		<td width="99">Email</td>
	</tr>
<?php
 $file=fopen("sample.txt","rb");
 while(!feof($file)){
 $line=fgets($file);
 $parts=explode(':',$line);
 echo "<tr><td height='20'>$parts[0]</td><td>$parts[1]</td><td>$parts[2]</td></tr>";
}
fclose($file);

 ?>
</table>
</body>
</html>