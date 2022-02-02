
<!DOCTYPE html>
<html>
<head>
	<title>Smartlemon Task || Registration Page</title>
</head>
<link rel= "stylesheet" type= "text/css" href="packages/bootstrap/css/bootstrap.css"/>
<body>
<a href="index.php" class=" home-page-btn btn btn-primary">Go to HomePage</a>
<div class="container">
	<div class="row search-container">
	  <div class="col-sm-12">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Registration page</h5>
	        <form id="register-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			  <div class="form-group">
			    <label for="email-input">Email address</label>
			    <input type="email" class="form-control" id="email-input" name="email-input" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="name-input">Name</label>
			    <input type="text" class="form-control" id="name-input" name="name-input" aria-describedby="nameHelp" placeholder="Enter name">
			  </div>
			 <div class="form-group">
			    <label for="password-input">Password</label>
			    <input type="password" class="form-control" id="password-input" name="password-input" placeholder="Password repeat">
			  </div>
			  <div class="form-group">
			    <label for="password2-input">Password-repeat</label>
			    <input type="password" class="form-control" id="password2-input" name="password2-input" placeholder="Password repeat">
			  </div>
			  <input type="hidden" name="register">
			  <button type="submit" class="btn btn-primary">Register</button>
			</form>
	      </div>
	    </div>
	  </div>
	</div>
</div>

<script type="text/javascript" src="packages/bootstrap/js/bootstrap.js"></script>
</body>
</html>