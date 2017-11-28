$(document).ready(function() {
    
    $(".menu-mobile").click(function(){
        $(".menu-mobile-open").addClass("open");
    });

    $(".close-menu").click(function(){
        $(".menu-mobile-open").removeClass("open");
    });
});

