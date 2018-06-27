// =============================>>> nav icons hover
$('.nav-icon').hover(function (){
    $(this).children().css('color','white');

},function () {
    $('.hover-icon').css('color','#602248');
});
// ========================================

//===========================================================================
//---------------------resize------------------------------------------------
//===========================================================================
$(window).on('resize',function () {
    var sameDimentionsClass = $('.same-dimentions');
    var width;
    for (var i = 0; i < sameDimentionsClass.length ; i++)
    {
        width =$(sameDimentionsClass[i]) .css('width');
        $(sameDimentionsClass[i]).css('height', width);
    }

    var sliderImg = $('.slider-img');
    var carouselCaption =$('.carousel-caption');
    for (var i = 0; i < sliderImg.length ; i++)
    {
        var carouselCaptionHeight = $(carouselCaption[i]).css('height');
        console.log(carouselCaptionHeight);
        $(sliderImg[i]) .css('min-height',carouselCaptionHeight);
    }


    var goalsHeight= $('#goals').height();
    $('#goals-parent').css('height', goalsHeight+'px');

});
//===========================================================================
//---------------------End resize------------------------------------------------
//===========================================================================



//===========================================================================
//---------------------document ready------------------------------------------------
//===========================================================================
$(document).ready(function (){

// ==================>>> same dimentions class ===> height = width
    var sameDimentionsClass = $('.same-dimentions');
     var width;
    for (var i = 0; i < sameDimentionsClass.length ; i++)
    {
	     width =$(sameDimentionsClass[i]) .css('width');
         $(sameDimentionsClass[i]).css('height', width);
	}


// ==========================================================
    var sliderImg = $('.slider-img');
    var carouselCaption =$('.carousel-caption');
    for (var i = 0; i < sliderImg.length ; i++)
    {
        var carouselCaptionHeight = $(carouselCaption[i]).css('height');
        console.log(carouselCaptionHeight);
       $(sliderImg[i]) .css('min-height',carouselCaptionHeight);
    }
//===========================================================goals
    var goalsHeight= $('#goals').height();
    $('#goals-parent').css('height', goalsHeight+'px');

});
//===========================================================================
//---------------------end document ready------------------------------------------------
//===========================================================================
