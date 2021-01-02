<?php session_start();
$db=mysqli_connect('localhost','root','','trip') or die('could not connect');
      ?>
<html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="dashboard/dashboard.css">
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
  
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="admin.php" style="font-family: 'Dancing Script', cursive; font-size: 30px; letter-spacing: 2px;">Little Adventures</a>
<h1 class="text-white display-4" style="font-size: 37px;">Admin</h1>  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout1.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
            
          <li class="nav-item">
            <a class="nav-link" href="admin.php">
              <span data-feather="file"></span>
              Room Booking
            </a>
          </li>
          <a class="nav-link active" href="admindining.php">
              <span data-feather="home"></span>
              Dining Booking<span class="sr-only">(current)</span>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="adminfeedback.php">
              <span data-feather="shopping-cart"></span>
              Feedback
            </a>
          </li>
         </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
        <h1 class="h2">Dining Bookings</h1>
      </div>
      <?php 
        if(isset($_POST['edit1'])){
          $eid=$_POST['edit1_id'];
          $query="SELECT * FROM dining where id=$eid;";
          $res=mysqli_query($db,$query);
          while($row=mysqli_fetch_assoc($res)){
        ?>
        <form action="roomdel.php" method="POST">
      <div class="col-md-6">
        <?php echo '<input type="hidden" name="edit_id" value="'.$row['id'].'">'; ?>
            <div class="form-group">
            <label>Name</label>
            <?php  echo '<input type="text" class="form-control" name="ename" placeholder="Name" value="'.$row['name'].'" required>';?>
            </div>
          </div>
           <div class="col-md-6">
            <div class="form-group">
            <label>Email</label>
            <?php echo '<input type="text" class="form-control" name="eemail" value="'.$row['email'].'"placeholder="Email" required>';?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
            <label>Contact</label>
            <?php echo '<input type="text" class="form-control" name="econtact" value="'.$row['contact'].'"placeholder="Contact" required>';?>
            </div>
          </div>
        
          <div class="col-md-6">
            <div class="form-group">
            <label>Type</label>
            <?php echo '<input type="text" class="form-control" name="etype" value="'.$row['type'].'" placeholder="Type" required>'; ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
            <label>Date</label>
            <?php echo '<input type="text" class="form-control" name="edate" value="'.$row['date'].'" placeholder="Nights" required>'; ?>
            </div>
          </div>
            <div class="col-md-6">
            <div class="form-group">
            <label>Members</label>
            <?php  echo '<input type="text" class="form-control" name="emembers" value="'.$row['members'].'" placeholder="Members" required>';?>
            </div>
          </div>
          <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <a href="admin.php" class="btn btn-danger btn-block">Cancel</a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
          <input type="submit" name="dinupdate" class="btn btn-success btn-block" value="Update">
        </div>
      </div>
    </div>
  </form>
        <?php } } ?>
    </main>
  </div>

</div>
<script src="dashboard/dashboard.js"></script>
</body>
</html>

