<?php
    $conn = mysqli_connect("localhost", "root", "", "mid_term_su");

    if ($conn == false) {
        die("ERROR: Connection failed. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO goodies VALUES
    ('1','Left Handed Bacon Stretcher Cover','Red'),
    ('2','Smoke Shifter End','Black'),
    ('3','Acme Widget Washer','Red'),
    ('4','Acme Widget Washer','Silver'),
    ('5','I Brake for Crop Circles Sticker','Translucent'),
    ('6','Anti-Gravity Turbine Generator','Cyan'),
    ('7','Anti-Gravity Turbine Generator','Magenta'),
    ('8','Fire Hydrant Cap','Red'),
    ('9','7 Segment Display','Green');";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted.";
    }
    else {
        echo "ERROR: Data insertion failed. " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>