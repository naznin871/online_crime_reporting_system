<?php 
include "config.php";
$msg = "";
if (isset($_POST['submit'])) {
  $nid = $_POST['nid'];
  $loc_crime = $_POST['loc_crime'];
  $type_crime = $_POST['type_crime'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $sql = "INSERT INTO `emergency_complaint`(`nid`, `loc_crime`, `type_crime`, `phone`, `date_crime`) VALUES ('$nid','$loc_crime','$type_crime','$phone','$date')";
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
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/emergency.css">
  <script src="js/sweetalert2.js"></script>
  <title>Emergency complaint</title>
</head>
<body>
  <h1> Emergency Complaint</h1>
  <div class="apply">
    <h2>Log Complaint</h2>
    <form method="post" action="#" id="apply">
      <input type="text"name="nid" id="name"placeholder="NID No"required><br><br>
                    <select id ="cntry"name="loc_crime">
                       <option>Location Of Crime</option>
                       <option> Dhaka</option>
                       <option>Rajshahi</option>
                       <option> Khulna</option>
                       <option> Sylhet</option>
                       <option> Chittagong</option>
                      </select><br><br>
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
                      </select><br><br>
                      <select id="ph"name="phone">
                        <option>+880</option>
                        <option>+91</option>
                        <option>+001</option>
                      </select>
                        <input type="number"id="nam"name="phone" placeholder="123456789"><br><br>
                        <div class="Top-w3-agile" style="color: black">
                         Date Of Crime : &nbsp &nbsp  
                       <input style="background-color: #313131;color: white" type="date" name="date" required>
                     </div>
                      <br>                        
                     <input type="Submit"Value="Submit"name="submit" id="sub"><br><br>

    </form>
  </div>
</body>
</html>
