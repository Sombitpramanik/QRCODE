<?php
session_start();

// Check if the session token is not present
if (!isset($_SESSION['unique_token'])) {
    if (isset($_POST["submit"])) {
        // Retrieve user input from $_POST
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Include your database connection configuration
        require 'config.php';

        // Fetch the hashed password from the database based on the provided username/email
        $query = "SELECT email, password, authentication_token FROM normal_user WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $hashed_password = $row["password"];
                $authentication_token = $row["authentication_token"];


                // Verify the hashed password
                if (password_verify($password, $hashed_password)) {
                    // Generate a unique session token based on the hash of email and password
                    // $unique_token = substr(hash('sha256', $email . $password), 0, 30);
                    $_SESSION['unique_token'] = $authentication_token;

                    // Check if the user is not already on the PostLogIN.php page before redirecting
                    if (basename($_SERVER['PHP_SELF']) != 'PostLogIN') {
                        header("Location: PostLogIN");
                        exit();
                    }
                } else {
                    echo "<script>alert('Incorrect password. Please try again.');</script>";
                }
            } else {
                echo "<script>alert('User not found. Please check your username/email.');</script>";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    // Redirect to the desired page if the session token is already set
    if (basename($_SERVER['PHP_SELF']) != 'PostLogIN') {
        header("Location: PostLogIN");
        exit();
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap">
    </noscript>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/root.css">
    <link rel="stylesheet" href="CSS/login.css">
    <!-- <link rel="stylesheet" href="CSS/home.css">     -->
    <title>SPP Technologies Login System</title>
</head>

<body id="theme-switcher" class="light-theme">
    <div class="max-section">
        <form method="POST" action="">
            <h1>Sorry :( we don't Found any Session Token in your System</h1>
            <p>Please Provide Some Information to Load the Beauties</p><br>
            <!-- <label for="email">Email:</label><br> -->
            <input type="email" id="email" autocomplete="email" placeholder="Write up your Email" name="email" required>
            <!-- <label for="password">password:</label><br> -->
            <input type="password" autocomplete="new-password" id="password" placeholder="Write the Password in me"
                name="password" required>


            <input type="submit" name="submit" value="Login" class="submit_btn">
            <p></p>Don't Have an Account :( Just <a href="regiester.php">Create One.</a> <br><br>
        </form>
    </div>


</body>
<script src="JS/theme.js"></script>

</html>