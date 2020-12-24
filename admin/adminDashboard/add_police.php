<?php 
include "header.php";
include'config.php';
if(isset($_POST['save'])){
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $phone=mysqli_real_escape_string($conn,$_POST['phone']);
  $police_id=mysqli_real_escape_string($conn,$_POST['police_id']);
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  $pwd = md5($password);
  $query="SELECT email FROM user_registration where email='$email'";
  $result=mysqli_query($conn,$query) or die("Query Failed");
  $count= mysqli_num_rows($result);
  if($count>0){
    echo"Already Registered This email Address";
  }
  else{
    $query1="INSERT INTO user_registration (name,email,phone,police_id,username,password,category,) VALUES('$name','$email','$phone','$police_id',$username','$pwd','$category')";
    $result1=mysqli_query($conn,$query1) or die("Query failed.");
    if($result1){
      header("location:police.php");
    }
  }
} 
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add Police</h1>
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
                          <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                      </div>
                     
                      <div class="form-group">
                          <label>Police Id</label>
                          <input type="text" name="police_id" class="form-control" placeholder="Police Id" required>
                      </div>
                      <div class="form-group">
                          <label>Username</label>
                          <input type="text" name="username" class="form-control" placeholder="Username" required>
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="text" name="password" class="form-control" placeholder="Password" required>
                      </div>
                      <input type="submit"  name="save" class="btn btn-primary" value="Add" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
<?php include "footer.php"; ?>
