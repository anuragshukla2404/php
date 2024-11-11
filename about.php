<?php
    $con = mysqli_connect('localhost', 'root'); 

    if ($con) {
        echo "Connection Successful";
    } else {
        echo "Connection Failure: " . mysqli_connect_error();
        exit();  
    }

    mysqli_select_db($con, 'blogging');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $query = "INSERT INTO users (name, email, number) VALUES ('$name', '$email', '$number')";

    mysqli_query($con, $query);
    header('location:index.php#contact');
?>
