$(document).ready(function () {

    //general init
    $(".button-collapse").sideNav();

    //parallax
    $(window).on('load scroll', function () {
        var scrolled = $(this).scrollTop();
        $('#splash-title').css({
            'transform': 'translate3d(0, ' + (scrolled * 0.2) + 'px, 0)', // parallax (20% scroll rate)
            'opacity': 1 - scrolled / 600 // fade out at 400px from top
        });
        $('#hero-vid').css('transform', 'translate3d(0, ' + -(scrolled * 0.20) + 'px, 0)'); // parallax (25% scroll rate)
    });

    //scroll down
    $("#splash .arrow").click(function (event) {
        var content = $("#content").offset().top;
        $("html,body").animate({
            scrollTop: content
        }, "slow");
    });

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
                    color: '#aaa',
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
    $(window).on('scroll', initProgressCircle);
    
});
