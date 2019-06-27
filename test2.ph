<?php
echo get_current_user();
$conn = new mysqli("localhost","epasql","123456");

if($conn->conn_error)
{
	die("Connect failed:".$conn->conn_error);
}
echo "Connected successfully!";

$sql="show databases";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
	print_r($row);
}

$file = fopen("/var/www/html/wordpress/test.txt","w") or die("Can`t open file!");
fwrite($file,"test");
fclose($file);
#phpinfo();
?>
