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
$encupass=md5($upass);
$unewpass=$_POST['unewpass'];
$cunewpass=$_POST['cunewpass'];
{
$db=new MySQLi('localhost','root','','cim');
if($db->connect_errno>0)
	echo $db->error;
		else
			{
				$qry1="SELECT upass FROM demo where uid='$uid';";
				$res1=$db->query($qry1);
				$row1=$res1->fetch_assoc();
				$dbpass=$row1['upass'];
				if($encupass==$dbpass)
				{
					if($unewpass==$cunewpass)
					{
						$encunewpass=md5($unewpass);
						$qry="UPDATE demo set upass='$encunewpass' WHERE uid='$uid';";
						$res=$db->query($qry);
						echo "Password changed successfully";
					}
					else
						echo "<script>alert('Password in both the fields must be matched')</script>";
				}
				else
					echo "<script>alert('You have entered your password incorrectly')</script>";
				}
}
?>
<br /><a href="home.php">Go to home</a>
</body>
</html>