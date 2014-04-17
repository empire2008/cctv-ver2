<?php
$username = $_POST['username'];
$password = $_POST['password'];

include("connect.php");

$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($link,$sql);

$row = mysqli_fetch_array($result);

if($row>0){
    session_start();
    $_SESSION['name'] = $row['name_user'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['level'] = $row['level'];
    $_SESSION['address'] = $row['location'];
    $_SESSION['zipcode'] = $row['zipcode'];
    $_SESSION['tel_num'] = $row['tel_user'];
    $_SESSION['email'] = $row['email'];
    echo "Your Login Successful";
}else{
    echo "Unsuccessful";
}