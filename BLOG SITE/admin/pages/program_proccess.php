<?php
session_start();
require_once "database_connection.php";

// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Get data from the form
    $imgPath = '';
    $program_title = $_POST["program_title"];
    $program_info = $_POST["program_info"];
    $coaching_content = $_POST["coaching_content"];
    $level = $_POST["level"];
    $dates = $_POST["dates"];
    $fees = $_POST["fees"];

    // Handle image upload
    if ($_FILES['program_image']['error'] === UPLOAD_ERR_OK) {
        $tempName = $_FILES['program_image']['tmp_name'];
        $imageName = uniqid() . '_' . $_FILES['program_image']['name']; // Unique image name to avoid conflicts
        $uploadPath = 'admin/pages/program_image/' . $imageName;
        $imageStore = 'program_image/' . $imageName; // Path to store the image
        move_uploaded_file($tempName, $imageStore);
        $imgPath = $uploadPath;
    }

    // Perform form validation
    if (empty($imgPath) or empty($program_title) or empty($program_info)) {
        $_SESSION["empty"] = "<div class='container'><div class='text-center alert alert-danger'>All fields are required</div></div>";
        header("location: landingpage.php");
    } else {
        // If there are no errors, insert the user's data into the database
        $insert_query = " INSERT INTO our_program_home (program_image, program_title, program_info, coaching_content, level, dates, fees) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn); //initialize MYSQL statement object
        $preparestmt = mysqli_stmt_prepare($stmt, $insert_query); //prepare statem
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "sssssss", $imgPath, $program_title, $program_info, $coaching_content, $level, $dates, $fees);
            mysqli_stmt_execute($stmt);
            if (mysqli_affected_rows($conn) > 0) {
                // Data was inserted successfully
                $_SESSION["ok"] = "<div class='alert alert-success text-center'>insertion was successful!</div>";
                header("location: landingpage.php");
            } else {
                // No rows were affected, registration was not successful
                $_SESSION["not_ok"] = "<div class='alert alert-danger text-center'>insertion was not successful!</div>";
                header("location: landingpage.php");
            }
        } else {
            $_SESSION["bad"] = "<div class='alert alert-danger text-center'>proccess was not successful!</div>";
            header("location: landingpage.php");
            die();
        }

    }
} else {
    $_SESSION["terminated"] = "<div class='alert alert-danger text-center'>proccess terminated!</div>";
    header("location: landingpage.php");
}
mysqli_close($conn);
?>
