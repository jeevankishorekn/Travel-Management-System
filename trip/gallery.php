<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="lightbox2-2.11.1/dist/css/lightbox.min.css">
	 <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>  
	
	<style>
	*{
		margin: 0;
		padding: 0;
	}
	body{
		background-color: white;
		background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(imgs/pic19.png);
		background-size: cover;
		background-position: center center;
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
	.carousel-inner{
		height: 450px;
	}
	.a{
		height:450px !important;
	}
	.gallery img{
		width: 352px;
		height:200px;
		margin-top:15px;
		margin-right: 15px;
		transition: 1s;
	}
	.gallery img:hover{
		filter: grayscale(100%);
		transform: scale(1.1);
	}
	.gallery{
		margin-bottom: 30px;
		margin-top: 30px;
	}
	h1{
		font-family: "Tangerine",cursive;
		font-size: 130px !important;
		font-weight: 400 !important;
		letter-spacing: 5px;

	}
	.aw{
      height:50px;
      width: 160px;
    }
    .m{
      padding: 0;
      margin: 0;
    }

	</style>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark navtop">
  			<a class="navbar-brand text-white m" href="#"><img src="imgs/logo2.jpg" class="aw"></a>
   			<div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
     	    <form class="form-inline my-2 my-lg-0">
		    	<a href="index.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4" ><soft>HOME</soft></a>
		    	<a href="packages.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4" ><soft>PACKAGES</soft></a>
		    	<a href="gallery.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4" ><soft>GALLERY</soft></a>
		       <a href="contact.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4" ><soft>CONTACT US</soft></a>
		    </form>
		  </div>
		</nav>
	</header>
	<div class="container mt-5">
		<h1 class="text-center mb-5 display-3 text-white">Gallery</h1>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/pic8.jpg" class="h-100 w-100 a" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/pic17.jpg" class="h-100 w-100 a" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/pic11.jpg" class="h-100 w-100 a" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  	</a>
</div>
</div>
<div class="container gallery">
<a href="imgs/b.jpg" data-lightbox="mygallery"><img src="imgs/b.jpg"></a>
<a href="imgs/pic11.jpg" data-lightbox="mygallery"><img src="imgs/pic11.jpg"></a>
<a href="imgs/c.jpg" data-lightbox="mygallery"><img src="imgs/c.jpg"></a>
<a href="imgs/pic5.jpg" data-lightbox="mygallery"><img src="imgs/pic5.jpg"></a>
<a href="imgs/d.jpg" data-lightbox="mygallery"><img src="imgs/d.jpg"></a>
<a href="imgs/e.jpg" data-lightbox="mygallery"><img src="imgs/e.jpg"></a>
<a href="imgs/pic8.jpg" data-lightbox="mygallery"><img src="imgs/pic8.jpg"></a>
<a href="imgs/f.jpg" data-lightbox="mygallery"><img src="imgs/f.jpg"></a>
<a href="imgs/pic12.jpg" data-lightbox="mygallery"><img src="imgs/pic12.jpg"></a>
<a href="imgs/g.jpg" data-lightbox="mygallery"><img src="imgs/g.jpg"></a>
<a href="imgs/pic14.jpg" data-lightbox="mygallery"><img src="imgs/pic14.jpg"></a>
<a href="imgs/h.jpg" data-lightbox="mygallery"><img src="imgs/h.jpg"></a>
<a href="imgs/i.jpg" data-lightbox="mygallery"><img src="imgs/i.jpg"></a>
<a href="imgs/pic17.jpg" data-lightbox="mygallery"><img src="imgs/pic17.jpg"></a>
<a href="imgs/pic18.jpg" data-lightbox="mygallery"><img src="imgs/pic18.jpg"></a>




</div>

<script src="lightbox2-2.11.1/dist/js/lightbox-plus-jquery.js"></script>
</body>
</html>