<?php
	include('connecting.php');
	if(isset($_POST['updatingRating'])) {
		$courseID=$_POST['course_ID'];
		$rating=$_POST['rating'];
		$sql = "UPDATE course SET rating='$rating' WHERE course_id='$courseID';";
		if(mysqli_query($conn, $sql)) {
		    echo "Record updated successfully";
		} else {
		    echo "Error updating record: " . mysqli_error($conn);	
		}	
		mysqli_close($conn);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Updating the Rating of a video</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  		body {
  				background-image: url(deletingRecordsPage.jpg);
  				background-repeat: no-repeat;
  				background-size: 100%;
  			}
  		form {
  			padding-top: 100px;
  		}
  		input.form-control {
  			font-size: 30px;
  		}
      h1 {
        font-size: 60px;
        color: lime;
        padding-top: 100px;
      }
  	</style>
</head>
<body>
	<center>
    <h1>Updating Rating of Record</h1>
		<form class="form-group" action="updatingRating.php" method="post">
			<div class="form-group">
  				<input type="text" name="course_ID" placeholder="Course ID" class="form-control col-sm-6" id="course_ID">
			</div>
			<div class="form-group">
  				<input type="text" name="rating" placeholder="New Rating" class="form-control col-sm-6" id="rating">
			</div><br><br>
			<input type="submit" class="btn btn-outline-light btn-lg" name="updatingRating" value="Update Rating" id="updatingRating">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="button" class="btn btn-outline-danger btn-lg" id="exit" value="EXIT" onclick="window.location.href='adminFacilities.php';">
		</form>
	</center>
</body>
</html>