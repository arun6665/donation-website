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
    <style>
        .container1
        {
            max-width: 350px;
            margin-top: 10px;
          position: fixed;
          
          top: 10%;left: 40%
        
      
          
        }
    </style>
<html>
<head><title></title></head>
<body>
<?php
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
echo "Connected successfully";
}
mysqli_close($conn);
?>


</body>
</html>
</head>

<body>
   <form action="database.php">
  <div class="container1">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

<label for="name"><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="name" required>
    <br>


    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required>
    <br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="Password must contain: Minimum 8 characters atleast 1 Alphabet and 1 Number">

<br>

    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="passwordr"  >
    <hr>
<br>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

  
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
        <button type="reset" class="registerbtn">Reset</button>
  </div>


</form>
    <nav class="navbar navbar-light navbar-expand-md fixed-top" style="background-color: #6891a2;">
        <div class="container">
            <div><a class="navbar-brand" href="#" style="background-color: #ffffff;"><i class="fa fa-usd"></i>DAN-GARUM</a><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            
             <a href="index.php" style="color: #f7f7f7;">BACK TO HOME</a></div>
    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
