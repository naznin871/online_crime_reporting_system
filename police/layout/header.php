<?php include "../config.php"; ?>
<?php 
session_start();
if (empty($_SESSION['police'])) {
  header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Police | <?php $path = $_SERVER['SCRIPT_FILENAME'];
    $title = basename($path, '.php');
    if ($title == 'index') {
      $title = 'home';
    }
    $title = str_replace('_', ' ', $title);
    $title = str_replace('-', ' ', $title);
    echo $title = ucfirst($title); ?> </title>
    <link rel="stylesheet" href="../css/police.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <style type="text/css">
      .table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      .table td, .table th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      .table tr:nth-child(even){background-color: #f2f2f2;}

      .table tr:hover {background-color: #ddd;}

      .table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
      }
      .menu_active{
        background: #19B3D3;
      }
    </style>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Police <span>Profile</span></h3>
      </div>
      <div class="right_area">
        
        <form method="post" action="../login">
          <button type="submit" name="logout" class="logout_btn">Logout</button>
        </form>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="../images/police icon.png" class="mobile_profile_image" alt="">
        <a class="btn "><?php echo $_SESSION['police']; ?></a>
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a class="<?php if (stripos($_SERVER['REQUEST_URI'],'police/index') !== false) {echo 'menu_active ';} ?>" href="index"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a class="<?php if (stripos($_SERVER['REQUEST_URI'],'police/view_complaint') !== false) {echo 'menu_active ';} ?>" href="view_complaint"><i class="fas fa-cogs"></i><span>Complaints</span></a>
        <a class="<?php if (stripos($_SERVER['REQUEST_URI'],'police/complaint_status') !== false) {echo 'menu_active ';} ?>" href="complaint_status"><i class="fas fa-table"></i><span>Complaint Status</span></a>
        <a class="<?php if (stripos($_SERVER['REQUEST_URI'],'police/emergency') !== false) {echo 'menu_active ';} ?>" href="emergency"><i class="fas fa-th"></i><span>Emergency Complaint</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="../images/police icon.png" class="profile_image" alt="">
        <h4><?php echo $_SESSION['police']; ?></h4>
      </div>
      <a class="<?php if (stripos($_SERVER['REQUEST_URI'],'police/index') !== false) {echo 'menu_active ';} ?>" href="index"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a class="<?php if (stripos($_SERVER['REQUEST_URI'],'police/view_complaint') !== false) {echo 'menu_active ';} ?>" href="view_complaint"><i class="fas fa-cogs"></i><span>Complaints</span></a>
      <a class="<?php if (stripos($_SERVER['REQUEST_URI'],'police/complaint_status') !== false) {echo 'menu_active ';} ?>" href="complaint_status"><i class="fas fa-table"></i><span>Complaint Status</span></a>
      <a class="<?php if (stripos($_SERVER['REQUEST_URI'],'police/emergency') !== false) {echo 'menu_active ';} ?>" href="emergency"><i class="fas fa-th"></i><span>Emergency Complaint</span></a>
    </div>
    <!--sidebar end-->
    