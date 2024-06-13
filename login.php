<!DOCTYPE html>
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
  $email = $password = "";
  $e = $pw = true;
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
      if (empty($_POST["email"])) {
          $e = false;
      } else {
          $email = test_input($_POST["email"]);
      }
      if (empty($_POST["password"])) {
          $pw = false;
      } else {
          $password = test_input($_POST["password"]);
      }
  }
  if(isset($_POST['submit'])){
      if($e && $pw){
          $p1 = md5($password);
          $sql = "SELECT * FROM reg WHERE email = '$email' AND pass = '$p1'";
          $rest = mysqli_query($conn, $sql);
          if(mysqli_num_rows($rest)>0){
              $row = mysqli_fetch_assoc($rest);
              $_SESSION['name'] = $row['name'];
              header("Location: main.php");
              die;
          }else {
              echo "<script>alert('Wrong Email or Password Given')</script>";
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



    <div>
      <h1>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Login&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="reg.php" class="btn" id="logreg">Register</a> <a href="index.php" class="btn" id="logreg">Main Menu</a></h1>
      
    </div>
    <div class="container" id="bx">
      <form method="post" autocomplete="on">


        <!---Email ID---->
        <div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
          <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
          <div class="fr">
              <input type="email" id="email" name="email" placeholder="Email Id" class="textBox" required>
          </div>
          <div class="clr"></div>
        </div>




        <div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
          <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
          <div class="fr">
              <input type="Password" id="password" name="password" placeholder="Password" class="textBox" required>
          </div>
          <div class="clr"></div>
        </div>



        <!---Submit Button------>
        <div class="box" style="background: #2d3e3f">
            <button name="submit" class="btn2">SUBMIT</button>
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

