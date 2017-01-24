$('.delete-new').click(function(){
    $.ajax({
        url: "/admin/news/delete/"+$(this).attr('to-delete'),
    }).done(function() {
        window.location.reload();
    });
});

$('.delete-member').click(function(){
    $.ajax({
        url: "/admin/team/delete/"+$(this).attr('to-delete'),
    }).done(function() {
        window.location.reload();
    });
});

$('.edit-new .validate').click(function(){
    $.ajax({
        method: "GET",
        url: "/admin/news/editnew",
        data: { id: $('.edit-new .panel-title').attr("new-id"), title: $('.title-input').val(), author: $('.author-input').val(), text: $('.text-input').val() }
    })
        .done(function( msg ) {
            window.location.href = "/admin/news";
        });
});