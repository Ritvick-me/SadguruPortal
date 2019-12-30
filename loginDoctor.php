<?php

    include('config.php');
    session_start();


    $email = $_POST['Email'];
    $password = $_POST['pass'];



    $sqlName = "SELECT Name FROM logindoctor WHERE Email = 'ritvick@gmail.com'";
    
    $sql = "SELECT Password FROM logindoctor WHERE Email = 'ritvick@gmail.com'";
    $query = mysqli_query($conn, $sql);
    $data =  mysqli_fetch_array($query);

    $query2 = mysqli_query($conn, $sqlName);
    $name = mysqli_fetch_array($query2);

    if ($data['Password'] === md5($password))
    {
        $sqlGetTable = "SELECT * FROM logindoctor WHERE Email = 'ritvick@gmail.com'";
        $query3 = mysqli_query($conn, $sqlGetTable);
        $_SESSION['User'] = mysqli_fetch_array($query3);
        header("location:Doctor.php");

        $_SESSION['UserName'] = $name;
    }
    else{
        $_SESSION['loginDoctor'] = "Incorrect Username or Password.";
        header("location:index.php");
    }
?>