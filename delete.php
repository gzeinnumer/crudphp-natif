<?php
//includE FILE CONFIG.PHP
include("config.php");

//dapatkan data dari URL
$id = $_GET['id'];

//delete data table
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

