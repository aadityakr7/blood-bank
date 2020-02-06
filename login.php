<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<?php
include_once("header.php.inc");
?>
<center><h3>-- Please enter login details --</h3></center>
<br /><br />
<form method="post" action="logindb.php">
<table cellpadding="3px">
<tr><td>User ID: </td><td><input type="text" name="uid" id="uid" maxlength="15" required="required" /></td></tr>
<tr><td>Password: </td><td><input type="password" name="upass" id="upass" maxlength="15" required="required" /></td></tr>
<tr><td align="right" colspan="2"><input type="submit" value="login" /></td></tr>
</table>
</form>
<br />
<a href="fgotpass.php">Forgot password?</a><br />
<a href="userreg.php">Not a member yet? register here</a>
<?php
include_once("footer.php.inc");
?>
</body>
</html>