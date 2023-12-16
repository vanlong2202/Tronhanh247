<?php
    $Tk_ID = $_GET['sid'];
    require_once 'config.php';
    $del_sql = "DELETE FROM tbltaikhoan WHERE Tk_ID = '$Tk_ID'";
    mysqli_query($conn,$del_sql);
    header("Location: ../dstaikhoan.php");
?>