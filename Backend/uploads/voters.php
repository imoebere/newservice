<?php
include 'inc/header.php';
include 'inc/sidebar.php';
$fetch = mysql_query("SELECT * FROM voters");
?>
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
					<h3>add product</h3>
					<a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#candidateReg"><i class="fa fa-plus"></i> ADD PRODUCT</a>
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-striped">
						<thead>
							<th>product name</th>
							<th>size</th>
							<th>trade mark</th>
							<th>colour</th>
							<th>number</th>
							<th>model</th>
							<th>price</th>


							<th><i class="fa fa-bars"></i></th>
						</thead>
						<tbody>
							<?php
								while ($row = mysql_fetch_array($fetch)) {
							?>
							<tr>
								<td><?php echo $row['fullname']?></td>
								<td><?php echo $row['staff_num']?></td>
								<td><?php echo $row['phone']?></td>
								<td><?php echo $row['reg_date']?></td>
								<td><a data-toggle="modal" data-target="#edit<?php echo $row['id']?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a><a data-toggle="modal" data-target="#delete<?php echo $row['id']?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
							</tr>
							<div class="modal fade" id="edit<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							        <h4 class="modal-title" id="myModalLabel"><center>EDIT VOTER'S ACCOUNT</center></h4>
							      </div>
							         <form method="post" action="#" enctype="multipart/form-data">
									      <div class="modal-body">
									      	<div class="form-group">
									      		<input type="text" name="id" class="form-control" value="<?php echo $row['id']?>" readonly>
									      	</div>
									         <div class="form-group">
									         	<input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname']?>" placeholder="Candidate's Fullname">
									         </div>
									         <div class="form-group">
									         	<select name="sex" class="form-control">
									         		<option selected="" disabled="">Select Gender</option>
									         		<option value="Male">Male</option>
									         		<option value="Female">Female</option>
									         	</select>
									         </div>
									         <div class="form-group">
									         	<input type="text" name="staff_num" class="form-control" value="<?php echo $row['staff_num']?>" placeholder="Staff Number">
									         </div>
									         <div class="form-group">
									         	<input type="text" name="phone" class="form-control" value="<?php echo $row['phone']?>" placeholder="Phone Number">
									         </div>
									      </div>
									      <div class="modal-footer">
									            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancel</button>
									            <button name="update" class="btn btn-success btn-simple"><i class="fa fa-check-square"></i> Update</button>
									      </div>
							         </form>
							         <?php
							         	if (isset($_POST['update'])) {
							         		$fullname = $_POST['fullname'];
							         		$staff_num = $_POST['staff_num'];
							         		$phone = $_POST['phone'];
							         		$id = $_POST['id'];
							         		$update_row = mysql_query("UPDATE voters SET fullname = '$fullname', staff_num = '$staff_num', phone = '$phone' WHERE id = '$id' ");
							         		if ($update_row) {
							         			echo "<script>alert('Account Updated Succesfully')</script>";
							         			echo "<script>window.open('voters.php','_self')</script>";
							         		}else{
							         			echo "<script>alert('".mysql_error()."')</script>";
							         		}
							         	}
							         ?>
							    </div>
							  </div>
							  </div>

							  <div class="modal fade" id="delete<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
									      <div class="modal-body">
									      Do you want to delete the account of <b><?php echo $row['fullname']?></b>
									        </div>
									      <div class="modal-footer">
									            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancel</button>
									            <a name="update" href="voters_del.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-simple"><i class="fa fa-check-square"></i> Delete</a>
										      </div>
							    </div>
							  </div>
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
        <h4 class="modal-title" id="myModalLabel"><center>ADD NEW VOTER</center></h4>
      </div>
         <form method="post" action="#" enctype="multipart/form-data">
		      <div class="modal-body">
		         <div class="form-group">
		         	<input type="text" name="fullname" class="form-control" placeholder="Candidate's Fullname">
		         </div>
		         <div class="form-group">
		         	<select name="sex" class="form-control">
		         		<option selected="" disabled="">Select Gender</option>
		         		<option value="Male">Male</option>
		         		<option value="Female">Female</option>
		         	</select>
		         </div>
		         <div class="form-group">
		         	<input type="text" name="staff_num" class="form-control" placeholder="Staff Number">
		         </div>
		         <div class="form-group">
		         	<input type="text" name="phone" class="form-control" placeholder="Phone Number">
		         </div>
		      </div>
		      <div class="modal-footer">
		            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancel</button>
		            <button name="register" class="btn btn-success btn-simple"><i class="fa fa-check-square"></i> Register</button>
		      </div>
         </form>
    </div>
  </div>
  </div>
<?php
if(isset($_POST["register"])) {
	$fullname = $_POST['fullname'];
	$sex = $_POST['sex'];
	$staff_num = $_POST['staff_num'];
	$phone = $_POST['phone'];
	$reg_date =  date("j F Y. h:iA");
	$password = $staff_num.'pw';
		        $sql = mysql_query("INSERT INTO voters(fullname,sex,staff_num,phone,reg_date,password)VALUES('$fullname','$sex','$staff_num','$phone','$reg_date','$password')");
			        if ($sql) {
			        	echo "<script>alert('Candidate has been registered into the database!')</script>";
			        	echo "<script>window.open('voters.php','_self')</script>";
			        }else{
			        	echo '<span class="alert alert-danger">'.mysql_error().'Please try again!</span>';
			        }
			    }
include 'inc/footer.php';
?>