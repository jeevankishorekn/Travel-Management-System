<?php session_start();
$db=mysqli_connect('localhost','root','','trip') or die('could not connect');
      $query="SELECT * from dining,diningpayment where dining.id=diningpayment.paymentID;";
      $res=mysqli_query($db,$query);
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
            <a class="nav-link" href="admin.php">
              <span data-feather="file"></span>
              Room Booking
            </a>
          </li>
          <li class="nav-item">
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
      <?php if(isset($_SESSION['success'])){ ?>
      <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
    <?php 
      unset($_SESSION['success']);
      } ?>
      <?php if(isset($_SESSION['status'])){ ?>
      <div class="alert alert-danger"><?php echo $_SESSION['status']; ?></div>
      <?php 
      unset($_SESSION['status']);
      } ?>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Type</th>
              <th>Date</th>
              <th>Members</th>
              <th>Amount</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row=mysqli_fetch_assoc($res)){ ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['contact']; ?></td>
              <td><?php echo $row['type']; ?></td>
              <td><?php echo $row['date']; ?></td>
              <td><?php echo $row['members']; ?></td>
              <td><?php echo $row['amount']; ?></td>
              <td><form action="edit1.php" method="POST">
                <?php echo '<input type="hidden" name="edit1_id" value="'.$row['id'].'">' ?>
                <button type="submit" class="btn btn-success btn-sm" name="edit1">Update</a></form>
              </td> 
              <td>
              <form action="roomdel.php" method="POST"> 
              <?php echo '<input type="hidden" name="delete_id" value="'.$row['id'].'">' ?> 
              <button type="submit" class="btn btn-danger btn-sm" name="deletedin">Delete</button></form></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script src="dashboard/dashboard.js"></script>
</body>
</html>

