
$.get('https://api.ulule.com/v1/projects/'+$('.ulule_value').attr('ulule'), function(data){
   $('.amount-raised').append(data.amount_raised);
   $('.goal').append(data.goal);
});