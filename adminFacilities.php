<!DOCTYPE html>
<html>
  <head>
	  <title>Admin Facilities</title>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
  	  function exiting() {
  		  window.location.href="accessAuthentication.php";
  	  }
      function searching() {
        window.location.href="userQueryPage.php";
      }
      function deleting() {
        window.location.href="deletingRecords.php"; 
      }
      function adding() {
        window.location.href="addingRecords.php";
      }
      function updating() {
        window.location.href="updatingRating.php";
      }
    </script>
    <style type="text/css">
  	  body {
  		  background-image: url(facilitiesPage.jpg);
  		  background-repeat: no-repeat;
  		  background-size: 100%;
  	  }
  	  .btn {
  		  font-size: 30px;
  	  }
  	  h1 {
  		  font-size: 100px;
  		  color: #4FFAF5;

  	  }
    </style>
  </head>
  <body>
	<div class="container">
    <div class="row">
      <div class="col-sm-12 d-flex justify-content-center">
		    <h1>Admin Facilites</h1><br>
      </div>
    </div>
    <div class="row" style="margin-bottom:20px">
      <div class="col-sm-12 d-flex justify-content-center">
		    <button type="button" class="btn btn-lg btn-outline-danger" onclick="adding()">ADD</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-lg btn-outline-danger" onclick="deleting()">DELETE</button><br><br>
		  </div>
    </div>
    <div class="row" style="margin-bottom:20px; margin-top: 20px">
      <div class="col-sm-12 d-flex justify-content-center">  
        <button type="button" class="btn btn-outline-danger" onclick="updating()">UPDATE RATING</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <button type="button" class="btn btn-outline-danger" onclick="searching()">SEARCH</button><br><br>
      </div>
    </div>
    <div class="row" style="margin-top:20px;">
      <div class="col-sm-12 d-flex justify-content-center">
		    <button type="button" class="btn btn-outline-danger" onclick="exiting()">EXIT</button><br>
	    </div>
    </div>
  </div>
</body>
</html>