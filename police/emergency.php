<?php include "layout/header.php"; ?>
<div class="content">
	<h1>Emergency complaint list</h1>
	<table id="example1" class="content-table table">
	    <thead>
	      <tr>
	        <th>Complaint ID</th>
			<th>NID</th>
			<th>Loction of crime</th>
			<th>Type of crime</th>
			<th>Phone</th>
			<th>Date of crime</th>
			
	      </tr>
	    </thead>
		<tbody>
			<?php 
			$query = "SELECT *FROM emergency_complaint";
			$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
			while($row = mysqli_fetch_assoc($result)){
			?>                        
			<tr>
				<td><?php echo  $row['cpt_id']; ?></td>
				<td><?php echo  $row['nid']; ?></td>
				<td><?php echo  $row['loc_crime']; ?></td>
				<td><?php echo  $row['type_crime']; ?></td>
				<td><?php echo  $row['phone']; ?></td>
				<td><?php echo  $row['date_crime']; ?></td>
				
			</tr>
			<?php  } ?>
		</tbody>                  
	</table>
</div>
<?php include "layout/footer.php"; ?>