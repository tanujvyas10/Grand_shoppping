  <?php
 session_start();?>
 <link href="../css/admin_login.css " rel="stylesheet" type="text/css"/>
 <link rel="Stylesheet" href ="../css/shopping.css" type ="text/css" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
<body>
 <center>     
    
         <div class="body">
           <div class="menu">
             
              <div class="logo">
                 <div class="logo-img">
                      <img src="../img/Logo.png" alt="">
                 </div>
              </div>
              
                  <div class="menu-list">
                        <ul class="about-us">
                            <li class="list text-center border_right">
                              <a href="../index.php">  HOME <a>
                            </li>
                            <li class="list border_left border_right text-center">
                             <a href="#"> ABOUT US</a>
                            
                               <ul class="subs">
                              <li>
                              <a href="#">
                              about1
                              </a>
                             </li>
                              <li>
                              <a href="#">
                              about2
                              </a>
                             </li>
                              <li>
                              <a href="index.html">
                              about3
                              </a>
                             </li>
                               </ul>
                                </li>                                
                            <li class="list border_left border_right text-center">
                                BLOG
                            </li>
                            <li class="list border_left border_right text-center">
                                BEST OFFERS
                            </li>
                            <li class="list border_right border_left text-center">
                                PORTFOLIO
                            </li>
                            <li class="list border_left text-center">
                                CONTACT
                            </li>
                                               <?php
     if(isset($_SESSION['admin']))
	 {
	 ?>                            
                             <li class="list border_left  border_right text-center "><a href="upload.php">
                             upload</a></li>
                             <?php
                             }
	                          ?>
                             
                             <?php
     if(isset($_SESSION['admin']))
	 {
	 ?>
                             <li class="list border_left text-center">
                             <a href="admin/admin_logout.php">
                                Logout
                                </a>
                            </li>
                             <?php
  }
  else
  {
  ?>
  <li class="list border_left border_right text-center">
                             <a href="#">
                                Admin Login
                                </a>
                            </li>
   <?php
   }
   ?>
                        </ul>
                  </div>
            
            
         <div class="social-icons">
                <div class="col-md-2">
                    <img src="../img/fb_blue.png" alt="">
                 </div>
                <div class="col-md-2">
                    <img src="../img/tw_blue.png" alt="">
                </div>
                <div class="col-md-2">
                    <img src="../img/g+_green.png" alt="">
                </div>
         </div>         
      </div>    
