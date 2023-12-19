<?php 
    require_once 'config.php';
    $TinID = $_POST['TinID'];
    $Description = $_POST['Description'];
    $Tttindv_ID = 3;
    $capnhat = "UPDATE tbltindv SET Description='$Description',Tttindv_ID='$Tttindv_ID' Where TinID = '$TinID'";
    mysqli_query($conn, $capnhat);
    header("Location: ../dsbantincho.php");
?>