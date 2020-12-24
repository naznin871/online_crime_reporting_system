<?php 
include "header.php";
include'config.php';
if(isset($_POST['save'])){
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $phn_no=mysqli_real_escape_string($conn,$_POST['phn_no']);
  $citizen_id=mysqli_real_escape_string($conn,$_POST['citizen_id']);
  $query="SELECT email FROM citizendb where email='$email'";
  $result=mysqli_query($conn,$query) or die("Query Failed");
  $count= mysqli_num_rows($result);
  if($count>0){
    echo"Already Registered This email Address";
  }
  else{
    $query1="INSERT INTO citizendb (name,email,phn_no,citizen_id) VALUES('$name','$email','$phn_no','$citizen_id')";
    $result1=mysqli_query($conn,$query1) or die("Query failed.");
    if($result1){
      header("location:citizen.php");
    }
  }
} 
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add People</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form  action="<?php $_SERVER['PHP_SELF']?>" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Name" required>
                      </div>
                          <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="email" class="form-control" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                          <label>Phone Number</label>
                          <input type="text" name="phn_no" class="form-control" placeholder="Phone Number" required>
                      </div>
                      <div class="form-group">
                          <label>Citizen Id</label>
                          <input type="text" name="citizen_id" class="form-control" placeholder="Citizen Id" required>
                      </div>
                      <input type="submit"  name="save" class="btn btn-primary" value="Add" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
<?php include "footer.php"; ?>
