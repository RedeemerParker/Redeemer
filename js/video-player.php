<script>
    $(function() {
        $("#video-player").css({
            top: ($("#video-dimmer").height() / 2) - ($("#video-player").height() / 2),
            left: ($("#video-dimmer").width() / 2) - ($("#video-player").width() / 2)
        });
        
        $(".video-player-play").live("click", function(e) {
            e.preventDefault();
            
            var videoId = $(this).attr("href").substring(17);
            
            $("#video-player").html(
                "<img class=\"close-icon\" src=\"<?php echo $this->getThemePath(); ?>/img/close.png\" />" +
                "<iframe src=\"http://player.vimeo.com/video/" + videoId + "?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1\" frameborder=\"0\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>"
            ).fadeIn("fast");
            
            $("#video-dimmer").fadeIn("fast");
        });
        
        $("#video-player, #video-dimmer").click(function() {
            $("#video-player, #video-dimmer").fadeOut("fast");
        });
    });
</script>