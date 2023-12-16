<?php 
    require_once('config.php');
    $FeedbackID = $_GET['sid'];
    $editFeedback = "UPDATE tblfeedback SET Status='2' Where FeedbackID = '$FeedbackID'";
    mysqli_query($conn, $editFeedback);

    header("Location: ../dsfeedback.php");
?>