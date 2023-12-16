<?php 
    require_once 'config.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $email = $_POST['email'];
    $addtk = "INSERT INTO tbltaikhoan(Username,Password,Level,Email) VALUES ('$username','$password','$level','$email')";
    mysqli_query($conn,$addtk);
    header("Location: ../dstaikhoan.php");
?>