<?php
include 'dbconn.php';
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $category = $_POST['category'];

    $sql = "UPDATE products SET name='$name', price='$price', description='$desc', category='$category' 
            WHERE product_id='$id'";
    mysqli_query($conn, $sql);
    header("Location:pro_view.php");
}

$result = mysqli_query($conn, "SELECT * FROM products WHERE product_id='$id'");
$row = mysqli_fetch_assoc($result);
?>

<form method="post">
    Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br>
    Price: <input type="text" name="price" value="<?= $row['price'] ?>"><br>
    Description: <textarea name="description"><?= $row['description'] ?></textarea><br>
    Category: <input type="text" name="category" value="<?= $row['category'] ?>"><br>
    <input type="submit" value="Update Product">
</form>
