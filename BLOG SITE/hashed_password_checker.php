<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Val-Web | Password Checker and Hasher</title>
    <style>
        body {
            background-color: rgba(233, 233, 255, 0.3);
        }

        .form_container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            max-width: 60%;
            margin: auto;
            margin-top: 7%;
        }

        form {
            padding: 1rem 5rem;
            display: flex;
            flex-direction: column;
            margin: auto;
            margin-top: 5%;
            box-shadow: blue inset 8px 2px;
            max-width: max-content;
            max-height: max-content;
            position: relative;
            top: 20%;
            border-radius: 1rem;
        }

        .pass_hasher {
            box-shadow: blue 8px 2px;
        }

        .heading {
            color: blueviolet;
            font-size: 20;
            font-weight: 700;
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-align: center;
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

        .good,
        .bad,
        .success,
        .error {
            padding: 15px;
            border-radius: 1rem;
            text-align: center;
            background-color: rgba(255, 0, 0, 0.5);
            color: white;
            font-size: 20;
            margin-bottom: 2rem;
        }

        .good,
        .success {
            background-color: rgba(0, 255, 0, 0.5);
        }

        #copy {
            cursor: pointer;
            width: max-content;
            position: inherit;
            /* border: 2px solid blue; */
            color: blue;
            font-weight: 700;
            right: -80%;
        }
    </style>
</head>

<body>
    <div class="form_container">
        <form action="hashed_password_checker.php" method="post">

            <?php
            if (isset($_POST["submit"])) {
                $user_paswd = $_POST["userInputPassword"];
                $hashed_paswd = $_POST["hashedPassword"];

                $message = ""; // Initialize a variable to store the message
                $messageClass = ""; // Initialize a variable to store the CSS class for styling
            
                // Form validation and verifying the user's input password
                if (empty($user_paswd) || empty($hashed_paswd)) {
                    // empty field
                    $message = "All input field are required!";
                    $messageClass = "error";
                } elseif (password_verify($user_paswd, $hashed_paswd)) {
                    // Password is correct
                    $message = "Password matches!";
                    $messageClass = "success";
                } else {
                    // Password is incorrect
                    $message = "Password does not match!";
                    $messageClass = "error";
                }

            }
            ?>
            <h2 class="heading">Hashed Password Checker</h2>
            <?php
            if (!empty($message)) {
                echo "<div class='$messageClass'>$message</div>";
            }
            ?>
            <input name="userInputPassword" type="text" placeholder="User password"><br><br>
            <input name="hashedPassword" type="text" placeholder="Hashed password"><br><br>
            <input type="submit" name="submit" value="Check"><br><br>
        </form>

        <form class="pass_hasher" action="hashed_password_checker.php" method="post">

            <?php
            if (isset($_POST["generate"])) {
                $user_paswd = $_POST["user_paswd"];
                if (empty($user_paswd)) {
                    $msg = "Please Enter password";
                    $msgcls = "bad";
                } else {
                    $hashed_paswd = password_hash($user_paswd, PASSWORD_DEFAULT);
                    $msg = "Pasword Hashed";
                    $msgcls = "good";
                }
            }
            ?>
            <h2 class="heading">Password Hasher</h2>
            <?php
            if (!empty($msg)) {
                echo "<div class='$msgcls'>$msg</div>";
            }
            ?>
            <input name="user_paswd" type="text" placeholder="User password"><br>
            <!-- Display the hashed password -->
            <input type="text" id="hashedPassword" value="<?php echo isset($hashed_paswd) ? $hashed_paswd : ''; ?>"
                placeholder="Hashed password" readonly>
            <span id="copy" onclick="copyToClipboard()">Copy</span><br>
            <input type="submit" name="generate" value="Hash"><br><br>
        </form>
    </div>

    <script>
        function copyToClipboard() {
            var copyText = document.getElementById("hashedPassword");
            copyText.select();
            document.execCommand("copy");
            alert("Hashed password copied to clip board: " + copyText.value);
        }
    </script>
</body>

</html>