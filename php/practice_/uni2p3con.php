<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
    
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="db1";
    $con=mysqli_connect($host,$user,$pass,$dbname);
    if($con)
    {
    	echo "connectiom established<br>";
    }	
    else
    {
    	echo "Connection not established<br>";
    }	
?>
</body>
</html>