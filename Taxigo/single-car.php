<?php
include 'dbcon.php';
if(!(isset($_SESSION['user_name'])))
{	
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from haintheme.com/demo/html/supershine/single-car.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:43:52 GMT -->
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cire Hire</title>
  <!--Fonts-->
  
  <!--Bootstrap-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <!--Font Awesome-->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!--Simple Line Icons-->
  <link rel="stylesheet" href="css/ionicons.min.css">
  <!--Owl Carousel-->
  <link rel="stylesheet" href="vendors/owl.carousel/owl.carousel.css">
  <!--Select-->
  <link rel="stylesheet" href="vendors/bootstrap-select/css/bootstrap-select.css">
  <!-- Plyr -->
  <link rel="stylesheet" href="vendors/plyr/plyr.css">
  <!-- Scrollbar -->
  <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
  <!-- Popup -->
  <link rel="stylesheet" href="vendors/magnific/magnific-popup.css">
  <!--Theme Styles-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/theme.css">
</head>
<body>
  <!--Top Bar-->
  <section class="row top-bar">
  <div class="container">
  <div class="welcome-texts"><span class="welcome-text">Welcome to</span><span>Super Shine!</span></div>
  <ul class="social-lists-wSearch nav nav-pills">
  	<li class="search-pop"><a href="#"><span class="ion-ios-search-strong"></span></a></li>
  	<li><a href="#"><i class="ion-social-facebook"></i></a></li>
  	<li><a href="#"><i class="ion-social-twitter"></i></a></li>
  	<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
  	<li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
  	<li><a href="#"><i class="ion-social-rss"></i></a></li>
  </ul>
  </div>
  </section>
  <!--Info Bar-->
  <section class="row info-bar">
  <div class="container">
  	<div class="row">
  		<div class="col-sm-3 col-xs-8 logo-box">
  			<a href="index-2.html" class="logo"><img src="images/logo.png" alt=""></a>
  		</div>
  		<div class="col-sm-9 col-xs-4 info-box">
  			<div class="header-informations hidden-xs">
  				<div class="media info-media">
  					<div class="media-left"><i class="ion-location"></i></div>
  					<div class="media-body">
  						<h5 class="this-top">3588 N  Stelling road, Brooklyn,</h5>
  						<h5 class="this-bottom">NYC, United State.</h5>
  					</div>
  				</div>
  				<div class="media info-media">
  					<div class="media-left"><i class="ion-ios-telephone"></i></div>
  					<div class="media-body">
  						<h5 class="this-top">1800 - 112 - 8888/ EXT: 001</h5>
  						<h5 class="this-bottom">Support@Supershine.com</h5>
  					</div>
  				</div>
  				<div class="media info-media">
  					<div class="media-left"><i class="ion-ios-clock"></i></div>
  					<div class="media-body">
  						<h5 class="this-top">Monday - Friday:</h5>
  						<h5 class="this-bottom">08:00am ~ 05:00pm</h5>
  					</div>
  				</div>
  			</div>
  			<div class="cart-nav">
  				<a href="#" class="cart-count"><i class="ion-bag"></i><span class="badge">03</span></a>
  				<a href="#" class="nav-hider hidden-xs hidden-sm"><i class="ion-android-menu"></i></a>
  				<button type="button" class="navbar-toggle nav-hider collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
  				<span class="sr-only">Toggle navigation</span>
  				<i class="ion-android-menu"></i>
  			</button>
  			</div>
  		</div>
  	</div>
  </div>
  </section>
  <!--Navigation-->
  <nav class="navbar navbar-default main-navigation navbar-static-top">
	<div class="container">
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="main-nav">				
			<ul class="nav navbar-nav">
				
				<li><a href="userhome.php">home</a></li>					
				<li><a href="#">about</a></li>
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bookking<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="fleet.php">car</a></li>
							<li><a href="fleet.php">tempo</a></li>
						</ul>
				</li>
						
				<li><a href="#">contact</a></li>
				
				<li><a href="logout.php">Logout</a></li>
			</ul>			
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav> 
 
  <!--Page Cover-->
  <section class="row page-cover">
  <div class="container">
  	<h2 class="h1 page-title">Car Detail</h2>
  	<ol class="breadcrumb">
  		<li><a href="index-2.html">home</a></li>
  		<li class="active">fleets</li>
  	</ol>
  </div>
  </section>
  <section class="row wrapper-car-details">
  <div class="container">
  	<div class="row car-dt">
  		<div class="col-sm-12 col-md-8 col-xs-12 car-images fleet">
  			<div class="row m0 this-heading">
  				<h5 class="this-class">LONGTERM CLASS</h5>
  				<h3 class="vehicle-title">Mercedes Benz Limousin Edition (Black 2016)</h3>						
    			<h6 class="reviews">
    				<i class="fa fa-star-o starred"></i>
    				<i class="fa fa-star-o starred"></i>
    				<i class="fa fa-star-o starred"></i>
    				<i class="fa fa-star-o"></i>
    				<i class="fa fa-star-o"></i> 
    				(5 reviews)
    			</h6>
  			</div>
  			<div class="row m0 this-cover-image">
  				<img src="images/car-detail/1.png" alt="" class="this-image">
  				<img src="images/car-detail/logo.png" alt="" class="this-brand">
  				
  				<ul class="this-social nav">
  					<li><a href="#"><i class="ion-social-facebook"></i></a></li>
  					<li><a href="#"><i class="ion-social-twitter"></i></a></li>
  					<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
  					<li><a href="#"><i class="ion-social-linkedin"></i></a></li>
  					<li><a href="#"><i class="ion-social-tumblr"></i></a></li>
  				</ul>
  			</div>
  			<!-- Swiper -->
    		<div class="swiper-container other-images">
    			<div class="swiper-wrapper">
    				<div class="swiper-slide"><a href="images/car-detail/2.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/2.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/3.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/3.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/4.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/4.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/5.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/5.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/6.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/6.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/2.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/2.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/3.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/3.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/4.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/4.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/5.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/5.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/6.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/6.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/2.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/2.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/3.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/3.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/4.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/4.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/5.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/5.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/6.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/6.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/2.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/2.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/3.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/3.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/4.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/4.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/5.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/5.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/6.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/6.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/2.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/2.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/3.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/3.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/4.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/4.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/5.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/5.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/6.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/6.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/2.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/2.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/3.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/3.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/4.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/4.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/5.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/5.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/6.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/6.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/2.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/2.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/3.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/3.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/4.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/4.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/5.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/5.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/6.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/6.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/2.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/2.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/3.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/3.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/4.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/4.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/5.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/5.jpg" alt=""></a></div>
    				<div class="swiper-slide"><a href="images/car-detail/6.jpg" data-source="#" title="Into The Blue"><img src="images/car-detail/6.jpg" alt=""></a></div>
    			</div>
    			<!-- Add Scrollbar -->
    			<div class="swiper-scrollbar"></div>
    		</div>
  		</div>
  		<div class="col-sm-12 col-md-4 col-xs-12 car-infomations fleet">
  			<div class="row focus-infos">
  				<h4 class="this-heading">FOCUS INFOMATIONS</h4>
  				<p>This white floral lace playsuit is the perfect combination of this season's.</p>
  			</div>
  			<ul class="focus-informations nav">
  			<li><span class="icon"><img src="images/icons/car-details/1.png" alt=""></span>Trasition <span class="this-value">Auto</span></li>
  			<li><span class="icon"><img src="images/icons/car-details/2.png" alt=""></span>Air bags <span class="this-value">08</span></li>
  			<li><span class="icon"><img src="images/icons/car-details/3.png" alt=""></span>Technology <span class="this-value">Hybrid</span></li>
  			<li><span class="icon"><img src="images/icons/car-details/4.png" alt=""></span>Economy <span class="this-value">06 lits/100 kms</span></li>
  			<li><span class="icon"><img src="images/icons/car-details/5.png" alt=""></span>Fuel type <span class="this-value">Mixed</span></li>
  			<li><span class="icon"><img src="images/icons/car-details/6.png" alt=""></span>Power <span class="this-value">250 HP</span></li>
  			<li><span class="icon"><img src="images/icons/car-details/7.png" alt=""></span>Seats <span class="this-value">16</span></li>
  			<li><span class="icon"><img src="images/icons/car-details/8.png" alt=""></span>Capity <span class="this-value">100 lits</span></li>
  			<li><span class="icon"><img src="images/icons/car-details/9.png" alt=""></span>Product year <span class="this-value">2016</span></li>
  		</ul>
  		<div class="this-footer row m0">
  			<h3 class="rent text-center"><small>from</small>$196<sub>/day</sub></h3>
  			<button class="hire-btn" data-toggle="modal" data-target=".order-modal">hire car</button>
  		</div>
  		</div>
  	</div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs desctiption-tabs nav-justified" role="tablist">
  	<li role="presentation" class="active"><a href="#descTab01" aria-controls="descTab01" role="tab" data-toggle="tab">OverView</a></li>
  	<li role="presentation"><a href="#descTab02" aria-controls="descTab02" role="tab" data-toggle="tab">Services offered</a></li>
  	<li role="presentation"><a href="#descTab03" aria-controls="descTab03" role="tab" data-toggle="tab">LOCATION</a></li>
  	<li role="presentation"><a href="#descTab04" aria-controls="descTab04" role="tab" data-toggle="tab">REVIEWS</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content desctiption-contents">
  	<div role="tabpanel" class="tab-pane active" id="descTab01">
  		<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. The sharp, high-tech Mercedes automatic with its superbly plush cabin is the star in our Luxury Automatic car hire class. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
  		<p>Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod.</p>
  		<div class="row">
  			<div class="col-sm-6 half-col">
  				<ul class="nav car-detail-list">
  					<li>Tellus ac cursus commodo, tortor mauris condimentum nibh</li>
  					<li>Duis autem vel eum iriure</li>
  					<li>Dolor in hendrerit in thermal</li>
  					<li>Etiam porta sem malesuada magna mollis euismod.</li>
  				</ul>
  			</div>
  			<div class="col-sm-6 half-col">
  				<ul class="nav car-detail-list">
  					<li>Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. </li>
  					<li>Mirum est notare quam littera </li>
  					<li>Claritas est etiam processus dynamicus</li>
  				</ul>
  			</div>
  		</div>					
  	</div>
  	<div role="tabpanel" class="tab-pane" id="descTab02">
  		<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. The sharp, high-tech Mercedes automatic with its superbly plush cabin is the star in our Luxury Automatic car hire class. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
  		<p>Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod.</p>
  		<div class="row">
  			<div class="col-sm-6 half-col">
  				<ul class="nav car-detail-list">
  					<li>Tellus ac cursus commodo, tortor mauris condimentum nibh</li>
  					<li>Duis autem vel eum iriure</li>
  					<li>Dolor in hendrerit in thermal</li>
  					<li>Etiam porta sem malesuada magna mollis euismod.</li>
  				</ul>
  			</div>
  			<div class="col-sm-6 half-col">
  				<ul class="nav car-detail-list">
  					<li>Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. </li>
  					<li>Mirum est notare quam littera </li>
  					<li>Claritas est etiam processus dynamicus</li>
  				</ul>
  			</div>
  		</div>					
  	</div>
  	<div role="tabpanel" class="tab-pane" id="descTab03">
  		<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. The sharp, high-tech Mercedes automatic with its superbly plush cabin is the star in our Luxury Automatic car hire class. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
  		<p>Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod.</p>
  		<div class="row">
  			<div class="col-sm-6 half-col">
  				<ul class="nav car-detail-list">
  					<li>Tellus ac cursus commodo, tortor mauris condimentum nibh</li>
  					<li>Duis autem vel eum iriure</li>
  					<li>Dolor in hendrerit in thermal</li>
  					<li>Etiam porta sem malesuada magna mollis euismod.</li>
  				</ul>
  			</div>
  			<div class="col-sm-6 half-col">
  				<ul class="nav car-detail-list">
  					<li>Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. </li>
  					<li>Mirum est notare quam littera </li>
  					<li>Claritas est etiam processus dynamicus</li>
  				</ul>
  			</div>
  		</div>					
  	</div>
  	<div role="tabpanel" class="tab-pane" id="descTab04">
  		<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. The sharp, high-tech Mercedes automatic with its superbly plush cabin is the star in our Luxury Automatic car hire class. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
  		<p>Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod.</p>
  		<div class="row">
  			<div class="col-sm-6 half-col">
  				<ul class="nav car-detail-list">
  					<li>Tellus ac cursus commodo, tortor mauris condimentum nibh</li>
  					<li>Duis autem vel eum iriure</li>
  					<li>Dolor in hendrerit in thermal</li>
  					<li>Etiam porta sem malesuada magna mollis euismod.</li>
  				</ul>
  			</div>
  			<div class="col-sm-6 half-col">
  				<ul class="nav car-detail-list">
  					<li>Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. </li>
  					<li>Mirum est notare quam littera </li>
  					<li>Claritas est etiam processus dynamicus</li>
  				</ul>
  			</div>
  		</div>					
  	</div>
  </div>

  <div class="may-you-like-header row m0">
  	<h2 class="this-title">May be you like</h2>
  	<div class="may-you-like-nav"></div>				
  </div>
  <div class="row">				
  	<div class="may-you-like-carousel">
  		<div class="item popular-fleet fleet sale-offer">
  			<div class="media inner">
  				<div class="media-left"><a href="single-car.html"><img src="images/fleet/popular/1.png" alt=""></a></div>
  				<div class="media-body">
  					<h4 class="rent"><small>from</small>$96.90<sub>/day</sub></h4>
  					<h6 class="reviews">
  						<i class="fa fa-star-o starred"></i>
  						<i class="fa fa-star-o starred"></i>
  						<i class="fa fa-star-o starred"></i>
  						<i class="fa fa-star-o"></i>
  						<i class="fa fa-star-o"></i> 
  						(5 reviews)
  					</h6>
  					<h4 class="vehicle-title">Mercedes S500 v8l</h4>
  				</div>
  			</div>
  		</div>
  		<div class="item popular-fleet fleet">
  			<div class="media inner">
  				<div class="media-left"><a href="single-car.html"><img src="images/fleet/popular/1.png" alt=""></a></div>
  				<div class="media-body">
  					<h4 class="rent"><small>from</small>$96.90<sub>/day</sub></h4>
  					<h6 class="reviews">
  						<i class="fa fa-star-o starred"></i>
  						<i class="fa fa-star-o starred"></i>
  						<i class="fa fa-star-o starred"></i>
  						<i class="fa fa-star-o"></i>
  						<i class="fa fa-star-o"></i> 
  						(5 reviews)
  					</h6>
  					<h4 class="vehicle-title">Mercedes S500 v8l</h4>
  				</div>
  			</div>
  		</div>
  		<div class="item popular-fleet fleet">
  			<div class="media inner">
  				<div class="media-left"><a href="single-car.html"><img src="images/fleet/popular/3.png" alt=""></a></div>
  				<div class="media-body">
  					<h4 class="rent"><small>from</small>$96.90<sub>/day</sub></h4>
  					<h6 class="reviews">
  						<i class="fa fa-star-o starred"></i>
  						<i class="fa fa-star-o starred"></i>
  						<i class="fa fa-star-o starred"></i>
  						<i class="fa fa-star-o"></i>
  						<i class="fa fa-star-o"></i> 
  						(5 reviews)
  					</h6>
  					<h4 class="vehicle-title">Mercedes S500 v8l</h4>
  				</div>
  			</div>
  		</div>
  		<div class="item popular-fleet fleet">
  			<div class="media inner">
  				<div class="media-left"><a href="single-car.html"><img src="images/fleet/popular/4.png" alt=""></a></div>
  				<div class="media-body">
  					<h4 class="rent"><small>from</small>$96.90<sub>/day</sub></h4>
  					<h6 class="reviews">
  						<i class="fa fa-star-o starred"></i>
  						<i class="fa fa-star-o starred"></i>
  						<i class="fa fa-star-o starred"></i>
  						<i class="fa fa-star-o"></i>
  						<i class="fa fa-star-o"></i> 
  						(5 reviews)
  					</h6>
  					<h4 class="vehicle-title">Mercedes S500 v8l</h4>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  </div>
  </section>
  <section class="row banner2-prefolder">
  	<div class="container">
  		<div class="row inner m0">
  			<div class="col-md-6 this-left">
  				<div class="this-texts">
  					<h2 class="this-title">Quick Sale</h2>
  			<h2 class="this-title2 h1">VANS PICKUP!</h2>
  			<p>At vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
  			<a href="#" class="read-more">read more<i class="ion-arrow-right-b"></i></a>
  				</div>
  	</div>
  	<div class="col-md-6 this-right">
  				<div class="this-texts">
  					<h2 class="this-title">Online Booking</h2>
  			<h2 class="this-title2 h1">CADILAC SALE 39%</h2>
  			<p>At vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
  			<a href="#" class="read-more">read more<i class="ion-arrow-right-b"></i></a>
  				</div>
  	</div>
  		</div>
  	</div>
  </section>
  <footer class="row site-footer">
  	<div class="top-footer row m0">
  		<div class="container">
  			<div class="row ft">
  				<!--Widget-->
  				<div class="col-sm-12 col-md-3 widget footer-widget widget-about">
  					<a href="#" class="foot-logo"><img src="images/logo.png" alt=""></a>
  					<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, <strong>vel illum dolore eu feugiat nulla facilisis</strong>.</p>
  			   <p>At vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
  				<ul class="nav nav-pills social-nav">
  					<li><a href="#" class="ion-social-facebook" data-toggle="tooltip" data-placement="top" title="Facbook"></a></li>
  					<li><a href="#" class="ion-social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"></a></li>
  					<li><a href="#" class="ion-social-googleplus" data-toggle="tooltip" data-placement="top" title="Google Plus"></a></li>
  					<li><a href="#" class="ion-social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"></a></li>
  					<li><a href="#" class="ion-social-tumblr" data-toggle="tooltip" data-placement="top" title="Tumblr"></a></li>
  				</ul>
  				</div>
  				<!--Widget-->
  				<div class="col-sm-12 col-md-3 widget footer-widget widget-contact-info">
  					<h4 class="widget-title">CONTACT INFO</h4>
  					<ul class="nav foot-nav">
  						<li><i class="ion-location"></i>3588 N  Stelling road, Brooklyn, NYC, United State.</li>
  						<li><i class="ion-ios-telephone"></i>1800 - 112 - 8888/ EXT: 001</li>
  						<li><i class="ion-email-unread"></i><a href="mailto:SuperHire@support.com.xxx">SuperHire@support.com.xxx</a></li>
  					</ul>
  					<div id="foot-map" class="google-map" data-lat="23.8932752" data-lon="90.3822415" data-marker="images/map-marker.png"></div>
  				</div>
  				<!--Widget-->
  				<div class="col-sm-12 col-md-2 widget footer-widget widget-links">
  					<h4 class="widget-title">Usefull link</h4>
  					<ul class="nav foot-nav style2">
  						<li><i class="fa fa-angle-double-right"></i><a href="#">FAQs</a></li>
  						<li><i class="fa fa-angle-double-right"></i><a href="#">Contact</a></li>
  						<li><i class="fa fa-angle-double-right"></i><a href="#">About</a></li>
  						<li><i class="fa fa-angle-double-right"></i><a href="#">Membership</a></li>
  						<li><i class="fa fa-angle-double-right"></i><a href="#">Exchange accepted</a></li>
  						<li><i class="fa fa-angle-double-right"></i><a href="#">Help</a></li>
  						<li><i class="fa fa-angle-double-right"></i><a href="#">Other</a></li>
  					</ul>
  				</div>
  				<!--Widget-->
  				<div class="col-sm-12 col-md-4 widget footer-widget widget-contact">
  					<h4 class="widget-title">CONTACT &amp; SUBCRIBE US</h4>
  					<div class="row m0 contact-form-info">
  						<form action="http://haintheme.com/demo/html/supershine/contact_process.php" class="foot-contct-form contactForm row m0">
  					<div class="input-group">
  						<input type="text" name="name" id="name" class="form-control" placeholder="Your name">
  						<span class="input-group-addon"><i class="ion-person"></i></span>
  					</div>
  					<div class="input-group">
  						<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
  						<span class="input-group-addon"><i class="ion-email-unread"></i></span>
  					</div>
  					<div class="input-group">
  						<textarea name="message" id="message" class="form-control" placeholder="Your messages"></textarea>
  						<span class="input-group-addon"><i class="ion-android-chat"></i></span>
  					</div>
  					<div class="row m0">
  						<input type="checkbox" name="subscribe" id="subscribe" class="sr-only  contact-checkbox">
  						<label for="subscribe">Also subscribe to your e-mail *</label>
  					</div>
  					<input type="submit" value="SEND MESSENGE" class="btn btn-primary">
  					<div class="foot-msg"><span>(*)</span> : We never spam your email</div>
  				</form>
  					<div id="success"><span>Your message sent successfully.</span></div>
  					<div id="error"><span>Something wrong here!.</span></div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="bottom-footer row m0">
  		<div class="container">
  			<div class="row">
  				Copyright © 2016 by <a href="#">Haintheme</a>. Designed by <a href="#">PukDG</a>. All rights reserved!
  			</div>
  		</div>
  	</div>
  </footer>
  <div class="modal fade order-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
      <div class="modal-content container">
      	<ul class="nav nav-pills this-navigation nav-justified">
      		<li><a href="fleet.html">Choose Car</a></li>
      		<li class="active"><a href="#">Request info</a></li>
      		<li><a href="#">Confirm</a></li>
      	</ul>
      	
      	<form action="#" class="row">
      		<div class="col-sm-8">
      			<h5 class="this-top">Returning Custumer? CLICK <a href="#">here</a> TO LOGIN</h5>
      			<h5 class="this-top">Have a coupon? CLICK <a href="#">here</a> TO ENTER YOUR CODE</h5>
      			<div class="row">
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">First Name <span>*</span></h5>
      					<input type="text" class="form-control">
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Last Name <span>*</span></h5>
      					<input type="text" class="form-control">
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Email Address <span>*</span></h5>
      					<input type="text" class="form-control">
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Phone <span>*</span></h5>
      					<input type="text" class="form-control">
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Pickup Date</h5>
      					<input type="text" class="form-control" placeholder="01/01/2016">
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Drop off Date</h5>
      					<input type="text" class="form-control" placeholder="01/04/2016">
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Trip Type</h5>
      					<select class="form-control">
      						<option>Per Hour (3 hours minimum)</option>
      						<option>Fixed</option>
      					</select>
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Drop off Date</h5>
      					<select class="form-control">
      						<option>01</option>
      						<option selected>02</option>
      						<option>03</option>
      						<option>04</option>
      						<option>05</option>
      						<option>06</option>
      					</select>
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Pickup Location</h5>
      					<textarea class="form-control"></textarea>
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Destination</h5>
      					<textarea class="form-control"></textarea>
      				</div>
      				<div class="form-group col-sm-12">
      					<input type="checkbox" name="create-account" id="create-account">
      					<label for="create-account">Create an account?</label>
      				</div>
      				<div class="form-group col-sm-12">
      					<h5 class="this-label">Order Note</h5>
      					<textarea class="form-control"></textarea>
      				</div>
      			</div>
      		</div>
      		<div class="col-sm-4">
      			<div class="your-order row m0">
      				<h4 class="this-heading">Your Order</h4>
      				<div class="row order-data">
      					<div class="media name-of-car">
      						<div class="media-left media-middle"><span>Name of car</span></div>
      						<div class="media-body">Mercedes Benz Sprinter (Black 2016)</div>
      					</div>
      					<div class="media image-of-car">
      						<div class="media-left media-bottom"><span>Image</span></div>
      						<div class="media-body"><img src="images/car-detail/2.png" alt=""></div>
      					</div>
      					<ul class="nav other-infos-car">
      						<li>Price (per day) <span>$195.00</span></li>
      						<li>Tax (10%) <span>(free) $0.00</span></li>
      						<li>total cost <span>$195.00</span></li>
      					</ul>
      				</div>
      				<button class="btn btn-primary btn-block">BOOK BY EMAIL!</button>							
      			</div>
      			<h6 class="contact-back text-center">(We will contact you back!)</h6>
      			<h4 class="straight-pay text-center">STRAIGHT PAY</h4>
      			<div class="row m0 choose-payment-method">
      				<input type="radio" name="payment-method" id="payment-method01" class="sr-only" checked>
      				<label for="payment-method01">Stripe Payment <a href="#"><img src="images/car-detail/stripe.jpg" alt=""></a></label>
      				<article class="stripe">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</article>
      				<input type="radio" name="payment-method" id="payment-method02" class="sr-only">
      				<label for="payment-method02">Paypal <a href="#"><img src="images/car-detail/paypal.png" alt=""></a></label>
      			</div>
      			<input type="submit" value="PAY NOW!" class="btn btn-primary btn-block">
      		</div>
      	</form>
      </div>
    </div>
  </div>
  <!-- jis file -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!--Google Map-->
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="js/gmaps.min.js"></script>
  <!--Contact-->    
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/contact.js"></script>
  <!--Owl Carousel-->
  <script src="vendors/owl.carousel/owl.carousel.min.js"></script>
  <!--CounterUp-->
  <script src="vendors/couterup/jquery.counterup.min.js"></script>
  <!--WayPoints-->
  <script src="vendors/waypoint/waypoints.min.js"></script>
  <!--Select-->
  <script src="vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
  <!--Instafeed-->
  <script src="vendors/instafeed/instafeed.min.js"></script>
  <!-- Isotope -->
  <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope.min.js"></script>
  <!-- Scrollbar -->
  <script src="vendors/swiper/js/swiper.min.js"></script>
  <!-- Popup -->
  <script src="vendors/magnific/jquery.magnific-popup.min.js"></script>
  <!-- Plyr -->
  <script src="vendors/plyr/plyr.js"></script>
  <script>plyr.setup();</script>
  <!--Theme Script-->    
  <script src="js/theme.js"></script>
</body>

<!-- Mirrored from haintheme.com/demo/html/supershine/single-car.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:44:16 GMT -->
</html>