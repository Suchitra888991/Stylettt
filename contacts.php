<?php
    session_start();
    require 'config.php';
    header("location: index.php");
    
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'contact');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mess = $_POST['message'];

    
    try{
        $reg = " insert into contact_us(name, email, message) values ('$name','$email','$mess')";
        mysqli_query($con, $reg);
        echo '<script>alert("Thank you for contacting")</script>';
    }
    catch(Exception $e){
        echo " e ";
    }
    // $s = " select * from signup where name = '$name'";

    // $result = mysqli_query($con, $s);

    // $num = $result->num_rows;

    // if($num == 1){
    //     echo" Name already taken ";
    // }
    // else{
        
    // }
?>