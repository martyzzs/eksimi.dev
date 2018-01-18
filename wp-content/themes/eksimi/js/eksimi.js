(function ( $ ) {

    $(window).resize(function(){
        $('.content-wrap').css('top',$('header').height()+20);
    });

})(jQuery);