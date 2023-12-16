<?php 
    require_once 'config.php';
        $Fullname = $_POST['Fullname'];
        $Email = $_POST['Email'];
        $FeedbackTitlle = $_POST['FeedbackTitlle'];
        $Feedback = $_POST['Feedback'];
        $Status = 1;
    $addFeedback = "INSERT INTO tblFeedback(Fullname,Email,FeedbackTitlle,Feedback,Status) VALUES ('$Fullname','$Email','$FeedbackTitlle','$Feedback','$Status')";

    mysqli_query($conn,$addFeedback);

    header("Location: ../index.php"); 
?>