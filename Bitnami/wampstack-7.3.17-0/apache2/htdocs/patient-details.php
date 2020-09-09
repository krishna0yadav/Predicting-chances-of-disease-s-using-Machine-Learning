<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
/* Database credentials. */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'project_admin');
define('DB_PASSWORD', 'projectpass');
define('DB_NAME', 'project');
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name = $phone = $age = $height = $weight = $blood_group ="";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
				$name = trim($_POST["name"]);
				$phone = trim($_POST["phone"]);
				$age = trim($_POST["age"]);
				$height = trim($_POST["height"]);
				$weight = trim($_POST["weight"]);
				$blood_group = trim($_POST["blood_group"]);
	// Attempt insert query execution
	$sql = "INSERT INTO `patient_details`(`name`, `phone`, `age`, `height`, `weight`, `blood_group`)
	VALUES (?,?,?,?,?,?)";
			if($stmt = mysqli_prepare($link, $sql)){
				// Bind variables to the prepared statement as parameters
				mysqli_stmt_bind_param($stmt, "ssssss", $param_name, $param_phone, $param_age, $param_height, $param_weight, $param_blood_group);
				// Set parameters
				$param_name=$name;
				$param_phone=$phone;
				$param_age=$age;
				$param_height=$height;
				$param_weight=$weight;
				$param_blood_group=$blood_group;
				// Attempt to execute the prepared statement
				if(mysqli_stmt_execute($stmt)){
					echo "Records inserted successfully.";
					// Redirect to details page
					header("location: medi.php");
				} else{
					echo "Something went wrong. Please try again later.";
				}
				// Close statement
				mysqli_stmt_close($stmt);
			}
	// Close connection
	mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="style/contactstyle.css">
		<style>
		body{
			background-image: url("image/patientinfo.jpg");
		}
	</style>
</head>
<body>
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
				</ul>
			</div>
		</nav>
	</div>
<div class="container">
	<div class="col-md-4">			
	</div>
	<div class="col-md-4" style="margin-top: 10px">
		<div class="wrapper">
			<h2>Patient Details</h2>
			<p>Please fill the patient's details.</p>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="form-group ">
					<label>Name</label>
					<input type="text" name="name" class="form-control" value="">
					<span class="help-block"></span>
				</div>    
				<div class="form-group ">
					<label>Phone (10 digits)</label>
					<input type="text" name="phone" class="form-control" value="">
					<span class="help-block"></span>
				</div>
				<div class="form-group ">
					<label>Age</label>
					<input type="text" name="age" class="form-control" value="">
					<span class="help-block"></span>
				</div>
				<div class="form-group ">
					<label>Height (in cms)</label>
					<input type="text" name="height" class="form-control" value="">
					<span class="help-block"></span>
				</div>
				<div class="form-group ">
					<label>Weight (in kgs)</label>
					<input type="text" name="weight" class="form-control" value="">
					<span class="help-block"></span>
				</div>
				<div class="form-group ">
					<label>Blood Group</label>
					<input type="text" name="blood_group" class="form-control" value="">
					<span class="help-block"></span>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Submit">
					<input type="reset" class="btn btn-default" value="Reset">
				</div>
			</form>
		</div> 
    </div>
</div>   
</body>
</html>