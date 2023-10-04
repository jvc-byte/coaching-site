<?php
    session_start();
    include "../../include/database_connection.php";
    if (isset($_POST["reset"])) {
        $password = $_POST["password"];
        $newpassword = $_POST["newpassword"];
        $renewpassword = $_POST["renewpassword"];

        if (empty($password)) {
            header("location: profile.php?error=Please enter your old password.");
        } elseif (empty($newpassword)) {
            header("location: profile.php?error=Please enter your New password.");
        } elseif ($newpassword < 8) {
            header("location: profile.php?error=Password must be up to 8 characters long.");
        } elseif ($newpassword !== $renewpassword) {
            header("location: profile.php?error=New password and confirm password does not match!");
        } else {
            $id = $_SESSION["id"]; //use session to target a specific user
            // Hash the user's password for security
            $passwordHash = password_hash($newpassword, PASSWORD_DEFAULT);
            // query the MYSQL database
            $password_query = "SELECT * FROM user WHERE password = '$password' AND id = '$id'";
            $result = mysqli_query($conn, $password_query);
            $row_count = mysqli_num_rows($result); // check if the password exists
    
            if ($row_count === 1) {
                $new_pass_query = "UPDATE user SET password = '$passwordHash' WHERE id = '$id'";
                $result2 = mysqli_query($conn, $new_pass_query);
                header("location: profile.php?success=Password changed successfully!");

            } else {
                header("location: profile.php?error=Incorect pasword, please input your old password");
            }
        }

    } else {
        header("location: profile.php?error=User not found");
    }
    ?>