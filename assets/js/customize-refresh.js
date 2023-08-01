
(function ($){

    // banner heading
    wp.customize('banner_heading', function(value) {
        value.bind(function (newval){
            $('.content-area h2').html(newval);
        });
    });

    // banner heading color
    wp.customize('banner_heading_color', function(value) {
        value.bind(function (newval){
            $('.content-area h2').css('color', newval);
        });
    });

    // banner description
    wp.customize('banner_desc', function(value) {
        value.bind(function (newval){
            $('.content-area p').html(newval);
        });
    });

    // banner description
    wp.customize('banner_btn', function(value) {
        value.bind(function (newval){
            $('.content-area a').html(newval);
        });
    });


}) (jQuery)