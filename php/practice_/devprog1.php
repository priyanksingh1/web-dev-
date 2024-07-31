<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>untitled documents</title>
</head>

<body>
<form action="prg1_submit.php" method="post">
<!__we can set method get also-->
	<table>
		<tr>
			<td><label for="name">Name</label></td>
			<td><input type="text" name="fullname"></td>
		</tr>
		<tr>
			<td><label for="email">Email</label></td>
			<td><input type="email" name="email"></td>
		</tr>	
		<tr>
			<td colspan="2"><input type="submit" name="submit"value="submit">
			<input type="reset" name="reset" value="reset"></td>	
		</tr>
	</table>
</form>	
</body>
</html>