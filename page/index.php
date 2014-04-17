<?php
session_start();
echo 'test';
?>

<meta charset="UTF-8">
<html>
<head>
    <script src="../jquery/jquery-1.4.1.min.js"></script>
    <script src="../jquery/login.js"></script>
    <link rel="stylesheet" href="../css/styles.css" media="screen">
    <link rel="stylesheet" href="../css/menubar.css" media="screen">
    <script src="../jquery/register.js"></script>
    <link rel="stylesheet" href="../css/login.css">
    <title>Smartcom2CCTV</title>
</head>
<body>
<script>
    $(function(){

        $("#register").click(function(e){

            e.preventDefault();
            $("#popup_register,#modal_regis").fadeIn();

        });
        $('#modal_regis').click(function(){
            $("#popup_register,#modal_regis").fadeOut();
        });

        $("#login").click(function(e){
            e.preventDefault();
            $("#popup_login,#modal_login").fadeIn();
        });
        $('#modal_login').click(function(){
            $("#popup_login,#modal_login").fadeOut();
        })

    });
</script>
    <header>
        <?php
        if(isset($_SESSION['username']) && $_SESSION['level']=='0'){
             require"userlogin.php";
        }else if(isset($_SESSION['username']) && $_SESSION['level']=='1'){
            require"adminlogin.php";
        }else{
        ?>
        <div style="float: right;padding-right: 10px">
            <table>
                <tr>
                    <td> ( </td>
                    <td><a id="login" style="cursor: pointer"><b>Login</b></a></td>
                    <td> | </td>
                    <td><a id="register" style="cursor: pointer"><b>Register</b></a></td>
                    <td> ) </td>
                </tr>
            </table>
        </div>
        <?php
        }
        ?>
    </header>
    <div id="logo"></div>
<!--    <div style="height: 2px;background-color: azure"></div>-->
    <div id='cssmenu'>
        <ul style="margin-top: -12px">
            <li class='active'><a href='index.php?p=home.html'><span>หน้าแรก</span></a></li>
            <li><a href='index.php?p=product.php'><span>สินค้า</span></a></li>
            <li><a href='#'><span>โปรโมชั่น</span></a></li>
            <li><a href='index.php?p=howto.html'><span>วิธีสั่งซื้อสินค้า</span></a></li>
            <li><a href='#'><span>สินค้าส่งเคลม</span></a></li>
            <li><a href='#'><span>เกี่ยวกับเรา</span></a></li>
            <li><a href='#'><span>ติดต่อเรา</span></a></li>
            <li class='last'><a href='#'><span>รถเข็น</span></a></li>
        </ul>
    </div>

    <table style="margin-left: auto;margin-right: auto;">
        <tr>
            <td id="menuleft" style="vertical-align: top">
                <div><?php include"menu_prd.php" ?></div>
            </td>
            <td id="container">
                <?php
                    if(isset($_GET['p'])){
                        @require($_GET['p']);
                    }else{
                        require ('home.html');
                    }
                ?>
            </td>
        </tr>
    </table>
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
            <td><input maxlength="15" style="width: 180px;font-size: 14px" type="text" id="username" name="username" pattern="[A-Za-z0-9] required ></td>
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
            <td><span class="st_address"></span></td>
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
    <div id="successregister">
        <label>Register Complete.</label><br>
        <button id="successregister_btn">Success</button>
    </div>
</div>
<div id="modal_regis"></div>
<!--form Register-->

<!--loginform-->
<table align="center" id="popup_login">
    <tr>
        <td>Username:</td>
        <td><input type="text" maxlength="15" id="loginusername" name="username"></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" maxlength="15" id="loginpassword" name="password"></td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="submit" id="login_submit" name="login" style="float: right;width: 90px">SIGN IN</button>
        </td>
    </tr>
</table>
<div id="modal_login"></div>
<!--loginform-->
</body>
</html>