$(window).scroll(function() {
        if ($(this).scrollTop() >620){  
        $('nav').addClass("sticky");
        }
        else{
        $('nav').removeClass("sticky");
        }});