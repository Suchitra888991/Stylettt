<?php
    session_start();
    header('location:login.php');

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'login');

    $name = $_POST['user'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    $s = " select * from signup where name = '$name'";

    $result = mysqli_query($con, $s);

    $num = $result->num_rows;

    if($num == 1){
        echo" Name already taken ";
    }
    else{
        $reg = " insert into signup(name, password, email) values ('$name','$pass','$email')";
        mysqli_query($con, $reg);
        echo" Sign up successful ";
    }
?>