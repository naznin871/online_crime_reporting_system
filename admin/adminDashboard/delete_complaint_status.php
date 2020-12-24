<?php 
include'config.php';
$complaint_id=$_GET['id'];
 $query="DELETE FROM complaint_status WHERE complaint_id='{$complaint_id}'";
 $result=mysqli_query($conn,$query) or die("Query Failed");
 if($result){
  	header("location:complaintStatus.php");
  } 
 ?>