$(function() {
    var url = document.URL,
        index = url.lastIndexOf("#"),
        menuHeight = $("#main .menu").height(),
        menuTop = $("#main .menu").offset().top,
        windowTop;
    
    if (index != -1) {
        $("html, body").scrollTop(0);
        
        var id = url.substring(index),
            sectionTop = $(id).offset().top;
        
        $("html, body").animate({scrollTop: sectionTop - menuHeight}, "slow");
    }
    
    $("#main .menu a").click(function(e) {
        e.preventDefault();
        
        var id = $(this).attr("href"),
            sectionTop = $(id).offset().top;
        
        $("html, body").animate({scrollTop: sectionTop - menuHeight}, "slow");
    });
    
    $(window).scroll(function() {
        windowPos = $(window).scrollTop();
        
        if (windowPos > menuTop) {
            $("#main .menu").offset({top: windowPos});
        } else {
            $("#main .menu").offset({top: menuTop});
        }
        
        $("#main .menu li").each(function() {
            var id = $(this).children("a").attr("href"),
                menuBottom = $(this).parent().offset().top + $(this).parent().height(),
                sectionTop = $(id).offset().top,
                sectionBottom = $(id).next(".content").offset().top + $(id).next(".content").height(),
                margin = 100;
            
            if (menuBottom >= sectionTop - margin) {
                $(this).addClass("active");
            }
            
            if (menuBottom < sectionTop - margin || menuBottom > sectionBottom - margin) {
                $(this).removeClass("active");
            }
        });
    });
});