<?php include "layout/header.php"; ?>
<?php 
// 
$msg = "";
if(isset($_POST['submit'])){
  $complaint_id=mysqli_real_escape_string($conn,$_POST['complaint_id']);
  $complaint_status=mysqli_real_escape_string($conn,$_POST['complaint_status']);
 
  $query1="UPDATE complaint_status SET complaint_status = '$complaint_status' WHERE complaint_id = '$complaint_id'";
  $result1=mysqli_query($conn,$query1) or die("Query Failed");
  if($result1){
    $msg =  "<span style='color:green'>Successfully updated</span>";
  }else{
  	$msg = mysqli_error($conn);
  }
}
// 
$complaint_id=$_GET['id'];
$query="SELECT *FROM complaint_status WHERE complaint_id={$complaint_id}";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count>0){
	while($row=mysqli_fetch_assoc($result)){
?>
<div class="content">
	<h1>Edit complaint status</h1>
	<?php if (!empty($msg)){echo $msg; $msg ="";} ?>
	<!-- Form Start -->
	<form  action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
		<div class="form-group">
			<input type="hidden" name="complaint_id"  class="form-control" value="<?php echo  $row['complaint_id']; ?>" placeholder="" >
		</div>
		<div class="form-group">
			<label> complaint status</label>
			<input type="text" name="complaint_status" class="form-control" value="<?php echo  $row['complaint_status']; ?>" placeholder="complaint status" required>
		</div>

		<input type="submit" name="submit" class="btn btn-primary" value="Update"/>
	</form>
	<!-- /Form -->
</div>
<?php 
	}
}
?>
<?php include "layout/footer.php"; ?>