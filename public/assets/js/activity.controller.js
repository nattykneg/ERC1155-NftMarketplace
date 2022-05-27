function loadActivities() {
    $.get('/activity/all', { count: true }).done((response) => {
        var element = $('.count-notification');
        element.html('').hide();
        if (parseInt(response)) {
            element.html(response).show();
        }
    });
    $.get('/activity/all').done((response) => {
        $('.notification-ul').html(response);        
    });
}
$('#acitvity').click(function () {
    if (!$(this).parent().hasClass('open')) {
        loadActivities();
    }
});
$(document).on('click', '.click-notification', function () {
    var data = $(this).data();
    $.ajax({
        url: '/activity/read/' + data.id,
        method: 'put',
        headers: { 'X-CSRF-TOKEN': csrfLocal }
    }).done((response) => {
        setTimeout(() => {
            window.location.href = data.url;
        }, 0);
    });
});