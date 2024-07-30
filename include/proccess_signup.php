<?php
// Include the database connection script
require_once "database_connection.php";

// Initialize alert variables
$errors = [];

// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Get data from the form
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $phone_number = $_POST["phone_number"];
    $industry = $_POST["industry"];
    $program = $_POST["program"];
    $about = $_POST["about"];
    $business_stage = $_POST["business_stage"];
    $address = $_POST["address"];

    // Perform form validation
    if (empty($first_name) or empty($last_name) or empty($email) or empty($password) or empty($confirm_password) or empty($phone_number) or empty($address)) {
        $errors[] = "All fields are required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Enter a valid email";
    }
    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }
    if ($password !== $confirm_password) {
        $errors[] = "Password does not match";
    }

    // Check if the email already exists in the database
    $email_query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $email_query);
    $row_count = mysqli_num_rows($result);

    if ($row_count > 0) {
        $errors[] = "Email already exists!";
    }

    // If there are no errors, insert the user's data into the database
    if (empty($errors)) {
        // Hash the user's password for security
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $insert_query = "INSERT INTO user (first_name, last_name, email, password, phone_number, industry, program, about, business_stage, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $preparestmt = mysqli_stmt_prepare($stmt, $insert_query);
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "ssssssssss", $first_name, $last_name, $email, $passwordHash, $phone_number, $industry, $program, $about, $business_stage, $address);
            mysqli_stmt_execute($stmt);
            if (mysqli_affected_rows($conn) > 0) {
                // Data was inserted successfully
                header("location: ../index.php?registrationSuccess=1");
                exit();
            } else {
                // No rows were affected, registration was not successful
                $errors[] = "Registration was not successful!";
            }
        } else {
            die("Registration was not successful!");
        }
    }
    mysqli_close($conn);
}
?>

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

<body class="mt-5">
    <div class="container">
        <?php
        // Display error message if present
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo '<div class="alert alert-danger text-center">' . $error . '</div>';
            }
        }
        ?>
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center g-2">
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