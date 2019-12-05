<?php
include('connection.php'); 
$filetype=array("jpg","JPG","jpeg","JPEG","gip","GIF","PNG","png");
$temp=explode(".",$_FILES["file"]["name"]);
$extention=end($temp);
if(in_array($extention,$filetype))
{
      move_uploaded_file($_FILES["file"]["tmp_name"],
	  "upload/". $_FILES["file"]["name"]);
$FileName=$_FILES["file"]["name"];
$name=$_POST['name'];
$content_id=$_POST['id'];
$price=$_POST['price'];
$query="insert into record(name,bagname,content_id,price,date,time) values('$FileName','$name',$content_id,$price,sysdate(),curtime())";
$res=mysqli_query($con,$query);
if($res)
{
echo 'Succsess!';?>
<a href="index.php">show data</a>
<?php
}
else
{
echo "Could not inserted!".mysqli_error();
}
}
else
{
echo"Invailid file type";
}
?>
