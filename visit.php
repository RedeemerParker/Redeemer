<?php $this->inc('header.php'); ?>
            <div id="main">
                <h1>
                    Visit
                </h1>
                <div class="menu">
                    <ul>
                        <li class="short">
                            <a href="#what-to-expect">What to expect</a>
                        </li>
                        <li class="short">
                            <a href="#classes">Classes</a>
                        </li>
                        <li class="short">
                            <a href="#worship">Worship</a>
                        </li>
                        <li class="short">
                            <a href="#sermon">Sermon</a>
                        </li>
                    </ul>
                </div>
                <h2 id="what-to-expect">
                    What to expect
                </h2>
                <div class="content">
                    <?php $a = new Area('what-to-expect'); $a->display($c); ?>
                </div>
                <h2 id="classes">
                    Classes
                </h2>
                <div class="content">
                    <div class="section whole">
                        <?php $a = new Area('classes-1'); $a->display($c); ?>
                    </div>
                    <div class="section">
                        <?php $a = new Area('classes-2'); $a->display($c); ?>
                    </div>
                    <div class="section">
                        <?php $a = new Area('classes-3'); $a->display($c); ?>
                    </div>
                    <div class="section">
                        <?php $a = new Area('classes-4'); $a->display($c); ?>
                    </div>
                </div>
                <h2 id="worship">
                    Worship
                </h2>
                <div class="content">
                    <div class="section long">
                        <?php $a = new Area('worship'); $a->display($c); ?>
                    </div>
                    <div class="section short">
                        <a class="video-player-play">
                            <img class="play-icon" src="<?php echo $this->getThemePath(); ?>/img/play.png" />
                            <img src="<?php echo $this->getThemePath(); ?>/img/thumb-music-notes.jpg" />
                            <span class="title">
                                Coming soon
                            </span>
                        </a>
                    </div>
                    <div class="section short">
                        <a class="video-player-play">
                            <img class="play-icon" src="<?php echo $this->getThemePath(); ?>/img/play.png" />
                            <img src="<?php echo $this->getThemePath(); ?>/img/thumb-music-notes.jpg" />
                            <span class="title">
                                Coming soon
                            </span>
                        </a>
                    </div>
                </div>
                <h2 id="sermon">
                    Sermon
                </h2>
                <div class="content">
                    <div class="section short">
                        <a class="video-player-play" href="http://vimeo.com/39830842">
                            <img class="play-icon" src="<?php echo $this->getThemePath(); ?>/img/play.png" />
                            <img src="http://b.vimeocdn.com/ts/274/971/274971793_200.jpg" />
                            <span class="title">
                                The King Has Come
                            </span>
                        </a>
                    </div>
                    <div class="section short">
                        <a class="video-player-play" href="http://vimeo.com/39220127">
                            <img class="play-icon" src="<?php echo $this->getThemePath(); ?>/img/play.png" />
                            <img src="http://b.vimeocdn.com/ts/270/399/270399169_200.jpg" />
                            <span class="title">
                                For Those Who've Given Up On Church
                            </span>
                        </a>
                    </div>
                    <div class="section long">
                        <?php $a = new Area('sermon'); $a->display($c); ?>
                    </div>
                </div>
            </div>
<?php $this->inc('footer2.php'); ?>