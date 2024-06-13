<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <script src="https://kit.fontawesome.com/defcd5b947.js" crossorigin="anonymous"></script>
<?php
include 'connection.php';
session_start();
$nameErr = $emailErr = $phoneErr = $dateErr = $timeErr = $numErr = $messErr = "" ;
$name = $email = $phone = $date = $time = $num= $mess = "";
$n = $e = $pn = $dt = $tm = $nm = $ms = true;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])) {
        $nameErr = "Enter your name";
        $n = false;
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            $n = false;
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $e = false;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $e = false;
        }
    }
    if(empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
        $pn = false;
    }else {
        $phone = test_input($_POST["phone"]);
        if(!preg_match("/^[0-9]{11}+$/",$phone)) {
            $phoneErr = "Invalid phone number";
            $pn = false;
        }
    }
    if (empty($_POST["date"])) {
        $dateErr = "Enter Date";
        $dt = false;
    } else {
        $date = $_POST["date"];
    }
    if (empty($_POST["time"])) {
        $timeErr = "Enter Time";
        $tm = false;
    } else {
        $time = $_POST["time"];
    }
    if (empty($_POST["num"])) {
        $numErr = "Enter The # of People";
        $nm = false;
    } else {
        $num = $_POST["num"];
    }
    if (empty($_POST["message"])) {
        $messErr = "Enter A Messege";
        $ms = false;
    } else {
        $mess = test_input($_POST["message"]);
        if (!preg_match("/^[a-zA-Z- 0-1' ]*$/",$mess)) {
            $messErr = "Only numbers and letters are Allowed";
            $ms = false;
        }
    }
}
if (isset($_POST["book"])) {
    if($n && $e && $pn && $dt && $tm && $nm && $ms) {
       
            $sql = "INSERT INTO booking (name, email, phone_num, d, t, num_of_pep, mes) VALUES ('$name', '$email', '$phone', '$date', '$time', '$num', '$mess')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('You Have Booked Successfully!')</script>";
                $name = "";
                $email = "";
                $phone = "";
                $date = "";
                $time = "";
                $num = "";
                $mess = "";
                header("Location: book_table.php");
                die;
            }else {
                echo "<script>alert('Oops! Something went wrong!')</script>";
            }
        }
    }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<section id="book-a-table" class="book-a-table" >
      <div class="container" data-aos="fade-up" >

        <div class="section-header" >
          <h2 style="text-align:center">Book A Table</h2>
          <p style="text-align:center">Book <span>Your Stay</span> With Us</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(images/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form  method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="num" id="num" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
              </div>
              <div class="text-center"><button name="book">Book Now</button></div>
              <a class="nav-link active show" href="index.php" class="nav-link"><span>Back</span>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->