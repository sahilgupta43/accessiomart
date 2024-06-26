<?php
include('C:\xampp\htdocs\accessiomart\admin\include\connectdb.php');
include('include/header.php');

// Function to display wishlist items
function displayWishlist() {
    echo "<h2 style='text-align: center;'>Your Wishlist</h2>";

    if (isset($_SESSION['wishlist']) && !empty($_SESSION['wishlist'])) {
        echo "<table style='width: 100%; border-collapse: collapse; margin: 0 auto;'>";
        echo "<tr><th>Product ID</th><th>Name</th><th>Price</th><th>Action</th></tr>";

        foreach ($_SESSION['wishlist'] as $productId => $value) {
            foreach ($GLOBALS['products'] as $product) {
                if ($product['id'] == $productId) {
                    echo "<tr>";
                    echo "<td>{$product['pid']}</td>";
                    echo "<td><a href='singleproduct.php?id={$product['pid']}' style='text-decoration: none; color: #333;'>{$product['pname']}</a></td>";
                    echo "<td>{$product['price']}</td>";
                    echo "<td><form action='wishlist.php' method='GET'>";
                    echo "<input type='hidden' name='remove_from_wishlist' value='{$product['pid']}'>";
                    echo "<button type='submit' class='button'>Remove</button>";
                    echo "</form></td>";
                    echo "</tr>";
                    break;
                }
            }
        }

        echo "</table>";
    } else {
        echo "<p style='text-align: center;'>Your wishlist is empty.</p>";
        echo "<div style='text-align: center;'>";
        echo "<button onclick='window.location=\"index.php\"' class='button'>Continue Shopping</button>";
        echo "</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .button {
            padding: 5px 10px;
            background-color: #f44336;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php displayWishlist(); ?>
<?php include('include/footer.php') ?>
</body>
</html>
