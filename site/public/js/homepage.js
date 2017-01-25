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

   var animCover = new TimelineLite();

   animCover.to(".main-annimation",1,{top: "-200px"},0)
   var scenecover = new ScrollMagic.Scene({triggerElement: ".goal-button", duration: 300,tweenChanges: true, offset: 0})
       .setTween(animCover)
       .addTo(controller)

   var first_anim = new TimelineLite();
   first_anim.to(".africa-map", 1, {top: "0px"})
           .to(".white-div", 1, {right: "500px"}, 0)
       .to(".anim-text", 1, {color: "black"}, 0)

       .to(".africa-shadow", 1, {opacity: "1"}, 0)

   // build scene
   var scene1 = new ScrollMagic.Scene({triggerElement: ".first-animation", duration: 300,tweenChanges: true, offset: 0})
       .setTween(first_anim)
       .addTo(controller)
       .on('start', function () {
          var options = {
             useEasing : false,
             useGrouping : false,
             separator : ',',
             decimal : '.',
             prefix : '',
             suffix : ''
          };
          var pourcentage_population = new CountUp("pourcentage-population", 0, 60, 0, 2, options);
          pourcentage_population.start();
       });
   var second_anim = new TimelineLite();
   second_anim.to('.informations', 1, {top: "-100px"})

   var scene2 = new ScrollMagic.Scene({triggerElement: ".animation-informations", duration: 200,tweenChanges: true, offset: 0})
       .setTween(second_anim)
       .addTo(controller)


   scene2.addIndicators();

   var third_anim = new TimelineLite();
   third_anim.to('.rectangle-div img',1,{right: "0px"});

   var scene3 = new ScrollMagic.Scene({triggerElement: ".informations", duration: 200,tweenChanges: true, offset: 0})
       .setTween(third_anim)
       .addTo(controller)
       .on('start', function(){
          var options = {
             useEasing : false,
             useGrouping : false,
             separator : ',',
             decimal : '.',
             prefix : '',
             suffix : ''
          };
          var number_city = new CountUp("number_city", 0, 5000, 0, 2, options);
          number_city.start();
       })

/*   var fourth_anim = new TimelineLite();
   fourth_anim.to('.small-circle',1,{top: "28vw"});
   var scene4 = new ScrollMagic.Scene({triggerElement: ".small-circle-animation", duration: 200,tweenChanges: true, offset: 0})
       .setTween(fourth_anim)
       .addTo(controller)*/

   var five_anim = new TimelineLite();

   five_anim.to('.second-animation .right', 1, {height: "38vw", width: "38vw"})
       .to('.map-zoom', 1, {width: "28vw"}, 0)
       .to('.second-animation .zoom-map-circle span', 1, {left: "9vw", opacity: "1"}, 0)
       .to('.second-animation .small-circle', 1, {height: "15vw", width: "15vw"})
       .to('.small-circle .pourcentage-circle', 1, {fontSize: "4vw"})
   var scene4 = new ScrollMagic.Scene({triggerElement: ".maps-animation", duration: 300,tweenChanges: true, offset: 0})
       .setTween(five_anim)
       .addTo(controller)

   /*scenecover.addIndicators();
   scene1.addIndicators();*/
});

