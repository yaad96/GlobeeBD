<?php 
session_start();
set_include_path($_SERVER['DOCUMENT_ROOT'].'/controller');
//set_include_path($_SERVER['DOCUMENT_ROOT'].'/globev1.10/controller');
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
    //}
    //$i=0;
    //while ($i<$row['NumberOfFile'] ) 
    //{
    //	$j=$i+1;
    //	$filename="File".$j;
    //	array_push($blogList[$index],$row["'".$filename."'"]);
    //	$i=$i+1;    
    //}
    //$i=0;
    
  }
  //print_r($blogList);
}
$index=0;

?>

<!DOCTYPE html>
<html lang="zxx">

<head>

	
	<link rel="manifest" href="/site.webmanifest">	
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />

	<style>
* {
  box-sizing: border-box;
}


#stroke{
	color: white;
	font-size: 60px;
	-webkit-text-stroke: 1px #23430C;
	text-shadow: -1px 1px 2px #23430C,
				  1px 1px 2px #23430C,
				  1px -1px 0 #23430C,
				  -1px -1px 0 #23430C;
}

#blink {
        
        font-weight: bold;
        
        color: #DC143C;
        transition: 0.4s;
      }
      
#blink2 {
        
        font-weight: bold;
        
        color: #DC143C;
        transition: 0.4s;
      }      



/* Float four columns side by side */
.column1 {
  float: left;
  width: 33%;
  padding: 0 10px;
  font-weight: bold;
}

/* Remove extra left and right margins, due to padding */
.row1{margin: 0 -5px;}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.top_infected {
  	
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  height: 60%;
  padding: 16px;
  text-align: center;
  background-color: rgba(255,255,0,0.4);
  border-radius: 15px 15px 0px 0px;
  
  /* border-bottom: 160px solid rgba(255,0,0,0.8); */
} 

.bottom_infected {
  	
  
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
	height: 40%;
	padding: 8px;
	text-align: center;
	background-color: rgba(255,255,0,0.8);
	border-radius: 0px 0px 15px 15px;
	
	/* border-bottom: 160px solid rgba(255,0,0,0.8); */
} 

.top_recovered {
  	
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  height: 60%;
  padding: 16px;
  text-align: center;
  background-color: rgba(0,255,0,0.4);
  border-radius: 15px 15px 0px 0px;
  
}

.bottom_recovered {
  	
  
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	height: 40%;
	padding: 8px;
	text-align: center;
	background-color: rgba(0,255,0,0.7);
	border-radius: 0px 0px 15px 15px;
}

.top_dead {


	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	height: 60%;
	padding: 16px;
	text-align: center;
	background-color: rgba(255,0,0,0.2);
	border-radius: 15px 15px 0px 0px;
	
} 

.bottom_dead {
		
	
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
	height: 40%;
	padding: 8px;
	text-align: center;
	background-color: rgba(255,0,0,0.7);
	border-radius: 0px 0px 15px 15px;

} 

#videoListContainer {

	position: relative;
	overflow: hidden;
	width: 100%;
	padding-top: 56.25%;


}

.responsive-iframe {
  position: absolute;
  top: 5%;
  left: 15%;
  bottom: 5%;
  right: 15%;
  width: 70%;
  height: 70%;
}
	



</style>


	
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6 style= "font-weight:bold;color:red" id = "blink2">Reach Us 24/7</h6>
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
							<img src="images/logo1.png" class="img-fluid" alt="">
							 
						</a>	
							
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					
						<a class="navbar-brand" href="index">
						<!--<img src="images/logo1.png" alt="logo" width="100" height="100">-->
							</a>
					
						
						
						
						
				
				<!--<ul class="cart-inner-info">
						<li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									My Cart
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form>
						</li>
					</ul> -->
					<!---->
				<!--	<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Login Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="#" method="post">
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
									<div class="form-check mb-2">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">Check me out</label>
									</div>
									<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>

								</form>
							</div>
							
						</div>
					</div> 
					<!---->
				</div>
			</div>
			
			
			
		<!--	<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>-->
				<!-- open/close -->
			<!--	<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form action="#" method="post" class="d-flex">
						<input class="form-control" type="search" placeholder="Search here..." required="">
						<button type="submit" class="btn btn-primary submit">
							<i class="fas fa-search"></i>
						</button>
					</form>

				</div>
				<!-- open/close -->
				
				
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
						<li class="nav-item active">
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
											<!--<li class="">
													<a href="shop.php"> Ray-Ban</a>
												</li>
												<li>
													<a href="shop.php">Prescription Glasses</a>
												</li>
												<li class="mt-3">
													<h5>View more pages</h5>
												</li>
												<li class="mt-2">
													<a href="about.html">About</a>
												</li>
												<li>
													<a href="customer.html">Customers</a>
												</li> -->
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Oxygen Concetrator </h5>
											<div class="media-mini mt-3">
												<a href="shop">
													<img src="images/o3.png" class="img-fluid" alt="">
												</a>
											</div>
										</div>
									<!--	<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub">Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.php">
													<img src="images/g3.jpg" class="img-fluid" alt="">
												</a>
											</div>

										</div> -->
									</div>
									<hr>
								</li>
							</ul>
						</li>
						
					
						
						<li class="nav-item">
							<a class="nav-link" href="shop">Products</a>
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
		<!-- //header -->
		<!-- banner -->
		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
				<!-- slideshow er item er image ase style.css er .carousel-item er okhane -->
					<div class="carousel-item active">
						<div class="carousel-caption text-center">
							<h3>Personal Protective Equipment
								<span>For Medical Professionals And Frontliners</span>
							</h3>
							<a href="shop" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</div>
					</div>
					<div class="carousel-item item2">
						<div class="carousel-caption text-center">
							<h3>OxyMeter
								<span>Very Necessary to Check Oxygen Level in Blood</span>
							</h3>
							<a href="shop" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

						</div>
					</div>
					<div class="carousel-item item3">
						<div class="carousel-caption text-center">
							<h3>Oxygen Concentrator
								<span>A Portable Replacement of Oxygen Cylinder</span>
							</h3>
							<a href="shop" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

						</div>
					</div>
				
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--//banner -->
		</div>
	</div>
	<!--//banner-sec-->
	
	
	
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
			
				<h3 class="tittle-w3layouts my-lg-4 my-4">Our Products </h3>
				<div class="owl-carousel owl-theme row">
					
					

							<?php
								while ($index<sizeof($blogList) && $index<4){
									echo
									'<div class = "item">
								
										<div class="product-googles-info googles">
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
								// $index = 0;
							
							?>
					
					
					
		
					
					
					
					
					
					
					
					
				</div> 
				<!-- //womens -->
				<!-- /mens -->
				
				
				
				<!--//row-->
				<!--/meddle-->
				<h3 class="tittle-w3layouts text-center my-lg-4 my-4" id = "blink">Live Covid-19 Update</h3>
				
				<div class="row">
					<div class="column1">
						<div class="top_recovered">
							<h3> <div style="font-weight:bold;"> RECOVERED :  </div> </h3>
							<h3> <div style="font-weight:bold;"> <div id = "nr"> </div> </div></h3>
							</div>
							<div class="bottom_recovered">
							<div style="font-size=10px;"> 
							<a> WORLDWIDE RECOVERED : </a> 
							<div id = "tr" > </div>
							</div>
						</div>
					</div>

				<div class="column1">
					<div class="top_infected">
					<h3> <div style="font-weight:bold;">  INFECTED : </div></h3>
					<h3> <div style="font-weight:bold;"> <div id = "ni"> </div> </div> </h3>
					</div>
					<div class="bottom_infected">
					<div style="font-size=10px;"> 
					<a> WORLDWIDE INFECTED : </a> 
					<div id = "ti" > </div>
					</div>
					</div>

				</div>
  
				<div class="column1">
						<div class="top_dead">
							<h3> <div style="font-weight:bold;">  DEATH : </div>  </h3>
							<h3> <div style="font-weight:bold;"> <div id = "nd" > </div> </div> </h3>
							</div>
							<div class="bottom_dead">
							<div style="font-size=10px;"> 
							<a> WORLDWIDE DEATH : </a> 
							<div id = "td" > </div>
							</div>
						</div>
					</div>
  
  
				</div>
				
				
				
				
				<div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info ">

							<a href="hospital&lab_list">
							<h3  id="stroke" class="tittle-w3layouts two text-center my-lg-4 mt-3">COVID-19 Dedicated Hospitals & Labs</h3></a>
						</div>
					</div>
				</div>
				<!--//meddle-->
				<!--/slide-->
				
				<h3 class="tittle-w3layouts text-center my-lg-4 my-4">HELPFUL VIDEOS</h3>
				
					<div class="slider-img mid-sec" id="videoListContainer" ></div>
				
				
				
				
				
				
				
				
				
				
				<div class="slider-img mid-sec">
					<!--//banner-sec-->
					<div class="mid-slider">
						<div class="owl-carousel owl-theme row">
							
							
							
						

							<?php
								while ($index<sizeof($blogList) && $index<8){
									echo
									'<div class = "item">
								
										<div class="product-googles-info googles">
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


							
							
							
							
				
														
						</div>
					</div>
				</div>
				<!-- /testimonials -->
				
				
				
				
				<div class="testimonials py-lg-4 py-3 mt-4">
					<div class="testimonials-inner py-lg-4 py-3">
						<h3  class="tittle-w3layouts text-center my-lg-4 my-4">Feedback From Buyers</h3>
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
							
							
							
								
								
								
								
								
								<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="fas fa-long-arrow-alt-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>

								</a>
							</div>
						</div>
					</div>
				</div>
				
				
				
				
				
				<!-- /grids -->
				<div class="bottom-sub-grid-content py-lg-5 py-3">
					<div class="row">
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">

								<span class="far fa-hand-paper"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Satisfaction Guaranteed</h4>
							<p>.</p>
							
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="fas fa-rocket"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Fast Shipping</h4>
							<p>.</p>
							<p>
								<a href="shop" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="far fa-sun"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Genuine Product</h4>
							<p>100% Imported Goods</p>
							
						</div>
						<!-- /.col-lg-4 -->
					</div>
				</div>
				<!-- //grids -->
				<!-- /clients-sec -->
				
				
				<div class="testimonials p-lg-5 p-3 mt-4">
					<div class="row last-section">
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-gift"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Genuine Product</h3>
								<p></p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-shield-alt"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Secure Products</h3>
								<p></p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Cash on Delivery</h3>
								<p></p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Easy Delivery</h3>
								<p></p>
							</div>
						</div>
					</div>
				</div>
				
				
				<!-- //clients-sec -->
			</div>
		</div>
	</section>
	<!-- about -->
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
							<p>Phone : +88 01911930303 </p>
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
	
	
	<script src="https://apis.google.com/js/api.js"></script>
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
    <!--<script src="finalscript.js"></script>-->
	<script type = "text/javascript">
	
	gapi.load("client", loadClient);
 
	function loadClient() {
		gapi.client.setApiKey("AIzaSyB7AuikAEv1fEb-If6N53VNUSRZHSCM-f8");
		return gapi.client.load("https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest")
			.then(function() { console.log("GAPI client loaded for API");
					execute();		
					},
					function(err) { console.error("Error loading GAPI client for API", err); });
	}

 
// Make sure the client is loaded before calling this method.
	function execute() {
    
	
		const videoList = document.getElementById('videoListContainer');
 
		var arr_search = {
			"part": 'snippet',
			"type": 'video',
			"channelId": 'UCeG7m5-AJ4I0H4EIleIty4Q',
			"order": 'date',
			"maxResults": '1',
			"q": 'এক নজরে করোনা পরিস্থিতি'
		};
 
    
 
		return gapi.client.youtube.search.list(arr_search)
			.then(function(response) {
			console.log(response);
        // Handle the results here (response.result has the parsed body).
			const listItems = response.result.items;
			if (listItems) {
				let output = '<ul>';
 
				listItems.forEach(item => {
					const videoId = item.id.videoId;
					const videoTitle = item.snippet.title;
					output += `
						<li style = "text-align:center"><iframe class="responsive-iframe"  frameborder="0" allowfullscreen src="https://www.youtube.com/embed/${videoId}"></iframe><h4 style="margin-top: -10%;">${videoTitle}</h4></li>
					`;
				});
				output += '</ul>';
 
           
 
            // Output list
				videoList.innerHTML = output;
			}
		},
		function(err) { console.error("Execute error", err); });
		}
	
	
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!-- Modal -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<img src="images/flyer.jpg" class="img-fluid" alt="">
				</div>

			</div>
		</div>
	</div>
	
	
	
	
	
	
	
<!--<script>
		$(document).ready(function () {
			$("#myModal").modal();
		});
	</script>-->
	<!-- // modal -->
	
	
	<script type = "text/javascript">
		fetch('https://corona.lmao.ninja/v2/countries/Bangladesh')
		.then((response)=>{
			return response.json();
		})
		.then((data)=>{
			console.log(data);
				var nr= data.recovered;
				var chod1 = document.getElementById("nr");
				
			    nr=nr.toLocaleString();
				chod1.innerHTML = nr;
				
				var nr= data.cases;
				var chod1 = document.getElementById("ni");
				
				nr=nr.toLocaleString();
				chod1.innerHTML = nr;
				
				var nr= data.deaths;
				var chod1 = document.getElementById("nd");
				
				nr=nr.toLocaleString();
				chod1.innerHTML = nr;
				
				
				
		})
	</script>
	
	
	<script type = "text/javascript">
		fetch('https://corona.lmao.ninja/v2/all')
		.then((response)=>{
			return response.json();
		})
		.then((data)=>{
			console.log(data);
				var nr= data.recovered;
				var chod1 = document.getElementById("tr");
				
				nr=nr.toLocaleString();
				chod1.innerHTML = nr;
				
				var nr= data.cases;
				var chod1 = document.getElementById("ti");
				
				nr=nr.toLocaleString();
				chod1.innerHTML = nr;
				
				var nr= data.deaths;
				var chod1 = document.getElementById("td");
				
				nr=nr.toLocaleString();
				chod1.innerHTML = nr;
				
				
				
		})
	</script>
	
	
	<script type="text/javascript">
      var blink = document.getElementById('blink');
      setInterval(function() {
        blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
      }, 1000);
    </script>
    
    <script type="text/javascript">
      var blink2 = document.getElementById('blink2');
      setInterval(function() {
        blink2.style.opacity = (blink2.style.opacity == 0 ? 1 : 0);
      }, 1000);
    </script>
	

	<!--<script type = "text/javascript" src = "js/jquery.js"></script>
	<script type="text/javascript">
		$.ajax({
			url : "https://api.covid19api.com/summary",
			type : "GET",
			dataType : "JSON",
			success : function(data){
				console.log(data);
				console.log(data.Countries[13]);
				
				var nr= data.Countries[13].NewRecovered;
				var chod1 = document.getElementById("nr");
				
				chod1.innerHTML = nr;
				
				var nr= data.Countries[13].TotalRecovered;
				var chod1 = document.getElementById("tr");
				
				chod1.innerHTML = nr;
				
				var nr= data.Countries[13].NewConfirmed;
				var chod1 = document.getElementById("ni");
				
				chod1.innerHTML = nr;
				
				var nr= data.Countries[13].TotalConfirmed;
				var chod1 = document.getElementById("ti");
				
				chod1.innerHTML = nr;

				var nr= data.Countries[13].NewDeaths;
				var chod1 = document.getElementById("nd");
				
				chod1.innerHTML = nr;

				var nr= data.Countries[13].TotalDeaths;
				var chod1 = document.getElementById("td");
				
				chod1.innerHTML = nr;
				
				
				
				
				
				
			}
		});
	
	
	</script>-->



	
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
	<!-- Count-down -->
	<script src="js/simplyCountdown.js"></script>
	<link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<!--<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script> -->
	<!--// Count-down -->
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