<?php

	session_start();

	if(isset($_REQUEST['submit']))
	{
		$username=$_REQUEST['uname'];
		$password=$_REQUEST['password'];

		if(empty(trim($username))||empty(trim($password)))
		{
			echo "Null Value Found";
		}

		else
		{
			$file=fopen('userauth.txt','r');
			$user=fread($file,filesize('userauth.txt'));
			$data=explode('|',$user);

			if(trim($data[0])==$username && trim($data[1])==$password)
			{
				$_SESSION['uname']=$username;
				$_SESSION['password']=$password;

				header("location:home.php");
			}

			else
			{
				echo "Invalid Credentials";
			}
		}
	}

	else
	{
		//echo "Invalid";
		header("location:login.php");
	}


?>