<?php 
    require_once('config.php');
    $BaocaoID = $_GET['id'];
    $capnhat = "UPDATE tblbaocao SET Baocao_trangthai ='2' Where BaocaoID = '$BaocaoID'";
    mysqli_query($conn, $capnhat);
    header("Location: ../dsbaocao.php");
?>