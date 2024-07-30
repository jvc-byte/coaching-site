# Coaching Site

## Description
A comprehensive coaching platform offering a unified login for both admins and users, peer-to-peer (P2P) interactions, virtual sessions, and classic (in-person) sessions to cater to various coaching needs.

## Table of Contents
- [Description](#description)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact Information](#contact-information)

## Features
- **Unified Login:** Secure login form for both admins and regular users.
- **Peer-to-Peer (P2P) Interactions:** Facilitate direct interactions between coaches and students.
- **Virtual Sessions:** Conduct coaching sessions online.
- **Classic Sessions:** Arrange traditional in-person coaching sessions.
- **Free Password Hashing and Password Hash Verifier:** Added at the left side of the footer.

## Installation
1. **Download and Install XAMPP:**
    - Download XAMPP from [Apache Friends](https://www.apachefriends.org/index.html) and install it.

2. **Clone the Repository:**
    ```bash
    git clone https://github.com/jvc-byte/coaching-site.git
    ```

3. **Move the Project to XAMPP's `htdocs` Directory:**
    - Move the cloned repository to the `htdocs` directory inside your XAMPP installation folder (e.g., `C:\xampp\htdocs\`).

4. **Set Up the Database:**
    - Start XAMPP and ensure Apache and MySQL services are running.
    - Open [phpMyAdmin](http://localhost/phpmyadmin) and create a new database with the name `coaching_site`.
    - Import the SQL file provided in the project `coaching-site.sql` to set up the database schema and initial data.

5. **Configure Environment Variables:**
    - Make sure the  `database_connection.php` file inside the `include` directory matches the below configuration settings:
    ```php
    <?php
        $hostName = "localhost";
        $dbUser = "root";
        $dbPassword = "";
        $dbName = "coaching_site";

        $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

        if (!$conn) {
            error_log("Failed to connect to MySQL: " . mysqli_connect_error());
            die("Sorry, there was a problem connecting to the database.");
        }
    ?>
    ```

6. **Start the Application:**
    - Open your browser and navigate to [http://localhost/coaching-site/index.php](http://localhost/coaching-site/index.php).

## Usage
1. **Signup:**
    - Fill the form with your credientials to create your account.
    - you either signup as `p2p`, `virtual` or `classic` to access either of the features.

2. **Login:**
    - Enter your credentials to log in. Admins and users use the same login form.
    - Use `email@example.com` and `password` to login as admin.
    - Navigate to the `p2p` section to find and connect with other users.
    - Schedule and join `virtual` coaching sessions through the platform.
    - Arrange `classic` (in-person) coaching sessions via the platform.

## Contributing
We welcome contributions to improve the platform. To contribute:

1. Fork the repository.
2. Create a new branch:
    ```bash
    git checkout -b feature-name
    ```
3. Make your changes and commit them:
    ```bash
    git commit -m 'Add some feature'
    ```
4. Push to the branch:
    ```bash
    git push origin feature-name
    ```
5. Open a pull request.

## Contact Information
For any inquiries or support, please contact:
- **Email:** [jvc-byte](mailto:jvc8463@gmail.com)
- **LinkedIn:** [jvc-byte](https://www.linkedin.com/in/jvc-byte)
- **GitHub:** [jvc-byte](https://github.com/jvc-byte)
