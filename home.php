<?php
	
		session_start();
		if(!isset($_SESSION['uname']))
		{
			header("location:Login.php");
		}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1> Welcome Home <?=$_SESSION['uname']?> </h1>
	<a href="Logout.php">Logout </a>

</body>
</html>