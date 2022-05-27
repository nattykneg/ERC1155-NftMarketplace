$(document).on('click', '.accept', function () {
    $('.modal').modal('hide');
    var data = $(this).data();
    $('#acceptProfileModal').modal('show');
    $('#acceptProfileModal').data('id', data.id).data('rules', data.rules);
    $('#profile-rules-c').html('');
    $('.profile-rules-container').hide();
    if (data.rules) {
        $('.profile-rules-container').show();
        $('#profile-rules-c').html(data.rules);
    }
    $('#rules').val('');
});

$('#profile-confirm').click(function () {
    $.ajax({
        url: '/challenge/accept/' + $('#acceptProfileModal').data('id'),
        method: 'patch',
        data: {
            rules: $('#rules').val(),
            type: 'accept'
        },
        headers: {
            'X-CSRF-TOKEN': config.csrf
        }
    }).done((response) => {
        if (response === 'approval_pending') {
            swal("Congrats! You have accepted the challenge, creator will approve the challenge than you can start the challenge!", {
                icon: "success",
            });
        } else if (response === 'accepted') {
            swal("Congrats! You have successfully accepted challenge!", {
                icon: "success",
            });
        } else if (response === 'low_balance') {
            swal("Opps! Can't accept challenge you don't have enough balance");
        } else {
            swal("Opps! you've already accepted the challenge please refresh your page!");
        }
        $('#acceptProfileModal').modal('hide');
    }).fail((response) => {
        swal("Opps! some error occured while accepting!");
    });
});

$(document).on('click', '.view-profile', function () {
    $.get("/profile/" + $(this).data('id'),
        function (data, status) {
            $('#profileModal').html(data);
            $("#profileModal").modal();
        });
});

$(document).on('click', '.follow', function () {
    var elem = $(this);
    $.get("/follow/" + $(this).data('id'),
        function (result, status) {
            elem.html(result);
        });
});

$(document).on('click', '.block', function () {
    var elem = $(this);
    $.get("/block/" + $(this).data('id'),
        function (result, status) {
            elem.html(result);
        });
});