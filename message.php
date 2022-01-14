<?php

$server = 'localhost';
$db = 'dynamic';
$user = 'root';
$pass = '';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$con = mysqli_connect($server,$user,$pass,$db);
// if(con){
//     echo"Connection Successful";
// }

$query = "INSERT INTO `userdata`(`name`, `email`, `mobile`, `comment`) VALUES ('$name','$email','$mobile','$comment')";
$run = mysqli_query($con,$query);

if($run){
    echo "Your Message Has Been Sent";

}

header("location:http://localhost/DynamicWebsite/index.html");

?>