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
	$nameErr = $emailErr = $desErr ="";
	$name = $email = $des = "";
	$n = $e = $d = true;

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
    if (empty($_POST["des"])) {
        $desErr = "Enter A Description";
        $d = false;
    } else {
        
    }
}
if (isset($_POST["send"])) {
	echo $n,$e,$d;
    if($n && $e && $d ) {
       
            $sql = "INSERT INTO opinion (name, email, des) VALUES ('$name', '$email', '$des')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('You Have Giver Your Opinion Successfully!')</script>";
                $name = "";
                $email = "";
                $des = "";
                header("Location: wel.php");
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
							<input type="text" id="name" class="form-control" placeholder="Name" name="name" />
						</div>
						<!-- Email input -->
						<div class="form-outline mb-4">
							<input type="email" id="email" class="form-control" placeholder="Email" name="email" />
						</div>
						<!-- Message input -->
						<div class="form-outline mb-4">
							<input type="text" id="des" class="form-control" placeholder="Enter Messege" name="des" />
						</div>
						
						<!-- Submit button -->
						<div class="text-center"><button name="send">Send</button></div>
					</form>
				</div>
				
			</div><br><br>
		</section>