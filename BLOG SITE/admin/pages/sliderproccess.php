<?php
session_start();
require_once "database_connection.php";

// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Get data from the form
    $imagePath = '';
    // $image = $_POST["image"];
    $header = $_POST["header"];
    $paragraph = $_POST["paragraph"];

    // Handle image upload
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $tempName = $_FILES['image']['tmp_name'];
        $imageName = uniqid() . '_' . $_FILES['image']['name']; // Unique image name to avoid conflicts
        $uploadPath = 'image/' . $imageName;
        $imageStore = '../../image/' . $imageName; // Path to store the image
        move_uploaded_file($tempName, $imageStore);
        $imagePath = $uploadPath;
    }

    // Perform form validation
    if (empty($imagePath) or empty($header) or empty($paragraph)) {
        $_SESSION["required_field"] = "<div class='container'><div class='text-center alert alert-danger'>All fields are required</div></div>";
        header("location: landingpage.php");
    } else {
        // If there are no errors, insert the user's data into the database
        $insert_query = " INSERT INTO slider (image, header, paragraph) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn); //initialize MYSQL statement object
        $preparestmt = mysqli_stmt_prepare($stmt, $insert_query); //prepare statem
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "sss", $imagePath, $header, $paragraph);
            mysqli_stmt_execute($stmt);
            if (mysqli_affected_rows($conn) > 0) {
                // Data was inserted successfully
                $_SESSION["insert_success"] = "<div class='alert alert-success text-center'>insertion was successful!</div>";
                header("location: landingpage.php");
            } else {
                // No rows were affected, registration was not successful
                $_SESSION["insert_fail"] = "<div class='alert alert-danger text-center'>insertion was not successful!</div>";
                header("location: landingpage.php");
            }
        } else {
            $_SESSION["proccess_fail"] = "<div class='alert alert-danger text-center'>proccess was not successful!</div>";
            header("location: landingpage.php");
            die();
        }

    }
} else {
    $_SESSION["proccess_terminate"] = "<div class='alert alert-danger text-center'>proccess terminated!</div>";
    header("location: landingpage.php");
}
mysqli_close($conn);
?>
