<?php 
include "config.php";
$msg = "";
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = md5($_POST['email']);
  $loc_crime = $_POST['loc_crime'];
  $type_crime = $_POST['type_crime'];
  $date = $_POST['date'];
  $phone = $_POST['phone'];
  $sql = "INSERT INTO `complaintdb`(`name`, `email`, `loc_crime`, `type_crime`, `date`, `phone`) VALUES ('$name','$email','$loc_crime','$type_crime','$date','$phone')";
  $query = mysqli_query($conn, $sql);
  if ($query) {
    $msg = "<script>Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'Your work has been saved',
              showConfirmButton: false,
              timer: 1500
            })</script>";
  }else{
    $msg = "<script>Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'Something wrong',
              showConfirmButton: false,
              timer: 1500
            })</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>

      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>online crime reporting system</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/user_complaint.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <script src="js/sweetalert2.js"></script>
   </head>
   <!-- body -->
   <body class="main-layout">
   
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="#"><img src="images/crimelogo.png" alt=""></a> </div>

                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="index.html"></a> </li>
                              <li> <a href="customer_dashboard.php"> Home </a> </li>
                              <li> <a href="user_complaint.php">Complaint</a> </li>
                              <li> <a href="faq/index.html"> FAQ </a> </li>
                              <li> <a href="index.html">Sign Out</a> </li>
                             
                           </ul>

                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>

      <!--complaint form-->
      <h1> Complaint form</h1>
      <span><?php echo $msg; $msg = "";?></span>
    <div class="col-md-6 col-md-offset-3 apply">
    <h2>Log Complaint</h2>
    <form method="post" action="" id="apply">
      <input type="text"name="name" id="name"placeholder="user name"><br><br>
        <input type="text"name="id" class="form-control" placeholder="Complaint ID"><br>
            <input type="email"name="email" class="form-control"placeholder="Complaint type"><br>
            <input type="text"name="E_y" class="form-control"placeholder="Email"/><br>
            <select class="form-control" name="loc_crime">
              <option>Location Of Crime</option>
              <option> Dhaka</option>
                <option>Rajshahi</option>
                  <option> Khulna</option>
                    <option> Sylhet</option>
                      <option> Chittagong</option>
                      </select><br>
                       <select id ="cntry" name="type_crime">
                        <option>Types Of Crime</option>
                        <option>Theft</option>
                      <option>Robbery</option>
                        <option>Pick Pocket</option>
                        <option>Murder</option>
                        <option>Rape</option>
                        <option>Molestation</option>
                        <option>Kidnapping</option>
                        <option>Missing Person</option>
                      </select><br>
                      <div class="Top-w3-agile" >
          Date Of Crime : &nbsp &nbsp  
            <input class="form-control" type="date" name="d_o_c" required placeholder="">
          </div>
          <br>
              <input type="text" name="date" id="cgpa" placeholder="Complaint Date"><br><br>
              <input type="text"name="phone" id="salary"placeholder="Phone number"><br><br>
                <input type="Submit" name="submit"Value="Submit Application" id="sub"><br><br>
    </form>
  </div>
  <!--end complaint form-->
       <!--  footer --> 
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Address</h3>
                        <i><img src="icon/3.png">Locations</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Menus</h3>
                        <i><img src="icon/2.png">Locations</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Useful Linkes</h3>
                        <i><img src="icon/1.png">Locations</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Social Media </h3>
                        <ul class="contant_icon">
                           <li><img src="icon/fb.png" alt="icon"/></li>
                           <li><img src="icon/tw.png" alt="icon"/></li>
                           <li><img src="icon/lin (2).png" alt="icon"/></li>
                           <li><img src="icon/instagram.png" alt="icon"/></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 width">
                     <div class="address">
                        <h3>Newsletter </h3>
                        <input class="form-control" placeholder="Enter your email" type="type" name="Enter your email">
                        <button class="submit-btn">Subscribe</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <p>Copyright 2019 All Right Reserved By <a href="#">Online Crime Reporting</a></p>
            </div>
         </div>
      </footr>
      <!-- end footer -->
       <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
      </html>