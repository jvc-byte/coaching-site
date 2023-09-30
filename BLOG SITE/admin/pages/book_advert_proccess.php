<?php
session_start();
include "../../include/database_connection.php";

// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Get data from the form
    $imgDir1 = '';
    $book_text = $_POST["book_text"];
    $book_intro = $_POST["book_intro"];

    $imgDir2 = '';
    $modal_header = $_POST["modal_header"];
    $book_title = $_POST["book_title"];
    $book_description = $_POST["book_description"];
    $book_sumary = $_POST["book_sumary"];
    $sumary_content = $_POST["sumary_content"];

    // Handle image upload
    if ($_FILES['book_image']['error'] === UPLOAD_ERR_OK) {
        $tempName1 = $_FILES['book_image']['tmp_name'];
        $imageName1 = uniqid() . '_' . $_FILES['book_image']['name']; // Unique image name to avoid conflicts
        $uploadPath1 = 'admin/pages/book_advert_image/' . $imageName1;
        $imageStore1 = 'book_advert_image/' . $imageName1; // Path to store the image
        move_uploaded_file($tempName1, $imageStore1);
        $imgDir1 = $uploadPath1;
    }

    if ($_FILES['book2_image']['error'] === UPLOAD_ERR_OK) {
        $tempName2 = $_FILES['book2_image']['tmp_name'];
        $imageName2 = uniqid() . '_' . $_FILES['book2_image']['name']; // Unique image name to avoid conflicts
        $uploadPath2 = 'admin/pages/book_advert_image/' . $imageName2;
        $imageStore2 = 'book_advert_image/' . $imageName2; // Path to store the image
        move_uploaded_file($tempName2, $imageStore2);
        $imgDir2 = $uploadPath2;
    }

    // Perform form validation
    if (empty($imgDir1) or empty($book_text) or empty($book_intro) or empty($imgDir2) or empty($modal_header) or empty($book_title) or empty($book_description) or empty($book_sumary) or empty($sumary_content)) {
        $_SESSION["val"] = "<div class='container'><div class='text-center alert alert-danger'>All fields are required</div></div>";
        header("location: landingpage.php");
    } else {
        // If there are no errors, insert the user's data into the database
        $insert_query = " INSERT INTO book_advert (book_image, book_text, book_intro, book2_image, modal_header, book_title, book_description, book_sumary, sumary_content) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn); //initialize MYSQL statement object
        $preparestmt = mysqli_stmt_prepare($stmt, $insert_query); //prepare statem
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "sssssssss", $imgDir1, $book_text, $book_intro, $imgDir2, $modal_header, $book_title, $book_description, $book_sumary, $sumary_content);
            mysqli_stmt_execute($stmt);
            if (mysqli_affected_rows($conn) > 0) {
                // Data was inserted successfully
                $_SESSION["lav"] = "<div class='alert alert-success text-center'>insertion was successful!</div>";
                header("location: landingpage.php");
            } else {
                // No rows were affected, registration was not successful
                $_SESSION["avl"] = "<div class='alert alert-danger text-center'>insertion was not successful!</div>";
                header("location: landingpage.php");
            }
        } else {
            $_SESSION["vla"] = "<div class='alert alert-danger text-center'>proccess was not successful!</div>";
            header("location: landingpage.php");
            die();
        }

    }
} else {
    $_SESSION["alv"] = "<div class='alert alert-danger text-center'>proccess terminated!</div>";
    header("location: landingpage.php");
}
mysqli_close($conn);
?>
