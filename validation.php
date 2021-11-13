<?php
    session_start();
    header('location:login.php');

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'login');

    $name = $_POST['user'];
    $pass = $_POST['password'];
   

    $s = " select * from signup where name = '$name' && password = '$pass'";

    $result = mysqli_query($con, $s);

    $num = $result->num_rows;

    if($num == 1){
      $_SESSION['loggedin'] = true;
      header('location:index.php');
    }
    else{
      header('loaction:login.php');  
    }
?>