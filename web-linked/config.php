<?php
    $dbhost = "localhost:3307";
    $dbuser = "root";
    $dbname = "link_operasional";
    $dbpass = "";

    $koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (!$koneksi) {
        echo "<script>
            alert('Failed connect to database')'
            </script>";
    }
