(function ( $ ) {
    //TODO deal with this when admin bar get biger on small screens
    $(window).resize(function(){
        $('.content-wrap').css('top',$('header').height()+20);

        if($("#wpadminbar").length){
            $('.content-wrap').css('top',$('header').height()+52);
        }
    });

    $(document).ready(function(){
        if($("#wpadminbar").length){
            $('.content-wrap').css('top',$('header').height()+52);
        }
    });

})(jQuery);