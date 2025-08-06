<!-- <?php
include 'auth.php';
include 'dbconn.php';

if (isset($_POST['submit'])) {
    // Generate 7-digit unique product ID
    do {
        $product_id = rand(1000000, 9999999);
        $check = mysqli_query($conn, "SELECT * FROM product WHERE product_id='$product_id'");
    } while (mysqli_num_rows($check) > 0);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $price = floatval($_POST['price']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $query = "INSERT INTO product (product_id, name, category, price, description)
              VALUES ('$product_id', '$name', '$category', '$price', '$description')";

    if (mysqli_query($conn, $query)) {
        header("Location: pro_view.php");
        exit;
    } else {
        $error = "Error inserting product: " . mysqli_error($conn);
    }
}
?>

<h2>Add New Product</h2>

<form method="post">
    Name: <input type="text" name="name" required><br/>
    Category: <input type="text" name="category" required><br/>
    Price: <input type="number" step="0.01" name="price" required><br/>
    image:<input type ="file" name="image" required><br/>
    Description: <textarea name="description"></textarea><br/>

    <input type="submit" name="submit" value="Add Product">
</form>

<?php if(isset($error)) echo $error; ?>

 -->
