<?php include "layout/header.php"; ?>
<div class="content">
	<h1>Complaint list</h1>
	<table id="example1" class="content-table table">
	    <thead>
	      <tr>
	        <th>Complaint ID</th>
	        <th>Name</th>
	        <th>Email</th>
	        <th>Location Of Crime</th>
	        <th>Types Of crime</th>
	        <th>Date</th>
	        <th>Phone Number</th> 
	      </tr>
	    </thead>
		<tbody>
			<?php 
			$query="SELECT *FROM complaintdb ORDER BY complaint_id ASC";
			$result=mysqli_query($conn,$query);
			while($row=mysqli_fetch_assoc($result)){
			?>                        
			<tr>
				<td><?php echo  $row['complaint_id']; ?></td>
				<td><?php echo  $row['name']; ?></td>
				<td><?php echo  $row['email']; ?></td>
				<td><?php echo  $row['loc_crime']; ?></td>
				<td><?php echo  $row['type_crime']; ?></td>
				<td><?php echo  $row['date']; ?></td>
				<td><?php echo  $row['phone']; ?></td>
			</tr>
			<?php  } ?>
		</tbody>                  
	</table>
</div>
<?php include "layout/footer.php"; ?>