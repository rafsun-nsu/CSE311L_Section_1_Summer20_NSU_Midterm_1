<?php
    $conn = mysqli_connect("localhost", "root", "", "mid_term_su");

    if ($conn == false) {
        die("ERROR: Connection failed. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO course VALUES
    ('348121549','Database Systems'),
    ('115987938','Operating System Design'),
    ('567354612','Data Structures'),
    ('552455318','Communication Networks'),
    ('455798411','Optical Electronics'),
    ('301221833','Perception'),
    ('301221883','Social Cognition'),
    ('301221823','American Political Parties'),
    ('556784565','Air Quality Engineering'),
    ('099354543','Patent Law'),
    ('574489456','Urban Economics');";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted.";
    }
    else {
        echo "ERROR: Data insertion failed. " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>