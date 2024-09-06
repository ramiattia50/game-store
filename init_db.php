<?php
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

// Create 'users' table
$users = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(191) NOT NULL,
    password VARCHAR(191) NOT NULL,
    role VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Create 'products' table
$products = "CREATE TABLE IF NOT EXISTS products (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    imageURL VARCHAR(255) NOT NULL,
    condition_produit VARCHAR(255),
    quantite INT(10),
    sellerUsername VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    category VARCHAR(255) NOT NULL
)";

// Create 'commande' table
$commande = "CREATE TABLE IF NOT EXISTS commande (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    buyerUsername VARCHAR(255) NOT NULL,
    product_id INT(6) NOT NULL,
    quantite INT(6), 
    date_commande TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
)";

// Create 'ligne_de_commande' table
$ligne_de_commande = "CREATE TABLE IF NOT EXISTS ligne_de_commande (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    quantite INT(6) NOT NULL,
    prix FLOAT NOT NULL
)";

// Execute table creation queries
if ($conn->query($users) === TRUE) {
    echo "Table 'users' created successfully<br>";
} else {
    echo "Error creating 'users' table: " . $conn->error . "<br>";
}

if ($conn->query($products) === TRUE) {
    echo "Table 'products' created successfully<br>";
} else {
    echo "Error creating 'products' table: " . $conn->error . "<br>";
}

if ($conn->query($commande) === TRUE) {
    echo "Table 'commande' created successfully<br>";
} else {
    echo "Error creating 'commande' table: " . $conn->error . "<br>";
}

if ($conn->query($ligne_de_commande) === TRUE) {
    echo "Table 'ligne_de_commande' created successfully<br>";
} else {
    echo "Error creating 'ligne_de_commande' table: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>
