<div id="success_login" style="float: right;padding-right: 10px;width: auto;">
    <table style="border-collapse: collapse;">
        <tr>
            <td style="font-size: 14px;font-family: 'Lucida Grande', Tahoma, Arial, Helvetica, sans-serif;"><b>ยินดีต้อนรับ (USER) : </b></td>
            <td id="headeruser"><?=$_SESSION['username'] ?></td>
            <td id="headermenu"><b>ตะกร้าสินค้า</b></td>
            <td id="headermenu"><b>ประวัติการสั่งซื้อ</b></td>
            <td id="headermenu"><b>แก้ไขข้อมูล</b></td>
            <td><button id="logout_btn" onclick="location='../sql_db/logout.php'">Logout</button></td>
        </tr>
    </table>
</div>