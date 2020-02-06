<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
$uid=$_POST['uid'];
$upass=$_POST['upass'];
$encpass=md5($upass);

$db=new MySQLi('localhost','root','','cim');
if($db->errno>0)
	echo $db->error;
else
	{
		$qry="select upass from demo where uid='$uid';";
		$rs=$db->query($qry);
		$row=$rs->fetch_assoc();
		//print_r($row);
		$dbencpass=$row['upass'];
		if($encpass==$dbencpass)
		{
			$_SESSION['uname']=$uid;	
			header("Location:userpanel.php");
		}
		else
			echo "<script>alert('Invalid username/password');</script>";
	}
?>
<a href="home.php">Go to home</a>
</body>
</html>