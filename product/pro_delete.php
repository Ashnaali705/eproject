 <?php

include 'dbconn.php';

if (!isset($_GET['id'])) {
    header("Location: pro_view.php");
    exit;
}

$id = intval($_GET['id']);

$query = "DELETE FROM product WHERE product_id='$id'";
if (mysqli_query($conn, $query)) {
    header("Location: pro_view.php");
    exit;
} else {
    echo "Error deleting product: " . mysqli_error($conn);
}
?> 
