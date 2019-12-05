<html>
<body>
<?php
include('connection.php'); 

        $query="select * from categories";
		$res=mysqli_query($con,$query);
		while($row=mysqli_fetch_array($res))
		{
			echo "$row[contents]";
			echo " $id$row[id]";	
		}	
		?>	
</body>
</html>
