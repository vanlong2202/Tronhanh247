<?php 
    require_once 'config.php';

        $MenuName = $_POST['MenuName'];
        $IsActive = $_POST['IsActive'];
        $Levels = $_POST['Levels'];
        $Link = $_POST['Link'];
        $Position = $_POST['Position'];
    $themMenu = "INSERT INTO tblMenu(MenuName,IsActive,Levels,Link,Position) VALUES ('$MenuName','$IsActive','$Levels','$Link','$Position')";

    mysqli_query($conn,$themMenu);

    header("Location: ../dsmenu.php"); 
?>