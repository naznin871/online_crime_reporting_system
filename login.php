<?php 
session_start();
if (isset($_POST['logout'])) {
    session_destroy();
    $msg = "Logout successfully";
}
include'config.php'; 
if (!empty($_SESSION['user'])) {
    header("location: customer_dashboard.php");
}else if (!empty($_SESSION['user'])) {
    header("location: police");
}
$msg = "";
if(isset($_POST['login'])){
    $Uname = $_POST['Uname'];
    $Pass = $_POST['Pass'];
    $pwd = md5($Pass);
    if ($_POST['user_type']=="Police") {
        $query="SELECT * FROM user_registration where username ='$Uname'AND password='$pwd'";
        $result=mysqli_query($conn,$query) or die("Query Failed");
        $count = mysqli_num_rows($result);
        if($count>0){
            $_SESSION['police']=$Uname;
            header("location: police");
        }
        else{
            $msg = "Wrong username or password";
        }
    }else if ($_POST['user_type']=="User") {
        $query="SELECT * FROM registration_form where name ='$Uname'AND pwd='$pwd'";
        $result=mysqli_query($conn,$query) or die("Query Failed");
        $count = mysqli_num_rows($result);
        if($count>0){
            $_SESSION['user']=$Uname;
            header("location:customer_dashboard.php");
        }
        else{
            $msg = "Wrong username or password";
        }
    }    
}
                                        
?>
<!DOCTYPE html>    
<html>    
<head>    
<title>Sign in Form</title>    
<link rel="stylesheet" type="text/css" href="css/style.css">  
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">  
</head>    
<body>    
    <h2>Sign in Page</h2><br>    
    <div class="login">
        <span class="text-danger"><?php echo $msg; $msg = ""; ?></span><br>
        <form id="login" method="POST" action="login.php"> 
            <div class="form-group">
                <label for="Uname">Username</label>
                <input type="text" class="form-control" id="Uname" name="Uname" placeholder=Username>
            </div>
            <div class="form-group">
                <label for="Uname">Password</label>
                <input type="Password" name="Pass" id="Pass" placeholder="Password" class="form-control" >
            </div>
            <div class="form-group">
                <label for="user_type">User type</label>
                <select class="form-control" id="user_type" name="user_type" required="">
                    <option value="">Select one</option>
                  <option value="Police">Police</option>
                  <option value="User">User</option>
                </select>
              </div>
            <button type="submit" class="btn btn-primary float-left" name="login">Login</button>      
            <a href="forgetpass.php" class="float-right">Forgot Password?</a>   
        </form>
    </div>    
</body>    
</html>     
