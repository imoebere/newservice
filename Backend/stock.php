<?php
include 'inc/header.php';
include 'inc/sidebar.php';

?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header"> ORDERING PORTAL</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>ORDER TABLE</h3>
					<!--<a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#candidateReg"><i class="fa fa-plus"></i> ADD PRODUCT</a>-->
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-striped">
						<thead>
							<th>Surname</th>
                            <th>Middle Name</th>
                            <th>First Name</th>
							<th>Name of Product</th>
                            <th>State</th>
                            <th>City</th>
							<th>Address</th>
							<th>Phone Number</th>
							<th>Email</th>
							<th>Quantity</th>
							<th>Date of ORDER</th>


							
						</thead>
						<tbody>
							<?php
							include ('inc/connect.php');
							//$conn = mysql_connect('localhost','root','');
							//$db = mysql_select_db("shoprite");
								$sql = mysql_query("SELECT * FROM order_set");
								while ($row = mysql_fetch_array($sql)) {
							?>
                             
							<tr>
								<td><?php echo $row['Lastname']?></td>
                                <td><?php echo $row['Middlename']?></td>
                                <td><?php echo $row['Firstname']?></td>
								<td><?php echo $row['product_name']?></td>
                                <td><?php echo $row['state']?></td>
                                <td><?php echo $row['city']?></td>
								<td><?php echo $row['address']?></td>
								<td><?php echo $row['phone']?></td>
								<td><?php echo $row['email']?></td>
								<td><?php echo $row['quantity']?></td>
								<td><?php echo $row['datess']?></td>
								
							
								
							</tr>
							<?php  } ?>
							
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