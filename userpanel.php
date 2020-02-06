<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>User Panel</title>
    <link rel="stylesheet" href="css/style.css" media="all" />
</head>

<body>
<?php
include_once("header.php.inc");
?>
<?php
$user=$_SESSION['uname'];
$db1=new MySQLi('localhost','root','','cim');
if($db1->errno>0)
	echo $db1->error;
else
	{
		echo "<h1>Welcome User</h1><br>";
		echo "<h2>You are currently logged in as: <span style='color:red;'>".$user."</span></h2><br>";

		$qry1="select uname from demo where uid='$user'";
		$rs1=$db1->query($qry1);
		$row1=$rs1->fetch_assoc();
				
		$qry2="select gen from demo where uid='$user'";
		$rs2=$db1->query($qry2);
		$row2=$rs2->fetch_assoc();
				
		$qry3="select blood from demo where uid='$user'";
		$rs3=$db1->query($qry3);
		$row3=$rs3->fetch_assoc();
				
		$qry4="select addr from demo where uid='$user'";
		$rs4=$db1->query($qry4);
		$row4=$rs4->fetch_assoc();
				
		$qry5="select email from demo where uid='$user'";
		$rs5=$db1->query($qry5);
		$row5=$rs5->fetch_assoc();
				
		$qry6="select mob from demo where uid='$user'";
		$rs6=$db1->query($qry6);
		$row6=$rs6->fetch_assoc();
		//print_r($row1);}
		?>
        <script type="text/javascript">
		function OpenDiv(id)
		{
			for (i=1;i<=100;i++)
				{ /* so you can add up to 100 options on each page */
					var divname = 'div'+i;
					var divStyle = document.getElementById(divname).style;
					divStyle.display=(id==divname)?'block':'none';
				}
			return false;
		}
		</script>
<p><a style="cursor:pointer;" onclick="OpenDiv('div1')">Click to view to details</a></p>
	<div id="div1" style="display:none;">
        <table border="1px" cellpadding="8px" width="70%">
        	<tr>
        		<td><b>Name</b></td>
            	<td><b>Gender</b></td>
            	<td><b>Blood Group</b></td>
                <td><b>Address</b></td>
                <td><b>E-Mail</b></td>
                <td><b>Mobile</b></td>
            </tr>
            <tr>
            	<?php
            		echo "<td>".$row1['uname']."</td>";
                	echo "<td>".$row2['gen']."</td>";
                	echo "<td>".$row3['blood']."</td>";
                	echo "<td>".$row4['addr']."</td>";
                	echo "<td>".$row5['email']."</td>";
                	echo "<td>".$row6['mob']."</td>";
				?>
             </tr>
        </table>
        </div>
        <?php
	}
?>
<br /><a href="changepass.php">Change password</a>
<?php
include_once("footer.php.inc");
?>
</body>
</html>