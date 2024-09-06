<?php
// Fetch products from the database
include 'connection.php';
$con = OpenCon();

$sql = "SELECT * FROM products";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Gaming Parts Store</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Improved Cart button styling */
        .cart-button {
            display: inline-block;
            background-color: #ff6600;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2em;
            border-radius: 5px;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
            position: relative;
            top: 20px;
        }

        .cart-button:hover {
            background-color: #cc5200;
        }

        .cart-icon {
            margin-right: 10px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Additional styles for other elements */
        .filter-section {
            margin-bottom: 20px;
        }

        .product-card {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .product-info {
            padding: 10px 0;
        }

        .buy-now {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .buy-now:hover {
            background-color: #218838;
        }

    </style>
</head>
<body>
    <div class="container">
        <!-- Updated Cart Button -->
        <a class="cart-button" href="./cart.php">
            <i style="font-size:24px" class="fa">&#xf07a;</i> Cart
        </a>

        <!-- Product Filters -->
        <div class="filter-section">
            <label for="category-filter">Filter by Category:</label>
            <select id="category-filter" onchange="filterProducts()">
                <option value="all">All</option>
                <option value="graphics-card">Graphics Card</option>
                <option value="motherboard">Motherboard</option>
                <option value="ram">RAM</option>
                <option value="ssd">SSD</option>
                <option value="case">PC Case</option>
                <option value="mouse">Mouse</option>
                <option value="keyboards">Keyboard</option>
                <option value="monitors">Monitor</option>
                <option value="headset">Headset</option>
                <option value="controllers">Controller</option>
                <option value="gaming chairs">Gaming Chair</option>
                <option value="power supply">Power Supply</option>
            </select>
        </div>

        <div class="filter-section">
            <label for="condition-filter">Filter by Condition:</label>
            <select id="condition-filter" onchange="filterProductsByCondition()">
                <option value="all">All</option>
                <option value="used">Used</option>
                <option value="new">New</option>
            </select>
        </div>

        <div id="product-list" class="product-list">
            <span id="no-products-message" style="display:none;color:red;">No products found in this category.</span>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <div class="product-card" data-category="<?php echo htmlspecialchars($row['category']); ?>" value="<?php echo htmlspecialchars($row['condition_produit']); ?>">
                        <img src="<?php echo htmlspecialchars('../buyer store/images/' . $row['imageURL']); ?>" alt="<?php echo htmlspecialchars($row['imageURL']); ?>">
                        <div class="product-info">
                            <h2><?php echo htmlspecialchars($row['nom']); ?></h2>
                            <p><?php echo htmlspecialchars($row['description']); ?></p>
                            <p class="price"><?php echo htmlspecialchars($row['prix']); ?> DT</p>
                            <div class="buttons">
                                <button class="buy-now" onclick="addToCart(<?php echo $row['id']; ?>)">Buy Now</button>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No products found.</p>
            <?php endif; ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Gaming MarketPlace. All rights reserved.</p>
    </footer>

    <script>
        function filterProducts() {
            var filterValue = document.getElementById('category-filter').value;
            var productCards = document.querySelectorAll('.product-card');
            var noProductsMessage = document.getElementById('no-products-message');
            var hasVisibleProduct = false;

            productCards.forEach(function(card) {
                if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                    card.style.display = 'block';
                    hasVisibleProduct = true; // At least one product is visible
                } else {
                    card.style.display = 'none';
                }
            });

            if (hasVisibleProduct) {
                noProductsMessage.style.display = 'none';
            } else {
                noProductsMessage.style.display = 'block';
            }
        }

        function filterProductsByCondition(){
            var filterValue = document.getElementById('condition-filter').value;
            var productCards = document.querySelectorAll('.product-card');
            var noProductsMessage = document.getElementById('no-products-message');
            var hasVisibleProduct = false;

            productCards.forEach(function(card) {
                if (filterValue === 'all' || card.getAttribute('value') === filterValue) {
                    card.style.display = 'block';
                    hasVisibleProduct = true;
                } else {
                    card.style.display = 'none';
                }
            });

            if (hasVisibleProduct) {
                noProductsMessage.style.display = 'none';
            } else {
                noProductsMessage.style.display = 'block';
            }
        }

        function addToCart(productId) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "add_to_cart.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert("Product added to cart successfully!");
                }
            };
            xhr.send("product_id=" + productId);
        }
    </script>
</body>
</html>
