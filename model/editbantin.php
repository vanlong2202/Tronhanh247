<?php 
    session_start();
    require_once 'config.php';
    $FullName = $_POST['FullName'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Facebook = $_POST['Facebook'];
    #Cap nhat lai thong thong tin lien he
    $updatett = "UPDATE tbltaikhoan SET FullName='$FullName', Email='$Email',Phone='$Phone', Facebook='$Facebook'  Where Tk_ID = '$_SESSION[tk_id]'";
    mysqli_query($conn, $updatett);
    $TinID = $_POST['TinID'];
    $Tin_title = $_POST['Tin_title'];
    $Tin_chitiet = $_POST['Tin_chitiet'];
    $Tin_hinhthuc = $_POST['Tin_hinhthuc'];
    $Ltin_ID = $_POST['Ltin_ID'];
    $Tin_diachi = $_POST['Tin_diachi'];
    $Tin_gia = $_POST['Tin_gia'];
    $Tin_dientich = $_POST['Tin_dientich'];
    $Tin_phong = $_POST['Tin_phong'];
    $Tin_phongtrong = $_POST['Tin_phongtrong'];
    $Tin_toida = $_POST['Tin_toida'];
    $Tin_tuquan = $_POST['Tin_tuquan'];
    $Tttindv_ID = 1;
    $Tin_image1 = $_POST['Tin_image1'];
    $Tin_gtuutien = $_POST['Tin_gtuutien'];
    $Tin_time = date("Y-m-d H:i:s");
    $editbantin = "UPDATE tbltindv SET Tin_title='$Tin_title',Tin_chitiet='$Tin_chitiet',Ltin_ID='$Ltin_ID',Tin_hinhthuc='$Tin_hinhthuc',Tin_diachi='$Tin_diachi',Tin_gia='$Tin_gia',Tin_dientich='$Tin_dientich',Tin_phong='$Tin_phong',Tin_phongtrong='$Tin_phongtrong',Tin_toida='$Tin_toida',Tin_tuquan='$Tin_tuquan',Tin_time='$Tin_time',Tttindv_ID='$Tttindv_ID',Tin_image1='$Tin_image1',Tin_gtuutien='$Tin_gtuutien' Where TinID = '$TinID'";
    mysqli_query($conn, $editbantin);
    header("Location: ../profile.php"); 
?>

