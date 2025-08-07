<?php
include 'dbconn.php';

$result = mysqli_query($conn, "SELECT w.id, w.product_id,p.name, w.warranty_period,w.terms 
 FROM warranty w
left  JOIN product p  ON w.product_id = p.product_id");
echo "<h2>Warranty List</h2>"

echo "<a href='warr_create.php'>Add Warranty</a><br><br>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Product ID </th>
<th>Product Name</th>
<th>Warranty Period</th>
<th>Terms</th>
</tr>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>

            <td>{$row['id']}</td>
            <td>{$row['product_id']}</td>
            <td>{$row['name']}</td>
             <td>{$row['warranty_period']}</td>
             <td>{$row['terms']}</td>
            <td>
                <a href='warr_edit.php?id={$row['id']}'>Edit</a> |
                <a href='warr_delete.php?id={$row['id']}'>Delete</a>
            </td>
         </tr>";
}
echo "</table>";
