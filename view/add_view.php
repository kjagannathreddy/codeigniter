<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add Product | E-Shopper</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
	  <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
	  <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-57-precomposed.png">
    <style>
.err
{
color:red;
}
</style>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="<?php echo base_url(); ?>assets/images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html" class="active"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li>
										<li><a href="checkout.html" class="active">Checkout</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Add Products</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<div class="shopper-info">
							<p>New Product Information</p>
							<?php echo $msg; ?>
							<form method="post" action="<?php echo base_url();?>index.php/user_controller/add_now" enctype="multipart/form-data">
								<input type="text" name="pro_name" id="pro_name" placeholder="Product Name" /><span id="nerr"></span><?php echo form_error('pro_name');?>
								<input type="text" name="pro_brand" id="pro_brand" placeholder="Product Brand" /><span id="berr"></span><?php echo form_error('pro_brand');?>
								<input type="text" name="pro_mrp" id="pro_mrp" placeholder="Product MRP" /><span id="mrperr"></span><?php echo form_error('pro_mrp');?>
								<input type="text" name="pro_sp" id="pro_sp" placeholder="Product Offer Price" /><span id="sperr"></span><?php echo form_error('pro_sp');?>
								<input type="text" name="pro_qty" id="pro_qty" placeholder="Product Quantity" /><span id="qtyerr"></span><?php echo form_error('pro_qty');?>
                <input type="file" name="pro_img" id="pro_img" /><span id="imgerr"></span>
								<textarea name="pro_desc" id="pro_desc" placeholder="Product description"></textarea><span id="deserr"></span><?php echo form_error('pro_desc');?>
								<input  class="btn btn-primary" type="submit" value="Add" name="add" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->



	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2018 Freekart. All rights reserved.</p>
					<p class="pull-right">Modified by <span><a target="_blank" href="https://kjagannathreddy.github.io">Me</a></span></p>
				</div>
			</div>
		</div>
	</footer><!--/Footer-->
    <script src="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript">
    function validate()
    {
    	var err=true;
    	var pro_name=document.getElementById('pro_name').value;
    	var pro_brand=document.getElementById('pro_brand').value;
    	var pro_mrp=document.getElementById('pro_mrp').value;
    	var pro_sp=document.getElementById('pro_sp').value;
    	var pro_qty=document.getElementById('pro_qty').value;
    	var pro_desc=document.getElementById('pro_desc').value;
    	if(pro_name=="")
    	{
    		err=false;
    		document.getElementById('nerr').innerHTML="Enter product name";
    	}
    	else
    		document.getElementById('nerr').innerHTML="";
    	if(pro_mrp=="")
    	{
    		err=false;
    		document.getElementById('mrperr').innerHTML="Enter MRP";
    	}
    	else
    		document.getElementById('mrperr').innerHTML="";
    	if(pro_sp=="")
    	{
    		err=false;
    		document.getElementById('sperr').innerHTML="Enter Offer Price";
    	}
    	else
    		document.getElementById('sperr').innerHTML="";
    	if(pro_qty=="")
    	{
    		err=false;
    		document.getElementById('qtyerr').innerHTML="Enter quantity";
    	}
    	else
    		document.getElementById('qtyerr').innerHTML="";
    	if(pro_desc=="")
    	{
    		err=false;
    		document.getElementById('deserr').innerHTML="Enter description";
    	}
    	else
    		document.getElementById('deserr').innerHTML="";
    	var name_exp=/^[a-zA-Z0-9 ]+$/;
    	var num_exp=/^[0-9]+$/;
    	if(pro_name!="")
    	{
    		if(!name_exp.test(pro_name))
    		{
    			err=false;
    			document.getElementById('nerr').innerHTML="Invalid name";
    		}
    		else
    			document.getElementById('nerr').innerHTML="";
    	}
    	if(pro_brand!="")
    	{
    		if(!name_exp.test(pro_brand))
    		{
    			err=false;
    			document.getElementById('berr').innerHTML="Invalid brand name";
    		}
    		else
    			document.getElementById('berr').innerHTML="";
    	}
    	if(pro_mrp!="")
    	{
    		if(!num_exp.test(pro_mrp))
    		{
    			err=false;
    			document.getElementById('mrperr').innerHTML="Invalid mrp";
    		}
    		else
    			document.getElementById('mrperr').innerHTML="";
    	}
    	if(pro_sp!="")
    	{
    		if(!num_exp.test(pro_sp))
    		{
    			err=false;
    			document.getElementById('sperr').innerHTML="Invalid sp";
    		}
    		else
    			document.getElementById('sperr').innerHTML="";
    	}
    	if(pro_qty!="")
    	{
    		if(!num_exp.test(pro_qty))
    		{
    			err=false;
    			document.getElementById('qtyerr').innerHTML="Invalid qty";
    		}
    		else
    			document.getElementById('qtyerr').innerHTML="";
    	}
    	if(pro_desc!="")
    	{
    		if(!name_exp.test(pro_desc))
    		{
    			err=false;
    			document.getElementById('deserr').innerHTML="Invalid description";
    		}
    		else
    			document.getElementById('deserr').innerHTML="";
    	}
    	return err;
    }
    </script>
</body>
</html>
