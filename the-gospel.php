<?php $this->inc('header.php'); ?>
            <div id="main">
                <h1>
                    The Gospel
                </h1>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="#who-is-jesus">Who is Jesus?</a>
                        </li>
                        <li>
                            <a href="#what-does-jesus-mean-for-me">
                                What does Jesus<br />
                                mean for me?
                            </a>
                        </li>
                        <li>
                            <a href="#how-do-i-receive-eternal-life">
                                How do I receive<br />
                                eternal life?
                            </a>
                        </li>
                    </ul>
                </div>
                <h2 id="who-is-jesus">
                    Who is Jesus?
                </h2>
                <div class="content">
                    <div class="section long">
                        <?php $a = new Area('who-is-jesus-1'); $a->display($c); ?>
                    </div>
                    <div class="section long">
                        <?php $a = new Area('who-is-jesus-2'); $a->display($c); ?>
                    </div>
                </div>
                <h2 id="what-does-jesus-mean-for-me">
                    What does Jesus<br />
                    mean for me?
                </h2>
                <div class="content">
                    <div class="section">
                        <?php $a = new Area('does-does-jesus-mean-for-me-1'); $a->display($c); ?>
                    </div>
                    <div class="section">
                        <?php $a = new Area('does-does-jesus-mean-for-me-2'); $a->display($c); ?>
                    </div>
                    <div class="section">
                        <?php $a = new Area('does-does-jesus-mean-for-me-3'); $a->display($c); ?>
                    </div>
                </div>
                <h2 id="how-do-i-receive-eternal-life">
                    How do I receive<br />
                    eternal life?
                </h2>
                <div class="content">
                    <div class="section long">
                        <?php $a = new Area('how-do-i-receive-eternal-life-1'); $a->display($c); ?>
                    </div>
                    <div class="section long">
                        <?php $a = new Area('how-do-i-receive-eternal-life-2'); $a->display($c); ?>
                        <p>
                            <a class="button" href="<?php echo $this->url('visit'); ?>">What now? &#9654;</a>
                        </p>
                    </div>
                </div>
            </div>
<?php $this->inc('footer2.php'); ?>