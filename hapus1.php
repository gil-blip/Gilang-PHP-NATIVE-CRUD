<?php

include 'koneksi1.php';

$id = $_GET['id'];

$query = "DELETE FROM tabelnama WHERE id = '$id'";

mysqli_query($koneksi, $query);

header("Location: home.php");

exit;

?>