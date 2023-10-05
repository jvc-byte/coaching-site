<?php
session_start();
require_once "database_connection.php";

// Initialize variables
$imagePath = '';

// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Get data from the form
    $blog_title = mysqli_real_escape_string($conn, $_POST["blog_title"]);
    $blog_info = mysqli_real_escape_string($conn, $_POST["blog_info"]);

    // Handle blog_image upload
    if ($_FILES['blog_image']['error'] === UPLOAD_ERR_OK) {
        $tempName = $_FILES['blog_image']['tmp_name'];
        $imageName = uniqid() . '_' . $_FILES['blog_image']['name']; // Unique blog_image name to avoid conflicts
        $uploadPath = 'admin/pages/blog_images/' . $imageName;
        $imageStore = 'blog_images/' . $imageName; // Path to store the blog_image
        if (move_uploaded_file($tempName, $imageStore)) {
            // Image uploaded successfully
            $imagePath = $uploadPath;
        } else {
            $_SESSION["img_error"] = "<div class='alert alert-danger text-center'>Failed to upload image.</div>";
            header("location: landingpage.php");
            exit();
        }
    }

    // Perform form validation
    if (empty($imagePath) or empty($blog_title) or empty($blog_info)) {
        $_SESSION["no_field"] = "<div class='text-center alert alert-danger'>All fields are required</div>";
        header("location: landingpage.php");
        exit();
    }

    // Insert data into the database
    $insert_query = "INSERT INTO blog_page (blog_image, blog_title, blog_info) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $insert_query)) {
        mysqli_stmt_bind_param($stmt, "sss", $imagePath, $blog_title, $blog_info);
        mysqli_stmt_execute($stmt);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION["yes_success"] = "<div class='alert alert-success text-center'>Insertion was successful!</div>";
        } else {
            $_SESSION["yes_fail"] = "<div class='alert alert-danger text-center'>Insertion was not successful!</div>";
        }
    } else {
        $_SESSION["no_proccess"] = "<div class='alert alert-danger text-center'>Process was not successful!</div>";
    }

    header("location: landingpage.php");
    exit();
} else {
    $_SESSION["yes_terminate"] = "<div class='alert alert-danger text-center'>Process terminated!</div>";
    header("location: landingpage.php");
    exit();
}
?>