<?php 
    require_once 'config.php';
        $TinID = $_POST['TinID'];
        $Baocao_chitiet = $_POST['Baocao_chitiet'];
        $Baocao_phone = $_POST['Baocao_phone'];
        $Baocao_email = $_POST['Baocao_email'];
        $Baocao_trangthai = 1;
    $addBaotin = "INSERT INTO tblbaocao(TinID,Baocao_chitiet,Baocao_phone,Baocao_email,Baocao_trangthai) VALUES ('$TinID','$Baocao_chitiet','$Baocao_phone','$Baocao_email','$Baocao_trangthai')";

    mysqli_query($conn,$addBaotin);

    header("Location: ../index.php"); 
?>