<?php
session_start();
if (isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
	<h1>welocme to our site!!!....</h1>
	<?= "{$_SESSION['username']}" ?>	
	
</body>
</html>
<?php
}
else
{
	header('location:index.php');
}
?>