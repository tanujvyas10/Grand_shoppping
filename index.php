<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

 <?php
 session_start();
include_once('header.php');
 ?>
<head>
    <title>My Shopping Site</title>
    <link rel="Stylesheet" href ="css/shopping.css" type ="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>    
  
  
    
</head>
     <body>
        <center>     
    
   
    <div   class ="main" >
             
           <div  id  ="slide">
              <div id="slideshow">
	            <div id="container">
	              <div id="categories">
		              <div style="position:relative;" >
		               	<div id="slider" class="slider" >
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height: 100%; width:100%">
        <!-- Indicators -->
        <ol class="carousel-indicators" style="height: 100%">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/img1.jpg" height="100%" width="100%" alt="slider">
              
            </div>
           <div class="item">
                <img src="img/img2.jpg" height="100%" width="100%" alt="slider">
                <div class="carousel-caption">

                </div>
            </div>
             <div class="item">
                <img src="img/img3.jpg" height="100%" width="100%" alt="slider">
                <div class="carousel-caption">
				<div class="item">
                <img src="img/img4.jpg" height="100%" width="100%" alt="slider">
                <div class="carousel-caption">
		       <div class="item">
                <img src="img/img5.jpg" height="100%" width="100%" alt="slider">
                <div class="carousel-caption">
                    ...
                </div>
             </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
             </div>

            </div>

			      </div>
		       </div>
	         </div>
           </div>
	     </div>
       </div>
         
    
     <div   class ="main" style ="height :600px;margin-top:150px;">
                   
             
              <div class ="border-box best_offers" style ="width :200px ; height:600px">
                 <div style=" background-color:#630; color:#FFF; height:40px"><font  size="5px"> CATEGORIES</font></div>
                 <table><td colspan="2"><img src="img/cart.png" /></td></tr>
            <?php            
			include('connection.php');
			$query="select * from categories";
			$res=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($res))
			{
			$data=$row['contents'];
			?>
			<tr>
            <td><img src="img/c_arrow.gif"/></td>
            <td id="categories"><a href="#"><?php print $data;?></a></td>
			</tr>
            <?php
            }
			?>
            </table>
             </div>
              <form name="main_form" action="cart.php">
              <div class ="best_offers border-box " style ="margin-left :20px">
              <img src="img/beg2.jpg" height="83%" width="100%">
              <div><p>bag name</p></div>
              <div><button class="col-md-5 col-md-push-3 btn btn-primary" type="submit">Buy</button></div>
              </div>
              </form>
              
              
                 <div class ="best_offers border-box " style ="margin-left :20px">
               <img src="img/beg3.jpg" height="83%" width="100%">
               <div><p>bag name</p></div>
               <div><button class="col-md-5 col-md-push-3 btn btn-primary" type="submit">Buy</button></div>
               </div>
            
              
              <!--<div class ="border-box  best_offers "style ="margin-left :20px">
               <img src="img/beg4.jpg" height="100%" width="100%">
               <div><button class="col-md-5 col-md-push-3 btn btn-primary" type="submit">Buy</button></div>
              </div>
              
              <div class="border-box  best_offers "style ="margin-left :20px">
               <img src="img/beg5.jpg" height="100%" width="100%">
               <div><button class="col-md-5 col-md-push-3 btn btn-primary" type="submit">Buy</button></div>
              </div>
              ----------------------------------
               
                 
				<div class ="best_offers border-box " style ="margin-left :20px">
              <img src="img/beg2.jpg" height="100%" width="100%">
              <div><button class="col-md-5 col-md-push-3 btn btn-primary" type="submit">Buy</button></div>
              </div>
                 <div class ="best_offers border-box " style ="margin-left :20px">
              <img src="img/beg2.jpg" height="100%" width="100%">
              <div><button class="col-md-5 col-md-push-3 btn btn-primary" type="submit">Buy</button></div>
              </div>
              
              ----------------------------------
              -->
              
 ----------------------------------

<?php
$query2="select * from record";
$res2=mysqli_query($con,$query2);
	while($row2=mysqli_fetch_array($res2))
{		
	$id=$row2['content_id'];	
	$img=$row2['name'];
	$name=$row2['bagname'];
	$price=$row2['price']
?>			  <form method="post" name="main_form" action="cart.php">
              <input type="hidden" name="uid" value="<?php echo $id;?>" />
              <input type="hidden" name="name" value="<?php echo $name;?>" />
              <input type="hidden" name="price" value="<?php echo $price;?>" />
              <div class ="best_offers border-box " style ="margin-left :20px">
              <img src="upload/<?php echo $img?>" height="75%" width="100%">
              <div><p><?php echo $name."<br> Price-".$price ?></p></div>
			  <div><button class="col-md-5 col-md-push-3 btn btn-primary" type="submit">Buy</button></a></div>
              </form>
              </div>
<?php } ?> 
       
       
       
 -----------------------------            
    </div>
    
    </div>
    
    </center>
    <script type="text/javascript">
    $(document).ready(function(){
    $('.carousel').carousel({
        interval: 2000
    })
    });
</script>
    
</body>
