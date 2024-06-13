<html>
  <head>
    <meta charset="utf-8">
    <title>Mayer Doa Cafe & Restaurant</title>
    <link href="css/reg.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
<?php
include 'connection.php';
session_start();
$fnameErr = $snameErr = $emailErr = $phoneErr = $passErr = $gErr = "";
$firstName = $secondName = $phoneNo = $email = $password = $Gender = "";
$f = $s = $p = $e = $pw = $g = true;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["firstName"])) {
        $fnameErr = "Enter your first name";
        $f = false;
    } else {
        $firstName = test_input($_POST["firstName"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName)) {
            $fnameErr = "Only letters and white space allowed";
            $f = false;
        }
    }
    if (empty($_POST["secondName"])) {
        $snameErr = "Enter your first name";
        $s = false;
    } else {
        $secondName = test_input($_POST["secondName"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$secondName)) {
            $snameErr = "Only letters and white space allowed";
            $s = false;
        }
    }
    if(empty($_POST["phoneNo"])) {
        $phoneErr = "Phone number is required";
        $p = false;
    }else {
        $phoneNo = test_input($_POST["phoneNo"]);
        if(!preg_match("/^[0-9]{11}+$/",$phoneNo)) {
            $phoneErr = "Invalid phone number";
            $p = false;
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
    
    if(empty($_POST["password"])) {
        $passErr = "Password is required";
        $pw = false;
    }else {
        $password = test_input($_POST["password"]);
        if(!preg_match("/^[0-9a-zA-Z-' ]{6}+$/",$password)) {
            $passErr = "Minimum 6 digits";
            $pw = false;
        }
    }
    if(empty($_POST["Gender"])) {
        $gErr = "Select gender";
        $g = false;
    }else {
        $Gender = test_input($_POST["Gender"]);
    }
}
if (isset($_POST['submit'])) {
    if($f && $s && $p && $e && $pw && $g) {
        $sql = "SELECT * FROM reg WHERE email = '$email' AND pass = '$password'";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res)>0){
            echo "<script>alert('This email already exists!')</script>";
        } else {
            $sql = "INSERT INTO reg (fname, lname, phone, email, pass, gender) VALUES ('$firstName', '$secondName', '$phoneNo', '$email', '$password', '$Gender')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Data Stored Successfully!')</script>";
                // $firstName = "";
                // $secondName = "";
                // $phoneNo = "";
                // $email = "";
                // $password = "";
                // $Gender = "";
                header("Location: wel.php");
                die;
            }else {
                echo "<script>alert('Oops! Something went wrong!')</script>";
            }
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
    <div id="preloader">
      
    </div>


    <!-- Body of Form starts -->
    <div>
      <h1>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Register&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="login.php" class="btn" id="logreg">Login</a> <a href="index.php" class="btn" id="logreg">Main Menu</a></h1>
      
    </div>
  	<div class="container">
      <form method="post" autocomplete="on">
        <!--First name-->
    		<div class="box">
          <label for="firstName" class="fl fontLabel"> First Name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" id="firstName" name="firstName" placeholder="First Name"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->


        <!--Second name-->
    		<div class="box">
          <label for="secondName" class="fl fontLabel"> Last Name: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required id="secondName" name="secondName"
              placeholder="Last Name" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Second name-->


    		<!---Phone No.------>
    		<div class="box">
          <label for="phone" class="fl fontLabel"> Phone No.: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required id="phoneNo" name="phoneNo" maxlength="10" placeholder="Phone No." class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Phone No.---->


    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="email" required id="email" name="email" placeholder="Email Id" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->


    		<!---Password------>
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password" required id="password" name="password" placeholder="Password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->

    		<!---Gender----->
    		<div class="box radio">
          <label for="gender" class="fl fontLabel"> Gender: </label>
    				<input type="radio" id="Gender" name="Gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" id="Gender" name="Gender" value="Female" required> Female
    		</div>
    		<!---Gender--->


    		<!--Terms and Conditions------>
    		<div class="box terms">
    				<input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
    		</div>
    		<!--Terms and Conditions------>



    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<button name="submit">SUBMIT</button>
    		</div>
    		<!---Submit Button----->
      </form>
  </div>
  <!--Body of Form ends--->


  <script type="text/javascript">
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function(){
      loader.style.display = "none";
    })
  </script>  
  </body>
</html>
