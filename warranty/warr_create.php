

 
<?php
include 'dbconn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $warranty_perid = $_POST['warranty_period'];
    $terms = $_POST['terms'];
   

    $sql = "INSERT INTO warranty (product_id, warranty_period, terms) 
            VALUES ('$product_id', '$warranty_period', '$terms')";
    mysqli_query($conn, $sql);
    header("Location: warr_view.php");
}
?>
<h2>Add Warranty</h2>
<form method="post">  
    Product:
   <select name="product_id" required>
        <option value="">Select Product</option>
        <?php while($p mysqli_fetch_assoc($product)) { ?>
        <option value="<? =$p['product_id'] ?>" >
        <?=$p['product_id']?> <? = $p['name']?>
    </option>
    <?php}?>
    </select><br>
warranty_period: <input type = "text" name="warranty_period"required><br>
Terms: <textarea name="terms" required></textarea><br>
<input type="submit" value="Add warranty">
</form>


