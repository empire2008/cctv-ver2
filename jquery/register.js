$(document).ready(function(){
    var user = 'n';
    var pass = 'n';
    $('#username').focusout(function(){
        $.ajax({
            url:"../sql_db/checkusername.php",type:"POST",
            data:{
                username:$('username').val()
            },
            success:function(data){
            if(data = 'Good'){
                $('.st_user').html('<img src="../img/icon/yes.png"');
                user = 'y';
            }else{
                $('st_user').html('<img src="../img/icon/no.png">');
                user = 'n';
            }
            }
        })
    });
    $('#password').focusout(function(){
        if($('#password').val()!=""){
            $('st_pass').html('<img src="../img/icon/yes.png">');
        }else{
            $('st_pass').html('<img src="../img/icon/no.png">');
        }
    });
    $('#re_pwd').focusout(function(){
       if($('#re_pwd').val()!=""){
           $('st_conpass').html('<img src="../img/icon/yes.png"');
       } else{
           $('st_conpass').html('<img src="../img/icon/no.png"');
       }
    });
    $('#name').focusout(function(){
        if($('#name').val()!=""){
            $('st_name').html('<img src="../img/icon/yes.png"');
        }else{
            $('st_name').html('<img src="../img/icon/no.png">');
        }
    });
    $('#address').focusout(function(){
        if($('#address').val()!=""){
            $('st_address').html('<img src="../img/icon/yes.png" ');
        }else{
            $('st_address').html('<img src="../img/icon/no.png" ');
        }
    });
    $('#zipcode').focusout(function(){
        if($('#zipcode').val()!=""){
            $('st_zipcode').html('<img src="../img/icon/yes.png"');
        }else{
            $('st_zipcode').html('<img src="../img/icon/no.png" ');
        }
    });
    $('#telnum').focusout(function(){
        if($('#telnum').val()!=""){
            $('st_tel').html('<img src="../img/icon/yes.png"');
        }else{
            $('st_tel').html('<img src="../img/icon/no.png"');
        }
    });
    $('#email').focusout(function(){
        if($('#email').val()!=""){
            $('st_email').html('<img src="../img/icon/yes.png"');
        }else{
            $('st_email').html('<img src="../img/icon/no.png"');
        }
    });
    $('.submit_btn').click(function(){
        $.ajax({
            url:"../sql_db/checkusername.php",type:"POST",
            data:{
                username:$('#username').val()
            },
            success:function(data){
                if(data=="Good"&&user=='y'&&pass=='y'&&($('#name').val()!="")&&($('#address').val()!="")&&($('#zipcode').val()!="")&&($('#telnum').val()!="")&&($('#email').val()!="")){
                    Saveregister();
                }else{
                    $('.submitcheck').html("! คุณใส่ข้อมูลผิดพลาด หรือข้อมุลไม่ครบ กรุณาตรวจสอบอย่างละเอียดด้วยค่ะ");
                }
            }
        });
    });
    function Saveregister(){
        $.ajax({
            url:"../sql_db/saveregister.php",type:"POST",
            data:{
                name:$("#name").val(),address:$("#address"),zipcode:$("#zipcode"),email:$("#email").val(),
                telnum:$("#telnum").val(),username:$("#username").val(),password:$("#password").val()
            },
            success:function(data){
                if(data=="Good"){
                    $('#popup_register').fadeOut(500,function(){
                        $('#successregister').fadeIn(500);
                    });
                }else{
                    alert(data);
                }
            }
        });
    }
});