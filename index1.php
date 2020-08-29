<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <title>TechBite</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title></title>
	<style>
		.modal-body{
			background:rgba(211,211,211,0.5);
			padding:30px;
		}
	</style>

  </head>
  <body>
  <!-------------------------------------------------------------------------NAVBAR------------------------------------------------------------->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">iCoder</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.html">About</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Topics
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Technology</a>
					<a class="dropdown-item" href="#">Web Developement</a>
				<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Support</a>
					<a class="dropdown-item" href="#">Support</a>
				</div>
				</li>
      
				<li class="nav-item">
					<a class="nav-link" href="contacts.html">Contact Us</a>
				</li>     
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
			</form>
			<!-- Button trigger modal -->
			<div class="mx-2">
				<button class="btn btn-danger" data-toggle="modal" data-target="#loginModal">Log-in</button>
				<button class="btn btn-danger" data-toggle="modal" data-target="#signupModal">Sign-Up</button>
			</div>
		</div>
	</nav>
<!------------------------------------------------------------------------------------------------------------------------------------------------>
	
	
	<!-- Login Modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Login to iCoder</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="registration.php" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" name="user" id="exampleInputEmail1" aria-describedby="emailHelp">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" name="password" id="exampleInputPassword1">
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<!--<button type="submit" class="btn btn-primary">Login</button>-->
				</div>
			</div>
		</div>
	</div>
	<!-------------------Signup Modal---------------------->
	<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Get an iCoder account</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationCustom01">First name</label>
								<input type="text" class="form-control" id="validationCustom01" value="Mark" required>
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationCustom02">Last name</label>
								<input type="text" class="form-control" id="validationCustom02" value="Otto" required>
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationCustom03">City</label>
								<input type="text" class="form-control" id="validationCustom03" required>
								<div class="invalid-feedback">
									Please provide a valid city.
								</div>
							</div>
							<div class="col-md-3 mb-3">
								<label for="validationCustom04">State</label>
								<select class="custom-select" id="validationCustom04" required>
									<option selected disabled value="">Choose...</option>
									<option>...</option>
								</select>
								<div class="invalid-feedback">
									Please select a valid state.
								</div>
							</div>
							<div class="col-md-3 mb-3">
								<label for="validationCustom05">Zip</label>
								<input type="text" class="form-control" id="validationCustom05" required>
								<div class="invalid-feedback">
									Please provide a valid zip.
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
								<label class="form-check-label" for="invalidCheck">
									Agree to terms and conditions
								</label>
								<div class="invalid-feedback">
									You must agree before submitting.
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1">
						</div>
						<div class="form-group">
							<label for="cexampleInputPassword1">Confirm Password</label>
							<input type="password" class="form-control" id="cexampleInputPassword1">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">SignUp</button>
				</div>
			</div>
		</div>
	</div>

<!------------------------------------------------------------------CARAUSEL------------------------------------------------------------------------------>

	<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="https://source.unsplash.com/1000x300/?technology,apple_laptops" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h2>Welcome To iCoder</h>
						<p>Technolohy, News, Developement and Trends</p>
						<button class="btn btn-danger">Technology</button>
						<button class="btn btn-primary">Web Developement</button>
						<button class="btn btn-sucess">Tech Fun</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="https://source.unsplash.com/1000x300/?code,website" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h2>The Best Coding Blog</h>
						<p>Technolohy, News, Developement and Trends</p>
						<button class="btn btn-danger">Technology</button>
						<button class="btn btn-primary">Web Developement</button>
					<button class="btn btn-sucess">Tech Fun</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="https://source.unsplash.com/1000x300/?devapps,programming" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h2>Your Mind Changing Blog</h>
					<p>Technolohy, News, Developement and Trends</p>
						<button class="btn btn-danger">Technology</button>
						<button class="btn btn-primary">Web Developement</button>
						<button class="btn btn-sucess">Tech Fun</button>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>
	</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------>


<!------------------------------------------------------------------------------------------------------------------------------------------------>
	<div class="container my-4">
		<div class="row mb-2">
			<div class="col-md-6">
				<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static">
						<strong class="d-inline-block mb-2 text-primary">World</strong>
						<h3 class="mb-0">Featured post</h3>
						<div class="mb-1 text-muted">Nov 12</div>
							<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="stretched-link">Continue reading</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/300x300/?technology,applications,technology" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>						</div>
					</div>
				</div>
			<div class="col-md-6">
				<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static">
						<strong class="d-inline-block mb-2 text-success">Design</strong>
						<h3 class="mb-0">Post title</h3>
						<div class="mb-1 text-muted">Nov 11</div>
							<p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="stretched-link">Continue reading</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/300x300/?technology,ideas,humanlaptops" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>
						</div>
					</div>
				</div>
		</div>
		
		<div class="row mb-2">
			<div class="col-md-6">
				<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static">
						<strong class="d-inline-block mb-2 text-primary">World</strong>
						<h3 class="mb-0">Featured post</h3>
						<div class="mb-1 text-muted">Nov 12</div>
							<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="stretched-link">Continue reading</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/300x300/?technology,architechture,technology" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>						</div>
						</div>
				</div>
			<div class="col-md-6">
				<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static">
						<strong class="d-inline-block mb-2 text-success">Design</strong>
						<h3 class="mb-0">Post title</h3>
						<div class="mb-1 text-muted">Nov 11</div>
							<p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="stretched-link">Continue reading</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/1000x300/?technology,revolution,mind_changing,software" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>						</div>
					</div>
				</div>
		</div>
		<div class="row mb-2">
			<div class="col-md-6">
				<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static">
						<strong class="d-inline-block mb-2 text-primary">World</strong>
						<h3 class="mb-0">Featured post</h3>
						<div class="mb-1 text-muted">Nov 12</div>
							<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="stretched-link">Continue reading</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/300x300/?technology,software,laptops" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>						</div>
					</div>
				</div>
			<div class="col-md-6">
				<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static">
						<strong class="d-inline-block mb-2 text-success">Design</strong>
						<h3 class="mb-0">Post title</h3>
						<div class="mb-1 text-muted">Nov 11</div>
							<p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="stretched-link">Continue reading</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/300x300/?technology,apple_laptops" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>
						</div>
					</div>
				</div>
		</div>
	</div>
	<!-------------------------------------------------------------------------------------------------------------------------------------------------------->
	
	<footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2020-2021 iCoder, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
	</footer>
	<!------------------------------------------------------------------------------------------------------------------------------------------------------------>
    
	
	<!-- Optional JavaScript -->
	<!--<script>// Example starter JavaScript for disabling form submissions if there are invalid fields
		(
		function() 
		{
		'use strict';
			window.addEventListener('load', function()
			{
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form)
				{
					form.addEventListener('submit', function(event)	
					{
						if (form.checkValidity() === false)
						{
						event.preventDefault();
						event.stopPropagation();
						}
					form.classList.add('was-validated');
					},
					false);
				}
				);
			}, false);
		}
		)();
	</script>-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
