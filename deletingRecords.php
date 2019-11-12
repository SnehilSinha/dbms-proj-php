<?php
	include('connecting.php');
	if(isset($_POST['deletingCourse'])) {
		$courseID=$_POST['course_ID'];
		$sql = "Delete from course where course_id='$courseID';";
		if(mysqli_query($conn, $sql)) {
        		echo "Record deleted successfully";
    		} else {
        		echo "Error deleting record: " . mysqli_error($conn);
    		}
		mysqli_close($conn);
	}

  	if(isset($_POST['deletingDeveloper'])) {
    		$devID=$_POST['dev_ID'];
    		$sql = "DELETE FROM developer WHERE dev_id='$devID';";
  		if(mysqli_query($conn, $sql)) {
      			echo "Record deleted successfully";
		} else {
 			echo "Error deleting record: " . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Deleting Records</title>
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
  				padding-top: 80px;
  			}
  			input.form-control {
  				font-size: 25px;
  			}
        h1 {
          padding-top: 100px;
          color: cyan;
          font-size: 60px;
        }
  		</style>
	</head>
	<body>
		<center>
    <h1>Deleting Course or Developer Record</h1>
		<form class="form-group" action="deletingRecords.php" method="post">
			<div class="form-group">
  				<input type="text" name="course_ID" placeholder="Course ID" class="form-control col-sm-6" id="course_ID">
			</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="form-group">
  				<input type="text" name="dev_ID" placeholder="Developer ID" class="form-control col-sm-6" id="dev_ID">
			</div><br><br>
			<input type="submit" class="btn btn-danger" name="deletingCourse" value="Delete by Course ID" id="course_ID_delete">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" class="btn btn-danger" name="deletingDeveloper" value="Delete by Developer ID" id="dev_ID_delete">
		</form>
		<input type="button" class="btn btn-danger btn-lg" id="exit" value="EXIT" onclick="window.location.href='adminFacilities.php';">
		</center>
	</body>
</html>

  
  