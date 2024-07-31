<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
include ("unconnection.php");
 $body_create="CREATE TABLE product
 (Pro_id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 Pro_name VARCHAR(100) NOT NULL,
 Pro_price FLOAT(7,2)NOT NULL,
 QOH INT(5)NOT NULL)";
 $qry=mysql_query($con,$db_create);
 if($qry)
 {
 	echo "PRODUCT TABLE IS CREATED SUCCESSFULLY";
 }
 else
 {
 	echo "PRODUCT TABLE IS NOT CREATED.";
 }	
?> 
</body>
</html>