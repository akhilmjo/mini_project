<?php
include 'dbcon.php';

$tp=$_SESSION['utype'];
if(!(isset($_SESSION['user_name']))||$tp!=1)
{	
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<!-- Mirrored from haintheme.com/demo/html/supershine/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:31:25 GMT -->
<head>
	<!-- Required meta tags always come first -->
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
  input{
 	background-color: transparent;
		border:none;
	color: #f77d0a;
}
.div1
{
padding:5%;
margin-left:29%;
width:50%;
height:0%;
//border-top:2px solid white;

}
.divp{
	margin:5%;
	margin-left:-15%;
	width:130%;
	height:10%;
	background-color:red;
	z-index:2px;
	border:2px solid red;
}
.div0
{
margin-top:-7%;
margin-left:95%;
width:20%;
height:20%;

}
.divv1
{
width:600px;
height:250px;
border-right:2px solid red;
margin-left:-640px;
margin-top:-550px;

}
.divv12
{
width:600px;
height:250px;
//border:2px solid red;
margin-left:-0px;
margin-top:-250px;

}
.divalo
{
overflow:scroll;
width:1320px;
height:500px;
border-top:2px solid red;
margin-left:-650px;
margin-top:20px;

}
.divnalo
{

overflow:scroll;
width:1320px;
height:500px;
border-top:2px solid red;
margin-left:-650px;
margin-top:20px;

}
.divv2
{
background:url("images/slide.jpg");
padding:49%;
padding-down:-30%;
margin-down:-50%;
//width:100%;
//height:10%;
border:2px solid red;
}

  table{
  margin-left:50%;
  }
  th, td {
    padding: 2px;
}
select {
   width:45%;
   height:35px;
   border-radius:2px;
    
}
  </style>
	</head>
<body>


	<!--Top Bar-->
	
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
				<div class="col-sm-9 col-xs-4 info-box" >
					<div class="header-informations hidden-xs">
						<div class="media info-media" >
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
						 
							<a href="adminprofv.php"><img src="<?php echo $row['photo']?>" width=70 height=70 style="border-radius:50px;" ></a>
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
					
					<li><a href="adminhome.php">home</a></li>					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">user <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="adminuserview.php">view all</a></li>
							<li><a href="#">add</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Driver <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="adminviewdriver.php">view all</a></li>
							<li><a href="adminadddrver.php">Registration</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">bookkings <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">view all</a></li>
							<li><a href="#">upcoming</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">vehicle <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="adminvehiclview.php">view all</a></li>
							<li><a href="adminaddvehicle.php">add</a></li>
							<li><a href="alocatevehicle.php">alocate</a></li>
						</ul>
					</li>
					
					<li><a href="logout.php">LoGOUT</a></li>
				</ul>			
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav> 

	<!--Home 1 Slide Banner-->
	<div class="divv2">
					<div class="divv1">
					<form name="myform" action="#" method="post">
					<select name="drve">
					<?php
					$sql1="SELECT * FROM `registration` WHERE `type_id`=3 and `dvraloc`=0";
					$result1=mysqli_query($con,$sql1);
					while($row1=mysqli_fetch_array($result1))
					{

					?>  
					<option><?php echo $row1['emailid']?></option>
					<?php
					}
					?>
					</select>
					<input type="submit" name="view" value="View">
					</form>
					<?php 
					if(isset($_POST['view'])&&isset($_POST['drve']))
					{
					$ab=$_POST["drve"];
					$tid=$_SESSION['id'];
					$_SESSION['drid']=$ab;
					$dr=$_SESSION['drid'];
					$sql="SELECT * FROM `registration` WHERE `emailid`='$dr'";
					$result=mysqli_query($con,$sql);
					}
					else{
					if((isset($_SESSION['drid'])))
					{
						
					$dr=$_SESSION['drid'];
					$sql="SELECT * FROM `registration` WHERE `emailid`='$dr'";
					$result=mysqli_query($con,$sql);
					}
					}
					?>
					<?php
					$i=0;
					while($row=mysqli_fetch_array($result))
					{

					?>    

					<table width=2 style="margin-top:-15%; margin-left:23%;">
					<img src="<?php echo $row['photo']?>" width=100 height=100 style="border-radius:10px">
					<form name="myform" action="#" method="post">

					<tr><td><p style="color:white">Fname:</p></td><td><input style="color:#f77d0a" type="text" name="firstname" value="<?php echo $row['fname']?>"></td>
					<td><p style="color:white">Lname:</p></td><td><input style="color:#f77d0a" type="text" name="lastname" value="<?php echo $row['lname']?>"></td></tr>
					<tr><td><p style="color:white">phone_no:</p></td><td><input style="color:#f77d0a" type="text" name="contact" value="<?php echo $row['phno']?>"></td>
					<td><p style="color:white">Email:</p></td><td><input style="color:#f77d0a" type="text" name="Email" value="<?php echo $row['emailid']?>"></td></tr>
					<tr><td><p style="color:white">Dob:</p></td><td><input style="color:#f77d0a" type="text" name="dob" value="<?php echo $row['Dob']?>"></td>
					<td><p style="color:white">Gender:</p></td><td><input style="color:#f77d0a" type="text" name="gender" value="<?php echo $row['gender']?>"></td></tr>
					<tr><td><p style="color:white">Address:</p></td><td><input style="color:#f77d0a" type="text" name="addres" value="<?php echo $row['Address']?>"></td>
					<td><p style="color:white">Id no:</p></td><td><input style="color:#f77d0a" type="text" name="idno" value="<?php echo $row['idproofno']?>"></td></tr>
					<input style="color:#f77d0a" type="hidden" name="sid1" value="<?php echo $row['reg_id']?>"/>


					</dl>
					</form>
					</table>
					<?php
					}

					?>
 
					</div>
				
			<div class="divv12">
			<form name="myform" action="#" method="post">
					<select name="drve1">
					<?php
					$sql2="SELECT `vregno` FROM `vehicle_reg` WHERE `valoc`=0";
					$result2=mysqli_query($con,$sql2);
					while($row2=mysqli_fetch_array($result2))
					{
					?>  
					<option><?php echo $row2['vregno']?></option>
					<?php
					}
					?>
					</select>
					<input type="submit" name="vv1" value="View">
					</form>
					<?php 
					if(isset($_POST['vv1'])&&isset($_POST['drve1']))
					{					
					$ab1=$_POST["drve1"];										
				    $_SESSION['vhid']=$ab1;
				    $tv=$_SESSION['vhid'];
					$tid=$_SESSION['id'];
					$sql3="SELECT * FROM `vehicle_reg` WHERE `vregno`='$tv'";
					$result=mysqli_query($con,$sql3);
					}
				    else
					{
					if((isset($_SESSION['vhid'])))
					{
					$tv=$_SESSION['vhid'];
					$sql3="SELECT * FROM `vehicle_reg` WHERE `vregno`='$tv'";
					$result=mysqli_query($con,$sql3);
					}
					}
					?>
					<?php
					while($row3=mysqli_fetch_array($result))
					{

					?>    

					<table width=2 style="margin-top:-15%; margin-left:23%;">

					<img src="<?php echo $row3['vphoto']?>" width=100 height=100 style="border-radius:10px">
					<form name="myform" action="#1" method="post">

					<tr><td><p style="color:white">vname:</p></td><td><input style="color:#f77d0a" type="text" name="firstname" value="<?php echo $row3['vname']?>"></td>
					<td><p style="color:white">vregno:</p></td><td><input style="color:#f77d0a" type="text" name="lastname" value="<?php echo $row3['vregno']?>"></td></tr>
					<tr><td><p style="color:white">vseatno:</p></td><td><input style="color:#f77d0a" type="text" name="contact" value="<?php echo $row3['vseatno']?>"></td>
					<td><p style="color:white">vmodel:</p></td><td><input style="color:#f77d0a" type="text" name="Email" value="<?php echo $row3['vmodel']?>"></td></tr>
					<tr><td><p style="color:white">vcolor:</p></td><td><input style="color:#f77d0a" type="text" name="dob" value="<?php echo $row3['vcolor']?>"></td>
					<td><p style="color:white">vrate:</p></td><td><input style="color:#f77d0a" type="text" name="gender" value="<?php echo $row3['vrate']?>"></td></tr>

					<input style="color:#f77d0a" type="hidden" name="sid1" value="<?php echo $row3['vid']?>"/>


					</dl>
					</form>
					</table>
					<?php
					}

					?>
					<?php
					
					if((isset($_SESSION['vhid']))&&(isset($_SESSION['drid'])))
					{
					$tv=$_SESSION['vhid'];
					$dr=$_SESSION['drid'];
					
						?>
						
					<form name="myform" action="alcateconn.php" method="post">	
					<button class="btn btn-primary btn-block" name="submit"style="width:150px; margin-left:85%; margin-top:-20%;">ADD</button>
					<input style="color:#f77d0a" type="hidden" name="vhid" value="<?php echo $_SESSION['vhid']?>"/>
					<input style="color:#f77d0a" type="hidden" name="drid" value="<?php echo $_SESSION['drid']?>"/>
					</form>
					
					<?php
					}					
					?>
			</div>
	<div class="divalo">
					<div class="div1">
					<h1 style="color:white; margin-left:4%; margin-top:-10%;"> ALOCATED VEHICLES</h1>
					<?php 
					$tid=$_SESSION['id'];
					//INSERT INTO `vehicle_reg`(`vid`, `vname`, `vregno`, `vphoto`, `vseatno`, `vmodel`, `vcolor`, `vrate`, `status`)
					$sql="SELECT * FROM `vehicle_reg` WHERE `valoc`=1";
					$result=mysqli_query($con,$sql);

					$i=0;
					while($row=mysqli_fetch_array($result))
					{

					?>    

					<table width=2 style="margin-top:-19%; margin-left:23%;">

					<img src="<?php echo $row['vphoto']?>" width=100 height=100 style="border-radius:10px">
					<form name="myform" action="#" method="post">

					<tr><td><p style="color:white">Name:</p></td><td><input style="color:#f77d0a" type="text" name="vname" value="<?php echo $row['vname']?>"></td>
					<td><p style="color:white">Regno:</p></td><td><input style="color:#f77d0a" type="text" name="vregno" value="<?php echo $row['vregno']?>"></td></tr>
					<tr><td><p style="color:white">Seatno:</p></td><td><input style="color:#f77d0a" type="text" name="vseatno" value="<?php echo $row['vseatno']?>"></td>
					<td><p style="color:white">Model:</p></td><td><input style="color:#f77d0a" type="text" name="vmodel" value="<?php echo $row['vmodel']?>"></td></tr>
					<tr><td><p style="color:white">Color:</p></td><td><input style="color:#f77d0a" type="text" name="vcolor" value="<?php echo $row['vcolor']?>"></td>
					<td><p style="color:white">Rate:</p></td><td><input style="color:#f77d0a" type="text" name="vrate" value="<?php echo $row['vrate']?>"></td></tr>
					<input style="color:#f77d0a" type="hidden" name="vid" value="<?php echo $row['vid']?>"/>

					<!--<td style="margin-top:3%; margin-left:5%; color:blue;"><input type="submit" name="edit" value="Edit"></td>
					<td style="margin-top:3%; margin-left:15%; color:blue;"><input type="submit" name="delete" value="Delete"></td>-->
					</dl>
					</form>
					</table>
					<div class="divp">
					</div>
					<?php
					}

					?>

	</div>
	</div>
	<div class="divnalo">
	<div class="div1">
					<h1 style="color:white; margin-left:3%; margin-top:-10%;">UNALOCATED VEHICLES</h1>
					<?php 
					$tid=$_SESSION['id'];
					//INSERT INTO `vehicle_reg`(`vid`, `vname`, `vregno`, `vphoto`, `vseatno`, `vmodel`, `vcolor`, `vrate`, `status`)
					$sql="SELECT * FROM `vehicle_reg` WHERE `valoc`=0";
					$result=mysqli_query($con,$sql);

					$i=0;
					while($row=mysqli_fetch_array($result))
					{

					?>    

					<table width=2 style="margin-top:-19%; margin-left:23%;">

					<img src="<?php echo $row['vphoto']?>" width=100 height=100 style="border-radius:10px">
					<form name="myform" action="#" method="post">

					<tr><td><p style="color:white">Name:</p></td><td><input style="color:#f77d0a" type="text" name="vname" value="<?php echo $row['vname']?>"></td>
					<td><p style="color:white">Regno:</p></td><td><input style="color:#f77d0a" type="text" name="vregno" value="<?php echo $row['vregno']?>"></td></tr>
					<tr><td><p style="color:white">Seatno:</p></td><td><input style="color:#f77d0a" type="text" name="vseatno" value="<?php echo $row['vseatno']?>"></td>
					<td><p style="color:white">Model:</p></td><td><input style="color:#f77d0a" type="text" name="vmodel" value="<?php echo $row['vmodel']?>"></td></tr>
					<tr><td><p style="color:white">Color:</p></td><td><input style="color:#f77d0a" type="text" name="vcolor" value="<?php echo $row['vcolor']?>"></td>
					<td><p style="color:white">Rate:</p></td><td><input style="color:#f77d0a" type="text" name="vrate" value="<?php echo $row['vrate']?>"></td></tr>
					<input style="color:#f77d0a" type="hidden" name="vid" value="<?php echo $row['vid']?>"/>

					<!--<td style="margin-top:3%; margin-left:5%; color:blue;"><input type="submit" name="edit" value="Edit"></td>
					<td style="margin-top:3%; margin-left:15%; color:blue;"><input type="submit" name="delete" value="Delete"></td>-->
					</dl>
					</form>
					</table>
					<div class="divp">
					</div>
					<?php
					}

					?>

	</div>
	
	</div>
	</div>

    	<div class="p_anch"></div>
        <div class="p_body js__p_body js__fadeout"></div>
	
	
			
	
		<!--Testimonial-->
		<section class="row testimonial-row" style="margin-top:-48%;">
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
								<a href="#" class="client-img"><img src="images/testimonial/1.jpg" alt="" class="img-circle"></a>
							</div>
						</div>
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
								<a href="#" class="client-img"><img src="images/testimonial/1.jpg" alt="" class="img-circle"></a>
							</div>
						</div>
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
								<a href="#" class="client-img"><img src="images/testimonial/1.jpg" alt="" class="img-circle"></a>
							</div>
						</div>
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
		</section>-->
		
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

			
			
<script type="text/javascript">   
	var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  </script>
</div>	
</body>
	
	
<!-- Mirrored from haintheme.com/demo/html/supershine/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:42:02 GMT -->
</html>