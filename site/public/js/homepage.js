$(document).ready(function(){
   $.get('https://api.ulule.com/v1/projects/'+$('.ulule_value').attr('ulule'), function(data){
      var options = {
         useEasing : false,
         useGrouping : false,
         separator : ',',
         decimal : '.',
         prefix : '',
         suffix : ''
      };
      var amount_raised = new CountUp("amount-raised", 0, data.amount_raised, 0, 2, options);
      amount_raised.start();

      var goal = new CountUp("goal", 0, data.goal, 0, 2, options);
      goal.start();

      $('.amount-raised').append('€');
      $('.goal').append('€');

      var pourcentage = (data.amount_raised/data.goal)*100;
      pourcentage = Math.round(pourcentage);

      $('.goal-bar').animate({
         width: pourcentage+"%"
      }, 2000 );
   });


});

/*ANNIMATIONS*/
// When the DOM is ready
$(function() {

   // Init ScrollMagic Controller
   var controller = new ScrollMagic.Controller();

   var first_anim = new TimelineLite();
       /*.add(TweenMax.to(".africa-map", 1, {top: "0px"},0))
       .add(TweenMax.to(".annim", 1, {right: "0px"}, 0))*/

   first_anim.to(".africa-map", 1, {top: "0px", opacity: "1"})
           .to(".annim", 1, {right: "0px"}, 0)

   // build scene
   var scene = new ScrollMagic.Scene({triggerElement: ".first-animation", duration: 300,tweenChanges: true, offset: 0})
       .setTween(first_anim)
       .addTo(controller);

   scene.addIndicators();
});

