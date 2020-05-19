<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>dangarum (BS 4)</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Payment-Form.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/footer-ultimate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
<html>
<head><title></title></head>
<body>
<?php
//session_start(); // Starting Session
//include('session.php');
$servername = "localhost";
$username = "root";
$password = "";
$database="phpproject";

// Create connection
$conn=mysqli_connect($servername,$username,$password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
else{









 
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT name FROM registration WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);

        
      if($count == 1) {
       // $_SESSION["name"] = $row['name'];
       // header("location: index.php");

            $_SESSION['name'] = $name;
            // Redirect to user dashboard page
            header("Location: index.php");
        } 
        else {
            echo "<div class='form'>
                  <h5>Incorrect Username/password.</h5><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
//else 

//$message = "Invalid Username or Password!";
//}
          
//if(isset($_SESSION["name"])) {
////header("Location:index.php");
//}

          // $_SESSION['name'] = $user->name;      
         //
    // else {
        //$error = "Your Login Name or Password is invalid";
      //}
   }
}
mysqli_close($conn);
?>


















</body>
</html>
</head>

<body>
    <div class="login-card">
    <img class="profile-img-card" src="assets/img/avatar_2x.png" />
    <p class="profile-name-card"></p>
    <form class="form-signin" method="POST">
       
        <span class="reauth-email"></span>
        <input class="form-control" type="email" id="inputEmail" name="email" required placeholder="Email address" autofocus />

        <input class="form-control" type="password" id="inputPassword" name="password" required placeholder="Password" />
       
        <div class="checkbox">
            <div class="checkbox"><label><input type="checkbox" />Remember me</label></div>
        </div>
       
        <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="submit" >Sign in</button>

    </form>
       
        <a class="forgot-password" href="#">Forgot your password?</a>
   
    </div>


    <nav class="navbar navbar-light navbar-expand-md fixed-top" style="background-color: #6891a2;">
        <div class="container">
            <div><a class="navbar-brand" href="#" style="background-color: #ffffff;"><i class="fa fa-usd"></i>DAN-GARUM</a><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <a
                href="#">Link</a><a href="#">Link</a><a href="index.php" style="color: #f7f7f7;">BACK TO HOME</a></div>
    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>