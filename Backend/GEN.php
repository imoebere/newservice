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
			<h1 class="page-header">customers</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Customers Details</h3>
				</div>
				<div class="panel-body table-responsive" style="overflow:auto">
					
							<?php
							include('connect.php');
							$GEN = chr(rand(65,97)).chr(rand(65,97)).rand(1234,99999).rand(1234,99999).chr(rand(65,97)).chr(rand(65,97));
							echo $GEN;
							$insert = mysql_query("insert into track_table values('','$GEN',now())")or
							 die ('could not insert into track table'.mysql_error());
							 
							 ?>
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