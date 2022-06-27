/******************Scroll Animation JS********************/
AOS.init({
    duration: 1200,
    once: true
});

/****************** Loader JS ********************/
$(window).on ('load', function (){
    // Site Preloader
    $('#site-preloader').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({'overflow':'visible'});
});

/****************** Scroll To Top JS ********************/
$(window).on( 'scroll', function(){
    if ($(window).scrollTop() > 600) {
        $('.scrollToTop').fadeIn();
    } else {
        $('.scrollToTop').fadeOut();
    }
});

$(document.body).on('click', '.scrollToTop', function() {
    $('html, body').animate({
        scrollTop: 0
    }, 800);
    return false;
});

/****************** Navbar Fixed Header When Scroll JS ********************/
$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('header').addClass('fixed-header');
    }
    else {
        $('header').removeClass('fixed-header');
    }
});


/****************** Nav Tabs Mobile Dropdownn JS ********************/
$('#more_info_select').on('change', function (e) {
    $('#more_info_tabs li a').eq($(this).val()).tab('show'); 
});


/****************** Super Investors Slider JS ********************/
$('#super-investors-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 3000,
    prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 579,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

/****************** Progress JS ********************/
let percentShow = document.querySelectorAll('.percentshow');
let getPercentShow = Array.from(percentShow);

let percent = document.querySelectorAll('.countbar');
let getPercent = Array.from(percent);

getPercentShow.map((viewPercen) => {
    let startCount = 0;
    let progressPercentCount = () => {
        startCount ++;
        viewPercen.innerHTML = `${startCount}.00%`;
        if(startCount == viewPercen.dataset.percentnumber){
            clearInterval(percentStop);
        }
    }
    let percentStop = setInterval(() => {
        progressPercentCount();
    },20)
})

getPercent.map((viewline) => {
    //console.log(viewline.dataset.percentbarline)
    let countStart = 0;
    let progressbar = () => {
        countStart ++;
        viewline.style.width = `${countStart}.00%`;
        if(countStart == viewline.dataset.percentbarline) {
            clearInterval(viewlineStop);
        }
    }
    let viewlineStop = setInterval(() => {
        progressbar();
    },20)
})


/****************** Show More Text JS ********************/
$('.btn-show-hide').on('click', function(){
    var dots = document.getElementsByClassName("dots-show-hide")[0];
    var moreText = document.getElementsByClassName("show-more-text")[0];
    var btnText = document.getElementsByClassName("btn-show-hide")[0];

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Show more..."; 
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Show less"; 
        moreText.style.display = "inline";
    }
});



/****************** Tabs Horizontal Scroll JS ********************/
var hidWidth;
var scrollBarWidths = 40;

var widthOfList = function(){
    var itemsWidth = 0;
    $('.list li').each(function(){
        var itemWidth = $(this).outerWidth();
        itemsWidth+=itemWidth;
    });
    return itemsWidth;
};

var widthOfHidden = function(){
    var ww = 0 - $('.wrapper').outerWidth();
    var hw = (($('.wrapper').outerWidth())-widthOfList()-getLeftPosi())-scrollBarWidths;
    var rp = $(document).width() - ($('.nav-item').last().offset().left + $('.nav-item').last().outerWidth());
    
    if (ww>hw) {
        //return ww;
        return (rp>ww?rp:ww);
    }
    else {
        //return hw;
        return (rp>hw?rp:hw);
    }
};

var getLeftPosi = function(){
    var ww = 0 - $('.wrapper').outerWidth();
    var lp = $('.list').position().left;
    
    if (ww>lp) {
        return ww;
    }
    else {
        return lp;
    }
};

var reAdjust = function(){
    // check right pos of last nav item
    var rp = $(document).width() - ($('.nav-item').last().offset().left + $('.nav-item').last().outerWidth());
    if (($('.wrapper').outerWidth()) < widthOfList() && (rp<0)) {
        $('.scroller-right').show().css('display', 'flex');
    }
    else {
        $('.scroller-right').hide();
    }

    if (getLeftPosi()<0) {
        $('.scroller-left').show().css('display', 'flex');
    }
    else {
        $('.item').animate({left:"-="+getLeftPosi()+"px"},'slow');
        $('.scroller-left').hide();
    }
}

reAdjust();

$(window).on('resize',function(e){  
    reAdjust();
});

$('.scroller-right').click(function() {
    $('.scroller-left').fadeIn('slow');
    $('.scroller-right').fadeOut('slow');

    $('.list').animate({left:"+="+widthOfHidden()+"px"},'slow',function(){
        reAdjust();
    });
});

$('.scroller-left').click(function() {

    $('.scroller-right').fadeIn('slow');
    $('.scroller-left').fadeOut('slow');

    $('.list').animate({left:"-="+getLeftPosi()+"px"},'slow',function(){
        reAdjust();
    });
});