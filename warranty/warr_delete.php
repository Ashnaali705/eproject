 <?php

include 'dbconn.php';

if (!isset($_GET['id'])) 

$query = ($conn,"DELETE FROM warranty WHERE id='$id'");
    header("Location: pro_view.php");
    
?>