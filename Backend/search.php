
<?php
//$con =mysql_connect("localhost","root","");
//$db=mysql_select_db('shoprite',$con);
include 'inc/header.php';
include 'inc/sidebar.php';
include 'inc/connect.php';



if(isset($_POST['search']) && isset($_POST['submit']))
{






}




?>






<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <!--<link rel="stylesheet" href="../assets1/bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="../assets1/css/styles.css">
    <link rel="stylesheet" href="../assets1/css/Pretty-Registration-Form.css">
</head>

<body>
    <!--<div class="container-fluid">
        <a href="../index.php">Home</a>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">SEARCH FOR AVAILABLE PRODUCT</h3></div>
            <div class="panel-body">
                <form action="" method ="Post">
                    <div class="form-group has-error has-feedback">
                        <label class="control-label" for="search-input">ENTER PRODUCT ID</label>
                        <div class="input-group">
                            <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
                            <input type="search" name="search" id="search-input"/>
                        </div><i class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></i></div>
                    <div class="form-group has-success"></div>
                    <div class="form-group has-warning">
                        <button class="btn btn-primary" type="submit" name="submit">SEARCH </button>
                    </div>
                </form>-->
                
                <!--<div class="table-responsive">-->
                <div id="page-wrapper">
	<div class="row">
                <!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header"> SEARCH FOR PRODUCT</h1>
            <form action="" method="post">
                <label>ENTER PRODUCT ID</label>
                 <input class="form-control" type="search" name="search" id="search-input"/>
                 <button class="btn btn-primary" type="submit" name="submit">SEARCH </button>
                </form>
		</div>
		<!-- Page Header -->
        </div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>SEARCH RESULT</h3>
					
				</div>
				<div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
              
                                <th>PRODUCT NAME </th>
                                <th>PRODUCT MODEL </th>
                                 <th>PRODUCT MAKE </th>
                                 <th>DATE AND TIME OF STOCK </th>
                            <th><i class="fa fa-bars"></i></th>
                        </thead>
                        <tbody>


                            <?php
                            //$item=$_POST['search'];


if(isset($_POST['submit'])) {
$item = ($_POST['search']);

                            $fetch = mysql_query("SELECT * FROM stock WHERE product_id='$item'" );


                                while ($row = mysql_fetch_array($fetch)) {



                            ?>
                            <tr>
                                <td><?php echo $row['product_name']?></td>
                                <td><?php echo $row['model']?></td>
                                <td><?php echo $row['product_make']?></td>
                                <td><?php echo $row['datess']?></td>
                            </tr>
                            <?php }
							
							} ?>
                            <tr></tr>
                        </tbody>
                        <tfoot>
                            <tr></tr>
                        </tfoot>
                    </table>
               </div>
			</div>
		</div>
	</div>
    <!--<script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>-->
   <?php include 'inc/footer.php';?>
</body>

</html>