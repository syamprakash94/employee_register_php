<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "employee_db";

    $connection = mysqli_connect($host, $user, $pass, $database);

    if($connection){
        echo "Successfully Connected";
    }else{
        die("Could Not connect");
    }

    // data collection from html page
    $email =  $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $doj = $_POST['doj'];
    $salary = $_POST['salary'];


    $sql = "INSERT INTO employee_register (email, firstname, lastname, address, doj, salary) VALUES ('$email', '$firstname', '$lastname', '$address', '$doj', '$salary')";

     if(mysqli_query($connection, $sql)){
        echo "records inserted";
     }else{
        echo "records not inserted";
     }



    mysqli_close($connection);