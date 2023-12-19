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
    $addbantin = "INSERT INTO tbltindv(Tk_ID,Tin_title,Tin_chitiet,Ltin_ID,Tin_hinhthuc,Tin_diachi,Tin_gia,Tin_dientich,Tin_phong,Tin_phongtrong,Tin_toida,Tin_tuquan,Tin_time,Tttindv_ID,Tin_image1,Tin_gtuutien) VALUES ('$_SESSION[tk_id]','$Tin_title','$Tin_chitiet','$Ltin_ID','$Tin_hinhthuc','$Tin_diachi','$Tin_gia','$Tin_dientich','$Tin_phong','$Tin_phongtrong','$Tin_toida','$Tin_tuquan','$Tin_time','$Tttindv_ID','$Tin_image1','$Tin_gtuutien')";
    mysqli_query($conn, $addbantin);
    header("Location: ../profile.php"); 
?>

