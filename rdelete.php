<?php
//including the database connection file
include("config.php");
//getting id of the data from url
$id = $_GET['id'];
//deleting the row from table
$sql = "DELETE FROM dbreformed.rusers WHERE id=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));
//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>