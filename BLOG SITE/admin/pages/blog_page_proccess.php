<?php
session_start();
include "../../include/database_connection.php";

// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Get data from the form
    $imagePath = '';
    $blog_title = $_POST["blog_title"];
    $blog_info = $_POST["blog_info"];

    // Handle blog_image upload
    if ($_FILES['blog_image']['error'] === UPLOAD_ERR_OK) {
        $tempName = $_FILES['blog_image']['tmp_name'];
        $imageName = uniqid() . '_' . $_FILES['blog_image']['name']; // Unique blog_image name to avoid conflicts
        $uploadPath = 'admin/pages/blog_images/' . $imageName;
        $imageStore = 'blog_images/' . $imageName; // Path to store the blog_image
        move_uploaded_file($tempName, $imageStore);
        $imagePath = $uploadPath;
    }

    // Perform form validation
    if (empty($imagePath) or empty($blog_title) or empty($blog_info)) {
        $_SESSION["no_field"] = "<div class='text-center alert alert-danger'>All fields are required</div>";
        header("location: landingpage.php");
    } else {
        // If there are no errors, insert the user's data into the database
        $insert_query = " INSERT INTO blog_page (blog_image, blog_title, blog_info) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn); //initialize MYSQL statement object
        $preparestmt = mysqli_stmt_prepare($stmt, $insert_query); //prepare statem
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "sss", $imagePath, $blog_title, $blog_info);
            mysqli_stmt_execute($stmt);
            if (mysqli_affected_rows($conn) > 0) {
                // Data was inserted successfully
                $_SESSION["yes_success"] = "<div class='alert alert-success text-center'>insertion was successful!</div>";
                header("location: landingpage.php");
            } else {
                // No rows were affected, registration was not successful
                $_SESSION["yes_fail"] = "<div class='alert alert-danger text-center'>insertion was not successful!</div>";
                header("location: landingpage.php");
            }
        } else {
            $_SESSION["no_proccess"] = "<div class='alert alert-danger text-center'>proccess was not successful!</div>";
            header("location: landingpage.php");
            die();
        }

    }
} else {
    $_SESSION["yes_terminate"] = "<div class='alert alert-danger text-center'>proccess terminated!</div>";
    header("location: landingpage.php");
}
mysqli_close($conn);
?>
