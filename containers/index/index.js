$(function() {
    let $next = $('.next'), $prev = $('.prev');
    let nextVal = 0, prevVal = 0;
    let slidesNumber = $('.item').length;
    let currentSlide = 3;
    console.log(slidesNumber);

    function start() {
        $('.item').css({
            transform: 'translateX(0)'
        });
        currentSlide = 3;
        nextVal = prevVal = 0;
    }

    function end() {
        let ending = (slidesNumber - 3) * 216;
        $('.item').css({
            transform: 'translateX(' + '-' + ending + 'px' +')'
        });
        currentSlide = slidesNumber;
        nextVal = prevVal = -416;
    }

    $next.click(function() {
        currentSlide += 1;
        console.log(currentSlide);
        console.log(slidesNumber);
        if (currentSlide > slidesNumber) {
            start();
            return;
        }
        nextVal -= 216;
        prevVal = nextVal;
        // console.log(currentSlide);
        $('.item').css({
            transform: 'translateX(' + nextVal + 'px' +')'
        });
    });

    $prev.click(function() {
        currentSlide -= 1;
        if (currentSlide === 0) {
            end();
            return;
        }
        prevVal += 216;
        nextVal = prevVal;
        // console.log(currentSlide);
        $('.item').css({
            transform: 'translateX(' + prevVal + 'px' +')'
        });
    });

    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;
    let countDown = new Date('Dec 30, 2019 00:00:00').getTime(),
    x = setInterval(() => {
        let now = new Date().getTime();
        let distance = countDown - now;
        document.querySelector('.days').innerText = Math.floor(distance / day);
        document.querySelector('.hours').innerText = Math.floor((distance % day) / hour);
        document.querySelector('.minutes').innerText = Math.floor((distance % hour) / minute);
        document.querySelector('.seconds').innerText = Math.floor((distance % minute) / second);
        if (distance < 0) clearInterval(x);
    }, second);


    let $window = $(window);
    let $animationElements = $('.anime');
    function animation() {
        let windowHeight = $window.height();
        let windowTop = $window.scrollTop();
        let windowBottom = windowTop + windowHeight;
        $.each($animationElements, function() {
            let $currentElement = $(this);
            let elementHeight = $currentElement.outerHeight();
            let elementTop = $currentElement.offset().top;
            let elementBottom = elementHeight + elementTop;
            if ((windowBottom => elementTop) && (windowTop <= elementBottom)) {
            } else {
            }
        });
    }
    $window.on('scroll resize', animation);
    $window.trigger('scroll');
});