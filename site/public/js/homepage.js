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

       var options = {
           useEasing : false,
           useGrouping : false,
           separator : ',',
           decimal : '.',
           prefix : '',
           suffix : '€'
       };

       var amount_raised_2 = new CountUp("amount-raised-two", 0, data.amount_raised, 0, 2, options);
       amount_raised_2.start();

       var amount_goal_2 = new CountUp("amount-goal-two", 0, data.goal, 0, 2, options);
       amount_goal_2.start();

       var options = {
           useEasing : false,
           useGrouping : false,
           separator : ',',
           decimal : '.',
           prefix : '',
           suffix : ''
       };

       var contributors = new CountUp("contributors", 0, data.supporters_count, 0, 2, options);
       contributors.start();

      var pourcentage = (data.amount_raised/data.goal)*100;
      pourcentage = Math.round(pourcentage);

       $('.goal-bar').animate({
           width: pourcentage+"%"
       }, 2000 );


      $('.goal-bar-two').animate({
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
       .to(".anim-text", 1, {color: "black"}, 0)
       .to(".africa-shadow", 1, {opacity: "1"}, 0)
       .to('.barre1',1,{right: "0"},1)
       .to('.barre2',1,{right: "0"},2)
       .to('.barre3',1,{right: "0"},3)

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
       .to('.second-animation .small-circle', 1, {height: "15vw", width: "15vw"}, 1)
       .to('.small-circle .pourcentage-circle', 1, {fontSize: "4vw"}, 1)
       .to('.small-circle #circle-pourcentage', 1, {fontSize: "4vw"}, 1)
   var scene4 = new ScrollMagic.Scene({triggerElement: ".maps-animation", duration: 300,tweenChanges: true, offset: 0})
       .setTween(five_anim)
       .addTo(controller)
       .on('start', function(){
          var options = {
             useEasing : false,
             useGrouping : false,
             separator : ',',
             decimal : '.',
             prefix : '',
             suffix : '%'
          };
          var circlePourcentage = new CountUp("circle-pourcentage", 0, 80, 0, 2, options);
          circlePourcentage.start();
       });

    var six_anim = new TimelineLite();
    six_anim.to('.processus-title',1,{bottom: "2vw"});

    var scene6 = new ScrollMagic.Scene({triggerElement: ".small-circle-anim-two", duration: 300,tweenChanges: true, offset: 100})
            .setTween(six_anim)
            .addTo(controller)

    var seven_anim = new TimelineLite();
    seven_anim.to('.third-animation .left .picture',1,{top: "-4vw"})
        .to('.third-animation .left .background',1,{top:'0vw'},0)
        .to('.third-animation .right',1,{opacity:'1'},0)

    var scene7 = new ScrollMagic.Scene({triggerElement: ".processus-title", duration: 300,tweenChanges: true, offset: 350})
        .setTween(seven_anim)
        .addTo(controller)

    var eight_anim = new TimelineLite();
    eight_anim.to('.financement-title',1,{right: "0vw"})

    var scene8 = new ScrollMagic.Scene({triggerElement: ".financement-animation", duration: 300,tweenChanges: true, offset: 200})
        .setTween(eight_anim)
        .addTo(controller)

    scene8.addIndicators();

    var night_anim = new TimelineLite();
    night_anim.to('.fourth-animation .financement-img',1,{top: "7vw"})
    night_anim.to('.fourth-animation .financement-background',1,{top: "0vw"},0)
    night_anim.to('.fourth-animation .left',1,{opacity: "1"},0)

    var scene8 = new ScrollMagic.Scene({triggerElement: ".financement-title", duration: 300,tweenChanges: true, offset: -50})
        .setTween(night_anim)
        .addTo(controller)

    //TO 4
});

