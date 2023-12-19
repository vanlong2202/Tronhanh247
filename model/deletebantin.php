<?php
    $TinID = $_GET['id'];
    require_once 'config.php';
    $del_sql = "DELETE FROM tbltindv WHERE TinID = '$TinID'";
    mysqli_query($conn,$del_sql);
    header("Location: ../profile.php");
?>