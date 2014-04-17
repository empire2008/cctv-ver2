$(document).ready(function(){
    $('#login_submit').click(function(){
        Login();
    });

    function Login(){
        $.ajax({
            url:"../sql_db/login.php",type:"POST",
            data:{
                username:$('#loginusername').val(),
                password:$('#loginpassword').val()
            },
            success:function(data){
                if(data=="Your Login Successful"){
//                    alert("OK");
                    location="index.php";
                }else{
                    alert("รหัสผ่านผิด...กรุณากรอกรหัสผู้ใช้ให้ถูกต้อง!!");
                    $("#popup_login,#modal_login").fadeOut();
                }
            }
        });
    }
});