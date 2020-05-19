<html>
<head><title>database</title></head>
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




$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
 $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
  $passwordr = mysqli_real_escape_string($conn, $_REQUEST['passwordr']);
// Attempt insert query execution
$duplicate=mysqli_query($conn,"select * from registration where email='$email'");
if (mysqli_num_rows($duplicate)>0) 
{
	echo"EMAIL ALREADY EXISTS USE ANOTHER EMAIL";
	

}
//else if ($row->password!=($passwordr){) {
	# codecho"e...
	//echo"password and re password dosent match
//}

else
{


$sql = "INSERT INTO registration(name, email, password, passwordr) VALUES ('$name', '$email', '$password' , '$passwordr')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
}
mysqli_close($conn);
?>


</body>
</html>