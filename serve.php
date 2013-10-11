<?php $this->inc('header.php'); ?>
            <div id="main">
                <h1>
                    Serve
                </h1>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="#our-mission">Our mission</a>
                        </li>
                        <li>
                            <a href="#in-house-ministries">In-house ministries</a>
                        </li>
                        <li>
                            <a href="#outreach-ministries">Outreach ministries</a>
                        </li>
                    </ul>
                </div>
                <h2 id="our-mission">
                    Our mission
                </h2>
                <div class="content">
                    <div class="section long">
                        <?php $a = new Area('our-mission-1'); $a->display($c); ?>
                    </div>
                    <div class="section long">
                        <?php $a = new Area('our-mission-2'); $a->display($c); ?>
                    </div>
                </div>
                <h2 id="in-house-ministries">
                    In-house ministries
                </h2>
                <div class="content">
                    <div class="section long">
                        <?php $a = new Area('in-house-ministries-1'); $a->display($c); ?>
                    </div>
                    <div class="section long">
                        <?php $a = new Area('in-house-ministries-2'); $a->display($c); ?>
                    </div>
                </div>
                <h2 id="outreach-ministries">
                    Outreach ministries
                </h2>
                <div class="content">
                    <div class="section long">
                        <?php $a = new Area('outreach-ministries-1'); $a->display($c); ?>
                    </div>
                    <div class="section long">
                        <?php $a = new Area('outreach-ministries-2'); $a->display($c); ?>
                    </div>
                </div>
            </div>
<?php $this->inc('footer2.php'); ?>