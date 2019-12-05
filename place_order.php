<html>
<head>
	
</head>
<body>
<?php
include_once('header.php');
include('connection.php');
//<th height="40px" width="100px">Name</th>
$total=0;
$qry="SELECT * FROM `items`";
$result=mysqli_query($con,$qry);

/*<table border="5" CELLSPACING="3" CELLPADDING="3">
<tr><th height="40px" width="100px">Name</th>
<th height="40px" width="100px">Price</th>
*/

echo "<table border=7>
<tr><td align=center height=\"45px\"><b/>Name</td>
<td align=center width=\"80px\"><b/>Price</td>
</tr>";
echo "<CAPTION Align = top> <h3>CART</h3> </CAPTION>"; 

$row=mysqli_fetch_array($result);
if(!mysqli_query($con,$qry))
{
die('error hai bhaishaab'.mysql_error($con));
}

while($row=mysqli_fetch_array($result))
{
	$total=$total+$row['price'];
echo "	   <tr>
		   <form name=\"form1\" method=\"post\" action=\"remove_item.php\">
           <td align=center>$row[name]</td>
           <td align=center>$row[price]</td>
           <td align=center><input type=\"text\" name=\"uidgen\" value=$row[uid] >
           <input type=\"submit\" value=\"remove item\">
           </td></form></tr>";
           
}

echo "<tr><td align=center colspan=3><h3>Total&nbsp=$total</h3></td></tr></table>";
if($total!=0)
{
	echo "<a href=\"form.html\"><input type=\"button\" value =\"Place Order\"></a>";
}
?>
</body>
</html>

