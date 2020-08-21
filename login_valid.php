<?php
	session_start();
	require('connect.php');

	if ( isset($_POST['username']) and isset($_POST['password']) )
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];

		$query = "SELECT * FROM `login_user` WHERE username = '$user' and password = '$pass' ";

		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);

		if ($count == 1)
		{
			$_SESSION['username'] = $user;
			header('location:success.php');
			$sql = "insert into count (username) values ('$user') ";
			mysqli_query($connection, $sql);
		}
		else
		{
			header('location:index.php');
		}



	}
