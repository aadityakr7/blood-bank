<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Forgot Password</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>

<body>
<?php
include_once("header.php.inc");
?>
<center><h3>-- Forgot Password --</h3></center>
<br /><br />
<b>Please enter your ID to get password</b>
<form method="get" action="fgotpassdb.php">
<input type="text" name="uid" id="uid" maxlength="15" size="27" autocomplete="off" />
<input type="submit" value="Get password" />
</form>
<?php
include_once("footer.php.inc");
?>
</body>
</html>