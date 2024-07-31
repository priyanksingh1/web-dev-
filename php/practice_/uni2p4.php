<?php
 if
 	(isset($_GET["msg"]))
 {
 	echo $_GET["msg"];
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Untitled Document</title>
</head>
<body>
	<form action="product_query.php" method="post">
		<table>
		<caption><b>Add product</b>></caption>
		<tr>
			<td><label for="name">Productname</label></td>
			<td><input type="number" name="Pro_price" step="0.01"></td>
		</tr>	
        <tr>
			<td><label for="email">quality</label></td>
			<td><input type="number" name="QOH" ></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="Submit" value="Submit" >
			<input type="reset" name="reset" value="reset"></td>
		</tr>
</table>
</form>
</body>
</html>