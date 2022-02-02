<!DOCTYPE html>
<html>
<head>
	<title>SmartLemon Task || Login Page</title>
	<link rel= "stylesheet" type= "text/css" href="packages/bootstrap/css/bootstrap.css"/>
</head>


<body >
<a href="index.php" class="home-page-btn btn btn-primary">Go to HomePage</a>
<div class="container">
	<!-- First row -->
	<div class="row search-container">
	  <div class="col-sm-12">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Login page</h5>
	        <form id="login-form" method="post" action="">
			  <div class="form-group">
			    <label for="email-input">Email address</label>
			    <input type="email" class="form-control" id="email-input" name="email-input" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="password-input">Password</label>
			    <input type="password" class="form-control" id="password-input" name="password-input" placeholder="Password">
			  </div>
			  <input type="hidden" name="login">
			  <button type="submit" class="btn btn-primary">Login</button>
			</form>
	      </div>
	    </div>
	  </div>
	</div>
</div>

<script type="text/javascript" src="packages/bootstrap/js/bootstrap.js"></script>
</body>
</html>