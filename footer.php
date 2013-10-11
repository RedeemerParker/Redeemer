        </div>
        <div id="footer">
            <div class="container">
                <div class="section">
                    <h3>
                        Contact Us
                    </h3>
                    <?php $ga = new GlobalArea('footer-contact-us'); $ga->display($c); ?>
                </div>
                <div class="section">
                    <h3>
                        Meeting Times
                    </h3>
                    <?php $ga = new GlobalArea('footer-meeting-times'); $ga->display($c); ?>
                </div>
                <div class="section">
                    <h3>
                        Location
                    </h3>
                    <?php $ga = new GlobalArea('footer-location'); $ga->display($c); ?>
                </div>
            </div>
        </div>
        <script src="<?php echo $this->getThemePath(); ?>/js/respond.min.js"></script>
        <script src="<?php echo $this->getThemePath(); ?>/js/jquery.tabbler.min.js"></script>
        <script src="<?php echo $this->getThemePath(); ?>/js/tabbler.js"></script>
        <?php $this->inc('js/video-player.php'); ?>
        <?php $this->inc('js/get-videos.php'); ?>
        <?php Loader::element('footer_required'); ?>
    </body>
</html>