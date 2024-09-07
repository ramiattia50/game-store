<?php
session_start();

// MySQLi connection
function OpenCon()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "marketplace";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = OpenCon();

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Debug output
    echo "Email entered: " . htmlspecialchars($email) . "<br>";

    // Prepare and bind the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT username, email, password FROM users WHERE LOWER(email) = LOWER(?) LIMIT 1");
    $stmt->bind_param("s", $email);

    $stmt->execute();
    $result = $stmt->get_result();

    // Debug output to check how many rows were found
    echo "Number of rows found: " . $result->num_rows . "<br>"; 

    if ($result->num_rows > 0) {
        // Fetch the user data from the database
        $user = $result->fetch_assoc();

        // Debugging: show fetched email and username
        echo "User email from DB: " . htmlspecialchars($user['email']) . "<br>";

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, create session
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['logged_in'] = true;
            // Optional: Redirect to a protected page after login
            echo "Login successful! Welcome, " . htmlspecialchars($user['username']) . ".";
            header("Location: /game-store/home pg.php"); // Redirect to login page
            // header("Location: dashboard.php"); // Redirect user to a dashboard or home page
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No user found with that email.";
    }

    // Close the statement and connection
    $stmt->close();
    CloseCon($conn);
}
