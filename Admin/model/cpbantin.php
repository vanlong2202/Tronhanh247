<?php 
    require_once('config.php');
    $TinID = $_GET['id'];
    $capnhat = "UPDATE tbltindv SET Tttindv_ID='2' Where TinID = '$TinID'";
    mysqli_query($conn, $capnhat);
    header("Location: ../dsbantincho.php");
?>