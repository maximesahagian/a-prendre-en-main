$('.content-contact .button #button').click(function(){
    var response = grecaptcha.getResponse();

    if($('.infos').hasClass('sent')){
        $('.infos').removeClass('sent');
        $('.infos').addClass('en-cours')
    }
    if($('.infos').hasClass('error-captcha')){
        $('.infos').removeClass('error-captcha');
        $('.infos').addClass('en-cours')
    }

    if(response.length == 0)
    {
        $('.infos').removeClass('en-cours');
        $('.infos').addClass('error-captcha');
    }
    //reCaptcha not verified

    else{
        $('.infos').css({display: 'block'});
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
            });
    }
});