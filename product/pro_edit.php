<!-- <?php
include 'auth.php';
include 'dbconn.php';

if (!isset($_GET['id'])) {
    header("Location: pro_view.php");
    exit;
}

$id = intval($_GET['id']);

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $price = floatval($_POST['price']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $query = "UPDATE product SET name='$name', category='$category', price='$price', description='$description' WHERE product_id='$id'";
    if (mysqli_query($conn, $query)) {
        header("Location: pro_view.php");
        exit;
    } else {
        $error = "Error updating product: " . mysqli_error($conn);
    }
}

$result = mysqli_query($conn, "SELECT * FROM product WHERE product_id='$id'");
if (mysqli_num_rows($result) == 0) {
    die("Product not found");
}
$product = mysqli_fetch_assoc($result);
?>

<h2>Edit Product</h2>

<form method="post">
    Name: <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required><br/>
    Category: <input type="text" name="category" value="<?php echo htmlspecialchars($product['category']); ?>" required><br/>
    Price: <input type="number" step="0.01" name="price" value="<?php echo $product['price']; ?>" required><br/>
    Description: <textarea name="description"><?php echo htmlspecialchars($product['description']); ?></textarea><br/>
    <input type="submit" name="submit" value="Update Product">
</form>

<?php if(isset($error)) echo $error; ?> -->
