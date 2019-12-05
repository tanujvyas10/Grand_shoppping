<?php
$prodid=$_POST['prod_id'];
$name=$_POST['pnm'];
$des=$_POST['descri'];
$pri=$_POST['pri'];
$qty=$_POST['qty'];
$tp=$pri*$qty;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="style/mystyle.css" type="text/css">
<title>Insert title here</title>
</head>
<body style="text-align:center; background-color:pink; font-size: large; ">
<?php include_once 'header.inc.php';?>
<div id="spanel"><?php include_once 'spanel.inc.php';?></div>
<table align="center" width="80%" height="100%">
		<tr>
			<th>Product Id</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Sub Total</th>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<td><?php echo $prodid;?></td>
			<td><?php echo $name;?></td>
			<td><?php echo $des;?></td>
			<td><?php echo $pri;?></td>
			<td><FORM method="post" action="AddItemToCart.php"><INPUT TYPE="TEXT" NAME="qty" SIZE="4"></FORM></td>
			<td><?php echo $tp;?></td>
			<td>Update</td>
			<td>Remove</td>
		</tr>
		<tr>
		<td colspan=8><a href="search.php">Add More</a></td>
		</tr>
		</table><br>
<div id="content">
	</div>
		<div id="footer"><?php include_once 'footer.php';?></div>
</body>
</html>