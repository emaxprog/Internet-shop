/**
 * Created by alexandr on 04.08.16.
 */

$(document).ready(function () {
    $("#submitbtn").click(function () {
        $(".fail").html("");
        var name=$("#name").val();
        var phone=$("#phone").val();
        var email=$("#email").val();
        var message=$("#message").val();
        var fail="";
        if(name.length<3){
            fail="Имя не может быть менее 3 символов";
            $(".fail-name").html("<span class='fail'>"+fail+"</span>");
        }
        if(phone.length!=11){
            fail="Вы ввели некорректный телефон";
            $(".fail-phone").html("<span class='fail'>"+fail+"</span>");
        }
        if(email.split("@").length==1 || email.split(".").length==1){
            fail="Вы ввели некорректный email";
            $(".fail-email").html("<span class='fail'>"+fail+"</span>");
        }
        if(message.length==0){
            fail="Сообщение не должно быть пустым";
            $(".fail-message").html("<span class='fail'>"+fail+"</span>");
        }
        if(fail==""){
            $("#popupCheckBox").trigger("click");
            $.ajax({
                url:$("#feedback-form").attr("action"),
                type:"POST",
                cache:false,
                data:$("#feedback-form").serialize(),
                dataType:"html"
            });
        }
    });
});