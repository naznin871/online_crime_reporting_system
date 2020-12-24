<?php 
include'config.php';
$complaint_id=$_GET['id'];
 $query="DELETE FROM complaintdb WHERE complaint_id='{$complaint_id}'";
 $result=mysqli_query($conn,$query) or die("Query Failed");
 if($result){
  	header("location:complaint.php");
  } 
 ?>