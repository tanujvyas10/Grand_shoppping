<head>
</head>
<body>
<?php
include_once('header.php');
include('connection.php');
session_start();
$uid=$_POST[uid];
$name=$_POST[name];
$price=$_POST[price];
//print $_POST[uid];
//echo "<h3>Heloo carts---".$uid1;

$q1="insert into items(uid,name,price) values('$uid','$name','$price')";
if(!mysqli_query($con,$q1))
{
die('error hai bhai'.mysql_error($con));
}
?>
<h3>Item--> <?php echo "$_POST[name] , Price $_POST[price] " ?>added to Cart </h3>
<pre>
<h2>	<a href="./index.php">Continue Shoping</a>               <a href="./place_order.php">Place Order </a></h2>
</center></pre>

<h3><br>Helo normal carts</h3>
</body>
