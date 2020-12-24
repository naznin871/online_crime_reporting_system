<?php 
include "config.php";
$msg = "";
if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $password = md5($_POST['pwd']);
  $email = $_POST['email'];
  $district = $_POST['district'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $nid = $_POST['nid'];
  $sql = "INSERT INTO `registration_form`(`name`, `pwd`, `email`, `district`, `phone`, `gender`, `nid`) VALUES ('$name','$password','$email','$district','$phone','$gender','$nid')";
  $query = mysqli_query($conn, $sql);
  if ($query) {
    header("location: login.php");
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
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js/sweetalert2.js"></script>
  <title>Registration form</title>
</head>
<body>
  <h1> Registration form</h1>
  <span><?php echo $msg; $msg = "";?></span>
  <div class="apply">
    <h2>SIGN UP</h2>
    <form method="post" action="#" id="apply">
      <input type="text"name="name" id="name"placeholder="Name"><br><br>
      <input type="text"name="pwd" id="name"placeholder="Password"><br><br>
      <input type="email"name="email" id="name"placeholder="Email"><br><br>
      <select id ="cntry" name="district">
        <option value="">Select your District</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Khulna">Khulna</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Chittagong">Chittagong</option>
      </select><br><br>
      <select id="ph" name="cty_code">
        <option value="">Select phn</option>
        <option value="+880">+880</option>
        <option value="+91">+91</option>
        <option value="+001">+001</option>
      </select>
      <input type="number"id="nam"name="phone" placeholder="123456789"><br><br>
      <select id="tec" name="gender">
        <option>Gender</option>
        <option>Male</option>
        <option>Female</option>
      </select><br><br>
      <input type="text"name="nid" id="name"placeholder="NID No"><br><br>
      <input type="Submit"Value="Register" name="register" id="sub"><br>
    </form>
  </div>
</body>
</html>
