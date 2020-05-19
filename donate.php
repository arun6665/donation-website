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
<head><title></title>
        <style>
        .box-1{
            
            margin:8px;
                      transition: box-shadow .3s;
            background-color: skyblue;
            padding:50px;
            height:500px;
            width:300px;
            float:left;
            border-radius:8px;
            margin-left: 10px;
            
        }
         .box-2{
            background-color: skyblue;
          transition: box-shadow .3s;
            padding:50px;
            height:500px;
            margin:8px;
            width:300px;
            float:left;
            border-radius:8px;
            margin-left: 40px;
            margin-top:50px;
        }
         .box-3{
            background-image: url('');
            background-color: skyblue;
                      transition: box-shadow .3s;
            padding:50px;
            height:500px;
            margin:5px;
            width:300px;
            float:left;
            border-radius:8px;
            margin-left: 10px;
            margin-top:50px;
        }
         .box-4{
            background-image: url('');
            background-color: skyblue;
              transition: box-shadow .3s;
            padding:50px;
            height:500px;
            width:300px;
            margin:8px;
            float:left;
            border-radius:8px;
            margin-left: 10px;
            margin-top:50px;
           
        }
         .box-4:hover 
            {
  background-color: #3e8e41;
  color: white;
}
 .box-1:hover 
            {
  background-color: #3e8e41;
  color: white;
}
 .box-2:hover 
            {
  background-color: #3e8e41;
  color: white;
}
 .box-3:hover 
            {
  background-color: #3e8e41;
  color: white;

}

 
    </style>
</head>
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

    
    </div>
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
    <div class="all">
   
    <div class="box-2" onclick="location.href='cashdonate.php';"cursor:pointer;>
   
     <p style="font-size:45px;">CASH</p>
    </div>
    
    <div class="box-3" onclick="location.href='detaildonor.php';"cursor:pointer;>
 <p style="font-size:45px;">CLOTHES</p>


    </div>
    
    <div class="box-4" onclick="location.href='detaildonor.php';"cursor:pointer;>
      
 <p style="font-size:45px;">STATIONARY</p>

    </div>

<div class="box-1" style="margin-top:50px;">
 <p style="font-size:45px;">VOLUNTEER</p>
</div>
</div>


</body>

</html>
