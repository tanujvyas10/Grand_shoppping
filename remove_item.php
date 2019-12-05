<?php
include_once('header.php');
include('connection.php');
$uid1=$_POST['uidgen'];
echo $uid1;
$qry1="delete from items where uid = $uid1";
echo $qry1;
$result1=mysqli_query($con,$qry1);
echo "<pre>
<h2><a href=\"./index.php\"> Continue Shoping</a>               <a href=\"./place_order.php\">Cart </a></h2>
</center></pre>";
if(!mysqli_query($con,$qry))
{
die('error hai bhaishaab'.mysql_error($con));
}
?>
