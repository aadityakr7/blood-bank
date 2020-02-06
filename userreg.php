<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>User Registration</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>

<body>
<?php
include_once("header.php.inc");
if(isset($_SESSION['uname']))
echo "<h4 style='color:#FF0000;'>You are currently logged in, please logout to proceed with registration</h4>";
else
{
?>
<center><h3>-- Fill up registration form --</h2></center>
<br /><br />
<form method="post" action="userregdb.php">
<table cellpadding="3px">
<tr><td>Name: </td><td><input type="text" name="uname" id="uname" maxlength="20" size="27" required="required" /></td></tr>
<tr><td>Gender: </td><td><input type="radio" name="gen" id="gen" value="Male" required="required" />Male
							<input type="radio" name="gen" id="gen" value="Female" required="required" />Female</td></tr>
<tr><td>User ID: </td><td><input type="text" name="uid" id="uid" maxlength="15" size="27" required="required" /></td></tr>
<tr><td>Password: </td><td><input type="password" name="upass" id="upass" maxlength="15" size="27" required="required" /></td></tr>
<tr><td>Confirm Password: </td><td><input type="password" name="cupass" id="cupass" maxlength="15" size="27" required="required" /></td></tr>
<tr><td>Blood Group: </td><td><select required name="blood">
								<option value="">please select</option>
								<option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                                </select>
<tr><td>Address: </td><td><textarea name="addr" id="addr" maxlength="100" required="required" placeholder="H.No., Street, City, State"></textarea></td></tr>
<tr><td>E-Mail: </td><td><input type="email" name="email" id="email" maxlength="50" size="27" required="required" /></td></tr>
<tr><td>Mobile: </td><td><input type="tel" name="mob" id="mob" maxlength="10" size="27" required="required" placeholder="without country code" /></td></tr>
<tr><td align="right" colspan="2"><input type="submit" value="Submit" /></td></tr>
</table>
</form>
<br />
<a href="login.php">Already registered? click here</a>
<?php
}
include_once("footer.php.inc");
?>
</body>
</html>