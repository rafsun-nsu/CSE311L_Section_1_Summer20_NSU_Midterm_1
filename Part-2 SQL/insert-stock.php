<?php
    $conn = mysqli_connect("localhost", "root", "", "mid_term_su");

    if ($conn == false) {
        die("ERROR: Connection failed. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO stock VALUES
    ('1','3','0.50'),
    ('1','4','0.50'),
    ('1','8','11.70'),
    ('2','3','0.55'),
    ('2','8','7.95'),
    ('2','1','16.50'),
    ('3','8','12.50'),
    ('3','9','1.00'),
    ('4','5','2.20'),
    ('4','6','1247548.23'),
    ('4','7','1247548.23');";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted.";
    }
    else {
        echo "ERROR: Data insertion failed. " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>