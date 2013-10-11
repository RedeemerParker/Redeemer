$(function() {
    $("#nav").tabbler({
        event: "mouseover",
        attribute: "title",
        floating: true
    });
    
    $("#slideshow").tabbler({
        effect: "slide",
        selected: "slide-1",
        play: true,
        pauseHover: true
    });
});