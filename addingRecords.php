<!DOCTYPE html>
<html>
<head>
	<title>Adding Record Values</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		div.form-group {
  			padding-right: 50px;
  			padding-top: 20px;
  		}
  		textarea {
  			height: 400px;
  			width: 200px;
  		}
		h1 {
			margin-top:100px;
		}
		body {
			background-image: url("addingRecords.png");
			background-size: 100%;
			background-repeat: no-repeat;
		}
  	</style>
</head>
<body>
	<center>
	<h1>Adding Course</h1>
	<form class="form-inline d-flex justify-content-center" action="addingRecords.php" method="post">
	<!--<form action="/action_page.php">-->
	<div class="row">	
  		<div class="form-group">
    		<input type="text" name="course_ID" placeholder="Course ID" class="form-control col-sm-12" id="course_ID">
  		</div>
  		<div class="form-group">
    		<input type="text" name="course_Name" placeholder="Course Name" class="form-control col-sm-12" id="course_Name">
  		</div>
  		<div class="form-group">
    		<input type="text" name="rating" placeholder="Rating" class="form-control col-sm-12" id="rating">
    	</div>
  	</div>
  	<div class="row">
  		<div class="form-group">
    		<input type="text" name="url" placeholder="URL of Video" class="form-control col-sm-12" id="url">
  		</div>
  		<div class="form-group">
    		<input type="text" name="genre_ID" placeholder="Genre ID" class="form-control col-sm-12" id="genre_ID">
  		</div>
  		<div class="form-group">
    		<input type="text" name="hours" placeholder="Number of hours of Video" class="form-control col-sm-12" id="hours">
  		</div>
  	</div>
  	<div class="row">
  		<div class="form-group">
    		<input type="text" name="keywords" placeholder="Keywords" class="form-control col-sm-12" id="keywords">
  		</div>
  		<div class="form-group">
    		<input type="text" name="cost" placeholder="Cost of the Course" class="form-control col-sm-12" id="cost">
  		</div>
  		<div class="form-group">
    		<input type="text" name="book_id" placeholder="Book ID" class="form-control col-sm-12" id="book_id">
  		</div>
  	</div>
  	<div class="row">
  		<div class="form-group">
    		<textarea type="text" name="description" placeholder="A Brief Description" class="form-control col-sm-12" id="description"></textarea>
  		</div>
		<div class="form-group">
    		<input type="text" name="dev_ID" placeholder="Developer ID" class="form-control col-sm-12" id="dev_ID">
  		</div>
  	</div>
  	<div class="row">
  		<div class="form-group">
  			<button type="submit" name="submitCourse" id="submitCourse" class="btn btn-outline-primary btn-lg">Submit</button>
		</div>
	</div>
	</form>
	<h1>Adding Developer</h1>
	<form class="form-inline d-flex justify-content-center" action="addingRecords.php" method="post">
		<div class="row">	
  		<div class="form-group">
    		<input type="text" name="developer_ID" placeholder="Developer ID" class="form-control col-sm-12" id="developer_ID">
  		</div>
  		<div class="form-group">
    		<input type="text" name="dev_Name" placeholder="Developer Name" class="form-control col-sm-12" id="dev_Name">
  		</div>
  	</div>
  	<div class="row">
  		<div class="form-group">
    		<input type="text" name="dev_email" placeholder="Developer Email ID" class="form-control col-sm-12" id="dev_email">
  		</div>
  		<div class="form-group">
    		<input type="text" name="dev_phone" placeholder="Phone Number" class="form-control col-sm-12" id="dev_phone">
  		</div>
  	</div>
  	<div class="row">
  		<div class="form-group">
    		<input type="text" name="dev_address" placeholder="Address" class="form-control col-sm-12" id="dev_address">
  		</div>
  	</div>
  	<div class="row">
  		<div class="form-group">
  			<button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg">Submit</button>
		</div>
	</div>
	</form><br><br>
	<input type="button" class="btn btn-outline-danger btn-lg" id="exit" value="EXIT" onclick="window.location.href='adminFacilities.php';">
	</center>
</body>
</html>

<?php
	include("connecting.php");
	if(isset($_POST['submitCourse'])) {
		$courseID=$_POST['course_ID'];
		$temp="SELECT course_id from course where course_id='$courseID';";
		$result = mysqli_query($conn, $temp);
		if (mysqli_num_rows($result) > 0) {
    			trigger_error("Course already exists!!!");
		}
		$courseName=$_POST['course_Name'];
		$rating=$_POST['rating'];
		$location=$_POST['url'];
		$genreID=$_POST['genre_ID'];
		$time=$_POST['hours'];
		$keywords=$_POST['keywords'];
		$cost=$_POST['cost'];
		$book=$_POST['book_id'];
		$description=$_POST['description'];
		$devID=$_POST['dev_ID'];
		$sql="INSERT into course values ('$courseID', '$courseName',  $rating, '$location', '$time','$description',  '$keywords',  $cost ,'$book','$genreID','$devID');";
	}
	if(isset($_POST['submit'])) {
		$devID = $_POST['developer_ID'];
		$temp="SELECT dev_id from developer where dev_id='$devID';";
		$result = mysqli_query($conn, $temp);
		if (mysqli_num_rows($result) > 0) {
    			trigger_error("Developer already exists!!!");
		}
		$devName = $_POST['dev_Name'];
		$devEmail =  $_POST['dev_email'];
		$devPhone = $_POST['dev_phone'];
		$address = $_POST['dev_address'];

		$sql = "INSERT into developer values ('$devID', '$devName', '$devEmail','$devPhone','$address');";
	}
	if(isset($_POST['submitCourse']) || isset($_POST['submit'])) {
	if(mysqli_query($conn, $sql)) {
		echo "Database updated successfully";
	} else {
		echo "Error updating Database: " . mysqli_error($conn);	
	}	
	mysqli_close($conn);
	}
?>