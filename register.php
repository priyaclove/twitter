<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
	<section>
		<div class="">
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
				       <a class="nav-link " href="/twitter/login.php">Login</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link active" href="/twitter/register.php">Register</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link " href="/twitter/createtweet.php">Create Tweet</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="/twitter/viewtweet.php">View Tweets</a>
				        </li>
				     </ul>
		    	</div>
		  	</div>
		</nav>
	</section>
	 <!-- REGISTRATION FORM -->
<section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-8">
				<form class="row g-3" action="reg.php"method="post">
						  <div class="col-md-6">
						    <label for="inputEmail4" class="form-label">FIRST NAME:</label>
						    <input type="text" class="form-control" id="fname" name="fname">
						  </div>
						  <div class="col-md-6">
						    <label for="inputPassword4" class="form-label">LAST NAME:</label>
						    <input type="text" class="form-control" id="lname" name="lname">
						  </div>
						  <div class="col-12">
						    <label for="inputAddress" class="form-label">EMAIL:</label>
						    <input type="email" class="form-control" id="email" name="email"placeholder="enter your email">
						  </div>
						  <div class="col-12">
						    <label for="inputAddress2" class="form-label">PASSWORD:</label>
						    <input type="password" class="form-control" id="pass" name="password" placeholder="password">
						  </div>
						  <div class="col-md-12">
						    <label for="inputState" class="form-label">GENDER:</label>
						    <select id="gender" name="gender" class="form-select">
						      <option selected>SELECT</option>
						      <option>female</option>
						      <option>male</option>
						      <option>not to prefer</option>
						    </select>
						  </div>
						  <div class="col-12">
						    <div class="form-check">
						      <input class="form-check-input" type="checkbox" id="gridCheck">
						      <label class="form-check-label" for="gridCheck">
						        Check me out
						      	</label>
						    	</div>
						  		</div>
						  	<div class="col-12">
							<button type="submit" class="btn btn-primary">REGISTER</button>
						</div>
					</div>
				</div>
			</form>
		</section>
	</body>
</html>