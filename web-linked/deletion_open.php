<?php
include('config.php');
$id = $_GET['id'];
$query = "DELETE FROM open_link WHERE id='$id'";
$delete = mysqli_query($koneksi, $query);
header('location:delete_open.php');
