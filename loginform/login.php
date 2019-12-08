<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h1 align="center" color="blue">Login Form</h1>
<hr color="red"/>
<form method="post" action="checklogin.php">
	<table border="2" align="center" class="table table-hover">
		<tr>
			<td align="right" width="50%">Username</td>
			<td><input type="text" name="t1"></td>
		</tr>

		<tr>
			<td align="right">Password</td>
			<td><input type="password" name="t2"></td>
		</tr>

		<tr>
			<td colspan="2" align="center"><input type="submit" value="Login"><input type="reset" value="Refresh" style="margin-left: 1%;"></td>
		</tr>
	</table>
</form>
</body>
</html>