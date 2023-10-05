<?php
session_start();
require_once "database_connection.php";

// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Get data from the form
    $img_path = '';
    $head_text = $_POST["head_text"];
    $success_insight = $_POST["success_insight"];
    $success_name = $_POST["success_name"];
    $success_cite = $_POST["success_cite"];

    // Handle image upload
    if ($_FILES['success_image']['error'] === UPLOAD_ERR_OK) {
        $tempName = $_FILES['success_image']['tmp_name'];
        $imageName = uniqid() . '_' . $_FILES['success_image']['name']; // Unique image name to avoid conflicts
        $uploadPath = 'admin/pages/success_image/' . $imageName;
        $imageStore = 'success_image/' . $imageName; // Path to store the image
        move_uploaded_file($tempName, $imageStore);
        $img_path = $uploadPath;
    }

    // Perform form validation
    if (empty($img_path) or empty($head_text) or empty($success_insight) or empty($success_name) or empty($success_cite)) {
        $_SESSION["null"] = "<div class='container'><div class='text-center alert alert-danger'>All fields are required</div></div>";
        header("location: landingpage.php");
    } else {
        // If there are no errors, insert the user's data into the database
        $insert_query = " INSERT INTO success_card (success_image, head_text, success_insight, success_name, success_cite) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn); //initialize MYSQL statement object
        $preparestmt = mysqli_stmt_prepare($stmt, $insert_query); //prepare statem
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $img_path, $head_text, $success_insight, $success_name, $success_cite);
            mysqli_stmt_execute($stmt);
            if (mysqli_affected_rows($conn) > 0) {
                // Data was inserted successfully
                $_SESSION["a"] = "<div class='alert alert-success text-center'>insertion was successful!</div>";
                header("location: landingpage.php");
            } else {
                // No rows were affected, registration was not successful
                $_SESSION["b"] = "<div class='alert alert-danger text-center'>insertion was not successful!</div>";
                header("location: landingpage.php");
            }
        } else {
            $_SESSION["c"] = "<div class='alert alert-danger text-center'>proccess was not successful!</div>";
            header("location: landingpage.php");
            die();
        }

    }
} else {
    $_SESSION["d"] = "<div class='alert alert-danger text-center'>proccess terminated!</div>";
    header("location: landingpage.php");
}
mysqli_close($conn);
?>
