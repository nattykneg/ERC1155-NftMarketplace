'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName ){
            label.querySelector( 'span' ).innerHTML = '';
            label.querySelector( 'p' ).innerHTML = fileName;

			}
			else{
				label.innerHTML = labelVal;
			}
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image_upload_preview1').attr('src', e.target.result).removeClass('iconUp');
                $('.selectLabel1').removeClass('paddingLabel');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image_upload_preview2').attr('src', e.target.result).removeClass('iconUp');
                $('.selectLabel2').removeClass('paddingLabel');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image_upload_preview3').attr('src', e.target.result).removeClass('iconUp');
                $('.selectLabel3').removeClass('paddingLabel');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#file-3").change(function () {
        readURL3(this);
    });
    $("#file-2").change(function () {
        readURL2(this);
    });
    $("#file-1").change(function () {
        readURL1(this);
    });

//////////////////////////////////////////////
setInterval(function(){
    if($('#file-3').val()!=""){
    $('#n3').removeClass('hide').addClass('show');
    $('#name3').removeClass('hide').addClass('show');
     $('#bt3').attr('disabled',false);
    }else{
        $('#bt3').attr('disabled',true);
    }
},100);

setInterval(function(){
    if($('#file-2').val()!=""){
        $('#n1').removeClass('hide').addClass('show');
        $('#name1').removeClass('hide').addClass('show');
        if($('#file-3').val()!=""){
    $('#n2').removeClass('hide').addClass('show');
     $('#bt2').attr('disabled',false);
 }
    }else{
        $('#bt2').attr('disabled',true);
    }
},100);
setInterval(function(){
    if($('#file-1').val()!=""){
    $('#n2').removeClass('hide').addClass('show');
    $('#name2').removeClass('hide').addClass('show');
    $('#bt1').attr('disabled',false);
}
},100);

//////////////////////////////////////////
var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];   
function validate(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            } 
             
            if (!blnValid) {
                $('#type').show();
                oInput.value = "";
                $('[type=submit]').attr('disabled',true);
                return false;
            }
            else{
                $('#type').hide();
            }
        }
    }
    return true;
}
////////////////////////////////////////src="../files/img/ico.png"
$('#bt1').click(function(){
    $('#rotation').addClass('show');

});
$('#bt2').click(function(){
    $('#rotation').addClass('show');
});
$('#bt20').click(function(){
    $('#rotation').addClass('show');
});
////////////////////////////////////////$('.image_upload_preview1').removeClass('iconUp');
$('#n1').click(function(){
$('.image_upload_preview2').attr('src', '../files/img/ico.png').addClass('iconUp');
$('.selectLabel2').addClass('paddingLabel');
$('#name1').removeClass('show').addClass('hide');
   $("#file-2").val("");
    $(".sp2").text(choose);
    $('#bt2').attr('disabled',true);
    $('#n1').removeClass('show').addClass('hide');

});
$('#n2').click(function(){
    $('.image_upload_preview1').attr('src', '../files/img/ico.png').addClass('iconUp');
    $('.selectLabel1').addClass('paddingLabel');
    $('#name2').removeClass('show').addClass('hide');
   $("#file-1").val("");
    $(".sp1").text(choose);
    $('#bt1').attr('disabled',true);
    $('#n2').removeClass('show').addClass('hide');
});

$('#n3').click(function(){
    $('.image_upload_preview3').attr('src', '../files/img/ico.png').addClass('iconUp');
    $('.selectLabel3').addClass('paddingLabel');
    $('#name3').removeClass('show').addClass('hide');
    $("#file-3").val("");
    $(".sp3").text(choose);
    $('#bt2').attr('disabled',true);
    $('#n3').removeClass('show').addClass('hide');


});
////////////////////////////////////////////////////


$('#req').click(function(){
$('#il').slideToggle();
if ($('#req').hasClass("req")) {
    $('#req').text("Hide file requirements");
    $('#req').removeClass("req");
}
else{
    $('#req').text("Show file requirements");
    $('#req').addClass("req");
}});


////////////////////////////////////////////////// 
function clear(){
$(".sp1,.sp2,.sp3").text(choose);
$('#n1').removeClass('show').addClass('hide');
$('#n2').removeClass('show').addClass('hide');
$('#n3').removeClass('show').addClass('hide');
$('#n10').removeClass('show').addClass('hide');
$('#n20').removeClass('show').addClass('hide');
$('#passp')[0].reset();
$('#idls')[0].reset();
}


/////////////////////////////////////////////////////
    $('#ch').change(function(){
        $('#rt1').addClass('show');
        if($(this).val() == '0'){
            clear();
            $("#reqq").hide();
            $("#bt00").addClass("show").removeClass("hide");
            $("#passp").addClass("hide").removeClass("show");
            $("#idls").addClass("hide").removeClass("show");
            $('#rt1').removeClass('show');
            $("#type").hide();
        }
        if($(this).val() == '1'){
            clear();
            $("#bt00").removeClass("hide").addClass("show");
            $("#passp").addClass("hide").removeClass("show");
            $("#idls").addClass("hide").removeClass("show");
            $("#type").hide();
        setTimeout(function() {
            $("#bt00").removeClass("show").addClass("hide");
            $("#idls").addClass("show").removeClass("hide");
            $('#rt1').removeClass('show');
            
        }, 1000);
        }

        if($(this).val() == '2'){
            clear();
            $("#bt00").removeClass("hide").addClass("show");
            $("#idls").addClass("hide").removeClass("show");
            $("#type").hide();
            setTimeout(function() {
            $("#bt00").removeClass("show").addClass("hide");
            $("#passp").addClass("show").removeClass("hide");
            $('#rt1').removeClass('show');
            
        }, 1000);
        }

        if($(this).val() == '3'){
            clear();
            $("#bt00").removeClass("hide").addClass("show");
            $("#idls").addClass("hide").removeClass("show");
            $("#passp").addClass("hide").removeClass("show");
            $("#type").hide();
            setTimeout(function() {
            $("#bt00").removeClass("show").addClass("hide");
            $("#idls").addClass("show").removeClass("hide");
            $('#rt1').removeClass('show');
        }, 1000); 
        }
    }); 
