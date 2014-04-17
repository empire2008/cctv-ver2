<? session_start(); ?>

<link rel="stylesheet" href="../css/configuser.css">
<meta charset="UTF-8">
<html>
<head>
    <title></title>
</head>
<?php
    include"../sql_db/connect.php";
    $sql = "SELECT * FROM login WHERE username = '$_SESSION[username]', name_user = '$_SESSION[name]'";
    $query = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($query);
?>

<body>
    <div id="mainbox">
        <div id="headconfig">Edit Profile</div>
        <div id="configbox">
            <div id="subheader">Member Information</div>
            <table>
                <tr>
                    <td>Username : </td>
                    <td><? echo"$row[username]"; ?></td>
<!--                    --><?// echo("<td>$row[username]</td>"); ?>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>