<?php 
include "header.php"; 
include'config.php';
if(isset($_POST['submit'])){
  $user_id=mysqli_real_escape_string($conn,$_POST['user_id']);
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $phn_no=mysqli_real_escape_string($conn,$_POST['phn_no']);
  $citizen_id=mysqli_real_escape_string($conn,$_POST['citizen_id']);
  $query1="UPDATE citizendb SET name='{$name}',email='{$email}',phn_no='{$phn_no}',citizen_id='{$citizen_id}' WHERE user_id='{$user_id}'";
  $result1=mysqli_query($conn,$query1) or die("Query Failed");
  if($result1){
    header("location:citizen.php");
  }
}

 ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Update Citizen Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">


<?php 
include'config.php';
  $user_id=$_GET['id'];
  $query="SELECT *FROM citizendb WHERE user_id={$user_id}";
  $result=mysqli_query($conn,$query);
  $count=mysqli_num_rows($result);
  if($count>0){
    while($row=mysqli_fetch_assoc($result)){

 ?>
                  <!-- Form Start -->
                  <form  action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="<?php echo  $row['user_id']; ?>" placeholder="" >
                      </div>
                          <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control" value="<?php echo  $row['name']; ?>" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="email" class="form-control" value="<?php echo  $row['email']; ?>" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                          <label>Phone Number</label>
                          <input type="text" name="phn_no" class="form-control" value="<?php echo  $row['phn_no']; ?>" placeholder="Phone Number" required>
                      </div>
                      <div class="form-group">
                          <label>Citizen ID</label>
                          <input type="text" name="citizen_id" class="form-control" value="<?php echo  $row['citizen_id']; ?>" placeholder="Citizen ID" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <!-- /Form -->
<?php 
    }
  }

 ?>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
