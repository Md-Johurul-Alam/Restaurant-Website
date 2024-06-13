<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayer Doa Cafe & Restaurant</title>

    <!--Bootstrap 5 css Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2c988112ad.js" crossorigin="anonymous"></script>

    <!--Css Link-->
    <link rel="stylesheet" href="css/cstyle.css" />
    <link rel="stylesheet" type="text/css" href="css/styleone.css">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<?php
include 'connection.php';
session_start();
$nameErr = $emailErr = $phoneErr = $passErr = "";
$fname = $email = $phone = $password = "";
$n = $e = $p = $pw = true;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["fname"])) {
        $nameErr = "Enter your name";
        $n = false;
    } else {
        $fname = test_input($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
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
        $p = false;
    }else {
        $phone = test_input($_POST["phone"]);
        if(!preg_match("/^[0-9]{11}+$/",$phone)) {
            $phoneErr = "Invalid phone number";
            $p = false;
        }
    }
    if(empty($_POST["password"])) {
        $passErr = "Password is required";
        $pw = false;
    }else {
        $password = test_input($_POST["password"]);
        if(!preg_match("/^[0-9a-zA-Z-' ]{6,100}+$/",$password)) {
            $passErr = "Minimum 6 digits";
            $pw = false;
        }
    }
}
if (isset($_POST['submit'])) {
    if($n && $e && $p && $pw) {
        $sql = "SELECT * FROM reg WHERE email = '$email' ";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res)>0){
            echo "<script>alert('This email already exists!')</script>";
        } else {
            $p1 = md5($password);
            $sql = "INSERT INTO reg (name, email, phone, pass) VALUES ('$fname', '$email', '$phone', '$p1')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Data Stored Successfully!')</script>";
                $fname = "";
                $email = "";
                $phone = "";
                $password = "";
                header("Location: login.php");
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

    <div class="container">

        <div class="row">
            <div class="col-md-5 pic" style="height:700px">
                <img src="images/about.jpg" width="100%" height="100%" id="img">
            </div>
            <div class="col-md-7">
                <div class="scroll-divv">
                    <div id="one">
                        <h1>Please Enter Your Infos</h1>
                        <p>To be connected with us</p>  
                        <form method="post" class="was-validated">
                            <div class="row">
                                <label style="font-size: 20px; color:#545658 ;">TELL US YOUR NAME*</label>
                                <div class="col-md-12" id="100">
                                    <span class="error" style="color: red;"><?php echo $nameErr;?></span><br> 
                                    <input type="text" id="fname" name="fname" placeholder="Enter your full name" value="<?php echo $fname;?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <label style="font-size: 20px; color: #545658 ;">ENTER YOUR EMAIL*</label>
                                <div class="col-md-12" id="100">
                                    <span class="error"style="color: red;"><?php echo $emailErr;?></span><br>
                                    <input type="email" class="form-control" id="email" placeholder="Eg. example@gmail.com" name="email" value="<?php echo $email;?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <label style="font-size: 20px; color: #545658 ;">ENTER PHONE NUMBER*</label>
                                <div class="col-md-12" id="100">
                                    <span class="error"style="color: red;"><?php echo $phoneErr;?></span><br>
                                    <input type="text" id="phone" placeholder="Eg. 01*********" name="phone" value="<?php echo $phone;?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <label style="font-size: 20px; color: #545658 ;">PASSWORD*</label>
                                <div class="col-md-12" id="100">
                                    <span class="error"style="color: red;"><?php echo $passErr;?></span><br>
                                    <input type="password" id="password" placeholder="Minimum 6 digits" name="password" value="<?php echo $password;?>" required>
                                    <!-- <span class="eye">
                                        <i class="fa fa-eye" ></i>
                                        <i class="fa fa-eye-slash"></i>
                                    </span> -->
                                </div>
                            </div><br>
                            <div class="row" >
                                <div class="col-md-5"><a href="login.php" class="btn" id="btn">Login</a></div>
                                <div class="col-md-4"><button name="submit" class="btn btn-success">REGISTER</button></div>
                                <div class="col-md-3 "><a href="index.php" class="btn" id="btn">Back</a></div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

    </div>
</body>

</html>