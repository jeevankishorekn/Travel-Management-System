<!DOCTYPE html>
<html>
<head>
	<title>Little Adventures</title>
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
	html{
		width: 95%;
		height: 100%;
	}
header{
	position: absolute;
}

.bgimg{
	height: 93.2vh;
	width: 100% !important;
	
}
.navtop{
	position: absolute;
	width: 100%;
	z-index: 999;
}
.carsl{
	position:relative;
	top:55px;
}
.bg-dark{
	background-color: black !important;
}

.row{
	width: 100%;
	
	}
	
	h1{
	font-family: 'Dancing Script', cursive;
	font-size: 145px !important;
	color: white;
	margin-top:200px;
	margin-left: 45px;
	font-weight: 200;
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
		img{
			height:50px;
			width: 160px;
		}
</style>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark navtop">
  			<a class="navbar-brand text-white" style="font-family: 'Dancing Script', cursive; font-size: 30px;" href="#"><img src="imgs/logo2.jpg"></a>
   			<div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
     	    <form class="form-inline my-2 my-lg-0">
		    	<a href="index.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4" ><soft>HOME</soft></a>
		    	
		    	<a href="packages.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4" ><soft>PACKAGES</soft></a>
		    	<a href="gallery.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4" ><soft>GALLERY</soft></a>
		       <a href="contact.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4" ><soft>CONTACT US</soft></a>
		    </form>
		  </div>
		</nav>
	<div id="carouselExampleIndicators" class="carousel slide carsl" data-ride="carousel" data-interval=3000>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img src="imgs/pic5.jpg" class="d-block w-100 bgimg" alt="img1">
    </div>
    <div class="carousel-item">
      <img src="imgs/pic3.jpg" class="d-block w-100 bgimg" alt="img2">
    </div>
    <div class="carousel-item">
      <img src="imgs/pic4.jpg" class="d-block w-100 bgimg" alt="img3">
    </div>
  </div>
 </div>
</header>
<div class="row d-flex justify-content-center text-center">
	<div class="col-12 mt-5 ml-5">
		<h1 class="display-1 ">Little Adventures</h1>
	</div>
</div>
</body>
</html>