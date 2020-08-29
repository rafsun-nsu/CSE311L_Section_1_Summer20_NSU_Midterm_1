<?php
    $conn = mysqli_connect("localhost", "root", "");

    if ($conn == false) {
        die("ERROR: Connection failed. " . mysqli_connect_error());
    }
    else {
        echo "Connected";
    }

    mysqli_close($conn);
?>