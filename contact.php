<?php

    session_start();

    include ('config.php');

    $first = $_POST['first'];
    $last = $_POST['last'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $info = $_POST['info'];

    $sql = "INSERT INTO pfname VALUES('', '$first', '$last', '$phone', '$subject', '$info')";
    
    if(mysqli_query($conn, $sql)){
        $_SESSION['Output'] = "The mail has been sent. Thank You...";
        $to = "ritvick.v.pandey50@gmail.com";
        $subject = "Testing mail service";
        $txt = "Welcome to the mailing service:";
        $headers = "From: pandey.ritvick.v@gmail.com" . "\r\n" . "CC: pandey.ritvick.v@gmail.com";

        mail($to, $subject, $txt, $headers);
    }
    else {
        $_SESSION['Output'] = "The mail could not be sent. Please try again...";
    }


    header("location:index.php#rvp-sender");


    //designation, name, specialization, degree, gender, DOB, patient preference(M/F).
?>