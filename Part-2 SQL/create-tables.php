<?php
    $conn = mysqli_connect("localhost", "root", "", "mid_term_su");

    if ($conn == false) {
        die("ERROR: Connection failed. " . mysqli_connect_error());
    }

    // Student
    $sql = "CREATE TABLE student (
        snum decimal(9,0) PRIMARY KEY NOT NULL,
        sname varchar(30),
        major varchar(25),
        level varchar(2),
        age decimal(3,0)
    ); ";

    // Department 
    $sql += "CREATE TABLE department (
        fid decimal(9,0) PRIMARY KEY NOT NULL,
        fname varchar(30),
        deptid decimal(2,0)
    );";

    // Course
    $sql += "CREATE TABLE course (
        snum decimal(9,0) PRIMARY KEY NOT NULL,
        cname varchar(40)
    ); ";

    // Class
    $sql += "CREATE TABLE class (
        name varchar(40) PRIMARY KEY NOT NULL,
        meets_at varchar(20),
        room varchar(10),
        fid decimal(9,0)
    ); ";

    // Provider
    $sql += "CREATE TABLE provider (
        sid int(0) PRIMARY KEY NOT NULL,
        sname varchar(30),
        address varchar(40)
    ); ";

    // Goodies
    $sql += "CREATE TABLE goodies (
        pid int(0) PRIMARY KEY NOT NULL,
        pname varchar(40),
        color varchar(15)
    ); ";

    // Stock
    $sql += "CREATE TABLE stock (
        sid int(9) NOT NULL,
        pid int(9) NOT NULL,
        cost int(10),
        PRIMARY KEY (sid, pid)
    ); ";

    if (mysqli_query($conn, $sql)) {
        echo "Tables created.";
    }
    else {
        echo "ERROR: Table creation failed. " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>