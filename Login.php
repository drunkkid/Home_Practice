
<?php
	session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<h1>
		Login Page <? php if(isset($_SESSION['password']))
		{
			echo $_SESSION['password'];}
		?>
	</h1>

		<form method="POST" action="logincheck.php">
			
			Username: <input type="text" name="uname" value=""> <br>
			Password: <input type="Password" name="password" value=""> <br>
			<input type="submit" name="submit" value="Submit">

		</form>

</body>
</html>