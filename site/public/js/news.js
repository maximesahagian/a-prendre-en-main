$('.delete-new').click(function(){
    $.ajax({
        url: "/admin/news/delete/"+$(this).attr('to-delete'),
    }).done(function() {
        window.location.reload();
    });
});


/*$('.add-new .validate').click(function(){
    $.ajax({
        method: "GET",
        url: "/admin/news/addnew",
        data: { title: $('.title-input').val(), author: $('.author-input').val(), text: $('.text-input').val() }
        })
        .done(function( msg ) {
            window.location.href = "/admin/news";
        });
});*/

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