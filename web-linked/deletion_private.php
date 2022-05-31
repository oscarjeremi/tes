<?php
include('config.php');
$id = $_GET['id'];
$query = "DELETE FROM private_link WHERE id='$id'";
$delete = mysqli_query($koneksi, $query);
header('location:delete_private.php');
