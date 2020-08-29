<?php
    $conn = mysqli_connect("localhost", "root", "");

    if ($conn == false) {
        die("ERROR: Connection failed. " . mysqli_connect_error());
    }

    $sql = "CREATE DATABASE MID_TERM_SU";

    if (mysqli_query($conn, $sql)) {
        echo "Database created.";
    }
    else {
        echo "ERROR: Database creation failed. " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>