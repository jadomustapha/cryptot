<?php
session_start();
require_once "../config/config.php";
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM `client` WHERE `username` = '$user' or `email` = '$user' and `password` = '$pass'";
$res = mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
    $_SESSION['client'] = $_POST;
     print "
        <script>
            alert('Your Account have been Signed!');
            window.location='../index.php';
        </script>
        ";
}else{
    if(isset($_SESSION['client'])){
        unset($_SESSION['client']);
    }
         print "
        <script>
            alert('Failed to Sign In Acount!');
            window.location='../signin.php';
        </script>
        ";
}