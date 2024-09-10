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
        body {
            font-family: 'Arial', sans-serif;
            background: #1f1f1f;
            color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .cart-button {
            display: inline-block;
            background-color: #ff5500;
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
            background-color: #cc4400;
        }

        .container h1 {
            color: #ff5500;
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .filter-section {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            gap: 20px;
            background: #333;
            padding: 10px;
            border-radius: 10px;
        }

        .filter-section select, .search-bar {
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
        }

        .filter-section select {
            background: #444;
            color: #fff;
            border: 1px solid #555;
        }

        .search-bar {
            width: 100%;
            max-width: 350px;
            background: #555;
            color: #fff;
            border: 1px solid #666;
        }

        .product-card {
            border: 1px solid #444;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            background-color: #2e2e2e;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: scale(1.03);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-info {
            padding: 10px 0;
        }

        .product-info h2 {
            color: #ff5500;
            font-size: 1.5em;
            margin: 0;
        }

        .product-info p {
            margin: 5px 0;
        }

        .price {
            font-size: 1.2em;
            font-weight: bold;
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

        #no-products-message {
            color: #ff5500;
            text-align: center;
            font-size: 1.2em;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #333;
            color: #f0f0f0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

    </style>
</head>
<body>
    <div class="container">
        <!-- Page Header -->
        <h1>Gaming Parts Store</h1>

        <!-- Updated Cart Button -->
        <a class="cart-button" href="./cart.php">
            <i style="font-size:24px" class="fa">&#xf07a;</i> Cart
        </a>

        <!-- Filters and Search Bar -->
        <div class="filter-section">
            <div>
                <label for="category-filter">Category:</label>
                <select id="category-filter" onchange="searchProducts()">
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
            <div>
                <label for="condition-filter">Condition:</label>
                <select id="condition-filter" onchange="searchProducts()">
                    <option value="all">All</option>
                    <option value="used">Used</option>
                    <option value="new">New</option>
                </select>
            </div>
            <input type="text" id="search-bar" class="search-bar" placeholder="Search for products..." oninput="searchProducts()">
        </div>

        <div id="product-list" class="product-list">
            <span id="no-products-message" style="display:none;">No products found matching your criteria.</span>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <div class="product-card" data-category="<?php echo htmlspecialchars($row['category']); ?>" data-condition="<?php echo htmlspecialchars($row['condition_produit']); ?>">
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
        function searchProducts() {
            var searchValue = document.getElementById('search-bar').value.toLowerCase();
            var categoryValue = document.getElementById('category-filter').value;
            var conditionValue = document.getElementById('condition-filter').value;
            var productCards = document.querySelectorAll('.product-card');
            var noProductsMessage = document.getElementById('no-products-message');
            var hasVisibleProduct = false;

            productCards.forEach(function(card) {
                var productName = card.querySelector('.product-info h2').textContent.toLowerCase();
                var productCategory = card.getAttribute('data-category');
                var productCondition = card.getAttribute('data-condition');

                var matchesSearch = productName.includes(searchValue);
                var matchesCategory = categoryValue === 'all' || productCategory === categoryValue;
                var matchesCondition = conditionValue === 'all' || productCondition === conditionValue;

                if (matchesSearch && matchesCategory && matchesCondition) {
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
