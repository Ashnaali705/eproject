<?php
include 'dbconn.php';
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $product_id = $_POST['product_id'];
    $warranty_perid = $_POST['warranty_period'];
    $terms = $_POST['terms'];

    $sql = "UPDATE warranty SET product_id='$product_id',warranty_period='$warranty_perid',terms='$terms'
            WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location:warr_view.php");
}

$result = mysqli_query($conn, "SELECT * FROM warranty WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

// Get all product
$product = mysqli_query($conn, "SELECT product_id, name FROM product");
?>
<h2>Edit warranty</h2>
<form method="post">
    product:
    <select name="product_id" required>
        <option value="">Select Product</option>
        <?php while($p = mysqli_fetch_assoc($product)) { ?>
        <option value="<?= $p['product_id'] ?>" <?= $p['product_id'] == $row['product_id'] ? 'selected' : '' ?>>
            <?= $p['product_id'] ?> <?= $p['name'] ?>
        </option>
        <?php } ?>
    </select><br>

    warranty_period: <input type="text" name="warranty_period" value="<?= $
    row['warranty_period'] ?>" required><br>
    Terms: <textarea name="terms" required><?= $row['terms'] ?></textarea><br>
    <input type="submit" value="Update warranty">
</form>
