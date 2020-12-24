<?php 
include "header.php";
include'config.php';
if(isset($_POST['submit'])){
  $complaint_id=mysqli_real_escape_string($conn,$_POST['complaint_id']);
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $loc_crime=mysqli_real_escape_string($conn,$_POST['loc_crime']);
  $type_crime=mysqli_real_escape_string($conn,$_POST['type_crime']);
  $date=mysqli_real_escape_string($conn,$_POST['date']);
  $phone=mysqli_real_escape_string($conn,$_POST['phone']);
  if(empty($_FILES['new-image']['name'])){
    $new_name=$_POST['old-image'];
  }
  else{
    $errors=array();
    $file_name=$_FILES['new-image']['name'];
    $file_size=$_FILES['new-image']['size'];
    $file_tmp=$_FILES['new-image']['tmp_name'];
    $file_type=$_FILES['new-image']['type'];
    $file_div=explode('.',$file_name);
    $file_ext=end($file_div);
    $extensions=array("jpeg","jpg","png");
    if(in_array($file_ext,$extensions)== false){
      $errors[]="This extension file not allowed, Please choose a JPG or JPEG or PNG file";
    }
    if($file_size>2097152){
      $errors[]="Maximum File size 2MB or Lower";
    }
    $new_name= time()."-".basename($file_name);
    $target="upload/".$new_name;
    if(empty($errors)==true){
      move_uploaded_file($file_tmp,$target);
    }else{
      print_r($errors);
      die();
    }
}

  $query="UPDATE complaintdb SET name='{$name}',email='{$email}',loc_crime='{$loc_crime}',type_crime='{$type_crime}',date='{$date}',phone='{$phone}',seminar_img='{$new_name}' WHERE complaint_id='{$complaint_id}'";
  $result=mysqli_query($conn,$query);
  if($result){
    header("location:complaint.php");
  }else{
    echo mysqli_error($conn);
  }
}

?>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Complaint</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">

<?php 
include'config.php';
  $complaint_id=$_GET['id'];
  $query1="SELECT *FROM complaintdb WHERE complaint_id={$complaint_id}";
  $result1=mysqli_query($conn,$query1);
  $count=mysqli_num_rows($result1);
  if($count>0){
    while($row=mysqli_fetch_assoc($result1)){

 ?>        
        <!-- Form for show edit-->
        <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="complaint_id"  class="form-control" value="<?php echo  $row['complaint_id']; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name"  class="form-control" id="exampleInputUsername" value="<?php echo  $row['name']; ?>">
            </div>
           <!-- <div class="form-group">
                <label for="email"> Email</label>
                <textarea name="email" class="form-control"  required rows="5">
                    <?php /*echo  $row['description']; **/?>
                </textarea>
            </div>-->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email"  class="form-control" id="exampleInputUsername" value="<?php echo  $row['email']; ?>">
            </div>
            <div class="form-group">
                <label for="loc_crime">Location Of Crime</label>
                <input type="loc_crime" name="loc_crime"  class="form-control" id="exampleInputUsername" value="<?php echo  $row['loc_crime']; ?>">
            </div>
            <div class="form-group">
                <label for="type_crime">Type of Crime</label>
                <input type="type_crime" name="type_crime"  class="form-control" id="exampleInputUsername" value="<?php echo  $row['type_crime']; ?>">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" name="date"  class="form-control" id="exampleInputUsername" value="<?php echo  $row['date']; ?>">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone"  class="form-control" id="exampleInputUsername" value="<?php echo  $row['phone']; ?>">
            </div>
            <div class="form-group">
                <label for="">Post image</label>
                <input type="file" name="new-image">
                <img  src="upload/<?php echo  $row['seminar_img']; ?>" height="150px">
                <input type="hidden" name="old-image" value="<?php echo  $row['seminar_img']; ?>">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Update" />
        </form>
        <!-- Form End -->

<?php 
    }
}
 ?>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
