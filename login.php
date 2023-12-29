<?php




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body>
	<section>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  			<div class="container-fluid">
		    <a class="navbar-brand" href="#">Twitter</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" aria-current="page" href="/twitter">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" href="/twitter/login.php">Login</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="/twitter/register.php">Register</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="/twitter/createtweet.php">Create Tweet</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="/twitter/viewtweet.php">View Tweets</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</section>
	<!-- Login form -->
	<section>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-8">
					<form>
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email address</label>
					    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
					    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Password</label>
					    <input type="password" class="form-control" id="password">
					  </div>
					  <div class="mb-3 form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Check me out</label>
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>