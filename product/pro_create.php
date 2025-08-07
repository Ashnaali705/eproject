<

 
<?php
include 'dbconn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = rand(1000000, 9999999); // 7-digit ID
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $category = $_POST['category'];

    $sql = "INSERT INTO product (product_id, name, price, description, category) 
            VALUES ('$product_id', '$name', '$price', '$desc', '$category')";
    mysqli_query($conn, $sql);
    header("Location: pro_view.php");
}
?>

<form method="post">
    Name: <input type="text" name="name"><br>
    Price: <input type="text" name="price"><br>
    Description: <textarea name="description"></textarea><br>
    Category: 
    <select name="category">
        <option>Greeting Cards</option>
        <option>Gift Articles</option>
        <option>Dolls</option>
        <option>Stationery</option>
        <option>Hand Bags</option>
        <option>Wallets</option>
        <option>Beauty Products</option>
        <option>Art Supplies</option>
    </select><br>
    <input type="submit" value="Add Product">
</form>


