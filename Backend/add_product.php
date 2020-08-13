<?php
include 'inc/header.php';
include 'inc/sidebar.php';
include('inc/connect.php');

$fetch = mysql_query("SELECT * FROM stock");
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
			<h1 class="page-header"> Product Regististration portal</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					
					<a href="reg_product.php" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#candidateReg"><i class="fa fa-plus"></i> ADD PRODUCT</a>
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-striped">
						<thead>
                        <th>S/N</th>
							<th>product name</th>
                            <th>product image</th>
							<th>size</th>
							<th>product make</th>
							<th>colour</th>
							<th>model</th>
							<th>product_id</th>
							<th>price</th>
							<th>date/time</th>


							<th>Print<a href=""  onclick="btnprint()" id="print"><i class="fa fa-bars"></a></i></th>
						</thead>
						<tbody>
							<?php
								while ($row = mysql_fetch_array($fetch)) {
							?>
							<tr>
                            	<td><?php echo $row['id']?></td>
								<td><?php echo $row['product_name']?></td>
                                <td><img src="<?php echo $row['image'];?>"  alt=" " height="100px" width="100px" /></td>
								<td><?php echo $row['size']?></td>
								<td><?php echo $row['product_make']?></td>
								<td><?php echo $row['color']?></td>
								<td><?php echo $row['model']?></td>
								<td><?php echo $row['product_id']?></td>
								<td><?php echo $row['price']?></td>
                                <td><?php echo $row['datess']?></td>
								<td><a data-toggle="modal" data-target="#edit<?php echo $row['id']?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
							</tr>
							

							 
							  
							  </div>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="candidateReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>ADD NEW ITEM TO STOCK</center></h4>
      </div>
         <form method="post" action="#" enctype="multipart/form-data">
		      <div class="modal-body">
		         <div class="form-group">
		         	<input type="text" name="product_name" class="form-control" placeholder="Product Name" required>
		         </div>
		         
		         <div class="form-group">
		         	<input type="text" name="size" class="form-control" placeholder="Size" required>
		         </div>
		         <div class="form-group">
		         	<input type="text" name="trade_mark" class="form-control" placeholder="Trade Mark" required>
		         </div>

					<div class="form-group">
					         	<input type="text" name="colour" class="form-control" placeholder="Colour" required>
					         </div>
					         <div class="form-group">
					         	<input type="text" name="quality" class="form-control" placeholder="Quality" required>
					         </div>
					         <div class="form-group">
					         	<input type="number" name="number" class="form-control" placeholder="Number" required>
					         </div>

					         <div class="form-group">
					         	<input type="text" name="style" class="form-control" placeholder="Style" required>
					         </div>



					         <div class="form-group">
					         	<input type="text" name="model" class="form-control" placeholder="Model" required>
					         </div>

					         <div class="form-group">
		         	<input type="text" name="price" class="form-control" placeholder="Price" required>
		         </div>
		                 <div class="form-group">
		         	<input type="text" name="payment_method" class="form-control" placeholder="payment method" required>
		         </div>
		                




		      </div>
		      <div class="modal-footer">
		            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancel</button>
		            <button name="register" class="btn btn-success btn-simple"><i class="fa fa-check-square"></i> ADD</button>
		      </div>
         </form>
    </div>
  </div>
  </div>
<?php
/*if(isset($_POST["register"])) {
	$product_name = $_POST['product_name'];
	$size = $_POST['size'];
	$trade_mark = $_POST['trade_mark'];
	$colour= $_POST['colour'];
	$quality =  $_POST['quality'];
	$number_n= $_POST['number'];
	$style = $_POST['style'];
	$model = $_POST['model'];
	
	$price =  $_POST['price'];
	$payment_method = $_POST['payment_method'];




		        $sql = mysql_query("INSERT INTO stock(product_name,size,trade_name,colour,quality,number_n,style,model,price,payment_method)VALUES('$product_name','$size','$trade_mark','$colour','$quality','$number_n','$style','$model','$price','$payment_method')");
			        if ($sql) {
			        	echo "<script>alert('Product Added')</script>";
			        	echo "<script>window.open('add_product.php','_self')</script>";
			        }else{
			        	echo '<span class="alert alert-danger">'.mysql_error().'Please try again!</span>';
			        }
			    }*/
include 'inc/footer.php';
?>