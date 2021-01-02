<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="lightbox2-2.11.1/dist/css/lightbox.min.css">
	 <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
	     <link href="assets/css/font-awesome.css" rel="stylesheet">
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
		background-color: white;
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
	.navtop{
		height: 60px;
	}


/*==================
 MAP SECTION
====================*/

#mu-map {
  display: inline;
  float: left;
  height: 450px;
  width: 100%;
}

#mu-map iframe {
  width: 100%;
  height: 100%;
}

/*==================
 FOOTER SECTION
====================*/

#mu-footer {
  background-color: #444;
  display: inline;
  float: left;
  padding: 50px 0;
  width: 100%;
}

.mu-footer-area {
  display: inline;
  float: left;
  width: 100%;
  text-align: center;
}

.mu-footer-social {
  display: inline;
  float: left;
  width: 100%;
  text-align: center;
  margin-bottom: 10px;
}

.mu-footer-social a {
  background-color: #555;
  border-radius: 50%;
  color: #fff;
  display: inline-block;
  font-size: 20px;
  height: 45px;
  line-height: 47px;
  margin: 5px;
  text-align: center;
  width: 45px;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
}

.mu-footer-copyright {
  display: inline;
  float: left;
  width: 100%;
}

.mu-footer-copyright p {
  font-family: "Open Sans", sans-serif;
  font-size: 16px;
  letter-spacing: 0.5px;
  color: #fff;
}

.mu-footer-copyright p a {
  color: #fff;
}
label{
	font-weight: 600;
	font-size: 20px;
}
.border-bottom{
border-bottom-color: orange !important;

}
.ico:hover{
background-color: orange !important;
transform: scale(1.2);
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
	<!-- Start Contact section -->
	<h1 class="text-center mt-5" style="font-family: 'Tangerine',cursive; font-size: 100px !important; color:darkorange;">Get In Touch</h1>
	<h1 class="text-center display-4 mb-5" style="font-weight: 400;">CONTACT US</h1>
	<div class="container">
		<div class="row">
		<div class="col-md-6">
	 <form action="contact.php" method="POST">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Your Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">   
                          <label>Email Address</label>                     
                          <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">    
                          <label>Subject</label>                    
                          <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                        </div>
                      </div>
                       <div class="col-md-12">
                        <div class="form-group">    
                          <label>Message</label>                    
                           <textarea class="form-control" id="message" name="message"  cols="30" rows="10" placeholder="Type Your Message" required></textarea>
                       
                        </div>
                      </div>

                      
                      <input type="submit" name="submit" class="btn btn-dark ml-2 btn-lg btn-block mb-3" value="Send Message">
                      <?php 
						$db=mysqli_connect('localhost','root','','trip') or die('could not connect');
						if(isset($_POST['submit'])){
							 $name=mysqli_real_escape_string($db,$_POST['name']);
							 $email=mysqli_real_escape_string($db,$_POST['email']);
							 $subject=mysqli_real_escape_string($db,$_POST['subject']);
							 $message=mysqli_real_escape_string($db,$_POST['message']);
							 $query="INSERT INTO feedback (name,email,subject,message) VALUES ('$name','$email','$subject','$message');";
							 $sql=mysqli_query($db,$query);
							 if(!$sql){
							 	header("location:contact.php?message=feedback_failed");
							 }
							 else{
							 	?>
							 	<div class="col-md-12"><p class="text-center text-success">Feedback successful</p></div>
							 	<?php
							 }
							}

						 ?>
                      
                  
                     </div>
                  </form>    
                </div>
        	<div class="col-md-6">
        		<div class="container">
        		<h3 class="ml-3 border-bottom pb-3 ">Office Address</h3>
        		 <p class="ml-3">Take vacations, go as many places as you can, you can always make money, you can’t always make memories.</p>
                      <address>
                        <p class="pl-3"><i class="fa fa-phone"></i> +91 9860134569</p>
                        <p class="pl-3"><i class="fa fa-envelope-o"></i> lacasadelpuente@gmail.com</p>
                        <p class="pl-3"><i class="fa fa-map-marker"></i> 368 ,M G Road, Bangalore, Karnataka, India</p>
                      </address>
                      <h3 class="ml-3 border-bottom pb-3 mt-5">Open Hours</h3>                      
                      <address>
                        <p class="ml-3"><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                        <p class="ml-3"><span>Saturday</span> 9.00 am to 10 pm</p>
                        <p class="ml-3"><span>Sunday</span> 10.00 am to 12 pm</p>
                      </address>
                    </div>
			</div>
        	</div>
        	</div>
              </div>
		

	

  <!-- End Contact section -->

  <!-- Start Map section -->
  <section id="mu-map">
    <iframe src="https://maps.google.com/maps?q=mg%20road%20&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" frameborder="0"allowfullscreen></iframe>
  </section>
  <!-- End Map section -->

  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a class="ico" href="#"><span class="fa fa-facebook "></span></a>
            <a class="ico" href="#"><span class="fa fa-twitter"></span></a>
            <a class="ico" href="#"><span class="fa fa-google-plus"></span></a>
            <a class="ico" href="#"><span class="fa fa-linkedin"></span></a>
            <a class="ico" href="#"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>&copy; Copyright 2019 Jeevan Kishore. All right reserved.</p>
          </div>         
        </div><div class="container d-flex">
               <!-- Button trigger modal -->
<button type="button" class="btn btn-info mx-auto" data-toggle="modal" data-target="#exampleModalCenter">
  Admin Login
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="verify.php" method="POST" >
       	<div class="col-md-12">
            <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>

            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
          </div>
      
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
            <div class="form-group">
          <input type="submit" name="admit" class="btn btn-dark btn-block">
      </div>
 	 </div>
  	
      </div>
  </form>
    </div>
  </div>
</div>
     </div>
      </div>
      </div>

    </div>
  </footer>
  <!-- End Footer -->

</body>
</html>
