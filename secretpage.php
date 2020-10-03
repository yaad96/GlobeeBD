<?php 
session_start();
set_include_path($_SERVER['DOCUMENT_ROOT'].'/controller');
//set_include_path($_SERVER['DOCUMENT_ROOT'].'/globev2.1/controller');
require_once('DBconnection.php');




$var= "SELECT * FROM category ";
$result=$conn->query($var);
$numOfBlog=$result->num_rows;

$blogList = array();
if($numOfBlog>0)
{
  $index=0;
  while ($row=$result->fetch_assoc()) {
  	//if($row['Approval']==1)
  	//{
    	$blogList[$index]=array('cname'=>$row['categoryname'],'number'=>$row['categorynumber']);
    	
    	$index=$index+1;
    
    
	}
  
}
$index=0;



?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Globeebd.com : Your one stop solution for protection against Corona Virus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Globeedb.com : Your one stop solution for protection against Corona Virus" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Reach Us</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Call</li>
						<li class="number-phone mt-3">Company Phone number</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.php">
						<!--<img src="images/logo1.png" alt="logo" width="200" height="200"> -->
							<span style="color:#951515;font-family:Times New Roman, Times, serif;">GlOBE</span> 
							<span style="color:#258626;font-family:Times New Roman, Times, serif;">Enterprise</span> 
						</a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					
						<a class="navbar-brand" href="index.php">
							<img src="images/logo1.png" alt="logo" width="100" height="100">
						</a>
				</div>
			</div>
			
			
			
		
				
				
		    <!--</div>-->
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item">
							<a class="nav-link ml-lg-0" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">About</a>
						</li>
						
						
						<li class="nav-item">
							<a class="nav-link" href="shop.html">Shop</a>
						</li>
						
						
						<li class="nav-item active">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.php">Home</a>
							<i>|</i>
						</li>
						<li>DATA INJECTION</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Admin এর বাড়া  </h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">Fuck akib jawad</p>
				<p class="sub text-center mb-lg-5 mb-3">3 images of product, 1 pdf, 1 spec image</p>
				
				<div class="contact_grid_right">
					<form action="./controller/product_upload.php" method="post" enctype="multipart/form-data">
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group">
									<label class="my-2">Product Name</label>
									<input type="text" name="pname" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Quantity</label>
									<input type="number" name="quantity" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="my-2">Price</label>
									<input type="text" name="price" placeholder="" required="">
								</div>
								
								<div class="form-group">
									<label class="my-2">Product Category</label>
									<select name="prodtype" type = "text">
									
										<?php

										while ($index<sizeof($blogList)){
											echo
											'<option value="'.$blogList[$index][number].'" type = "text">'.$blogList[$index][cname].'</option>'.
											
											$index=$index + 1;
										}
										$index = 0;
										?>		
								<!--	<option value="0" type = "text">PPE</option>
										<option value="1" type = "text">Oximeter</option>
										<option value="2" type = "text">Concentrator</option>
										<option value="3" name = "new" type = "text">new</option>-->
									</select>
								</div>
								
								<div class="form-group">
									<label class="my-2">Create Category</label>
									<input  type="text" name="cName" placeholder="">
								</div>
								
								<div class="form-group" >
									<label>Product Includes : </label>
									<textarea id="textarea" name  = "includes" placeholder="" required=""></textarea>
								</div>
								
								
								
							</div>
							
							<div class="col-md-6 con-right">
							    
							    
								<div class="form-group">
									<label>Description</label>
									<textarea id="textarea" name = "desc" placeholder="" required=""></textarea>
								</div>
								
								<input type="file" name="file[]" accept="image/*" multiple="multiple" />
								<input type="file" name="manual" accept=".pdf,.doc" />
								<input type="file" name="spec" accept="image/*" />
																
								
								<input class="form-control" type="submit" value="Submit">

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<div class="contact-map">
	
	
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.0082816519152!2d90.39782581542038!3d23.747084084591048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8911065a3db%3A0x7122770ce4980d04!2sRangs%20Eskaton%20Tower!5e0!3m2!1sen!2sbd!4v1592807961354!5m2!1sen!2sbd"
		    class="map" style="border:0" allowfullscreen=""></iframe>
	

		<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
		    class="map" style="border:0" allowfullscreen=""></iframe> -->
	</div>

	<!--footer -->
	<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>Serving the Nation in this Trying Times. To Know More <span> <a href ="contact.html">Click Here </a></span></p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="#">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-google-plus-g"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-linkedin-in"></span>
								</a>
							</li>
							
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Get in touch</h3>
					</div>
					<div class="contact-info">
						<h4>Location :</h4>
						<p>Madartek, Madaripur, Dhaka</p>
						<div class="phone">
							<h4>Contact :</h4>
							<p>Phone : +8801676239569 </p>
							<p>Email :
								<a href="mailto:info@example.com">info@example.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Quick Links</h3>
					</div>
					<ul class="links">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
						
						<li>
							<a href="shop.html">Shop</a>
						</li>
						<li>
							<a href="contact.html">Contact Us</a>
						</li>
					</ul>
				</div>
				
		
				
				
				
			</div>
			<div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; 2020 globeebd.com. Private Property | Designed by
					<a href="https://www.facebook.com/mainulyaad"> Emblem Bangladesh.</a>
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!--jQuery-->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!--search jQuery-->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie-search.js"></script>
	<script src="js/demo1-search.js"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


	<script src="js/bootstrap.js"></script>
	<!-- js file -->
</body>

</html>