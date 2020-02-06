<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<script>alert('Use your ID as your password')</script>
<?php
$uid=$_GET['uid'];
$newpass=md5($uid);
$db=new MySQLi('localhost','root','','cim');
if($db->errno>0)
	echo $db->error;
else
	{
		$passqry="UPDATE demo SET upass='$newpass' WHERE uid='$uid';";
		$passqrydb=$db->query($passqry);
		//$pass=$passqrydb->fetch_assoc();
		//print_r($pass);
	}
?>
<a href="home.php">Go to home</a>
</body>
</html>