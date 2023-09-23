<?php
if (isset($_POST["submit"])) {
    $user_paswd = $_POST["userInputPassword"];
    $hashed_paswd = $_POST["hashedPassword"];

    $message = ""; // Initialize a variable to store the message
    $messageClass = ""; // Initialize a variable to store the CSS class for styling

    // Verify the user's input password
    if (password_verify($user_paswd, $hashed_paswd)) {
        // Password is correct
        $message = "Password matches!";
        $messageClass = "success"; // Set the CSS class to "success" for green background
    } else {
        // Password is incorrect
        $message = "Password does not match!";
        $messageClass = "error"; // Set the CSS class to "error" for red background
    }

}
?>

<form action="hashed_password_checker.php" method="post">
    <?php
    if (!empty($message)) {
        echo "<div class='$messageClass'>$message</div>";
    }
    ?>
    <input name="userInputPassword" type="text" placeholder="User password"><br><br>
    <input name="hashedPassword" type="text" placeholder="Hashed password"><br><br>
    <input type="submit" name="submit" value="Check"><br><br>
</form>

<style>
    body {
        background-color: rgba(233, 233, 255, 0.3);
    }

    form {
        padding: 2rem 5rem;
        display: flex;
        flex-direction: column;
        margin: auto;
        box-shadow: blue 2px 2px 2px 2px;
        max-width: max-content;
        max-height: max-content;
        position: relative;
        top: 20%;
        border-radius: 1rem;
    }

    form input[type=text] {
        padding: 15px;
        border-radius: 1rem;
        border: 1px solid blue;
        text-align: center;
        font-size: 15;
    }

    input[type=submit] {
        padding: 15px;
        border-radius: 1rem;
        border: 1px solid blue;
        text-align: center;
        background-color: blue;
        color: white;
        font-size: 20;
        cursor: pointer;
    }

    .success,.error {
        padding: 15px;
        border-radius: 1rem;
        text-align: center;
        background-color: rgba(255, 0, 0, 0.5);
        color: white;
        font-size: 20;
        margin-bottom: 2rem;
    }

    .success {
        background-color: rgba(0, 255, 0, 0.5);
    }
</style>