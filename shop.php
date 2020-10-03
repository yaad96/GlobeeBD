<?php 
session_start();
set_include_path($_SERVER['DOCUMENT_ROOT'].'/controller');
require_once('DBconnection.php');

$var= "SELECT * FROM product";
$result=$conn->query($var);
$numOfBlog=$result->num_rows;

$blogList = array();
if($numOfBlog>0)
{
  $index=0;
  while ($row=$result->fetch_assoc()) {
  	//if($row['Approval']==1)
  	//{
    	$blogList[$index]=array('PID'=>$row['PID'],'name'=>$row['name'],
    					'Quantity'=>$row['Quantity'],'Price'=>$row['Price'],
						'Category'=>$row['Category'],
						'Includes'=>$row['Includes'],
						'description'=>$row['description'],
    					'Files'=>$row['numberofFile']);
    	if($row['numberofFile']>0)
    		array_push($blogList[$index],$row['File1']);
    	$index=$index+1;
    
  }
  //print_r($blogList);
}
$index=0;
$midx=0;

$var2="SELECT * from category";
$result2=$conn->query($var2);
$numOfCatg=$result2->num_rows;

$catgList = array();
if($numOfCatg > 0) {
	while ($row=$result2->fetch_assoc()) {
		$catgList[$index]=array('CategoryId'=>$row['categorynumber'],
								'CategoryName'=>$row['categoryname']);

		$index=$index+1;
	}
}

$index = 0;

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
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>

<body>
<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6 style= "font-weight:bold;color:red">Reach Us 24/7</h6>
					<ul>
						<p>
						        <a href = "tel:09612001144">
						            <span class = "fas fa-phone"> : 09612001144</span>
						        </a>
						</p>
						
						
						<p>
								<a href="mailto:globeebd@gmail.com"> 
								<span class = "fa fa-envelope"> : globeebd@gmail.com</span></a>
									
							</p>
								
						<p>
								<a href="https://www.facebook.com/globeebd">
								<span class="fab fa-facebook-f"> : www.facebook.com/globeebd</span>
								</a>
	                       </p>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index">
						    <img src="images/logo1.png"  class="img-fluid" alt="" >
							 
						</a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					
						<a class="navbar-brand" href="index">
						
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
							<a class="nav-link ml-lg-0" href="index">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Featured
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Frequently Bought  </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop">Oxygen Concentrator</a>
												</li>
											
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Oxygen Concetrator </h5>
											<div class="media-mini mt-3">
												<a href="shop">
													<img src="images/globe1.png" class="img-fluid" alt="">
												</a>
											</div>
										</div>
									
									</div>
									<hr>
								</li>
							</ul>
						</li>
						
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Product Categories
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
									<?php
											while($index<sizeof($catgList)) {
												echo
												'<div class="col-md-4 media-list span4 text-left">
											
													<h5 class="tittle-w3layouts-sub"> '.$catgList[$index]['CategoryName'].'  </h5>
													<ul>
														<li class="media-mini mt-3">
															<a href="'.'shopcategory'.'?categoryId='.$catgList[$index]['CategoryId'].'" style="color:#951515;font-size:18px;">Explore '.$catgList[$index]['CategoryName'].'</a>
														</li>';
														while($midx<sizeof($blogList)) {
															if($blogList[$midx]['Category'] == $catgList[$index]['CategoryId']) {
																echo
																'
																<li class="media-mini mt-3">
																	<a href="'.'product'.'?pid='.$blogList[$midx]['PID'].'"">'.$blogList[$midx]['name'].'</a>
																</li>';

															}
															$midx=$midx+1;
															
														}
														echo
															'
													</ul>
												</div>';

												$index = $index+1;
												$midx=0;
										
											}

											$index = 0;
											$midx=0;



										?>
											
										
									</div>
									<hr>
								
								</li>
							</ul>


						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="about">About</a>
						</li>
						
						
						<li class="nav-item">
							<a class="nav-link" href="contact">Contact</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
    </div>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index">Home</a>
							<i>|</i>
						</li>
						<li>Shop</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<div class="row">
						<!-- product left -->
				<!--	
						
						
						
						<!-- //product left -->
						<!--/product right-->
						<div class="left-ads-display col-lg-20">
							<div class="wrapper_top_shop">
							<!--<div class="row">
										<div class="col-md-6 shop_left">
											<a href = "contact.html">
												<img src="images/banner3.jpg" alt="">
												<h6>Most Popular in this category </h6>
											</a>
										</div>
										
										<div class="col-md-6 shop_right">
											<a href = "about.html">
												<img src="images/banner4.jpg" alt="">
												<h6>most popular 2 in this category</h6>
											</a>	
										</div>
						
								</div>-->
								
							</div>
						</div>
						<!--//product right-->
					</div>
					
					
					
					
					<!--/slide-->
				<div class="slider-img mid-sec mt-lg-5 mt-2">
						<!--//banner-sec-->
						<h3 class="tittle-w3layouts text-left my-lg-4 my-3">All Products</h3>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
							
								<?php
									while ($index<sizeof($blogList)){
										echo
										'<div class = "item">
									
											<div class="product-googles-info googles slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
													<a href="'.'product'.'?pid='.$blogList[$index]['PID'].'">'.
														'<img src="'.$blogList[$index][0].'" class="img-fluid" alt="">'.'</a>'.
															'<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="'.'product'.'?pid='.$blogList[$index]['PID'].'" class="link-product-add-cart">Quick View</a>
																</div>
															</div>'.
														
														'<span class="product-new-top">In Stock</span>
													</div>
													<div class="item-info-product">
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="'.'product'.'?pid='.$blogList[$index]['PID'].'"">'.$blogList[$index]['name'].'</a>
																	</h4>'.
																	'<div class="grid-price mt-2">
																		<span class="money "> Tk.'.$blogList[$index]['Price'].'</span>
																	</div>
																</div>
																
															</div>
															
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										
										</div>';
											
								
								
										$index = $index +1;
									}
									$index = 0;
								
								?>
							
							
							
							<!--<div class = "item">
								
										<div class="product-googles-info googles slide-img googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/s1.jpg" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.html" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">In Stock</span>
												</div>
												<div class="item-info-product">
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">Product 1</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">Tk.300</span>
																</div>
															</div>
															
														</div>
														
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									
									</div>-->
									
						<!--<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/s6.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.html" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.html">MARTIN Aviator </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$425.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="MARTIN Aviator">
																	<input type="hidden" name="amount" value="425.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
	
															</div>
														</div>
	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> -->
								
								
								
								
								
							</div>
						</div>
					</div>
					<!--//slider-->
				</div>
			</div>
		</section>
		<!--footer -->
		<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>Serving the Nation in this Trying Times. To Know More <span> <a href ="contact">Click Here </a></span></p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="https://www.facebook.com/globeebd">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="https://www.instagram.com/globeebd">
									<span class="fa">&#xf16d;</span>
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
						<p>318/1, Senpara Parbata, Mirpur 10, Dhaka-1216</p>
						<div class="phone">
							<h4>Contact :</h4>
							<p>Phone : +88 0191130303 </p>
							<p>Email :
								<a href="mailto:globeebd@gmail.com">globeebd@gmail.com</a>
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
							<a href="index">Home</a>
						</li>
						<li>
							<a href="about">About</a>
						</li>
						
						<li>
							<a href="shop">Shop</a>
						</li>
						<li>
							<a href="contact">Contact Us</a>
						</li>
					</ul>
				</div>
				
		<!--	<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Sign up for your offers</h3>
					</div>
					<div class="footer-text">
						<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
						<form action="#" method="post">
							<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
							<button class="btn1">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>-->
				
				
				
			</div>
			<div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; 2020 globeebd.com. Private Property | Designed by
					<a href="https://www.facebook.com/emblembangladesh"> Emblem Bangladesh.</a>
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
		<!-- price range (top products) -->
		<script src="js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

		<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 2,
							nav: false
						},
						900: {
							items: 3,
							nav: false
						},
						1000: {
							items: 4,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>

		<!-- //end-smooth-scrolling -->


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