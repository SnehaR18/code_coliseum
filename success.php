<?php
session_start();
if (isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html>
<head>
	
				<link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="style.css"> 		
	<title>LOGIN SUCCESS</title>
</head>
<body>
	<div class="contain">
	<h1 id="display-login">Welcome
	<?= "{$_SESSION['username']}" ?></h1>
</div>
</body>
</html>
<?php
}
else
{
	header('location:index.php');
}
?>