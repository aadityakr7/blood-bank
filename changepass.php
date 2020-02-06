<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Change Password</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>

<body>
<?php
include_once("header.php.inc");
?>
<center><h3>-- Change Password --</h3></center>
<br /><br />
<form method="post" action="changepassdb.php">
<table cellpadding="3px">
<tr><td>Enter your ID: </td><td><input type="text" name="uid" id="uid" maxlength="15" required="required" autocomplete="off" /></td></tr>
<tr><td>Enter current password: </td><td><input type="text" name="upass" maxlength="15" required="required" autocomplete="off" /></td></tr>
<tr><td>Enter new password: </td><td><input type="password" name="unewpass" id="upass" maxlength="15" required="required" /></td></tr>
<tr><td>Re-enter new password: </td><td><input type="password" name="cunewpass" id="cupass" maxlength="15" required="required" /></td></tr>
<tr><td colspan="2"><input type="submit" value="Change password" /></td></tr>
</table>
</form>
<?php
include_once("footer.php.inc");
?>
</body>
</html>