<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Testing Demo DB1</title>
</head>

<body>

<?php

//Database connectivity
$db=new MySQLi('localhost','root','','CIM');
if($db->connect_errno>0)
	echo 'Unable to connect to database'.$db->connect_error;
	
	$sql='select * from demo';
	$result=$db->query($sql);
	
	if(!$result)
	echo "Error in Query".$db->error;
	
	//$row=$result->fetch_assoc();


//Database insertion
if($_POST['upass']==$_POST['cupass'])
{
$temp=$_POST['upass'];
$encpass=md5($temp);
InsertDemo($_POST["uname"],$_POST["gen"],$_POST["uid"],$encpass,$_POST["blood"],$_POST["addr"],$_POST["email"],$_POST["mob"]);
}
else
echo "Password in both the fields must be matched";


//Database insertion definition	
	function InsertDemo($uname,$gen,$uid,$encpass,$blood,$addr,$email,$mob)
{
$sql="insert into demo( uname,gen,uid,upass,blood,addr,email,mob)
values('$uname','$gen','$uid','$encpass','$blood','$addr','$email','$mob')";
$db=new MySQLi('localhost','root','','CIM');
$res=$db->query($sql);
if($res==1)
echo "Record inserted";
else
echo '<b><span style="color:#FF0000">Error: </span></b>'.$db->error;
}
?>
</body>
</html>