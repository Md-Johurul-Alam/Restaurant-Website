<!DOCTYPE html>
<html>
<?php
include 'connection.php';
session_start();
?>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mayer Doa Cafe & Restaurant</title>
		<!-- Latest compiled and minified CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Latest compiled JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
	</head>
	<body>
    <div id="preloader">
      
    </div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target fixed-top" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand nav-link active show" href="index.php">মায়ের দোয়া<span>.</span></a>
				<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#ftco-nav">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav nav ml-auto nav justify-content-end">
						<li class="nav-item"><a class="nav-link active show" href="#home" class="nav-link"><span>Home</span></a></li>
						<li class="nav-item"><a class="nav-link active show" href="#about" class="nav-link"><span>About</span></a></li>
						<li class="nav-item"><a class="nav-link active show" href="#menu" class="nav-link"><span>Menu</span></a></li>
						<li class="nav-item"><a class="nav-link active show" href="#book-a-table" class="nav-link"><span>Book Table</span></a></li>
						<li class="nav-item"><a class="nav-link active show" href="#contact" class="nav-link"><span>Contact</span></a></li>
					</ul>
				</div>
				<p><a href="login.php" class="btn" id="logreg">Login</a> <a href="reg.php" class="btn" id="logreg">Register</a></p>
			</div>
		</nav>

<br><br><br><br>
		<!-- cart item details -->

		<div class="small-container cart-page">
			<table>
				<tr>
					<th>Product</th>
					<th>Action</th>
					<th>Quantity</th>
					<th>Subtotal</th>
				</tr>
				<?php
				$sql = "SELECT * FROM cart";
				$res = $conn->query($sql);
				if(!$res){
					die("Invalid Query".$conn->error);
				}
				while($row = $res->fetch_assoc()){

				echo "<tr>
					<td>
						<div class='cart-info'>
							<div>
								<p>" . $row["food_name"] . "</p>
								<small>Price: " . $row["price"] . "</small><br>
							</div>
						</div>
					</td>
					<td>
						<form action='#' method='post'>
							<input type='hidden' name='del_Id' value=" . $row["id"] . ">
							<button type='submit' class='btn btn-danger' name='delM'>Delete</button>
							<input type='hidden' name='up_Id' value=" . $row["id"] . ">
							<button type='submit' class='btn btn-success' name='upM'>Update</button>
						</form>
					</td>
					<td><input type='number' value='1' name = 'qnt'></td>
					<td>" . $row["total_price"] . "</td>
				</tr>";
			}
			?>
<!-- 				<tr>
					<td>
						<div class="cart-info">
							<div>
								<p>Burgir</p>
								<small>Price: $5</small><br>
								<a href="">Remove</a>
							</div>
						</div>
					</td>
					<td><input type="number" value="1"></td>
					<td>$50</td>
				</tr>
				<tr>
					<td>
						<div class="cart-info">
							<img src="images/menu/menu-item-5.png" class="img">
							<div>
								<p>Burgir</p>
								<small>Price: $5</small><br>
								<a href="">Remove</a>
							</div>
						</div>
					</td>
					<td><input type="number" value="1"></td>
					<td>$50</td>
				</tr>	 -->			
			</table>
			
		</div>


		<div class="total-price">
			<table>
				<tr>
					<td>Subtotal</td>
					<td>$150</td>
				</tr>
				<tr>
					<td>Tax</td>
					<td>$5</td>
				</tr>
				<tr>
					<td>Total</td>
					<td>$155</td>
				</tr>								
			</table>
		</div>

      <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>মায়ের দোয়া</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>

  </footer><!-- End Footer -->

  <script type="text/javascript">
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function(){
      loader.style.display = "none";
    })
  </script>


	</body>
</html>