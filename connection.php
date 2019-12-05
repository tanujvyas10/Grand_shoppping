<?php
$con=mysqli_connect("localhost","root","tiger","dbase_bags");
if(mysqli_connect_errno())
{
echo "Failed to connect to MySQL Databse:" . mysqli_connect_error();
}
if(!$con)
{
die('vik: could not connected'.mysqli_error());
}
?>
