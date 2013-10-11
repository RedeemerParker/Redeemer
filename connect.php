<?php $this->inc('header.php'); ?>
            <div id="main">
                <h1>
                    Connect
                </h1>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="#our-community">Our community</a>
                        </li>
                        <li>
                            <a href="#community-groups">Community groups</a>
                        </li>
                        <li>
                            <a href="#children-and-youth-groups">Children and youth groups</a>
                        </li>
                    </ul>
                </div>
                <h2 id="our-community">
                    Our community
                </h2>
                <div class="content">
                    <div class="section long">
                        <?php $a = new Area('our-community-1'); $a->display($c); ?>
                    </div>
                    <div class="section long">
                        <?php $a = new Area('our-community-2'); $a->display($c); ?>
                    </div>
                </div>
                <h2 id="community-groups">
                    Community groups
                </h2>
                <div class="content">
                    <div class="section long">
                        <?php $a = new Area('community-groups-1'); $a->display($c); ?>
                    </div>
                    <div class="section long">
                        <?php $a = new Area('community-groups-2'); $a->display($c); ?>
                    </div>
                </div>
                <h2 id="children-and-youth-groups">
                    Children and youth groups
                </h2>
                <div class="content">
                    <div class="section long">
                        <?php $a = new Area('children-and-youth-groups-1'); $a->display($c); ?>
                    </div>
                    <div class="section long">
                        <?php $a = new Area('children-and-youth-groups-2'); $a->display($c); ?>
                    </div>
                </div>
            </div>
<?php $this->inc('footer2.php'); ?>