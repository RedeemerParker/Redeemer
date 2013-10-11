<script>
    $(function() {
        $.getJSON("http://www.vimeo.com/api/v2/user8586401/videos.json?callback=?", {format: "json"}, function(data) {
            showThumbs(data);
        });
        
        function showThumbs(videos) {
            $("#sermons .section.short").remove();
            
            for (var i = 0; i < 4; i++) {
                var desc = videos[i].description,
                    titleLength = desc.indexOf("<br />"),
                    title = desc.substring(0, titleLength),
                    rest = desc.substring(titleLength + 7);
                
                $("#sermons").append(
                    "<div class=\"section short\">" +
                        "<a class=\"video-player-play\" href=\"" + videos[i].url + "\">" +
                            "<img class=\"play-icon\" src=\"<?php echo $this->getThemePath(); ?>/img/play.png\" />" +
                            "<img src=\"" + videos[i].thumbnail_medium + "\" />" +
                            "<p class=\"title\">" +
                                title +
                            "</p>" +
                            "<p class=\"desc\">" +
                                rest +
                            "</p>" +
                        "</a>" +
                    "</div>"
                );
            }
            
            $("#sermons .section.short").each(function(j) {
                var $item = $(this).hide();
                
                setTimeout(function() {
                    $item.fadeIn();
                }, 100 * j);
            });
        }
    });
</script>