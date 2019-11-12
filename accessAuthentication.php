<!DOCTYPE html>
<html>
	<head>
		<title>Access Authentication Page</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function admin() {
				window.location.href="adminLogin.php";
			}
			function user() {
				window.location.href="userQueryPage.php";
			}
		</script>
		<style type="text/css">
			body {
				background-image: url("accessAuth.jpg");
				background-size: 100%;
				background-repeat: no-repeat;
			}
			h1 {
				font-weight:bold;
				font-size:70px;
				color: #0F2027;
				margin-top:100px;
			}
		</style>
	</head>
	<body>
		<center>
		<h1>COURSE ANALYSER</h1>
		<div class="container" align="center" style="padding-top: 150px; width: 100%;">
			<input type="button" name="Admin" value="Admin" onclick="admin()" class="btn btn-outline-success btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="button" name="User" value="User" onclick="user()" class="btn btn-outline-primary btn-lg">
		</div>
		</center>
	</body>
</html>