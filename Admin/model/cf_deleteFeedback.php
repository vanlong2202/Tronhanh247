<?php

    $FeedbackID = $_GET['sid'];

    require_once 'config.php';
    //include_once(__DIR__.'/mudul/config.php');

    $delFeedback = "DELETE FROM tblfeedback WHERE FeedbackID = '$FeedbackID'";

    mysqli_query($conn,$delFeedback);

    header("Location: ../compleFeedback.php");
    
?>