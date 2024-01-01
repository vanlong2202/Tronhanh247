<?php 
    require_once('config.php');
    $TinID = $_GET['sid'];
    $Tin_time = date("Y-m-d H:i:s");
    $editbantin = "UPDATE tbltindv SET Tin_svip='0', Tin_time ='$Tin_time'  Where TinID = '$TinID'";
    mysqli_query($conn, $editbantin);

    header("Location: ../dsbantinsvipcp.php");
?>