<?php 
session_start();
if(!isset($_SESSION['email'])){
 header("location:registration.php");
}
?>

<html>
<head>
	<title>Reservation</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
 <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">  
<!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">
 <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<style>
		*{
		margin: 0;
		padding: 0;
		}
		body{
			height: 100vh;
			background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(imgs/pic7.jpg);
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
    .mu-readmore-btn {
    background-color: #fff;
    font-family: "Open Sans", sans-serif;
    display: inline-block;
    font-size: 16px;
    padding: 15px 35px;
    margin-right: 10px;
    margin-left: 15px;
    border:none;
    position: relative;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.mu-readmore-btn:hover{
  background-color: orange;
  color: white;
}
.mu-reservation-form button[type="submit"] {
    border: none;
    margin-top: 20px;
    margin-left: 15px;
}

		.mu-title .mu-subtitle {
    		font-size: 80px;
    		font-family: "Tangerine",cursive;
    		line-height: 30px;
    		margin-left: 400px;
}
		#mu-reservation {
      margin-top: -50px;
			  background-color:transparent;
			  display: inline;
			  float: left;
			  padding: 100px 0;
			  width: 100%;
			}

			.mu-reservation-area {
			  display: inline;
			  float: right;
			  width: 100%;
			}

			.mu-reservation-area .mu-title h2 {
			  color: #fff;
			  font-size: 65px;
				}

.mu-reservation-content {
  display: inline;
  float: left;
  margin-top: 20px;
  padding: 0 100px;
  width: 100%;
}

.mu-reservation-content h3 {
  color: #fff;
  display: inline-block;
  padding-bottom: 10px;
  font-weight: bold;
}

.mu-reservation-content p {
  color: #fff;
  letter-spacing: 0.5px;
  padding: 0 50px;
  text-align: center;
}

.mu-reservation-left {
  display: inline;
  float: left;
  margin-top: 30px;
  width: 100%;
}

.mu-reservation-form .form-control {
  margin-bottom: 20px;
}

.mu-reservation-form input[type="text"],
.mu-reservation-form input[type="email"] {
  border-radius: 0;
  color: #000;
  height: 40px;
}

.mu-reservation-form input[type="text"]:focus,
.mu-reservation-form input[type="email"]:focus {
  box-shadow: none;
}

.mu-reservation-form input[type="text"]::-webkit-input-placeholder,
.mu-reservation-form input[type="email"]::-webkit-input-placeholder {
  color: #555;
}

.mu-reservation-form input[type="text"]:-moz-placeholder,
.mu-reservation-form input[type="email"]:-moz-placeholder {
  color: #555;
}

.mu-reservation-form input[type="text"]::-moz-placeholder,
.mu-reservation-form input[type="email"]::-moz-placeholder {
  color: #555;
}

.mu-reservation-form input[type="text"]:-ms-input-placeholder,
.mu-reservation-form input[type="email"]:-ms-input-placeholder {
  color: #555;
}

.mu-reservation-form select {
  border-radius: 0;
  height: 40px;
}

.mu-reservation-form select:focus {
  box-shadow: none;
}

.mu-reservation-form select option {
  margin-bottom: 10px;
  color: #000;
}

.mu-reservation-form textarea {
  border-radius: 0;
  color: #000;
  padding: 10px;
}

.mu-reservation-form textarea:focus {
  box-shadow: none;
}

.mu-reservation-form textarea::-webkit-input-placeholder {
  color: #555;
}

 .mu-reservation-form textarea:-moz-placeholder {
  color: #555;
}

.mu-reservation-form textarea::-moz-placeholder {
  color: #555;
}

.mu-reservation-form textarea:-ms-input-placeholder {
  color: #555;
}

.mu-reservation-form button[type="submit"] {
  border: none;
  margin-top: 20px;
  margin-left: 15px;
}

.datepicker {
  border-radius: 0;
  padding: 6px 10px;
}

.datepicker .datepicker-switch, 
.datepicker .prev, 
.datepicker .next, 
.datepicker tfoot tr th {
  font-size: 20px;
}

.table-condensed > thead > tr > th, 
.table-condensed > tbody > tr > th, 
.table-condensed > tfoot > tr > th, 
.table-condensed > thead > tr > td, 
.table-condensed > tbody > tr > td, 
.table-condensed > tfoot > tr > td {
  padding: 6px;
}

.datepicker table tr td.day:hover {
  color: #fff;
}

.mu-reservation-right {
  background-color: #fff;
  display: inline;
  float: left;
  margin-top: 40px;
  width: 100%;
  padding: 10px;
}

.mu-opening-hour {
  display: inline;
  float: left;
  width: 100%;
  padding: 10px;
}

.mu-opening-hour h2 {
  font-family: "Tangerine", cursive;
  font-size: 50px;
  margin: 10px 15px 20px;
  padding-bottom: 15px;
  text-align: center;
}

.mu-opening-hour ul li {
  margin-bottom: 25px;
  letter-spacing: 2px;
}

.mu-opening-hour ul p{
  color: #000;
  margin-bottom: 0;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 600;
}
label{
  color: white;
}
.btn-lg{
  height: 60px;
  margin-top: 20px;
  border-radius: 0px;
  line-height: 40px;
  background-color: orange;
  border:none;
}
.h2{
  font-family: "Tangerine",cursive;
  font-size: 100px !important;
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
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: black !important;">
  			<a class="navbar-brand text-white m" href="#"><img src="imgs/logo2.jpg" class="aw"></a>
   			<div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
     	    <form class="form-inline my-2 my-lg-0">
          <a href="index.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4" ><soft>HOME</soft></a>
		    	<a href="packages.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4" ><soft>PACKAGES</soft></a>
		    	<a href="gallery.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4"><soft>GALLERY</soft></a>
		    	<a href="contact.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4"><soft>CONTACT US</soft></a>
		       <a href="logout.php" class="btn btn-dark my-2 my-sm-0 mx-3 px-4"><soft>LOGOUT</soft></a>
		    </form>
		  </div>
		</nav>
	</header>
	  <!-- Start Reservation section -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">

            <div class="mu-title">
              <span class="mu-subtitle">Make A</span>
              <h2 class="text-center h2">Dining Reservation</h2>
            </div>
              <div class="col-md-6">
                <div class="mu-reservation-left">
                  <form class="mu-reservation-form" action="reserved.php" method="POST">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">   
                          <label>Email</label>                     
                          <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">    
                          <label>Contact Number</label>                    
                          <input type="text" class="form-control" placeholder="Contact Number" name="contact" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Members</label>
                          <select class="form-control" name="members">
                            <option value="1 Person">1</option>
                            <option value="2 People">2</option>
                            <option value="3 People">3</option>
                            <option value="4 People">4</option>
                            <option value="5 People">5</option>
                            <option value="6 People">6</option>
                            <option value="7 People">7</option>
                            <option value="8 People">8</option>
                            <option value="9 People">9</option>
                            <option value="10 People">10</option>
                          </select>                      
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Date</label>
                          <input type="text" class="form-control" id="datepicker" name="date" placeholder="Date" required>              
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Select</label>
                          <select class="form-control" name="type">
                            <option value="Breakfast">Breakfast</option>
                            <option value="Lunch">Lunch</option>
                            <option value="Dinner">Dinner</option>
                          </select>                      
                        </div>
                      </div>
                      <input type="submit" class="mu-readmore-btn" name="submit1" value="Make Reservation">
                    </div>
                  </form>    
                </div>
              </div>

              <div class="col-md-5 col-md-offset-1">
                <div class="mu-reservation-right">
                  <div class="mu-opening-hour">
                    <h2>Opening Hours</h2>
                      <ul class="list-unstyled">
                        <li>
                            <p>Monday &amp; Tuesday</p>
                            <p>9:00 AM - 4:00 PM</p>
                        </li>
                        <li>
                            <p>Wednesday &amp; Thursday</p>
                            <p>9:00 AM - Midnight</p>
                        </li>
                        <li>
                            <p>Friday &amp; Saturday</p>
                            <p>9:00 AM - Midnight</p>
                        </li>
                        <li>
                            <p>Sunday</p>
                            <p>9:00 AM - 11:00 PM</p>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="assets/js/app.js"></script>
 
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 
</body>
</html>