<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
function string_cat()
{
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
    
    $fullname=$fname.$lname."</br>";
    echo $fullname;
}
function str_cat($fname,$lname)
{
	$flname=$fname.$lname;
	echo $flname;
}
string_cat();
str_cat($_POST["fname"],$_POST["lname"]);
?>
</body>
</html>