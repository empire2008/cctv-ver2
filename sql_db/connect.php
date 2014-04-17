<?php
//function connect_db(){
//    $link = mysqli_connect('localhost','root','1234','smartcom2shop');
//    if($link == false){
//        die(" ! Don't Connect Database");
//    }else{
//        mysqli_query($link, 'SET NAMES UTF-8');
//        return $link;
//    }
//}
?>
<?php
    mysql_query("SET collation_connection=utf8_general_ci");
    mysql_query("SET NAMES UTF8");
    mysql_query("SET character_set_results=utf8");
    mysql_query("SET character_set_client=utf8");
    mysql_query("SET character_set_connection=utf8");
$link = mysqli_connect('localhost','root','1234','smartcom2shop');
    if($link == false){
        die(" ! Don't Connect Database");
    }else{
        //echo 'success';
        return $link;
    }
?>