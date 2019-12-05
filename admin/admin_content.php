<link rel="stylesheet" href="../css/style.css" type="text/css" />
  <div id="main">
<?php
include('header.php');
include('../connection.php');
$query="select *from content";
  $res=mysqli_query($con,$query);?>
<table id="cat_table">
  <tr>
           <th width="82" scope="col">Serial No.</th>
            <th width="245" scope="col">Content</th>
  </tr>
  <?php
    while($row=mysqli_fetch_array($res))
  {
  $catid=$row['sno'];
  $catname=$row['contents'];?>
  <tr>
      <td><?php echo $catid?></td>
	  <td><?php echo $catname?></td>
	  <td><a href="show_cat_detail.php?catid=<?php echo $catid?>">Detail</a></td>
	  <td><a onclick="confirm('Are you sure to delete this data')" href="delete_cat.php?catid=<?php echo $catid?>">Delete</a></td>
	  <td><a href="update_category.php?catid=<?php echo $catid?>">Update</a></td>
  </tr>
  <?php
  }
  ?>
    <tr>
      <td colspan="5" scope="col" align="center"><input type="submit" name="insert" value="Insert" /></td>
      </tr>
</table>

</div>