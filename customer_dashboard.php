<?php 
session_start();
if (empty($_SESSION['user'])) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer dashboard </title>
    <link rel="stylesheet" href="css/customer dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>User <span>Profile</span></h3>
      </div>
      <div class="right_area">
        <form method="post" action="login">
          <button type="submit" name="logout" class="logout_btn">Logout</button>
        </form>
        
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="images/user icon.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="user_complaint.php"><i class="fa fa-file"></i><span>Complaint</span></a>
        <a href="faq"><i class="fa fa-question-circle "></i><span>FAQ</span></a>
      
        
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="images/user icon.png" class="profile_image" alt="">
        <h4><?php echo $_SESSION['user']; ?></h4>
      </div>
      <a href="#"><i class="fas fa-desktop"></i><span>Home</span></a>
      <a href="user_complaint.php"><i class="fa fa-file"></i><span>Add complaint</span></a>
      <a href="faq/index.html"><i class="fa fa-question-circle "></i><span>FAQ</span></a>
      
     
    </div>
    <!--sidebar end-->

    <div class="content">
     
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>