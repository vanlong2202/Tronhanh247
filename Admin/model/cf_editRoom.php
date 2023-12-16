<?php 
    require_once('config.php');

    $id = $_POST['id'];
    $user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $area = $_POST['area'];
    $floor = $_POST['floor'];
    $parking = $_POST['parking'];
    $availability = isset($_POST['availability']) ? 1 : 0;

    $editRoom = "UPDATE tblrooms SET user_id='$user_id', title='$title', description='$description', price='$price', img='$img', 
                  bedrooms='$bedrooms', bathrooms='$bathrooms', area='$area', floor='$floor', parking='$parking', 
                  availability='$availability' WHERE id = '$id'";

    mysqli_query($conn, $editRoom);

    // Chuyển về trang danh sách
    header("Location: ../dsphonga.php");
?>
