<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
			background-image: url(loginPage.jpg);
			background-repeat: no-repeat;
			background-size: 100%;
			align-self: center;
		}
		label {
			color: #FFF;
		}
		h1 {
			padding-top: 50px;
			color: rgb(255,0,0);
			font-size: 100px;
		}

	</style>
</head>
<body>
	<h1 class="col-sm-12 d-flex justify-content-center">Admin Login</h1>
	<form style="padding-top: 50px;" class="form-inline col-sm-12 d-flex justify-content-center" style="padding-left: 100px;" action="adminLogin.php" method="post">
  		<div class="form-group">
    		<input type="text" name="userName" class="form-control" id="userName" placeholder="Username">&nbsp;&nbsp;&nbsp;&nbsp;
  		</div>
  		<div class="form-group">
    		<input type="password" name="pwd" class="form-control" id="pwd" placeholder="Password">&nbsp;&nbsp;&nbsp;&nbsp;
  		</div>
  		<input type="submit" name="submit" class="btn btn-outline-danger btn-lg" value="Login" onclick="loginAdmin()">
	</form>
</body>
</html>

<?php
	include("connecting.php");
	if(isset($_POST['submit'])) {
		$uname=$_POST['userName'];
		$password=$_POST['pwd'];
		$sql = "SELECT user_id FROM id WHERE username = '$uname' and password = '$password';";
      		$result = mysqli_query($conn,$sql);
      		$count = mysqli_num_rows($result);
      		if($count == 1) {
			echo "Successful!";
         		header("location: adminFacilities.php");
      		}else {
        		 echo "Your Login Name or Password is invalid";
      		}	
	}
?>