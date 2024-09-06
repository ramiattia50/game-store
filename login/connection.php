<?php

// MySQLi connection
function OpenCon()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "marketplace";

    $conn = new mysqli($servername, $username, $password, $dbname,) || die("Connect failed: %s\n");
    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}

function CreateUserTable($mysqli)
{
    // Check if table exists
    $checkTable = "SHOW TABLES LIKE 'users'";
    $result = $mysqli->query($checkTable);

    if ($result && $result->num_rows > 0) {
        echo "Table 'users' already exists, skipping creation.";
    } else {
        // SQL to create table
        $sql = "CREATE TABLE users (
            username VARCHAR(191) NOT NULL,
            email VARCHAR(191) NOT NULL,
            password VARCHAR(191) NOT NULL
        )";

        // Execute query
        if ($mysqli->query($sql) === TRUE) {
            echo "Table 'users' created successfully";
        } else {
            echo "Error creating table: " . $mysqli->error;
        }
    }
}

?>
