<?php $this->inc('header.php'); ?>
            <div id="slideshow">
                <ul>
                    <li>
                        <a href="#slide-1">01</a>
                    </li>
                    <li>
                        <a href="#slide-2">02</a>
                    </li>
                    <li>
                        <a href="#slide-3">03</a>
                    </li>
                </ul>
                <div id="slide-1">
                    <a href="<?php echo $this->url('the-gospel'); ?>#who-is-jesus">
                        <img src="<?php echo $this->getThemePath(); ?>/img/slide-grunge-jesus.jpg" />
                    </a>
                </div>
                <div id="slide-2">
                    <a href="<?php echo $this->url('the-gospel'); ?>#how-do-i-receive-eternal-life">
                        <img src="<?php echo $this->getThemePath(); ?>/img/slide-cross.jpg" />
                    </a>
                </div>
                <div id="slide-3">
                    <a href="http://www.viewthestory.com/2969">
                        <img src="<?php echo $this->getThemePath(); ?>/img/slide-foliage.jpg" />
                    </a>
                </div>
            </div>
            <div id="sermons">
                <h3>
                    Latest sermons | <a href="http://vimeo.com/user8586401/videos">All sermons</a>
                </h3>
                <div class="section short">
                    <a class="video-player-play" href="http://vimeo.com/41714570">
                        <img class="play-icon" src="<?php echo $this->getThemePath(); ?>/img/play.png" />
                        <img src="http://b.vimeocdn.com/ts/294/416/294416365_200.jpg" />
                        <p class="title">
                            Good Friday
                        </p>
                        <p class="desc">
                            Pastor Steve Reese<br>
                            April 6, 2012
                        </p>
                    </a>
                </div>
                <div class="section short">
                    <a class="video-player-play" href="http://vimeo.com/41711927">
                        <img class="play-icon" src="<?php echo $this->getThemePath(); ?>/img/play.png" />
                        <img src="http://b.vimeocdn.com/ts/294/416/294416555_200.jpg" />
                        <p class="title">
                            Preparing for Rebuilding
                        </p>
                        <p class="desc">
                            Pastor Steve Reese<br>
                            April 29, 2012
                        </p>
                    </a>
                </div>
                <div class="section short">
                    <a class="video-player-play" href="http://vimeo.com/41667313">
                        <img class="play-icon" src="<?php echo $this->getThemePath(); ?>/img/play.png" />
                        <img src="http://b.vimeocdn.com/ts/294/416/294416558_200.jpg" />
                        <p class="title">
                            Handling Naysayers and Opposition
                        </p>
                        <p class="desc">
                            Pastor Steve Reese<br>
                            May 6, 2012
                        </p>
                    </a>
                </div>
                <div class="section short">
                    <a class="video-player-play" href="http://vimeo.com/41291854">
                        <img class="play-icon" src="<?php echo $this->getThemePath(); ?>/img/play.png" />
                        <img src="http://b.vimeocdn.com/ts/294/416/294416560_200.jpg" />
                        <p class="title">
                            Prayer That Moves God
                        </p>
                        <p class="desc">
                            Pastor Steve Reese<br>
                            April 22, 2012
                        </p>
                    </a>
                </div>
            </div>
<?php $this->inc('footer.php'); ?>