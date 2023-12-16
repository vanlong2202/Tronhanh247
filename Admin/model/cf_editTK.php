<?php 
    require_once('config.php');
    $Tk_ID = $_POST['Tk_ID'];
    $fullname = $_POST['Fullname'];
    $address = $_POST['Address'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $edit = "UPDATE tbltaikhoan SET FullName='$fullname',Address= '$address', Phone = '$phone', Email = '$email', Password = '$password' Where Tk_ID = '$Tk_ID'";
    mysqli_query($conn,$edit);
    header("location: ../dstaikhoan.php");
?>