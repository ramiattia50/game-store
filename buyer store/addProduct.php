<?php
session_start();
include 'connection.php';
$con = OpenCon();
echo "Connected Successfully";

if (isset($_POST['saveProduct'])) { // Check if form is submitted

    // Sanitize input data
    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $prix = mysqli_real_escape_string($con, $_POST['prix']);
    $condition_produit = mysqli_real_escape_string($con, $_POST['condition_produit']);
    $quantite = mysqli_real_escape_string($con, $_POST['quantite']);
    $sellerUsername = mysqli_real_escape_string($con, $_POST['sellerUsername']);
    $created_at = mysqli_real_escape_string($con, $_POST['created_at']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    
    // Handling image upload
    if (isset($_FILES['imageURL']['name']) && $_FILES['imageURL']['name'] != "") {
        $image_name = $_FILES['imageURL']['name'];
        $image_tmp_name = $_FILES['imageURL']['tmp_name'];
        $image_size = $_FILES['imageURL']['size'];
        $image_error = $_FILES['imageURL']['error'];

        // Check if there are any upload errors
        if ($image_error === 0) {
            if ($image_size < 5000000) { // Limit image size to 5MB
                $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
                $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
                
                // Check if the uploaded file is a valid image format
                if (in_array($image_ext, $allowed_ext)) {
                    $new_image_name = uniqid("IMG-", true) . "." . $image_ext;
                    $image_upload_path = 'images/' . $new_image_name; 
                    move_uploaded_file($image_tmp_name, $image_upload_path);
                } else {
                    $_SESSION['message'] = "Invalid image format!";
                    header("Location: addProduct.php");
                    exit(0);
                }
            } else {
                $_SESSION['message'] = "Image is too large!";
                header("Location: addProduct.php");
                exit(0);
            }
        } else {
            $_SESSION['message'] = "Image upload failed!";
            header("Location: addProduct.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Image is required!";
        header("Location: addProduct.php");
        exit(0);
    }
    
    // Insert product into database
    $insert_product = "INSERT INTO products (nom, description, prix, imageURL, condition_produit, quantite, sellerUsername, created_at, category) 
                       VALUES ('$nom', '$description', '$prix', '$new_image_name', '$condition_produit', '$quantite', '$sellerUsername', '$created_at', '$category')";
    
    $product_query_run = mysqli_query($con, $insert_product);

    if ($product_query_run) {
        $_SESSION['message'] = "Product added successfully!";
        header("Location: /final/buyer store/test store.html"); // Redirect to product listing page
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong!";
        header("Location: addProduct.php");
        exit(0);
    }
}
?>
