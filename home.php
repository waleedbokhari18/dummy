<?php
session_start();
if(!isset($_SESSION['username']))
header('location:http://localhost/Final/Login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
</head>
<body>
<h2>hello <?php echo $_SESSION['username']; ?></h2>
<a href="logout.php" >logout</a>
</body>
</html>