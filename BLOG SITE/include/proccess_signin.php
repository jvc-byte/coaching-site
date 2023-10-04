<!DOCTYPE html>
<html lang="en">

<head>
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
    <?php
    include "database_connection.php";
    session_start();
    if (isset($_POST["signin"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $program = $_POST["program"];

        // query the MYSQL database
        $email_query = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $email_query);
        $row_count = mysqli_num_rows($result); // check if the email exists
    
        if ($row_count > 0) {

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if ($row["program"] == "classic") {
                $_SESSION["classic_name"] = $row["first_name"];

                if (password_verify($password, $row["password"])) {
                    $_SESSION["id"] = $row["id"];
                    header("location: ../user_dashboard/classic/classic.php");
                    die();
                } else {
                    echo "<div class='alert alert-danger'>Incorrect password</div>";
                }
            } elseif ($row["program"] == "p2p") {
                $_SESSION["p2p_name"] = $row["first_name"];

                if (password_verify($password, $row["password"])) {
                    $_SESSION["id"] = $row["id"];
                    header("location: ../user_dashboard/p2p/p2p.php");
                    die();
                } else {
                    echo "<div class='alert alert-danger'>Incorrect password</div>";
                }
            } elseif ($row["program"] == "virtual") {
                $_SESSION["virtual_name"] = $row["first_name"];

                if (password_verify($password, $row["password"])) {
                    $_SESSION["id"] = $row["id"];
                    header("location: ../user_dashboard/virtual/virtual.php");
                    die();
                } else {
                    echo "<div class='alert alert-danger'>Incorrect password</div>";
                }
            } elseif ($row["user_type"] == "admin") {
                $_SESSION["admin"] = $row["user_type"];
                $_SESSION["id"] = $row["id"];
                header("location: ../admin/pages/index.php");
            } else {
                echo "<div class='alert alert-danger'>Incorrect email</div>";
            }
        }

    } else {
        echo "<div class='alert alert-danger'>User not found</div>";
    }
    ?>

    <a href="../index.php" class="btn btn-outline-primary ms-md-5  customize get-started">Home</a>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>