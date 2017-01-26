$('.content-contact .button #button').click(function(){
/*    $('.infos').css({display: 'block'});
    $.ajax({
        url: "/sendmail",
        cache: false,
        data: {
            firstname: $('#prenom').val(),
            lastname: $('#nom').val(),
            email: $('#courriel').val(),
            message: $('#message').val()
        }
    })
        .done(function( html ) {
            $('.infos').removeClass('en-cours');
            $('.infos').addClass('sent');
            $('.infos').html('Le mail a bien été envoyé, notre équipe vous répondra dans les plus brefs délais.')
        });*/

    var response = grecaptcha.getResponse();

    console.log(response);
});