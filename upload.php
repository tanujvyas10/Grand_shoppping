<head>
    <link rel="Stylesheet" href ="css/shopping.css" type ="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<?php
include('header.php');
include('connection.php');
?>
<!--<link rel="stylesheet" href="css/shopping.css" type="text/css" /> -->

<div id="main">

    <form action="insert.php" method="post" enctype="multipart/form-data">
    <table border="0" id="utable">
	<tr>
	<td class="utd">Select an Image</td>
        <td class="utd"><input type="file" name="file" id="file" value="Video"></td>
		</tr>
		<tr>
		<td class="utd">Name-</td>	
		<td class="utd"><input type="text" name="name" id="name" size="30"></td>
		</tr>
        <tr>
		<td class="utd">Description-</td>	
		<td class="utd"><textarea name="disc" id="disc" ROWS=2 COLS=29 ></textarea></td>
		</tr>
		<tr>
		<td class="utd">Price-</td>	
		<td class="utd"><input type="text" name="price" id="name" size="10"></td>
		</tr>
		<tr>
		<td class="utd">categories-</td>
		<td class="utd">
        <select name="id">
        <?php
        $query="select * from categories";
		$res=mysqli_query($con,$query);
		while($row=mysqli_fetch_array($res))
		{
			$cat=$row[contents];
			$id=$row[id];
		?>
       <option value="<?php echo $id;?>"><?php echo $cat;?></option> 
        <?php
        }
		?>
        </select>
        </td>
		</tr>
		<tr>
		<td class="utd" colspan="2">
       <input id="ubutton" type="submit" value="Upload file">
       </td>
	   </tr>
	   </table>
    </form>
<p>
 <a href="index.php">See all files</a>
</p>
</div>
