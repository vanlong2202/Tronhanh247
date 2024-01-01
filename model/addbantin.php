<?php 
    session_start();
    require_once 'config.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kiểm tra lỗi tải tệp
        if ($_FILES['image']['error'] > 0) {
            echo 'Lỗi tải tệp: ' . $_FILES['image']['error'];
            exit();
        }
    
        // Kiểm tra định dạng và kích thước tệp
        $allowedFormats = ['jpg', 'jpeg', 'png', 'gif'];
        $maxFileSize = 5 * 1024 * 1024; // 5MB
    
        $imageFileType = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    
        if (!in_array($imageFileType, $allowedFormats) || $_FILES['image']['size'] > $maxFileSize) {
            echo 'Định dạng tệp không hợp lệ hoặc kích thước tệp vượt quá giới hạn.';
            exit();
        }
    
        // Di chuyển tệp đã tải lên vào thư mục đích
        $targetDir = "../assets/images/";
        $targetFile = $targetDir.basename($_FILES["image"]["name"]);
        $targetFile1 = $targetDir.basename($_FILES["image1"]["name"]);
        $targetFile2 = $targetDir.basename($_FILES["image2"]["name"]);
        $link = "assets/images/";
        $imagelink = $link.basename($_FILES["image"]["name"]);
        $imagelink1 = $link.basename($_FILES["image1"]["name"]);
        $imagelink2 = $link.basename($_FILES["image2"]["name"]);
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "Xin lỗi, có lỗi khi tải lên tệp của bạn.";
            exit();
        }
        if (!move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFile1)) {
            echo "Xin lỗi, có lỗi khi tải lên tệp của bạn.";
            exit();
        }
        if (!move_uploaded_file($_FILES["image2"]["tmp_name"], $targetFile2)) {
            echo "Xin lỗi, có lỗi khi tải lên tệp của bạn.";
            exit();
        }
    }
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
    $Tin_diachichitiet = $_POST['Tin_diachichitiet'];
    $Tin_gia = $_POST['Tin_gia'];
    $Tin_dientich = $_POST['Tin_dientich'];
    $Tin_phong = $_POST['Tin_phong'];
    $Tin_phongtrong = $_POST['Tin_phongtrong'];
    $Tin_toida = $_POST['Tin_toida'];
    $Tin_tuquan = $_POST['Tin_tuquan'];
    $Tin_svip = 0;
    $Tttindv_ID = 1;
    $Tin_image1 = $_POST['Tin_image1'];
    $Tin_gtuutien = $_POST['Tin_gtuutien'];
    $Tin_time = date("Y-m-d H:i:s");
    $Tin_trangthai = 0;
    $addbantin = "INSERT INTO tbltindv(Tk_ID,Tin_title,Tin_chitiet,Ltin_ID,Tin_hinhthuc,Tin_diachi,Tin_diachichitiet,Tin_gia,Tin_dientich,Tin_phong,Tin_phongtrong,Tin_toida,Tin_tuquan,Tin_time,Tttindv_ID,Tin_image1,Tin_image2,Tin_image3,Tin_gtuutien,Tin_svip,Tin_trangthai) VALUES ('$_SESSION[tk_id]','$Tin_title','$Tin_chitiet','$Ltin_ID','$Tin_hinhthuc','$Tin_diachi','$Tin_diachichitiet','$Tin_gia','$Tin_dientich','$Tin_phong','$Tin_phongtrong','$Tin_toida','$Tin_tuquan','$Tin_time','$Tttindv_ID','$imagelink','$imagelink1','$imagelink2','$Tin_gtuutien','$Tin_svip','$Tin_trangthai')";
    mysqli_query($conn, $addbantin);
    header("Location: ../profile.php"); 
?>

