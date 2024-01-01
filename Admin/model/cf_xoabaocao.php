<?php
    $BaocaoID = $_GET['sid'];
    require_once 'config.php';
    $delbaocao = "DELETE FROM tblbaocao WHERE BaocaoID = '$BaocaoID'";
    mysqli_query($conn,$delbaocao);
    header("Location: ../dsbaocaocp.php");
?>