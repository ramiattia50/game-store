<?php
session_start();
include 'connection.php';
$con = OpenCon();
echo "Connected Successfully";

if (isset($_POST['save'])) { // Check if form is submitted    
    // Sanitize input data
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['cpass']);
    $role = mysqli_real_escape_string($con, $_POST['role']);

    if ($password === $confirm_password) { // Ensure password match
        // Check if the email already exists
        $checkemail = "SELECT email FROM users WHERE email='$email' LIMIT 1";
        $checkemail_run = mysqli_query($con, $checkemail);

        if (mysqli_num_rows($checkemail_run) > 0) {
            // Email already exists
            $_SESSION['message'] = "Email already exists";
            header("Location: register.php"); // Redirect to register page
            exit(0);
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            
            // Insert new user
            $insert_user = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$hashed_password', '$role')";
            $user_query_run = mysqli_query($con, $insert_user);

            if ($user_query_run) {
                $_SESSION['message'] = "Registered successfully!";
                header("Location: /game-store/login/login.html"); // Redirect to login page
                exit(0);
            } else {
                $_SESSION['message'] = "Something went wrong!";
                header("Location: register.php");
                exit(0);
            }
        }
    } else {
        $_SESSION['message'] = "Password and confirm password do not match";
        header("Location: register.php");
        exit(0);
    }
}
?>
