<?php
// Include the database configuration file
include_once(__DIR__.'/config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $img = mysqli_real_escape_string($conn, $_POST['img']);
    $bedrooms = mysqli_real_escape_string($conn, $_POST['bedrooms']);
    $bathrooms = mysqli_real_escape_string($conn, $_POST['bathrooms']);
    $area = mysqli_real_escape_string($conn, $_POST['area']);
    $floor = mysqli_real_escape_string($conn, $_POST['floor']);
    $parking = mysqli_real_escape_string($conn, $_POST['parking']);
    $availability = isset($_POST['availability']) ? 1 : 0; // Assuming availability is a checkbox

    // Attempt to insert the data into the database
    $sql = "INSERT INTO tblrooms (user_id, title, description, price, img, bedrooms, bathrooms, area, floor, parking, availability)
            VALUES (1, '$title', '$description', '$price', '$img', '$bedrooms', '$bathrooms', '$area', '$floor', '$parking', '$availability')";

    if (mysqli_query($conn, $sql)) {
        // Redirect back to the main page or wherever you want to go after successful insertion
        header("Location: ../dsphonga.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
