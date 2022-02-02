<!DOCTYPE html>
<html>
<head>
	<title>SmartLemon || Home Page</title>
</head>
<link rel= "stylesheet" type= "text/css" href="packages/bootstrap/css/bootstrap.css"/>
<body >
<div class="container">
	<!-- First row -->
	<div class="row search-container">
	  <div class="col-sm-12">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Search something...</h5>
	        <form id="search-form" action='results.php' method="post"> 
	        	<input type="text" class="form-control" name="search-text" placeholder="Enter some text...">
	        	<button type="submit" class="btn btn-primary">Search</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Second row -->
	<div class="row">
	  <div class="col-sm-6">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Login screen</h5>
	        <p class="card-text">Redirect to login screen</p>
	     	<a href="login.php" class="btn btn-success">Login</a>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Register screen</h5>
	        <p class="card-text">Redirect to register screen</p>
	        <a href="registration.php" class="btn btn-warning">Register</a>
	      </div>
	    </div>
	  </div>
	</div>
</div>

<script type="text/javascript" src="packages/bootstrap/js/bootstrap.js"></script>
</body>
</html>