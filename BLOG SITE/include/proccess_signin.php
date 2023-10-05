<?php
session_start();
require_once "database_connection.php";
$errorMsg = [];


if (isset($_POST["signin"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $program = mysqli_real_escape_string($conn, $_POST["program"]);

    $email_query = "SELECT * FROM user WHERE email = ?";
    $stmt = mysqli_prepare($conn, $email_query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row["password"])) {
            // $_SESSION["id"] = $row["id"];

            if ($row["program"] == "classic") {
                $_SESSION["classic_id"] = $row["id"];
                header("Location: ../user_dashboard/classic/classic.php");
                exit();
            } elseif ($row["program"] == "p2p") {
                $_SESSION["p2p_id"] = $row["id"];
                header("Location: ../user_dashboard/p2p/p2p.php");
                exit();
            } elseif ($row["program"] == "virtual") {
                $_SESSION["virtual_id"] = $row["id"];
                header("Location: ../user_dashboard/virtual/virtual.php");
                exit();
            } elseif ($row["user_type"] == "admin") {
                $_SESSION["admin_id"] = $row["id"];
                header("Location: ../admin/pages/index.php");
                exit();
            } else {
                $errorMsg[] = "Incorrect program";
            }
        } else {
            $errorMsg[] = "Incorrect password";
        }
    } else {
        $errorMsg[] = "User not found";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    $errorMsg[] = "Invalid request";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head content -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logo.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/13d098a0cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia" />
    <link rel="stylesheet" href="../bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>.</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center g-2">
                <?php
                // Display error message if present
                if (!empty($errorMsg)) {
                    foreach ($errorMsg as $error) {
                        echo '<div class="alert alert-danger">' . $error . '</div>';
                    }
                }
                ?>
                <h4 class="text-primary mx-2">Try again</h4>
                <a href="../index.php" class="btn btn-outline-primary">Home</a>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>