<!DOCTYPE html>
<html>
<?php
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/defcd5b947.js" crossorigin="anonymous"></script>
	</head>
	<body>
    <div id="preloader">
      
    </div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target fixed-top" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand nav-link active show" href="index.html">মায়ের দোয়া<span>.</span></a>
				<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#ftco-nav">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav nav ml-auto nav justify-content-end">
						<li class="nav-item"><a class="nav-link active show" href="#home" class="nav-link"><span>Home</span></a></li>
						<li class="nav-item"><a class="nav-link active show" href="#about" class="nav-link"><span>About</span></a></li>
						<li class="nav-item"><a class="nav-link active show" href="#menu" class="nav-link"><span>Menu</span></a></li>
						<li class="nav-item"><a class="nav-link active show" href="#contact" class="nav-link"><span>Contact</span></a></li>
					</ul>
				</div>
				<p><a href="login.php" class="btn" id="logreg">Login</a> <a href="reg.php" class="btn" id="logreg">Register</a></p>&emsp;
				<button><a href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a></button>
			</div>
		</nav>
		
		<section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="home">
			<br><br><br><br><br>
			<div class="container">
				<div class="row">
					<div class="col-md-6" id="homepic">
						<img src="images/home.png" width="100%">
					</div>
					<div class="col-md-6">
						<div class="center">
							<br><br><br><br>
							<h1>Enjoy your healthy<br>Delicious Food</h1>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur.</p>
							<p><a href="book_table.php" class="btn" id="a"><span style="color: black;">Book Table</span></a> <a href="#" class="btn" id="a"><span style="color: black;">Order Food</span></a></p>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<br><br>
		<section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about">
			<div class="container">
				<div class="row">
					<h1 style="text-align:center;"><b><span>A</span>bout<span> U</span>s</b></h1>
					<div class="col-lg-6">
						<br><br>
						<img src="images/about.jpg" width="100%">
					</div>
					<div class="col-lg-6 d-flex align-items-end">
						<div class="content ps-0 ps-lg-5">
							<p class="fst-italic">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
								magna aliqua.
							</p>
							<ul>
								<li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
								<li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
								<li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure </li>
							</ul>
							<p>
								Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
								
							</p>
							<div class="position-relative mt-4">
								<a class="wplightbox" href="https://www.youtube.com/watch?v=xPPLbEFbCAo">
									<div class="lightboxContainer">
										<img src="images/about-2.jpg" class="img-fluid" alt="">
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<br><br><br>
		<section id="why-us" class="why-us section-bg">
			<div class="container" data-aos="fade-up">
				<div class="row gy-4">
					<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
						<div class="why-box">
							<h3>Why Choose মায়ের দোয়া?</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
								Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
							</p>
							<div class="text-center">
								<a href="#" class="btn">Learn More <i class="bx bx-chevron-right"></i></a>
							</div>
						</div>
						</div><!-- End Why Box -->
						<div class="col-lg-8 d-flex align-items-center">
							<div class="row gy-4">
								<div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
									<div class="icon-box d-flex flex-column justify-content-center align-items-center">
										<i class="fa-regular fa-clipboard"></i>
										<h4>Corporis voluptates officia eiusmod</h4>
										<p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
									</div>
									</div><!-- End Icon Box -->
									<div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
										<div class="icon-box d-flex flex-column justify-content-center align-items-center">
											<i class="fa-regular fa-gem"></i>
											<h4>Ullamco laboris ladore pan</h4>
											<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
										</div>
										</div><!-- End Icon Box -->
										<div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
											<div class="icon-box d-flex flex-column justify-content-center align-items-center">
												<i class="fa-regular fa-inbox"></i>
												<h4>Labore consequatur incidid dolore</h4>
												<p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
											</div>
											</div><!-- End Icon Box -->
										</div>
									</div>
								</div>
			</div>
		</section>

<br><br><br>
		<!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style="text-align:center">Our Menu</h2>
          <p style="text-align:center">Check Our <span>Yummy Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Starters</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Lunch</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Dinner</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Starters</h3>
            </div>

            <div class="row gy-5">
              <?php
              require 'connection.php';
              $query = "SELECT * FROM food where f_cat=1";
              $query_run = mysqli_query($conn, $query);
              $check_pep = mysqli_num_rows($query_run);
              if ($check_pep > 0) {
                while ($row = mysqli_fetch_array($query_run)) {
              ?>

              <div class="col-lg-4 menu-item">
                <img src="<?php echo $row['f_img']; ?>" class="menu_img" >
                <h4><?php echo $row['f_name']; ?></h4>
                <p class="ingredients">
                  <?php echo $row['f_des']; ?>
                </p>
                <p class="price">
                  $<?php echo $row['f_price']; ?>
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>
              </div><!-- Menu Item -->
              <?php
                }
              } else {
                echo "No Food";
              }
              ?>

              <!-- <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-2.png" class="glightbox"><img src="images/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-3.png" class="glightbox"><img src="images/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-4.png" class="glightbox"><img src="images/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-5.png" class="glightbox"><img src="images/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-6.png" class="glightbox"><img src="images/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>-->

            </div> 
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Breakfast</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-1.png" class="glightbox"><img src="images/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div><!-- Menu Item -->



              <!-- <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-2.png" class="glightbox"><img src="images/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-3.png" class="glightbox"><img src="images/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-4.png" class="glightbox"><img src="images/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
                 
                 <button class="btn" id="a"><input type="number" value="0">Add to cart</button>               
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-5.png" class="glightbox"><img src="images/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-6.png" class="glightbox"><img src="images/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div> -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Lunch</h3>
            </div>

            <div class="row gy-5">

              <?php
              require 'connection.php';
              $query = "SELECT * FROM food where f_cat=2";
              $query_run = mysqli_query($conn, $query);
              $check_pep = mysqli_num_rows($query_run);
              if ($check_pep > 0) {
                while ($row = mysqli_fetch_array($query_run)) {
              ?>

              <div class="col-lg-4 menu-item">
                <img src="<?php echo $row['f_img']; ?>" class="menu-img img-fluid" alt="">
                <h4><?php echo $row['f_name']; ?></h4>
                <p class="ingredients">
                  <?php echo $row['f_des']; ?>
                </p>
                <p class="price">
                  $<?php echo $row['f_price']; ?>
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>
              </div><!-- Menu Item -->
              <?php
                }
              } else {
                echo "No Food";
              }
              ?>

              <!-- <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-2.png" class="glightbox"><img src="images/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-3.png" class="glightbox"><img src="images/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-4.png" class="glightbox"><img src="images/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-5.png" class="glightbox"><img src="images/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-6.png" class="glightbox"><img src="images/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div> -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Dinner</h3>
            </div>

            <div class="row gy-5">

              <?php
              require 'connection.php';
              $query = "SELECT * FROM food where f_cat=3";
              $query_run = mysqli_query($conn, $query);
              $check_pep = mysqli_num_rows($query_run);
              if ($check_pep > 0) {
                while ($row = mysqli_fetch_array($query_run)) {
              ?>

              <div class="col-lg-4 menu-item">
                <img src="<?php echo $row['f_img']; ?>" class="menu-img img-fluid" alt="">
                <h4><?php echo $row['f_name']; ?></h4>
                <p class="ingredients">
                  <?php echo $row['f_des']; ?>
                </p>
                <p class="price">
                  $<?php echo $row['f_price']; ?>
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>
              </div><!-- Menu Item -->
              <?php
                }
              } else {
                echo "No Food";
              }
              ?>
              <!-- <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-2.png" class="glightbox"><img src="images/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-3.png" class="glightbox"><img src="images/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>
              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-4.png" class="glightbox"><img src="images/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-5.png" class="glightbox"><img src="images/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
                 
                 <button class="btn" id="a">Add to cart</button>                
              </div>

              <div class="col-lg-4 menu-item">
                <a href="images/menu/menu-item-6.png" class="glightbox"><img src="images/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
                 
                 <p class="btn" id="a">Add to cart</p>                
              </div> -->

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->


<br><br>
        


    		<!-- form section -->
		<section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="contact">
			<br><br><br><br>
			<h1 style="text-align:center;"><span>W</span>rite <span>Y</span>our <span>O</span>pinion</h1>
			<br><br><br>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1 style="text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
						  <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
						</svg></h1>
						<p style="text-align: center;">+8801534595029</p>
					</div>
					<div class="col-md-6">
						<h1  style="text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
						  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
						</svg></h1>
						<p style="text-align: center;">safi.sadman786@gmail.com</p>
					</div>
					
				</div>
				<div>
					<form>
						<!-- Name input -->
						<div class="form-outline mb-4">
							<input type="text" id="form4Example1" class="form-control" placeholder="Name" />
						</div>
						<!-- Email input -->
						<div class="form-outline mb-4">
							<input type="email" id="form4Example2" class="form-control" placeholder="Email" />
						</div>
						<!-- Message input -->
						<div class="form-outline mb-4">
							<textarea class="form-control" id="form4Example3" rows="4" placeholder="Enter message"></textarea>
						</div>
						
						<!-- Submit button -->
						<button type="submit" class="btn" >Send</button>
            <p><a href="oponion.php" class="btn" id="logreg2">Give Opinion</a></p>
					</form>
				</div>
				
			</div><br><br>
		</section>



      <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Azimpur Road <br>
              Dhaka-1205<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +8801623609990<br>
              <strong>Email:</strong> johurulalam@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 11PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://twitter.com/i/flow/login" class="twitter"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.facebook.com/johurul.alam.rojin/" class="facebook"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/md._johurul_alam/" class="instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://bd.linkedin.com/" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>