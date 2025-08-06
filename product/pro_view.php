<?php
include 'auth.php';
include 'dbconn.php';

$result = mysqli_query($conn, "SELECT * FROM product ORDER BY product_id ASC");
?>

<h2>Product List</h2>
<a href="pro_create.php">Add New Product</a><br/><br/>

<table border="1" cellpadding="10">
<tr>
    <th>Product ID</th>
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Description</th>
    <th>Actions</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['product_id']; ?></td>
    <td><?php echo htmlspecialchars($row['name']); ?></td>
    <td><?php echo htmlspecialchars($row['category']); ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo htmlspecialchars($row['description']); ?></td>
    <td>
        <a href="pro_edit.php?id=<?php echo $row['product_id']; ?>">Edit</a> | 
        <a href="pro_delete.php?id=<?php echo $row['product_id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
    </td>
</tr>
<?php } ?>

</table>
