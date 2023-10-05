<?php
session_start();
require_once "database_connection.php";

// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Get data from the form
    $image_path = '';
    $inspire_text = $_POST["inspire_text"];
    $announce_text = $_POST["announce_text"];

    // Handle image upload
    if ($_FILES['image2']['error'] === UPLOAD_ERR_OK) {
        $tempName = $_FILES['image2']['tmp_name'];
        $imageName = uniqid() . '_' . $_FILES['image2']['name']; // Unique image name to avoid conflicts
        $uploadPath = 'slidercardimg/' . $imageName;
        $imageStore = '../../slidercardimg/' . $imageName; // Path to store the image
        move_uploaded_file($tempName, $imageStore);
        $image_path = $uploadPath;
    }

    // Perform form validation
    if (empty($image_path) or empty($inspire_text) or empty($announce_text)) {
        $_SESSION["empty_field"] = "<div class='container'><div class='text-center alert alert-danger'>All fields are required</div></div>";
        header("location: landingpage.php");
    } else {
        // If there are no errors, insert the user's data into the database
        $insert_query = " INSERT INTO slider_card (image, inspire_text, announce_text) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn); //initialize MYSQL statement object
        $preparestmt = mysqli_stmt_prepare($stmt, $insert_query); //prepare statem
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "sss", $image_path, $inspire_text, $announce_text);
            mysqli_stmt_execute($stmt);
            if (mysqli_affected_rows($conn) > 0) {
                // Data was inserted successfully
                $_SESSION["insert_ok"] = "<div class='alert alert-success text-center'>insertion was successful!</div>";
                header("location: landingpage.php");
            } else {
                // No rows were affected, registration was not successful
                $_SESSION["insert_bad"] = "<div class='alert alert-danger text-center'>insertion was not successful!</div>";
                header("location: landingpage.php");
            }
        } else {
            $_SESSION["proccess_bad"] = "<div class='alert alert-danger text-center'>proccess was not successful!</div>";
            header("location: landingpage.php");
            die();
        }

    }
} else {
    $_SESSION["proccess_cancel"] = "<div class='alert alert-danger text-center'>proccess terminated!</div>";
    header("location: landingpage.php");
}
mysqli_close($conn);
?>
