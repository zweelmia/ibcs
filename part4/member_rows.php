<?php
include("database.php");
if(isset($_REQUEST['action'])){
	session_destroy();
	header("location:index.php");
}

// if not logged in or unauthorized access
if(isset($_SESSION['user'])){
	header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>logout From</title>
</head>

<body>
You're Logged in as <?php echo @$_SESSION['user']; ?>&nbsp;<a href="member_rows.php?action=logout">Logout</a>
</body>
</html>