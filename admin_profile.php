<?php
session_start();
if(empty($_SESSION['is_admin_loggedin']))
{
	header('Location: admin_login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hi Admin</title>
</head>
<body>
<h1>Welcome Admin</h1>

<?php
//print_r($_SESSION['is_admin_loggedin']);

?>

<a href="admin_logout.php">Log out</a>
</body>
</html>