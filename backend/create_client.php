<?php
require_once "../config/config.php";
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
if($pass == $cpass){
    $sql = "INSERT INTO `client`( `username`, `email`, `password`) VALUES ('$user','$email','$pass')";
    if(mysqli_query($conn,$sql)){
        print "
        <script>
            alert('Your Account have been Created!');
            window.location='../';
        </script>
        ";
    }else{
        print "
        <script>
            alert('Failed to create account try again!');
            window.location='../signin.php';
        </script>
        ";
    }
}