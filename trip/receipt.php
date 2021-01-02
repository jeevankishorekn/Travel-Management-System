<?php 
session_start();
$db=mysqli_connect('localhost','root','','trip') or die('could not connect');
if(isset($_SESSION['email'])){
		if(isset($_POST['sub'])) {
			$query="SELECT * from reservation,roompayment where reservation.id=roompayment.paymentID AND roompayment.paymentID in(SELECT MAX(paymentID) from roompayment);";
			$res=mysqli_query($db,$query);
			if ($res) {
				?>
				<html>
				<head>
					<title>Receipt</title>
						<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
						<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
						<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
						
						<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
				</head>
				<body style="background-color: black;">
					<div class="container">
						<h1 class="display-1 my-5" style="font-family: 'Dancing Script', cursive;">La Casa Del Puente</h1>
						<h1 class="text-center my-5">RECEIPT</h1>
						<h4 class="float-right"><b>Date: <script>var today = new Date();
							var dd = String(today.getDate()).padStart(2, '0');
							var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
							var yyyy = today.getFullYear();
							today = dd + '/' + mm + '/' + yyyy;
							document.write(today);</script></b></h4><br><br>
							<hr>
							<?php while($row=mysqli_fetch_assoc($res)){ ?>
						<h3 class="py-4">Name:<span class=" h3 float-right mr-3"><?php echo $row['name'];?></span></h3>
						<h3 class="py-4">Email:<span class="h3  float-right mr-3"><?php echo $row['email']; ?></span></h3>
						<h3 class="py-4">Contact:<span class="h3  float-right mr-3"><?php echo $row['contact']; ?></span></h3>
						<h3 class="py-4">Check-In:<span class="h3  float-right mr-3"><?php echo $row['checkin']; ?></span></h3>
						<h3 class="py-4">Members:<span class="h3  float-right mr-3"><?php echo $row['members']; ?></span></h3>
						<hr>
						<h1 class="my-5">Amount Payable: <span class="h1  float-right mr-3">INR <?php echo $row['amount']; ?></span></h1>
						<hr><br><br>
						<p class="display-5" style="font-size:25px;">* Note: Package includes Accomodation and Travel Expenses.</p>
					<?php } ?>
					</div>
				<script>print();</script>
				</body>
			 </html>
			<?php 
			}
		} 
		elseif(isset($_POST['sub1'])) {
			$query="SELECT * from dining,diningpayment where dining.id=diningpayment.paymentID AND paymentID in(SELECT MAX(paymentID) from diningpayment);";
			$res=mysqli_query($db,$query);
			if ($res) {
				?>
				<html>
				<head>
					<title>Receipt</title>
						<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
						<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
						<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
						
						<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
				</head>
				<body style="background-color: black;">
					<div class="container">
						<h1 class="display-1 my-5" style="font-family: 'Dancing Script', cursive;">La Casa Del Puente</h1>
						<h1 class="text-center my-5">RECEIPT</h1>
						<h4 class="float-right"><b>Date: <script>var today = new Date();
							var dd = String(today.getDate()).padStart(2, '0');
							var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
							var yyyy = today.getFullYear();
							today = dd + '/' + mm + '/' + yyyy;
							document.write(today);</script></b></h4><br><br>
							<hr>
							<?php while($row=mysqli_fetch_assoc($res)){ ?>
						<h3 class="py-4">Name:<span class=" h3 float-right mr-3"><?php echo $row['name'];?></span></h3>
						<h3 class="py-4">Email:<span class="h3  float-right mr-3"><?php echo $row['email']; ?></span></h3>
						<h3 class="py-4">Contact:<span class="h3  float-right mr-3"><?php echo $row['contact']; ?></span></h3>
						<h3 class="py-4">Reserved Date:<span class="h3  float-right mr-3"><?php echo $row['date']; ?></span></h3>
						<h3 class="py-4">Members:<span class="h3  float-right mr-3"><?php echo $row['members']; ?></span></h3>
						<h3 class="py-4">Meals:<span class="h3  float-right mr-3"><?php echo $row['type']; ?></span></h3>
						<hr>
						<h1 class="my-5">Amount Payable: <span class="h1  float-right mr-3">INR <?php echo $row['amount']; ?></span></h1>
						<hr><br><br>
						<p class="display-5" style="font-size:25px;">* Note: Price of 1 Meals is INR 500</p>
					<?php } ?>
					</div>
				<script>print();</script>
				</body>
			 </html>
			<?php 

		}
	}
}

else{
	header("location:index.php");
}
?>