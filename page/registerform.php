<link rel="stylesheet" href="../css/styles.css" media="screen">

<script>
    $(function(){

        $("#register").click(function(e){

            e.preventDefault();
            $("#popup_register,#modal_regis").fadeIn();

        });
        $('#modal_regis').click(function(){
            $("#popup_register,#modal_regis").fadeOut();
        });
    });
</script>
<!--form Register-->
<div id="popup_register">
    <!--<table style="width: 500px;background-color: #FFE4C4;border: 1px solid #000000;border-radius: 5px">-->
    <table>
        <tr>
            <td style="text-align: center;height: 20px;background-color: #FFA217;border: 1px solid #FF0000" colspan="3">
                <b>REGISTER</b>
            </td>
        </tr>
        <tr>
            <td style="width: 145px;font-size: 16px"><label>USERNAME:</label></td>
            <td><input maxlength="15" style="width: 180px;font-size: 14px" type="text" id="username" name="username" required ></td>
            <td><span class="st_user"></span></td>
        </tr>
        <tr>
            <td><label style="font-size: 16px">PASSWORD:</label></td>
            <td><input maxlength="15" style="width: 180px;font-size: 14px" type="password" id="password" name="password" required></td>
            <td><span class="st_pass"></span></td>
        </tr>
        <tr>
            <td><label>Comfirm Password:</label></td>
            <td><input maxlength="15" style="width: 180px" type="password" id="re_pwd" name="re_pwd" required></td>
            <td><span class="st_conpass"></span></td>
        </tr>
        <tr>
            <td><label>ชื่อ-สกุล:</label></td>
            <td><input style="width: 180px" type="text" id="name" name="name" required></td>
            <td><span class="st_name"></span></td>
        </tr>
        <tr>
            <td><label>ที่อยู่จัดส่งสินค้า:</label></td>
            <td><textarea style="width: 180px;height: 100px;resize: none" id="address" name="address" required></textarea></td>
            <td><td><span class="st_address"></span></td></td>
        </tr>
        <tr>
            <td><label>รหัสไปรษณีย์:</label></td>
            <td><input style="width: 180px" type="text" id="zipcode" name="zipcode" required></td>
            <td><span class="st_zipcode"></span></td>
        </tr>
        <tr>
            <td><label>เบอร์โทรศัพท์:</label></td>
            <td><input style="width: 180px" type="telnum" id="telnum" name="telnum" required></td>
            <td><span class="st_tel"></span></td>
        </tr>
        <tr>
            <td><label>E-mail:</label></td>
            <td><input style="width: 180px" type="email" id="email" name="email" required></td>
            <td><span class="st_email"></span></td>
        </tr>
        <tr>
            <td style="color: red;text-align: center;height: 50px;float: right;" colspan="3">
                กรุณากรอกข้อมูลให้ครบทุกช่อง เพื่อความสะดวกในการจัดส่งสินค้าของท่าน
            </td>
        </tr>
        <tr>
            <td colspan="2"><input class="submit_btn" type="submit" value="SUBMIT" name="submit"></td>
            <!--            <td><a href="../page/index.php"><button style="cursor: pointer;width: 100px;float: inherit">CANCEL</button></a></td>-->
        </tr>
    </table>
</div>
<div id="modal_regis"></div>

<!--form Register-->