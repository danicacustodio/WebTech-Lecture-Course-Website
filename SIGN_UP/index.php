<!DOCTYPE html>

<html>

<head>
	<title>
		SIGN UP
	</title>
	
<link rel="stylesheet" type="text/css" href="index.css">

</head>

<body>

<form method="post" action="insert_query.php">

<h2>Registration Form</h2>
<table border="0" cellspacing="3" cellpadding="3" width="80%">
	<tr>
		<td><label>Username</label></td>
		<td><input type="text" name="uname" autofocus="autofocus"></td>
	</tr>
	<!-- start -->
	<tr>
		<td><label>Email Address</label></td>
		<td><input type="text" name="eadd" autofocus="autofocus"></td>
	</tr>

	<tr>
		<td><label>Password</label></td>
		<td><input type="password" name="pass" autofocus="autofocus"></td>
	</tr>
	<tr>
		<td colspan="2">
			<button class="submit_btn" type="submit" name="submit">Register</button>
			<button class="cancel_btn" type="reset" name="cancel">Cancel</button>
		</td>
	</tr>
</table>

</form>

</body>

</html>