<?php   
include 'dbcon.php';

$tp=$_SESSION['utype'];
if(!(isset($_SESSION['user_name']))||$tp!=2)
	
{	
	header('location:index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8">
<head>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1ypVDGm8lr-4DB9Rk-c2YJXq1ormSRIs&libraries=places&callback=initMap"
        async defer></script>
     <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TaxiGo</title>
	<!--Fonts-->
	<link href="css/style2.css" rel="stylesheet">
	<link href="css/style3.css" rel="stylesheet">
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
	<!--Theme Styles-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/theme.css">
	<!--datepick-->
	<link href="dcalendar.picker.css" rel="stylesheet" type="text/css">
    <link href="../../css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<style>
.div0
{
//padding:5%;
margin-top:-7%;
margin-left:95%;
width:20%;
height:20%;

}
	.hidden { 
    display: none; 
}

.unhidden { 
    display: block; }
	
.fleets2 .container {
	display:none;
    position: relative;
    z-index: 2;
 }
 .mapp {
	 width:100%; 
	 height:100%;
 }
 .dd {
	 display: none; 
    }
	</style>
	
	
   
<script>	
var source, destination;
var directionsDisplay;

var directionsService = new google.maps.DirectionsService();
google.maps.event.addDomListener(window, 'load', function () {
new google.maps.places.SearchBox(document.getElementById('txtSource'));
new google.maps.places.SearchBox(document.getElementById('txtDestination'));
directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
});

function GetRoute() {
	
var mumbai = new google.maps.LatLng(12.9715987,77.5945627);
var mapOptions = {
	zoom: 7,
	center: mumbai
};

map = new google.maps.Map(document.getElementById('sample'), mapOptions);
directionsDisplay.setMap(map);

//directionsDisplay.setPanel(document.getElementById('dvPanel'));

//*********DIRECTIONS AND ROUTE**********************//
source = document.getElementById("txtSource").value;
destination = document.getElementById("txtDestination").value;
source=source+","+"kerala,india";
destination=destination+","+"kerala,india";
var dis=source+".....to...."+destination;


var request = {
	origin: source,
	destination: destination,
	travelMode: google.maps.TravelMode.DRIVING
};
directionsService.route(request, function (response, status) {
	if (status == google.maps.DirectionsStatus.OK) {
		directionsDisplay.setDirections(response);
	}
});

//*********DISTANCE AND DURATION**********************//
var service = new google.maps.DistanceMatrixService();
service.getDistanceMatrix({
	origins: [source],
	destinations: [destination],
	travelMode: google.maps.TravelMode.DRIVING,
	unitSystem: google.maps.UnitSystem.METRIC,
	avoidHighways: false,
	avoidTolls: false
}, function (response, status) {
	if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
		var distance = response.rows[0].elements[0].distance.text;
		var duration = response.rows[0].elements[0].duration.text;
		var dvDistance = document.getElementById("dvDistance");
		//alert(distance);
		//alert(duration);
		dvDistance.innerHTML = "";
		dvDistance.innerHTML += "Distance: " + distance + "<br />";
		dvDistance.innerHTML += "Duration:" + duration;

	} else {
		alert("Unable to find the distance via road.");
	}
});
}
function unhide(dd) {
var item = document.getElementById(dd);
if (item) {
item.className=(item.className=='hidden')?'unhidden':'unhidden';
}}	
 </script>
 
</head>
<body onload=" GetRoute()" >

<section class="row top-bar">
		<h2 class="hd-sec">Heading</h2>
		<div class="container">
			<div class="welcome-texts"><span class="welcome-text">Welcome to</span><span>TaxiGo!</span></div>
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
							<h5 class="this-top">3588 N  koovappally, Kerala,</h5>
							<h5 class="this-bottom">india.</h5>
						</div>
					</div>
					<div class="media info-media">
						<div class="media-left"><i class="ion-ios-telephone"></i></div>
						<div class="media-body">
							<h5 class="this-top">+91-8281306327</h5>
							<h5 class="this-bottom">akhilmjoy8@gmail.com</h5>
						</div>
					</div>
					<div class="media info-media">
						<div class="media-left"><i class="ion-ios-clock"></i></div>
						<div class="media-body">
							<h5 class="this-top"id="mo"></h5>
							<h5 class="this-bottom" id="time"></h5>
						</div>
					</div>
					<div class="div0">
						<?php
						$d=$_SESSION['rid'];
						$sql="SELECT * FROM `registration` WHERE `reg_id`=$d";
                         $result=mysqli_query($con,$sql);
						 $row=mysqli_fetch_array($result)
						 ?>
						 
							<a href="userprofv.php"><img src="<?php echo $row['photo']?>" width=70 height=70 style="border-radius:50px;" ></a>
							<p style="color:white;"><?php echo $row['emailid']?></p>
						</div>
					<script>
						var d = new Date();
						var month = new Array();
						month[0] = "January";
						month[1] = "February";
						month[2] = "March";
						month[3] = "April";
						month[4] = "May";
						month[5] = "June";
						month[6] = "July";
						month[7] = "August";
						month[8] = "September";
						month[9] = "October";
						month[10] = "November";
						month[11] = "December";
						var n = month[d.getMonth()];
						var c =d.getDate();
						var t = d.getTime();var dateObj = new Date();
						var month = dateObj.getUTCMonth() + 1;
						var day = dateObj.getUTCDate();
						var year = dateObj.getUTCFullYear();
						
						var d = new Date(); // for now
							var h = d.getHours(); 
							var m=d.getMinutes(); 
							var s=d.getSeconds();
						time=h + ":" +m + ":" + s;
						newdate = day + "/" + n + "/" + year;
						
						document.getElementById("mo").innerHTML = newdate;
						
						document.getElementById("time").innerHTML = time;
										
						
						</script>
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
<!--Home 1 Slide Banner-->
<section class="slide-banner row" style="height=10%;">
	<img src="images/image27.jpg" alt="" class="this-bg hidden-xs" >
</section>


<section class="row fold3">
		<div class="container">
			<div class="row fold-banners">
				<div class="col-md-3 col-sm-6 banner-vans fold-banner">
					<div class="row inner">
						<img src="images/fold3/1.jpg" alt="" class="img-responsive">
						<h2 class="top-text">At Winter</h2>
						<h5 class="bottom-text">From $59.69/day</h5>
					</div>
				</div>
				<div class="col-md-3 col-md-offset-6 col-sm-6 banner-limo  fold-banner">					
					<div class="row inner">
						<img src="images/fold3/2.jpg" alt="" class="img-responsive">
						<h2 class="top-text">Big Sale</h2>
						<h5 class="bottom-text">Sale 50%, 30%, 20%</h5>
					</div>
				</div>
			</div>
			<div class="row finder-form">
				<div class="col-md-6 col-md-offset-3 car-finder-form">
					<form class="row inner" action="#" method="get">
						<h3 class="form-title">Searching for a Taxi </h3>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Enter pickup location..." id="txtSource" value="koovappally" style="width: 500px">
							
							
						</div>
						<div class="input-group">
						
							<input type="text" class="form-control" placeholder="Enter drop location..." id="txtDestination" value="kottayam" style="width: 500px">
							
							
						</div>
					    <!--<h5 class="return"><i class="ion-android-arrow-dropdown-circle"></i>Return different location</h5> -->
						<div class="row this-foot">
							<div class="col-xs-4 date">
								<h5 class="this-hd">Pickup Date <i class="ion-arrow-down-b"></i></h5>
								<div class="date row m0">
									<div class="day-month">
										<select class="selectpicker day">
											<option value="01" selected>01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
										</select>
									</div>
									<div class="month-year">
										<select class="selectpicker month">
											<option value="Jan">Jan</option>
											<option value="Feb">Feb</option>
											<option value="March">March</option>
											<option value="April" selected>April</option>
											<option value="Jun">Jun</option>
											<option value="Jul">Jul</option>
											<option value="Aug">Aug</option>
											<option value="Sep">Sep</option>
											<option value="Oct">Oct</option>
											<option value="Nov">Nov</option>
											<option value="Dec">Dec</option>
										</select>
										<select class="selectpicker year">
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
										</select>
									</div>
								</div>
								<div class="time row m0">
									<i class="ion-ios-clock"></i>
									<select class="selectpicker time-select">
										<option value="01:00 am">01:00 am</option>
										<option value="02:00 am">02:00 am</option>
										<option value="03:00 am">03:00 am</option>
										<option value="04:00 am">04:00 am</option>
										<option value="05:00 am">05:00 am</option>
										<option value="06:00 am">06:00 am</option>
										<option value="07:00 am">07:00 am</option>
										<option value="08:00 am">08:00 am</option>
										<option value="09:00 am">09:00 am</option>
										<option value="10:00 am">10:00 am</option>
										<option value="11:00 am">11:00 am</option>
										<option value="12:00 pm">12:00 pm</option>
										<option value="01:00 pm">01:00 pm</option>
										<option value="02:00 pm">02:00 pm</option>
										<option value="03:00 pm">03:00 pm</option>
										<option value="04:00 pm">04:00 pm</option>
										<option value="05:00 pm">05:00 pm</option>
										<option value="06:00 pm">06:00 pm</option>
										<option value="07:00 pm">07:00 pm</option>
										<option value="08:00 pm">08:00 pm</option>
										<option value="09:00 pm">09:00 pm</option>
										<option value="10:00 pm">10:00 pm</option>
										<option value="11:00 pm">11:00 pm</option>
										<option value="12:00 am">12:00 am</option>
									</select>
								</div>
							</div>
							<div class="col-xs-4 date">
								<h5 class="this-hd">Drop Date <i class="ion-arrow-down-b"></i></h5>
								<div class="date row m0">
									<div class="day-month">
										<select class="selectpicker day">
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05" selected>05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
										</select>
									</div>
									<div class="month-year">
										<select class="selectpicker month">
											<option value="Jan">Jan</option>
											<option value="Feb">Feb</option>
											<option value="March">March</option>
											<option value="April" selected>April</option>
											<option value="Jun">Jun</option>
											<option value="Jul">Jul</option>
											<option value="Aug">Aug</option>
											<option value="Sep">Sep</option>
											<option value="Oct">Oct</option>
											<option value="Nov">Nov</option>
											<option value="Dec">Dec</option>
										</select>
										<select class="selectpicker year">
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
										</select>
									</div>
								</div>
								<div class="time row m0">
									<i class="ion-ios-clock"></i>
									<select class="selectpicker time-select">
										<option value="01:00 am">01:00 am</option>
										<option value="02:00 am">02:00 am</option>
										<option value="03:00 am">03:00 am</option>
										<option value="04:00 am">04:00 am</option>
										<option value="05:00 am">05:00 am</option>
										<option value="06:00 am">06:00 am</option>
										<option value="07:00 am">07:00 am</option>
										<option value="08:00 am">08:00 am</option>
										<option value="09:00 am">09:00 am</option>
										<option value="10:00 am">10:00 am</option>
										<option value="11:00 am">11:00 am</option>
										<option value="12:00 pm">12:00 pm</option>
										<option value="01:00 pm">01:00 pm</option>
										<option value="02:00 pm">02:00 pm</option>
										<option value="03:00 pm">03:00 pm</option>
										<option value="04:00 pm">04:00 pm</option>
										<option value="05:00 pm">05:00 pm</option>
										<option value="06:00 pm">06:00 pm</option>
										<option value="07:00 pm">07:00 pm</option>
										<option value="08:00 pm">08:00 pm</option>
										<option value="09:00 pm">09:00 pm</option>
										<option value="10:00 pm">10:00 pm</option>
										<option value="11:00 pm">11:00 pm</option>
										<option value="12:00 am">12:00 am</option>
									</select>
								</div>
							</div>
							<div class="col-xs-4">
								<a href="javascript:unhide('dd')" class="btn btn-primary" onclick="GetRoute();">find now</a><br><br>
								<!--<input type="submit" class="btn btn-primary" value="find now">-->
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section><br><br><br><br><br><br><br>
	<div id="map"></div>
	<div id="dvDistance">
                </div>
<div id="sample" style="width:100%;height:580px;"></div>


 <div class="container" id="dd">
	<div class="row section-title text-center white">
		<h6 class="this-top">SO MANY CHOICE</h6>
		<h2 class="h1 this-main">A Car for Every Need!</h2>
	</div>
	<div class="row">
		<div class="col-md-4 fleet fleet2 sale-offer">
			<div class="inner row">
				<h2 class="rent text-center"><small>from</small>$96.90<sub>/day</sub></h2>
				<h6 class="reviews text-center">
					<i class="fa fa-star-o starred"></i>
					<i class="fa fa-star-o starred"></i>
					<i class="fa fa-star-o starred"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i> 
					(5 reviews)
				</h6>
				<h4 class="vehicle-title text-center">Bentley Contidental 2016</h4>
				<div class="row vehicle-img text-center">
					<img src="images/fleet/1.png" alt="">
				</div>
				<div class="row specification">
					<ul class="nav">
						<li><span><img src="images/icons/fleet2/1.png" alt=""></span>Auto</li>
						<li><span><img src="images/icons/fleet2/2.png" alt=""></span>06L/100km</li>
						<li><span><img src="images/icons/fleet2/3.png" alt=""></span>02</li>
						<li><span><img src="images/icons/fleet2/4.png" alt=""></span>2016</li>
						<li><span><img src="images/icons/fleet2/5.png" alt=""></span>100 lits</li>
						<li><span><img src="images/icons/fleet2/6.png" alt=""></span>04</li>
					</ul>
					<a href="single-car.html" class="details-page">+</a>
				</div>
			</div>
		</div>
				
	</div>
</div>
</section>
<!--Testimonial-->
<section class="row testimonial-row">
	<div class="container">   			
		<div class="row section-title text-center">
			<h6 class="this-top">SO MANY CHOICE</h6>
			<h2 class="h1 this-main">A Car for Every Need!</h2>
		</div>

		<div class="row">
			<div class="testimonial-carousel">
				<div class="item testimonial">
					<div class="inner row m0">
						<p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
						<span class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</span>
						<h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
						<a href="#" class="client-img"><img src="images/testimonial/2.jpg" alt="" class="img-circle"></a>
					</div>
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
			Copyright © 2017 by <a href="#">Haintheme</a>. Designed by <a href="#">PukDG</a>. All rights reserved!
		</div>
	</div>
</div>
</footer>
<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
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
		<!--Theme Script-->    
		<script src="js/theme.js"></script>
</body>
	
	
<!-- Mirrored from haintheme.com/demo/html/supershine/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:42:02 GMT -->
</html>