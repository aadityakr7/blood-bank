<?php
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Welcome home</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<?php
include_once("header.php.inc");
if(!isset($_SESSION['uname']))
{
?>
<div class="sidebar">
<form method="post" action="logindb.php">
<ul class="nav">
<li>
<table width=100%>
<tr><td align="right">User ID: </td><td align="right"><input type="text" name="uid" id="uid" maxlength="15" required="required" autocomplete="off" /></td></tr>
<tr><td align="right">Password: </td><td align="right"><input type="password" name="upass" id="upass" maxlength="15" required="required" /></td></tr>
<tr><td align="right" colspan="2"><input type="submit" value="login" /></td></tr>
</table></li>
</form>
<li><a href="fgotpass.php">Forgot password?</a></li>
<li><a href="userreg.php">Not a member yet? register here</a></li>
</ul>
</div>
<?php
}
?>
<div class="content">
<h3>Why Donate?</h3>
<p align="center"><img src="images/donor_rino_1.png" alt="donor" /></p>
<p>
  I am a blood donor that won't give up. I tried to give blood when i was 18, but was declined in both my junior and senior high school years. Once i got to college, i was deferred again. I was finally able to give blood and have given twice. I love donating blood. The thought of being able to help save three people's lives every time i go makes me feel like a better person.</p>
  <br />
  <p style="border-bottom:solid #333 2px;"><br /></p>
<h3>Eligiblity Requirements</h3>
<p>Travel to Mexico? Tattoos? Diabetes? The sniffles?</p>
<p>Are you eligible to give blood?</p>
<br />
<a href="eligreq.php">Browse all eligibility requirements</a>
<p><img src="images/checkedit.png" /></p>
<br />
<p><img src="images/oj_and_cookies2.png" /></p>
<br />
	<p style="border-bottom:solid #333 2px;"><br /></p>
<h3>Benefits of donating</h3>
	<p>* It feels great to donate!</p>
    <p>* You get free juice and cookies.</p>
    <p>* It's something you can spare - most people have blood to spare... yet, there is still enough to go around.</p>
    <p>* You will help ensure blood is on the shelf when needed - most people don't think they will ever need blood, but many do.</p>
    <p>* You will be someone's hero - in fact, you could help save more than one life with just one donation.</p>
</div>
<?php
include_once("footer.php.inc");
?>
</body>
</html>