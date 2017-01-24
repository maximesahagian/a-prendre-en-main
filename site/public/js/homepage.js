
$.get('https://api.ulule.com/v1/projects/'+$('.ulule_value').attr('ulule'), function(data){
   $('.amount-raised').html(data.amount_raised + '€');
   $('.goal').html(data.goal + '€');
});