<div id="success_login" style="float: right;padding-right: 10px;width: auto;">
    <table style="border-collapse: collapse;">
        <tr>
            <td style="font-size: 14px;font-family: 'Lucida Grande', Tahoma, Arial, Helvetica, sans-serif;"><b>สวัสดี (Admin) : </b></td>
            <td id="headeruser"><?=$_SESSION['username'] ?></td>
            <td id="headermenu"><b>จัดการสินค้า</b></td>
            <td id="headermenu"><b>จัดการสมาชิก</b></td>
            <td id="headermenu"><b>ตรวจเช็คประวัติ</b></td>
            <td id="headermenu"><b>สินค้าส่งเคลม</b></td>
            <td id="headermenu"><a href="configuser.php"><b>แก้ไขข้อมูล</b></a></td>
            <td><button id="logout_btn" onclick="location='../sql_db/logout.php'">Logout</button></td>
        </tr>
    </table>
</div>