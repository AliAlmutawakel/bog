$(document).ready(function () {
    
    //general init
    $(".button-collapse").sideNav();
    $('.modal').appendTo("body");
    $('.modal').modal();
    $('.slider').slider();
    $('.parallax').parallax();
    
    //slider control
    $(".thumbnail").click(function(event){
        var num = $(this).attr("data-number");
        var active = {};
        
        $(".slides li").each(function(i, elem){
            if($(this).hasClass("active")){
                active.elem = elem;
                active.num = i;
            }
        });
        
        var callBack = (active.num > num ? "prev" : "next");
        
        for(var i = 0; i < Math.abs(active.num - num); i++){
            $('.slider').slider(callBack);
        }
        
    });

    //parallax
    $(window).on('load scroll', function () {
        
        var scrolled = $(this).scrollTop();
        var height = $(this).height();
        
        if(scrolled < height){
            console.log("scrolling");
            $('#splash-title').css({
                'transform': 'translate3d(0, ' + (scrolled * 0.2) + 'px, 0)', // parallax (20% scroll rate)
                'opacity': 1 - scrolled / 600 // fade out at 400px from top
            });
            $('#hero-vid').css('transform', 'translate3d(0, ' + -(scrolled * 0.20) + 'px, 0)'); // parallax (25% scroll rate)
        }
    });

    //scroll down
    $("#splash .arrow").click(function (event) {
        var content = $("#content").offset().top;
        $("html,body").animate({
            scrollTop: content
        }, "slow");
    });

    //general timeout to bind heights
    setTimeout(function () {
        bindHeights()
    }, 100);

    //general resize to bind heights
    $(window).on('resize', function () {
        bindHeights();
    });

    //circle progress bar
    var initProgressCircle = function () {
        if ($(this).scrollTop() > $("#progress").offset().top - $(this).height()) {
            
            var bar = new ProgressBar.Circle(progress, {
                color: '#aaa',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 4,
                trailWidth: 4,
                easing: 'easeInOut',
                duration: 1400,
                text: {
                    autoStyleContainer: true
                },
                from: {
                    color: '#f44336',
                    width: 4
                },
                to: {
                    color: '#f44336',
                    width: 4
                },
                // Set default step function for all animate calls
                step: function (state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);
                    if (value === 0) {
                        circle.setText('');
                    } else {
                        circle.setText(value + "%");
                    }

                }
            });
            bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
            bar.text.style.fontSize = '2rem';
            
            bar.animate(0.9); // Number from 0.0 to 1.0
            $(window).off('scroll', initProgressCircle);
        }
    };
    var initArrowDown = function(){
        if ($(this).scrollTop() > $("#arrow-grow").offset().top - $(this).height()+100) {
            $("#arrow-grow").addClass("grown");
            $("#arrow-grow").off(initArrowDown);
        }
    }
    $(window).on('scroll', initProgressCircle);
    $(window).on('scroll', initArrowDown);
    
    //time countdown
    var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
    initializeClock('clockdiv');
    
    //slider arrows
    $(".slider").find("a").each(function(i, elem){
        var dir = $(this).attr("data-slider");
        if(dir){
          $(this).click(function(){
              $(this).closest(".slider").slider(dir);
          });  
        } 
    });
    
    var animatable = [];
    //animatable
    $("*[animation]").each(function(i, elem){
        var animation = $(elem).attr("animation");
        $(elem).css("visibility", "hidden");
        
        animatable.push(function(){
            if($(this).scrollTop() > $(elem).offset().top - $(this).height()+100){
                $(elem).css("visibility", "visible");
                $(elem).delay(1000).addClass("animated " + animation);
                $(window).off('scroll', animatable[i]);
            }
        })
        
        $(window).on('scroll', animatable[i]);
    });
    
    //title add span
    $(".title").each(function(){
        var firstWord = $(this).text().split(' ')[0];
        var replaceWord = "<span>" + firstWord + "</span><br>";
        var newString = $(this).html().replace(firstWord, replaceWord);
        $(this).html(newString);
    });
    
    
    $('.slider4').bxSlider({
        infiniteLoop: false,
        slideWidth: 300,
        minSlides: 2,
        maxSlides: 3,
        moveSlides: 1,
        slideMargin: 10,
        nextSelector: '.campaigns #slider-next',
        prevSelector: '.campaigns #slider-prev',
        nextText: '<div class="carousel-arrow-right"> <a class="btn-floating btn-small btn-flat waves-effect waves-light btn-arrow vertical-center" data-slider="next"> <i class="large"><span id="prev"></span></i></a></div>',
        prevText: '<div class="carousel-arrow-left"> <a class="btn-floating btn-small btn-flat waves-effect waves-light btn-arrow vertical-center" data-slider="prev"> <i class="large"><span id="next"></span></i> </a> </div>'
    });
    
        //growing arrow 2
    $(".btn-arrow").hover(
        function () {
            $(this).find("#prev").addClass("grown");
            $(this).find("#next").addClass("grown");
        },
        function () {
            $(this).find("#prev").removeClass("grown");
            $(this).find("#next").removeClass("grown");
        }
    );
    
    //img cover like background-image
    $('.replace-image').each(function() {
        //set size
        var im = $(this).children('img');//image
        
        jQuery('<section/>', {
            class: 'image-replaced ' + im.attr('class'),
            style: 'background-image:url("'+ im.attr("src") +'")'
        }).appendTo(this);
        
        im.css("display", "none");
    });
    
    //scroll to top
    $('.scroll-top a').click(function() {
        $('body,html').animate({
            scrollTop : 0
        }, "slow", "easeInOutCubic");
    });
    
    
});

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var endtime = new Date(clock.querySelector('.endtime').textContent);
  clock.removeChild(clock.querySelector('.endtime'));
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

function bindHeights() {
        var binds = [];

        $("*").each(function () {
            var obj = $(this);
            var bind = obj.attr("bind-height");

            if (bind) {
                var found = false;
                binds.forEach(function (e, i) {
                    if (e.name == bind) {
                        binds[i].elements.push(obj);
                        found = true;
                    }
                });
                if (!found) {
                    binds.push({
                        name: bind,
                        elements: [obj]
                    });
                }
            }
        });

        binds.forEach(function (obj, i) {
            var maxNum = 0;
            obj.elements.forEach(function (e, i) {
                if (e.attr("bind-master") == "")
                    maxNum = e.height();
            });

            obj.elements.forEach(function (e, i) {
                if (e.attr("bind-copy") == "") {
                    e.css("min-height", maxNum);
                }
            });
        });
    }