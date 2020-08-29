<?php
    $conn = mysqli_connect("localhost", "root", "", "mid_term_su");

    if ($conn == false) {
        die("ERROR: Connection failed. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO provider VALUES
    ('1','Acme Widget Suppliers','1 Grub St., Potemkin Village, IL 61801'),
    ('2','Big Red Tool and Die','4 My Way, Bermuda Shorts, OR 90305'),
    ('3','Perfunctory Parts','99999 Short Pier, Terra Del Fuego, TX 41299'),
    ('4','Alien Aircaft Inc.','2 Groom Lake, Rachel, NV 51902');";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted.";
    }
    else {
        echo "ERROR: Data insertion failed. " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>