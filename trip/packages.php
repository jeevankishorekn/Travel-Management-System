<?php session_start();
if(!isset($_SESSION['email'])){
 header("location:registration.php");
}
$db=mysqli_connect('localhost','root','','trip') or die('could not connect');
$query="SELECT * FROM package;";
$sql=mysqli_query($db,$query);
 ?>
<html>
<head>
	<title>Packages</title>
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
		background:url(imgs/j.jpg);
		background-size: cover;
		background-position: center center;
		background-repeat: none;
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
	img{
			height:50px;
			width: 160px;
		}
	.card-img-top{
		height: 280px !important;

	}	
	.slide{
		height: 250px;
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
		       <a href="logout.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4" ><soft>LOGOUT</soft></a>
		    </form>
		  </div>
		</nav>
	</header>
<div class="container">	
  
	<div class="row mt-4">
    <?php while($row=mysqli_fetch_assoc($sql)){ ?>
		<div class="col-xl-4">	
			<div class="card mb-5" style="width: 18rem; height: 29rem;">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <?php echo '<img src="'.$row['img1'].'" class="h-100 w-100 a img-thumbnail" alt="...">' ?>
    </div>
    <div class="carousel-item">
      <?php echo '<img src="'.$row['img2'].'" class="h-100 w-100 a img-thumbnail" alt="...">' ?>
    </div>
    <div class="carousel-item">
      <?php echo '<img src="'.$row['img3'].'" class="h-100 w-100 a img-thumbnail" alt="...">' ?>
    </div>
    <div class="carousel-item">
      <?php echo '<img src="'.$row['img4'].'" class="h-100 w-100 a img-thumbnail" alt="...">' ?>
    </div>
  </div>
</div>
	  <div class="card-body">
	    <h5 class="card-title text-center" style="text-transform: uppercase;"><?php echo $row['pname']; ?></h5>
	    <p class="card-text display-1" style="font-size:20px;"><b><?php echo $row['days']; ?> Days<br> <?php echo $row['nights']; ?> Nights<br>INR <?php echo $row['amount'] ?></b></p>
      <form action="reservation.php" method="POST">
        <?php echo '<input type="hidden" name="id" value="'.$row['pid'].'">'; ?>
	    <button class="btn btn-primary btn-block" name="sub" type="submit">BOOK</a>
      </form>
	  </div>
	</div>
	</div>
  <?php } ?>
</div>


</div>
</body>
</html>