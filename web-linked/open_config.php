<?php
    include('config.php');
    if (isset($_POST['submit'])) {
        $nama_button = $_POST['nama_button'];
        $link = $_POST['link'];

        
        $query = "INSERT INTO open_link (nama_button, link) VALUES ('$nama_button', '$link')";

        $insert = mysqli_query($koneksi, $query);
        header('location:landing1.php');
        
    }
