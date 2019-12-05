<?php
$con = mysql_connect("localhost","root","tiger","begs");
$selected = mysql_select_db("dbase_bags",$con) ;
$f=$_POST['first_name'];
$l=$_POST['last_name'];
$e=$_POST['email'];
$ph=$_POST['phone'];
$s=$_POST['state'];
$p=$_POST['pin'];
$a=$_POST['address'];
$sql="INSERT INTO `begs`.`data` (`fname`, `lname`, `email`, `number`, `state`, `pincode`, `address`) VALUES ('$f','$l','$e',$ph,'$s',$p,'$a')";
if(!mysql_query($sql))
{
echo "ERROR!";
}
else
{
echo "order complete";
}
mysql_close($con)
?> 
