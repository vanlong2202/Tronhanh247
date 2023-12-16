<?php
    require_once 'config.php';
    $username1 = $_POST["Username1"];
    $email1 = $_POST["Email1"];
    $password1 = $_POST["Password1"];
    $level = 1;
    $checkEmail = "SELECT * FROM tbltaikhoan WHERE Email = '$email1'";
    $result1 = mysqli_query($conn, $checkEmail);
    $test = "Test";
    if ($result1) 
    {
      $Notification = "Email đã tồn tại, Vui lòng thử lại !";
      header("Location: ../login.php");
    }
    else
    {
      $addTK = "INSERT INTO tbltaikhoan(Username,Password,Email,LeveL) VALUES ('$username1','$password1','$email1',$level)";
      mysqli_query($conn,$addTK);
      $Notification = "Đăng Kí Tài Khoản Thành Công.";
      header("Location: index.php");
    }
?>