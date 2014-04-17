<html>
<head>
    <title></title>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
    <? include"../sql_db/connect.php";
    $sql = "SELECT * FROM product ORDER BY id_prd";
    $query = mysqli_query($link,$sql);

    while($row = mysqli_fetch_array($query)){
        echo("<tr>");
        echo("<td>$row[name_prd]</td>");
        echo("<td>$row[detail]</td>");
        echo("<td>$row[price]</td>");
        echo("</tr>");
    }
    ?>