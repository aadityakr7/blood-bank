<div class="header">
<dl><h1 align="center"><a style="text-decoration:none;" href="home.php">The Blood Bank</a></h1></dl>
<dl style="text-align:right;">
<?php
if(isset($_SESSION['uname']))
{
echo "Logged in as: ".$_SESSION['uname']."<br>";
?>
<a href="logout.php">Logout</a>
<?php
}
else
echo "Guest";
?>
</dl>
</div>