<?php 
include'config.php';
$cpt_id=$_GET['id'];
 $query="DELETE FROM emergency_complaint WHERE cpt_id='{$cpt_id}'";
 $result=mysqli_query($conn,$query) or die("Query Failed");
 if($result){
  	header("location:emergency_cpt.php");
  } 
 ?>