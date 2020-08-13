
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoprite</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/user.css">
    <link rel="stylesheet" href="../assets/bootstrap/fonts/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><a class="navbar-brand navbar-link" href="#"><span class="glyphicon glyphicon-shopping-cart"></span>SHOPRITE e-STORE</a></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li  role="presentation"><a href="#">Register product</a></li>
                    <li role="presentation"><a href="#">search</a></li>
                    <li role="presentation"><a href="#">Available Product</a></li>
					<li role="presentation"><a href="../login.php">customers login</a></li>
					<li role="presentation"><a href="../order.php">Order</a></li>
					<li role="presentation"><a href="index.php">ADMIN LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
	
	
	
	
    <div class="jumbotron hero">
        <div class="container">
            <div class="row">
                
    <section class="testimonials">
        <h2 class="text-center">PRODUCT REGISTRATION FORM</h2>
        
    </section>
    <section class="features">
      <form method="post" action="#" enctype="multipart/form-data">
									      <div class="modal-body">
									      	<div class="form-group">
							<input type="text" name="product_name" class="form-control"  placeholder="Product Name" />
									      	</div>
									         <div class="form-group">
									    <input type="text" name="size" class="form-control"  placeholder="Size"/>
									         </div>
									        <div class="form-group">
								<input type="file" name="image" class="form-control"  placeholder="upload product image"/>
									         </div>
												<div class="form-group">
								<input type="text" name="product_make" class="form-control"  placeholder="Product Make"/>
									        	 </div>
									         <div class="form-group">
								<input type="text" name="colour" class="form-control"  placeholder="Colour"/>
									         </div>
									      <div class="form-group">
									    <input type="text" name="model" class="form-control"  placeholder="model"/>
									         </div>
											 <div class="form-group">
									    <input type="text" name="price" class="form-control"  placeholder="price"/>
									         </div>
											 
									      </div>
									      <div class="modal-footer">
			<button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancel</button>
			<button name="update" class="btn btn-success btn-simple"><i class="fa fa-check-square"></i> Submit</button>
									      </div>
							         </form>
                                     
                                     
                                     <?php
        // session_start();
		include 'inc/connect.php';
           /*$conn = mysql_connect('localhost','root','');
          $db = mysql_select_db("shoprite");*/
    if(isset($_POST['update'])){
		$product_id=chr(rand(65,90)). rand(10000,100000);
	$select= "select * from stock where product_id = '$product_id'";
	$query=mysql_query($select);
	$num = mysql_num_rows($query);
	if ($num>0){
		echo '<script type="text/javascript">alert("product id already exist")</script>'.'<br>';
	}else{
        $product_name=$_POST['product_name'];
		$size=$_POST['size'];
		$filename=$_FILES['image']['name'];
		$product_make=$_POST['product_make'];
        $colour=$_POST['colour']; 
        $model=$_POST['model'];
		$price=$_POST['price'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
							
    
    $insert= mysql_query("insert into stock values('','$product_name','$location','$size','$product_make','$colour','$model','$product_id','$price', now())")or die("could not insert into reg table".mysql_error());
	 /*$insert= mysql_query("insert into generate_id values('','$product_id','$price', now())")or die("could not insert into reg table".mysql_error());*/
	
	if($insert){ ?>
		 <script type='text/javascript'>
                      alert('PRODUCT SUCCESSFULLY ADDED AND THE PRODUCT ID:<?php echo $product_id; ?>'); </script>
					<?php header ('add_product.php');?>
		
		<?php }else{
      ?><script type="text/javascript">alert("PRODUCT NOT ADDED SUCCESS, PLEASE TRY AGAIN!!!");</script><?php
	}
	}
	}
	?>

    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5>shoprite App © 2018 powered by promise</h5></div>
                <div class="col-sm-6 social-icons"><a href="#"><span class="fa fa-facebook"></span></a><a href="#"><span class="fa fa-twitter"></span></a><a href="#"><span class="fa fa-instagram"></span></a></div>
            </div>
        </div>
        <div></div>
    </footer>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>