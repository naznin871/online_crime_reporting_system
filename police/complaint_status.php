<?php include "layout/header.php"; ?>
<div class="content">
	<h1>Complaint status list</h1>
	<table id="example1" class="content-table table">
	    <thead>
	      <tr>
			<th>Complaint ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Complaint</th>
			<th>Complaint status</th>
			<th>Update Status</th>
	      </tr>
	    </thead>
		<tbody>
			<?php 
			$query="SELECT *FROM complaint_status ORDER BY complaint_id ASC";
			$result=mysqli_query($conn,$query) or die("query failed");
			while($row=mysqli_fetch_assoc($result)){
			?>                        
			<tr>
				<td><?php echo  $row['complaint_id']; ?></td>
				<td><?php echo  $row['name']; ?></td>
				<td><?php echo  $row['email']; ?></td>
				<td><?php echo  $row['complaint']; ?></td>
				<td><?php echo  $row['complaint_status']; ?></td>
				<td class='edit'><a href='edit_complaint_status?id=<?php echo  $row['complaint_id']; ?>'><i class='fa fa-edit'></i></a></td>
			</tr>
			<?php  } ?>
		</tbody>                  
	</table>
</div>
<?php include "layout/footer.php"; ?>