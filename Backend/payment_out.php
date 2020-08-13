<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header">PAYMENT DETAILS</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>PAYMENT TABLE</h3>
				</div>
				<div class="panel-body table-responsive" style="overflow:auto">
					<table class="table table-striped">
						<thead>
                        	<th>S/N</th>
							<th>Customer Name</th>
							<th>Bank Name</th>
                            <th>Card Number</th>
                            <th>CVC</th>
							<th>Payment ID</th>
							<th>Order ID</th>
							<th>Date of Payment</th>
							
						</thead>
						<tbody>
							<?php
							include 'inc/connect.php';
							$sql = mysql_query("SELECT * FROM payment_table ");
								while ($row = mysql_fetch_array($sql)) {
							?>
							<tr>
                            	<td><?php echo $row['id']?></td>
								<td><?php echo $row['Customer_Name']?></td>                                
								<td><?php echo $row['bank']?></td>
                                <td><?php echo $row['card_number']?></td>
                                <td><?php echo $row['cvc']?></td>                 
                                <td><?php echo $row['payment_id']?></td>
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