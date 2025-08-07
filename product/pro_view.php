<?php
include 'dbconn.php';

$result = mysqli_query($conn, "SELECT * FROM product");
echo "<a href='add.php'>Add New Product</a><br><br>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
<th>Actions</th>
</tr>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['product_id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['price']}</td>
            <td>
                <a href='pro_edit.php?id={$row['product_id']}'>Edit</a> |
                <a href='pro_delete.php?id={$row['product_id']}'>Delete</a>
            </td>
         </tr>";
}
echo "</table>";
