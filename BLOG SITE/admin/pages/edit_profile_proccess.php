<?php
session_start();
require_once "database_connection.php";

if (isset($_POST["update_profile"])) {
    $id = $_SESSION["admin_id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $about = $_POST["about"];
    $address = $_POST["address"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];

    // Handle image upload
    if ($_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
        $tempName = $_FILES['profile_picture']['tmp_name'];
        $imageName = uniqid() . '_' . $_FILES['profile_picture']['name']; // Unique image name to avoid conflicts
        $uploadPath = '../profile_image/' . $imageName;
        $imageStore = '../profile_image/' . $imageName; // Path to store the image
        move_uploaded_file($tempName, $imageStore);
        $imagepath = $uploadPath;
    } else {
        $imagepath = "";
        header("location: profile.php?errorMsg=No image uploaded");
    }

    // Construct the update query based on non-empty fields
    $update_fields = array();
    $update_values = array();
    $types = "";
    if (!empty($imagepath)) {
        $update_fields[] = "profile_picture = ?";
        $update_values[] = $imagepath;
        $types .= "s";
    }
    if (!empty($first_name)) {
        $update_fields[] = "first_name = ?";
        $update_values[] = $first_name;
        $types .= "s";
    }
    if (!empty($last_name)) {
        $update_fields[] = "last_name = ?";
        $update_values[] = $last_name;
        $types .= "s";
    }
    if (!empty($about)) {
        $update_fields[] = "about = ?";
        $update_values[] = $about;
        $types .= "s";
    }
    if (!empty($address)) {
        $update_fields[] = "address = ?";
        $update_values[] = $address;
        $types .= "s";
    }
    if (!empty($phone_number)) {
        $update_fields[] = "phone_number = ?";
        $update_values[] = $phone_number;
        $types .= "s";
    }
    if (!empty($email)) {
        $update_fields[] = "email = ?";
        $update_values[] = $email;
        $types .= "s";
    }

    // Check if any field was updated
    if (count($update_fields) > 0) {
        // Construct the SQL query
        $update_query = "UPDATE user SET " . implode(", ", $update_fields) . " WHERE id = ?";
        $types .= "i";
        $update_values[] = $id;

        // Prepare the statement
        $stmt = mysqli_prepare($conn, $update_query);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, $types, ...$update_values); // using "unpacking" operator(...) to pass in the argument

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            header("location: profile.php?successMsg=Details updated successfully!");
        } else {
            header("location: profile.php?errorMsg=Failed to update details. Please try again later.");
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        header("location: profile.php?errorMsg=No fields provided for update.");
    }
} else {
    header("location: profile.php?errorMsg=Invalid request");
}
?>

