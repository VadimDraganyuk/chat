/**
 * Created by mr. Drauder on 16.10.2014.
 */

    $(document).on('click', '.umessage', function () {
        var id = $(this).data('id');
        $('.rows_user').removeClass('active');
        $(this).parents('.rows_user').addClass('active');

        //$('#chat_content').text('');
        $.ajax({
            type: 'POST',
            url: 'http://' + location.host + '/welcome/get_messages',
            data: {
                'recipient_id': id
            },
            dataType: 'json',
            success: function (result) {

                $('.chats').find('li').remove();
                if (result) {
                    $('.chats').append(result.chat);
                    $('.header').children().remove();
                    $('.header ').append(result.header);
                } else {
                    $('.chats').append("<li>У вас ще немає діалогу з цим користувачем. Почніть зараз!</li>");
                }
            }
        })
    })
$(document).ready(function () {
    $('#sendmess').mouseenter(function(){
        var id = $('.rows_user.active a').data('id');
        $.ajax({
            type: 'POST',
            url: 'http://' + location.host + '/welcome/read_messages',
            data: {
                'recipient_id': id
            },
            dataType: 'json',
            success: function (result) {
                if (result) {
                    $('.message').removeClass('new');
                    $('.header').children().remove();
                    $('.header').append(result.header);
                }
            }
        })
    });
})

$(document).on('click', '#minimess', function () {
    $('#user_' + $(this).data('id')).click();
})

$(document).on('click', '.reload', function () {
    var id = $('.rows_user.active a').data('id');
    $('#user_' + id).click();
})