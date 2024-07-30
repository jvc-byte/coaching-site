<?php
session_start();
require_once "database_connection.php";

// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Get data from the form
    $image_dir = '';
    $heading = $_POST["heading"];
    $about = $_POST["about"];

    // Handle image upload
    if ($_FILES['image3']['error'] === UPLOAD_ERR_OK) {
        $tempName = $_FILES['image3']['tmp_name'];
        $imageName = uniqid() . '_' . $_FILES['image3']['name']; // Unique image name to avoid conflicts
        $uploadPath = 'admin/pages/about_image/' . $imageName;
        $imageStore = 'about_image/' . $imageName; // Path to store the image
        move_uploaded_file($tempName, $imageStore);
        $image_dir = $uploadPath;
    }

    // Perform form validation
    if (empty($image_dir) or empty($heading) or empty($about)) {
        $_SESSION["nothing"] = "<div class='container'><div class='text-center alert alert-danger'>All fields are required</div></div>";
        header("location: landingpage.php");
    } else {
        // If there are no errors, insert the user's data into the database
        $insert_query = " INSERT INTO about_us_card (image, heading, about) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn); //initialize MYSQL statement object
        $preparestmt = mysqli_stmt_prepare($stmt, $insert_query); //prepare statem
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "sss", $image_dir, $heading, $about);
            mysqli_stmt_execute($stmt);
            if (mysqli_affected_rows($conn) > 0) {
                // Data was inserted successfully
                $_SESSION["correct"] = "<div class='alert alert-success text-center'>insertion was successful!</div>";
                header("location: landingpage.php");
            } else {
                // No rows were affected, registration was not successful
                $_SESSION["wrong"] = "<div class='alert alert-danger text-center'>insertion was not successful!</div>";
                header("location: landingpage.php");
            }
        } else {
            $_SESSION["error"] = "<div class='alert alert-danger text-center'>proccess was not successful!</div>";
            header("location: landingpage.php");
            die();
        }

    }
} else {
    $_SESSION["terminate"] = "<div class='alert alert-danger text-center'>proccess terminated!</div>";
    header("location: landingpage.php");
}
mysqli_close($conn);
?>
