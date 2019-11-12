<!DOCTYPE html>
<html>
<head>
	<title>User Facilities</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  		function exiting() {
  			window.location.href="accessAuthentication.php";
  		}
  	</script>
  	<style type="text/css">
  		body {
  			background-image: url(loginPage.jpg);
  			background-repeat: no-repeat;
  			background-size: 100%;
  		}
  		.btn {
  			font-size: 30px;
        width: 150px;
  		}
  		h1 {
  			font-size: 100px;
        		color: #4FFAF5;
  		}
      div.coveringEverything {
        width: 50%;
        font-size: 20px;
        color: #1FFF81;
        border-style: groove;
      }
	table#resulting {
		text-align:center;
		color:white;
		width:80%;
	}
  	</style>
</head>
<body>
	<center>
		<h1>Searching</h1><br>
    <form class="form-group" action="userQueryPage.php" method="post">
      <div class="form-group">
          <input type="text" name="course" placeholder="Based on Course" class="form-control col-sm-6" id="course">
      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="form-group">
          <input type="text" name="dev" placeholder="Based on Developer" class="form-control col-sm-6" id="dev">
      </div><br><br>
		<button type="submit" class="btn btn-outline-dark btn-lg" name="search" id="search">GO</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="button" class="btn btn-outline-dark btn-lg" onclick="exiting()">EXIT</button><br>
	 </form></center>
</body>
</html>
<?php
	include("connecting.php");
		if(!empty($_POST['course'])) {
			$keywordSearch = $_POST['course']; 
			$sql ="Select * from course as C where keywords = '$keywordSearch';";
 	 	    	$result = mysqli_query($conn, $sql);
			echo "<center><table border='2' id=resulting>
			<tr>
			<th>COURSE ID</th>
			<th>NAME</th>
			<th>RATING</th>
			<th>URL</th>
			<th>HOURS</th>
			<th>DESCRIPTION</th>
			<th>KEYWORDS</th>
			<th>COST</th>
			<th>BOOK ID</th>
			<th>GENRE ID</th>
			<th>DEVELOPER ID</th>
			</tr>";
      			if(mysqli_num_rows($result) > 0) {
      				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
        				echo "<td>" . $row["course_id"] . "</td>";
					echo "<td>" . $row["name"] . "</td>";
					echo "<td>" . $row["rating"] . "</td>";
					echo "<td>" . $row["url"]. "</td>";
					echo "<td>" . $row["hours"]. "</td>";
					echo "<td>" . $row["description"]. "</td>";
					echo "<td>" . $row["keywords"]. "</td>";
					echo "<td>" . $row["cost"]. "</td>";
					echo "<td>" . $row["book_id"]. "</td>";
					echo "<td>" . $row["genre_id"]. "</td>";
					echo "<td>" . $row["dev_id"].  "</td>";
					echo "</tr>";
    				}
			}
			echo "</table></center>";
		}
		if(!empty($_POST['dev'])) {
			$devSearch = $_POST['dev'];
      			$sql="Select * from course as C, developer as D where D.dev_name='$devSearch' and c.dev_id=D.dev_id;"; 
      			$result=mysqli_query($conn,$sql);
			echo "<center><table border='2' id=resulting>
			<tr>
			<th>COURSE ID</th>
			<th>NAME</th>
			<th>RATING</th>
			<th>URL</th>
			<th>HOURS</th>
			<th>DESCRIPTION</th>
			<th>KEYWORDS</th>
			<th>COST</th>
			<th>BOOK ID</th>
			<th>GENRE ID</th>
			<th>DEVELOPER ID</th>
			</tr>";
			if(mysqli_num_rows($result) > 0) {
    				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
        				echo "<td>" . $row["course_id"] . "</td>";
					echo "<td>" . $row["name"] . "</td>";
					echo "<td>" . $row["rating"] . "</td>";
					echo "<td>" . $row["url"]. "</td>";
					echo "<td>" . $row["hours"]. "</td>";
					echo "<td>" . $row["description"]. "</td>";
					echo "<td>" . $row["keywords"]. "</td>";
					echo "<td>" . $row["cost"]. "</td>";
					echo "<td>" . $row["book_id"]. "</td>";
					echo "<td>" . $row["genre_id"]. "</td>";
					echo "<td>" . $row["dev_id"].  "</td>";
					echo "</tr>";
    				}
			}
			echo "</table></center>";
		}
	mysqli_close($conn);
?>