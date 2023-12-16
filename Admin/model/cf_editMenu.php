<?php 
    require_once('config.php');

    $MenuID = $_POST['MenuID'];
    $MenuName = $_POST['MenuName'];
    $IsActive = $_POST['IsActive'];
    $Levels = $_POST['Levels'];
    $Link = $_POST['Link'];
    $Position = $_POST['Position'];

    $editMenu = "UPDATE tblMenu SET MenuName='$MenuName', IsActive='$IsActive',Levels='$Levels',Link='$Link',Position='$Position' Where MenuID = '$MenuID'";

    mysqli_query($conn,$editMenu);

    // Them xong chuyen ve trang danh sach
    header("Location: ../index.php");
?>