<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="style/contactstyle.css">
	<style >
	 body{
	 	background-color: #7ad7f0
	 }
	</style>
</head>
<body>
	<!-- Header -->
	<div class="allcontain">
		<div class="header">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li>Give us a call : 0755-2744567 </li>
			</ul>
			<ul class="logreg">
				<li>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?>.</li>
				<li>|</li>
				<li><a href="logout.php">Logout</a> </li>
			</ul>
		</div>
		<!-- Navbar Up -->
		<nav class="topnavbar navbar-default topnav">
			<div class="collapse navbar-collapse" id="upmenu" >
				<ul class="nav navbar-nav" id="navbarontop">
					<li class="active"><a href="welcome.php">HOME</a></li>
					<li class="active"><a href="patient-details.php">patients information </a></li>
					<li class="active"><a href="medi.php">Get disease prediction</span></a></li>
					<li class="active"><a href="contact.php">CONTACT DOCTOR</a></li>           
				</ul>
			</div>
		</nav>
		<div class="container">
			<font color="brown"><h1 align="center">WANT TO TAKE ADVICE FROM THE DOCTOR ?<BR><BR>
TAKE THE PREDICTION AND FILL THE CONTACT FORM BELOW THEN YOU WILL GET THE CONTACT DETAILS OF THE 
DOCTORS THAT ARE AVAILABLE IN YOUR CITY TO ADVICE YOU ON YOUR DISEASE</h1></font>
		</div>
		<!--_______________________________________ Carousel__________________________________ -->
		<div class="allcontain">
			<div id="carousel-up" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner " role="listbox">
					<div class="item active">
						<img src="image/calldoc.jpg" alt="docall">
					</div>
				</div>
				<nav class="navbar navbar-default midle-nav">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
							<h1>SEARCH TEXT</h1>
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="navbarmidle">
						<div class="searchtxt">
							<h1>SEARCH DOCTOR</h1>
						</div>
						<ul class="nav navbar-nav navbarborder">
							<li class="li-category">
								<a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">CITY<span class="glyphicon glyphicon-chevron-down downicon"></span></a>
								<ul class="dropdown-menu" id="mydd">
									<li><a href="#">BHOPAL</a></li>
									<li><a href="#">INDORE</a></li>
									<li><a href="#">JABALPUR</a></li>
								</ul>
							</li>
							<li class="li-minyear"><a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">SYMPTOMS <span class="glyphicon glyphicon-chevron-down downicon"></span></a>
								<ul class="dropdown-menu" id="mydd2">
									<li><a href="#">immobile</a></li>
									<li><a href="#">sciatica</a></li>
									<li><a href="#">rest pain</a></li>
									<li><a href="#">dullness</a></li>
									<li><a href="#">pulsus paradoxus</a></li>
									<li><a href="#">room spinning</a></li>
								</ul>
							</li>
							<li class="li-maxyear"><a class="btn dropdown-toggle btn-costume"  id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">DATE OF CALL <span class="glyphicon glyphicon-chevron-down downicon"></span></a>
								<ul class="dropdown-menu" id="mydd3">
									<li><a href="#">TODAY</a></li>
									<li><a href="#">TOMORROW</a></li>
									<li><a href="#">DAY AFTER TOMORROW</a></li>
								</ul>
							</li>
							<li class="li-search"> <button class="searchbutton"><span class="glyphicon glyphicon-search "></span></button></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<div class="allcontain" >
			<div class="contact" style="background-image: url(image/disprec.jpg);">
				<div class="newslettercontent">
					<div class="leftside">
						<img id="image_border" src="image/border.png" alt="border" >
						<div class="contact-form" >
							<h1>Contact Us</h1>
							<div class="form-group group-coustume">
								<input type="text" class="form-control name-form" placeholder="Name"/>
								<input type="text" class="form-control email-form" placeholder="E-mail"/>
								<input type="text" class="form-control name-form" placeholder="Age"/>
								<textarea rows="4" cols="50" class="message-form" placeholder="More information"></textarea>
								<button type="submit" class="btn btn-default btn-submit">Submit</button>
							</div>
						</div>
					</div>
					<div class="google-maps">
						<div id="googleMap"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="copyright">&copy; Copy right 2016 | <a href="#">Privacy </a>| <a href="#">Policy</a></div>
			<script src="http://maps.googleapis.com/maps/api/js"></script>
			<script>
				var myCenter=new google.maps.LatLng(41.567197,14.681526);
				function initialize(){
					var mapProp = {center:myCenter, zoom:16, mapTypeId:google.maps.MapTypeId.ROADMAP};
					var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
					var marker=new google.maps.Marker({position:myCenter,});
					marker.setMap(map);
				}
			</script>
			<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
			<script type="text/javascript" src="source/js/myscript.js"></script> <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
			<script>
				$(window).resize(function(){
					var new_height = $("#image_border").height();
					console.log(new_height);
					$("#googleMap").height(new_height);
				});
				$(window).load(function(){
					var new_height = $("#image_border").height();
					console.log(new_height);
					$("#googleMap").height(new_height);
					google.maps.event.addDomListener(window, 'load', initialize());
				});
			</script>
			<script type="text/javascript" src="source/js/myscript.js"></script>
			<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
		</div>
	</div>
</body>
</html>