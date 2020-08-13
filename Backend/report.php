<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
<script type="text/javascript">
  function btnprint() {
    window.print();
  }
</script>
<style type="text/css">


@media only print{
  #print{
    display: none;
  }
  .row.payment-dialog-row{
    width: 100%;
  }
  .panel-body{
    width: 100%;
  }
  .form-group{
    width: 500px;
    color: green;
  }

}

</style>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header"> product database</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>All product</h3>
					
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-striped">
						<thead>
                        <th>S/N</th>
							<th>product name</th>
                            <th>product ID</th>
							<th>Size</th>
							<th>Product Make</th>
							<th>colour</th>
							<th>model</th>
							<th>price</th>
                            <th>Date/Time</th>

							
				<th>Print<a href=""  onclick="btnprint()" id="print"><i class="fa fa-bars"></a></i></th>
						</thead>
						<tbody>
							<?php
								include ('inc/connect.php');
								$fetch = mysql_query("SELECT * FROM stock");
								while ($row = mysql_fetch_array($fetch)) {
							?>
							<tr>
                            	<td><?php echo $row['id']?></td>
								<td><?php echo $row['product_name']?></td>
                                <td><?php echo $row['product_id']?></td>
								<td><?php echo $row['size']?></td>
								<td><?php echo $row['product_make']?></td>
								<td><?php echo $row['color']?></td>
								<td><?php echo $row['model']?></td>
                                <td><?php echo $row['price']?></td>
                                <td><?php echo $row['datess']?></td>
								<!--<td><a data-toggle="modal" data-target="#edit<?php //echo $row['id']?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a><a data-toggle="modal" data-target="#delete<?php //echo $row['id']?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>-->
							</tr>
							
							  
							<?php } ?>
                            </div>
	
				</div>
			</div>
		</div>
	</div>
    
		
				
<?php

include 'inc/footer.php';
?>