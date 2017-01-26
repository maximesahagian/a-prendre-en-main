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


    var night_anim = new TimelineLite();
    night_anim.to('.fourth-animation .financement-img',1,{top: "7vw"})
    night_anim.to('.fourth-animation .financement-background',1,{top: "0vw"},0)
    night_anim.to('.fourth-animation .left',1,{opacity: "1"},0)

    var scene9 = new ScrollMagic.Scene({triggerElement: ".financement-title", duration: 300,tweenChanges: true, offset: -50})
        .setTween(night_anim)
        .addTo(controller)
        .on('start',function(){
            var options = {
                useEasing : false,
                useGrouping : false,
                separator : ' ',
                decimal : ' ',
                prefix : '',
                suffix : ''
            };
            var euroNumber = new CountUp("euro-number", 0, 23628, 0, 2, options);
            euroNumber.start();
        });

    var ten_anim = new TimelineLite();
    ten_anim.to('.entretien-title', 1, {left: "8vh"})
    ten_anim.to('.fifth-animation .left', 1, {opacity: "1"}, 1)
    ten_anim.to('.fifth-animation .fix-it', 1, {top: "25vw"}, 1)



    var scene10 = new ScrollMagic.Scene({triggerElement: ".fifth-animation", duration: 400,tweenChanges: true, offset: 0})
        .setTween(ten_anim)
        .addTo(controller)

    var eleven_anim = new TimelineLite();

    eleven_anim
        .to('.last-animation .left div', 1, {opacity: "1"})
        .to('.piece01', 1, {top: '15vw'}, 0)
        .to('.piece1', 1, {top: '20vw'}, 0)
        .to('.piece2', 1, {top: '27vw'}, 0)
        .to('.piece3', 1, {top: '35vw'}, 0)
        .to('.piece03', 1, {top: '28vw'}, 0)
        .to('.piece8', 1, {top: '47.7vw'}, 0)
        .to('.piece6', 1, {top: '39vw'}, 0)
        .to('.piece9', 1, {top: '39vw'}, 0)
        .to('.piece12', 1, {top: '20vw'}, 0)
        .to('.piece11', 1, {top: '50vw'}, 0)
        .to('.piece02', 1, {top: '51vw'}, 0)
        .to('.piecetat', 1, {right: '17vw'}, 0)




    var scene11 = new ScrollMagic.Scene({triggerElement: ".last-animation", duration: 600,tweenChanges: true, offset: 0})
        .setTween(eleven_anim)
        .addTo(controller)

    var twelve_anim = new TimelineLite();

    twelve_anim.to('.wrapper-crowfunding',1,{marginTop: '-930px'})
        .to('.crowfunding-section .image-fong', 1,{marginTop:"200px"}, 0)

    var scene12 = new ScrollMagic.Scene({triggerElement: ".last-animation i", duration: 350,tweenChanges: true, offset: 0})
            .setTween(twelve_anim)
            .addTo(controller)
        .on('start', function(){
            $.get('https://api.ulule.com/v1/projects/'+$('.ulule_value').attr('ulule'), function(data){
                var options = {
                    useEasing : false,
                    useGrouping : false,
                    separator : ' ',
                    decimal : ' ',
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
        })

    //TO 4
});

