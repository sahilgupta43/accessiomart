<?php
// Include database connection and header
include('C:\xampp\htdocs\accessiomart\admin\include\connectdb.php');
include('include/header.php');

// Get category ID from URL
$cid = isset($_GET['cid']) ? intval($_GET['cid']) : 0;

// SQL query to fetch products for the specific category
$sql = "SELECT * FROM products WHERE cid = $cid";
$result = $conn->query($sql);

// Array to store fetched products
$products = array();

// Fetch products and store in $products array
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
} else {
    echo "<p>No products found for this category.</p>";
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Products</title>
    <style>
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .product-card {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 16px;
            margin: 16px;
            text-align: center;
            width: 250px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .product-name {
            font-size: 18px;
            margin: 16px 0;
        }
        .product-price {
            font-size: 16px;
            color: #333;
        }
        .back-link {
            display: inline-block;
            margin: 20px;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>

<h1>Products in Category</h1>
<div class="product-container">
    <?php foreach ($products as $product): ?>
    <div class="product-card">
        <img src="admin/uploads/<?php echo htmlspecialchars($product['pimage']); ?>" alt="<?php echo htmlspecialchars($product['pname']); ?>" class="product-image">
        <div class="product-name"><?php echo htmlspecialchars($product['pname']); ?></div>
        <div class="product-price">$<?php echo htmlspecialchars($product['price']); ?></div>
    </div>
    <?php endforeach; ?>
</div>

<a href="index.php" class="back-link">Back to Categories</a>

<?php include('include/footer.php') ?>

</body>
</html>