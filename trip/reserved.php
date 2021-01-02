<?php
session_start();
$db=mysqli_connect('localhost','root','','trip') or die('could not connect');
  if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($db,$_POST['name']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $contact=mysqli_real_escape_string($db,$_POST['contact']);
    $members=mysqli_real_escape_string($db,$_POST['members']);
    $checkin=mysqli_real_escape_string($db,$_POST['checkin']);
    $package=mysqli_real_escape_string($db,$_POST['package']);
    $query="INSERT INTO reservation (name,email,contact,members,checkin,package) VALUES ('$name','$email','$contact',$members,'$checkin',$package);";
    $sql=mysqli_query($db,$query);
    $que="INSERT INTO roompayment (amount) VALUES ($members*(SELECT package.amount FROM package where package.pid=$package));";
    $qu=mysqli_query($db,$que);
    if(!$qu){
      header("location:reservation.php?message=reservation_failed");
    }
   
    else{
     ?>
      <!DOCTYPE html>
      <html>
      <head>
        <title>Reserved</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <script src="https://kit.fontawesome.com/bee1a6ac22.js"></script>
        <style>
          body{
            background-color: black;
          }
          h1 {
            color:white;
            font-weight: 800;
            margin-top: 250px;
            margin-left: 250px;
          }
          .i{
            color: green;
          }
          .a{
            width: 300px;
            height: 50px;
            border-radius:0 !important;
            line-height: 35px !important;
            font-size: 20px !important;
            margin-top: 50px !important;
          }
          #a1{
            margin-left: 130px;
          }
          .a2{
            margin-top:25px;
            margin-left: 34%;
            width: 230px;
            height: 40px;
          }
          .i2{
            color: black;
          }
        </style>
      </head>
      <body>
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <h1 class="display-1"><b>Reserved <i class="far fa-check-circle i"></i></b></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6 mt-5">
              <a href="index.php" id="a1" class="a btn btn-danger">HOME</a>
          </div>
          <div class="col-xl-6 mt-5">
              <a href="reservation.php" class="a btn btn-warning">RESERVATION</a>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 mt-5 ">
            <form action="receipt.php" method="POST">
              <input type="submit" name="sub" class="btn btn-success a2" value="DOWNLOAD RECEIPT">
            </form>
          </div>
        </div>
      </div>
      </body>
      </html>

      <?php
    }
  }
  elseif (isset($_POST['submit1'])) {
    $name=mysqli_real_escape_string($db,$_POST['name']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $contact=mysqli_real_escape_string($db,$_POST['contact']);
    $members=mysqli_real_escape_string($db,$_POST['members']);
    $date=mysqli_real_escape_string($db,$_POST['date']);
    $type=mysqli_real_escape_string($db,$_POST['type']);
    $query="INSERT INTO dining (name,email,contact,members,date,type) VALUES ('$name','$email','$contact','$members','$date','$type');";
    $sql=mysqli_query($db,$query);
    if (!$sql) {
      header("location:dining.php?message=reservation_failed");
    }
    else{
      ?>
      <!DOCTYPE html>
      <html>
      <head>
        <title>Reserved</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <script src="https://kit.fontawesome.com/bee1a6ac22.js"></script>
        <style>
          body{
            background-color: black;
          }
          h1 {
            color:white;
            font-weight: 800;
            margin-top: 250px;
            margin-left: 250px;
          }
          .i{
            color: green;
          }
          .a{
            width: 300px;
            height: 50px;
            border-radius:0 !important;
            line-height: 35px !important;
            font-size: 20px !important;
            margin-top: 50px !important;
          }
          #a1{
            margin-left: 130px;
          }
          .a2{
            margin-top:25px;
            margin-left: 34%;
            width: 230px;
            height: 40px;
          }
          .i2{
            color: black;
          }
        </style>
      </head>
      <body>
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <h1 class="display-1"><b>Reserved <i class="far fa-check-circle i"></i></b></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6 mt-5">
              <a href="index.php" id="a1" class="a btn btn-danger">HOME</a>
          </div>
          <div class="col-xl-6 mt-5">
              <a href="reservation.php" class="a btn btn-warning">RESERVATION</a>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 mt-5 ">
            <form action="receipt.php" method="POST">
              <input type="submit" name="sub1" class="btn btn-success a2" value="PRINT RECEIPT">
            </form>
          </div>
        </div>
      </div>
      </body>
      </html>


      <?php
    }
  }
  else{
    header("location:reservation.php");
  }

 ?>