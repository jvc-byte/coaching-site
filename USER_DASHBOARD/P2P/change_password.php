<?php
session_start();
require_once "database_connection.php";

if (isset($_POST["reset"])) {
    $id = $_SESSION["p2p_id"];
    // Get user inputs
    $password = $_POST["password"];
    $newpassword = $_POST["newpassword"];
    $renewpassword = $_POST["renewpassword"];

    // Validate inputs
    if (empty($password)) {
        header("location: users-profile.php?error=Please enter your old password.");
        exit(); // Exit to prevent further processing
    } elseif (empty($newpassword)) {
        header("location: users-profile.php?error=Please enter your old password.");
        exit(); // Exit to prevent further processing
    } elseif (strlen($newpassword) < 8) {
        header("location: users-profile.php?error=Password must be at least 8 characters long.");
        exit(); // Exit to prevent further processing
    } elseif ($newpassword !== $renewpassword) {
        header("location: users-profile.php?error=New password and confirm password do not match!");
        exit(); // Exit to prevent further processing
    }

    // Hash the new password for security
    $passwordHash = password_hash($newpassword, PASSWORD_DEFAULT);

    // Retrieve user's current password from the database
    $select_user_query = "SELECT password FROM user WHERE id = ?";
    $stmt = mysqli_prepare($conn, $select_user_query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    // Verify old password
    if ($row && password_verify($password, $row["password"])) {
        // Update user's password in the database
        $update_password_query = "UPDATE user SET password = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $update_password_query);
        mysqli_stmt_bind_param($stmt, "si", $passwordHash, $id);
        mysqli_stmt_execute($stmt);

        header("location: users-profile.php?success=Password changed successfully!");
        exit(); // Exit after successful password change
    } else {
        header("location: users-profile.php?error=Incorrect password. Please input your old password");
        exit(); // Exit to prevent further processing
    }
} else {
    header("location: users-profile.php?error=User not found");
    exit(); // Exit to prevent further processing
}
?>
