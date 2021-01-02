<?php 
session_start();
if(isset($_SESSION['email'])){
 header("location:reservation.php");
}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
	<style>
	*{
		margin: 0;
		padding: 0;
	}
		body{
			height: 100vh;
			background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(imgs/pic6.jpg);
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;
		}

		.bg-dark{
				background-color: black !important;
		}

		.btn-dark{
			background-color: #000000!important;
			color: white;
			border:none;
			transition: 0.5s;
		}
		.btn-dark:hover{
			background-color: #929aa1 !important;
			color: black;
		}

		input[type="submit"]{
			width: 100%;
			margin-top: 10px;
			height: 50px;
			font-weight: 500;
			font-size: 21px;
		}

		.btn-warning:hover{
			background-color: #f8c220;
		}
		label{
			color: white;
		}
		.formstyle{
			height: 680px;
			margin-top: 40px;
			background-color: rgba(0,0,0,0.5);
			padding-bottom: 50px;
			padding-left: 30px;
			padding-right: 30px;
		}
		h1{
			font-size: 68px !important;
			color: black;
		}
		#success{
			font-size: 20px;
			
		}
		img{
			height:50px;
			width: 160px;
		}

	</style>
</head>
<body> 
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: black !important;">
  			<a class="navbar-brand text-white" style="font-family: 'Dancing Script', cursive; font-size: 30px;" href="#"><img src="imgs/logo2.jpg"></a>
   			<div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
     	    <form class="form-inline my-2 my-lg-0">
		    	<a href="index.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4" ><soft>HOME</soft></a>
		    
		    	<a href="packages.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4"><soft>PACKAGES</soft></a>
		    	<a href="gallery.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4"><soft>GALLERY</soft></a>
		       <a href="contact.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4"><soft>CONTACT US</soft></a>
		    </form>
		  </div>
		</nav>
	</header>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-5 col-12 formstyle">
				<h1 class="display-3 mt-5 mb-5 text-center">REGISTRATION</h1>
				<span class="text-success text-center" id="success"></span>
				<form action="verify.php" method="POST">
			  	<div class="form-group">
				    <label>First Name</label>
				    <input type="text" class="form-control" name="firstname" placeholder="First name" required>
			  	</div>
			  	<div class="form-group">
			    	<label for="exampleInputPassword1">Last Name</label>
			    	<input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
			  	</div>
			  	<div class="form-group">
			    	<label>Email address</label>
			    	<input type="email" class="form-control" name="email" placeholder="Email" required>
			  	</div>
			  	<div class="form-group">
			    	<label>Password</label>
			    	<input type="password" class="form-control" name="password" placeholder="Password" required>
			  	</div>
			 	<input type="submit" name="submit" class="btn btn-warning" value="SIGN UP">
			 </form>
		</div>
		<div class="col-xl-5 offset-xl-2 col-12 formstyle">
				<h1 class="display-3 mt-5 mb-5 text-center">LOGIN</h1>
				<form action="verify.php" method="POST">
			  	<div class="form-group">
			    	<label>Email address</label>
			    	<input type="email" class="form-control" name="email" placeholder="Email" required>
			  	</div>
			  	<div class="form-group">
			    	<label>Password</label>
			    	<input type="password" class="form-control" name="password" placeholder="Password" required>
			  	</div>
			 	<input type="submit" name="submit1" class="btn btn-warning" value="LOGIN">
			 </form>
		</div>
	</div>
</div>
</body>
</html>
<?php } ?>