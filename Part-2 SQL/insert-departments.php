<?php
    $conn = mysqli_connect("localhost", "root", "", "mid_term_su");

    if ($conn == false) {
        die("ERROR: Connection failed. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO department VALUES
    ('142519864','Ivana Teach','20'),
    ('242518965','James Smith','68'),
    ('141582651','Mary Johnson','20'),
    ('011564812','John Williams','68'),
    ('254099823','Patricia Jones','68'),
    ('356187925','Robert Brown','12'),
    ('489456522','Linda Davis','20'),
    ('287321212','Michael Miller','12'),
    ('248965255','Barbara Wilson','12'),
    ('159542516','William Moore','33'),
    ('090873519','Elizabeth Taylor','11'),
    ('486512566','David Anderson','20'),
    ('619023588','Jennifer Thomas','11'),
    ('489221823','Richard Jackson','33'),
    ('548977562','Ulysses Teach','20');";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted.";
    }
    else {
        echo "ERROR: Data insertion failed. " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>