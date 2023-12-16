<?php 
    require_once('config.php');
    $Tk_ID = $_GET['sid'];
    $editFeedback = "UPDATE tbltaikhoan SET Level='2' Where Tk_ID = '$Tk_ID'";
    mysqli_query($conn, $editFeedback);

    header("Location: ../phanquyenTK.php");
?>