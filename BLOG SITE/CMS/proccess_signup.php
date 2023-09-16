<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="IMAGE/logo.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/13d098a0cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia" />
    <link rel="stylesheet" href="../bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>val web | home</title>
</head>

<body>
    <?php
    if (isset($_POST["submit"])) {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $phone_number = $_POST["phone_number"];
        $industry = $_POST["industry"];
        $program = $_POST["program"];
        $chalenges = $_POST["chalenges"];
        $business_stage = $_POST["business_stage"];
        $registration_date = $_POST["registration_date"];
        $terms_and_con = $_POST["terms_and_con"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $errors = array();

        if (empty($first_name) or empty($last_name) or empty($email) or empty($password) or empty($confirm_password) or empty($phone_number) or empty($industry) or empty($chalenges) or empty($business_stage) or empty($registration_date)) {
            array_push($errors, "All field are required");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Enter a valid email");
        }
        if (strlen($password) < 8) {
            array_push($errors, "Password must be atleast 8 characters long");
        }
        if ($password !== $confirm_password) {
            array_push($errors, "Password does not match");
        }
        require_once "database_connection.php";

        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row_count = mysqli_num_rows($result);
        if ($row_count > 0) {
            array_push($errors, "Email already exist!");
        }

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else {
            // we will insert the data into database
            $sql = " INSERT INTO user (first_name, last_name, email, password, phone_number, industry, program, chalenges, business_stage, registration_date, terms_and_con) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $preparestmt = mysqli_stmt_prepare($stmt, $sql);
            if ($preparestmt) {
                mysqli_stmt_bind_param($stmt, "sssssssssss", $first_name, $last_name, $email, $passwordHash, $phone_number, $industry, $program, $chalenges, $business_stage, $registration_date, $terms_and_con);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered succeesfully</div>";
            } else {
                die("Registration was not successful!");
            }
        }

    }
    ?>

<button class="btn btn-outline-primary ms-md-5  customize get-started" type="submit"
                data-bs-target="#signUpModal" data-bs-toggle="modal">Click to Login</button>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>