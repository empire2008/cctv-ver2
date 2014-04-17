<? include"../sql_db/connect.php";
$sql = "SELECT * FROM login ORDER BY username";
$query = mysqli_query($link,$sql);
mysql_query("SET NAMES 'utf8'");

while($row = mysqli_fetch_array($query)){
    ?>
    <table>
        <?
    echo("<tr>");
    echo("<td>$row[username]</td>");
    echo("<td>$row[password]</td>");
    echo("<td>$row[level]</td>");
    echo("<td>$row[name_user]</td>");
    echo("<td>$row[location]</td>");
    echo("<td>$row[tel_user]</td>");
    echo("<td>$row[zipcode]</td>");
    echo("<td>$row[email]</td>");
    echo("</tr>");
    ?>
        </table>
<?
}
?>