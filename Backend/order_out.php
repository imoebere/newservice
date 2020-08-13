<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header">ORDERING PORTAL</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>ORDER TABLE</h3>
				</div>
				<div class="panel-body table-responsive" style="overflow:auto">
					<table class="table table-striped">
						<thead>
                        	<th>S/N</th>
							<th>Customer Name</th>                      
							<th>Product Name</th>
                            <th>Product Make</th>
                            <th>Product Model</th>
							<th>Address</th>
							<th>Phone Number</th>
							<th>Email</th>
							<th>Quantity</th>
                            <th>Order ID</th>
							<th>Date of ORDER</th>
							
						</thead>
						<tbody>
							<?php
							include 'inc/connect.php';
							$sql = mysql_query("SELECT * FROM Order_set ");
								while ($row = mysql_fetch_array($sql)) {
							?>
							<tr>
                            	<td><?php echo $row['id']?></td>
								<td><?php echo $row['Lastname']." ". $row['Middlename']." ".$row['Firstname']?></td>
								<td><?php echo $row['product_name']?></td>
                                <td><?php echo $row['product_make']?></td>
                                <td><?php echo $row['product_model']?></td>                 
                                <td><?php echo $row['address'].",".$row['city'].",".$row['state']?></td>
								<td><?php echo $row['phone']?></td>
								<td><?php echo $row['email']?></td>
								<td><?php echo $row['quantity']?></td>
                                <td><?php echo $row['order_id']?></td>
								<td><?php echo $row['datess']?></td>
								
								

							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		

		
	</div>
	</div>
  <?php
include 'inc/footer.php';
?>