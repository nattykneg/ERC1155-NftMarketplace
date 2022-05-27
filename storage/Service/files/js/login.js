$('#content').load('login_content',function(reponse, statut){
if(statut == "success"){
    $("#login").submit(function(a) {
        a.preventDefault();
        var b = 0;
        $("#emay-add").val() || ($("#emay-add").parent().next(".errror").addClass("show").addClass("okok"), 
        $("#emay-add").addClass("error-icon"), b = 1),
        $("#password").val() || ($(".pass").addClass("show"), 
        $("#password").addClass("error-icon"), $(".maildivv").css("z-index: 100;"), 
        b = 1), 1 != b && ($(".rotation").addClass("loading"), $(".check").show(), 
        setTimeout(function() {
        }, 1500));
    }), $("#emay-add").focus(function(a) {
        $("#emay-add").parent().next(".show").addClass("okok");
    }), 
        $("#emay-add").focusout(function(a) {
        $("#emay-add").parent().next(".errror").removeClass("show").removeClass("okok");
    }), 
        $("#password").focus(function(a) {
        $(".show").addClass("okok");
    }), 
        $("#password").focusout(function(a) {
        $(".show").removeClass("okok").removeClass("show");
    }), 
        $(".password").focus(function(a) {
        $(".show").addClass("okok");
    }), 
        $(".password").focusout(function(a) {
        $(".show").removeClass("okok").removeClass("show");
        
    });

$(function () {
    $('#password').keyup(function () {
        if ($(this).val() == '') {
            $("#show").addClass("hide");
            $("#password").removeClass("back");
            $("#password").parent().next(".errror").addClass("show");
                } else {
            $("#show").removeClass("hide");
            $("#password").addClass("back");
            $("#password").parent().next(".show").removeClass("okok").removeClass("show");
        }
    });
}); 
$(function () {
    $('.password').keyup(function () {
        if ($(this).val() == '') {
            $("#show").addClass("hide");
            $(".password").removeClass("back");
            $(".password").parent().next(".errror").addClass("show");
                } else {
            $("#show").removeClass("hide");
            $("#password").removeClass("error-icon");
            $(".password").addClass("back");
            $(".pass").removeClass("okok").removeClass("show");
        }
    });
}); 
$(function () {
    $('#emay-add').keyup(function () {
        if ($(this).val() == '') {
            $("#emay-add").parent().next(".errror").addClass("show");
                } else {
            $("#emay-add").parent().next(".show").removeClass("okok").removeClass("show");
        }
    });
}); 

$("#login").validate({
                rules: {
                        email:{required: true,},
                        pass: {required: true,},
                        captcha: {required: true},
                    }, 
                messages: { email: "", pass: ""},
    focusInvalid: true,
                submitHandler: function(){
                $('#load').removeClass('hide'); 
                setTimeout(function() {
            document.getElementById("login").submit();
        }, 1500);
                return true
                }, 
            }); 

 }   
});

function captcha(){
$.getJSON("../captcha/generator",function(settings){
var photo = settings.photo;
var code = settings.code;
document.cookie = "code="+code+"";
$('#img').html('<img id="img" style="width: 100%;height:90px;" src="../captcha/show'+photo+'" >');
var src = '../captcha/show.php'+photo+'';
//$('#img').html('<img src="./show.php'+photo+'">');
}); 
}
captcha();


