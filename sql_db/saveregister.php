<?php
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $name = $_POST['re_pwd'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];
    $telnum = $_POST['telnum'];
    $email = $_POST['email'];

    include("connect.php");
    $sql = "INSERT into login (username = '$user', password = '$pass', level = '0', name_user = '$name', location = '$address', tel_user = '$telnum', zipcode = '$zipcode', email = '$email',active = 'y')";
    $sql_query = mysqli_query($link,$sql);

    if($sql_query){
        echo"Good";
    }else{
        echo"Unsuccessful";
    }