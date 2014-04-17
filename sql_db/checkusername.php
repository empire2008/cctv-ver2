<?php
    include("connect.php");
    $username = $_POST['username'];

    $sql = "SELECT * FROM login WHERE username = '$username'" ;
    $sql_query = mysqli_query($link,$sql);
    $row = mysql_fetch_array($sql_query);

    if($row > 0){
        echo"Bad";
    }else{
        echo"Good";
    }
?>