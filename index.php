<?php

require_once 'includes/bootstrap.php';

$nav->setPage('Home');

$db = DB::getInstance();
$clients = $db->getClients();

?>


<?php include_once 'includes/layouts/header.php';?>

        <!-- DECORATION -->
        <div class="section__container">
            <div class="line line--left"></div>
            <div class="line line--right"></div>
        </div>

        <svg id="A-element" xmlns="http://www.w3.org/2000/svg" width="86" height="90" viewBox="0 0 86 90">
            <path id="A" d="M1388.28,624.809l5.08-17.749h26.39l5.21,17.749h21.29l-28.75-84.6h-21.77l-28.75,84.6h21.3Zm14.79-50.762c1.06-3.549,2.13-8.4,3.43-14.554h0.23l3.44,14.554,4.73,16.448h-16.69Z" transform="translate(-1363.5 -537.5)"/>
        </svg>
        <svg id="R-element" xmlns="http://www.w3.org/2000/svg" width="135.188" height="262.439" viewBox="0 0 135.188 262.439">
            <defs><style>.cls-1 { fill-rule: evenodd; }</style></defs>
            <path id="R" class="cls-1" d="M-0.986,1218.97v-88.45H7.823c13.581,0,19.086,2.2,23.491,9.91l30.832,59.09c7.708,15.78,17.618,19.45,37.072,19.45h35.97v-55.05h-4.4c-9.176,0-15.049-2.94-17.986-8.44l-16.517-31.57c-4.038-7.71-9.176-12.85-16.15-15.78v-0.74l4.037-2.2c5.506-2.57,13.214-9.91,20.554-19.09,7.708-9.91,13.948-27.53,13.948-46.98,0-51.753-34.869-82.585-86.623-82.585H-90.546v55.055h23.858v207.38h65.7Zm0-207.38H22.872c19.087,0,28.63,10.65,28.63,31.57,0,21.65-9.91,32.3-29.731,32.3H-0.986v-63.87Z" transform="translate(0 -956.531)"/>
        </svg>
        <img src="/build/images/digital.png" alt="" id="digital">
        <img src="/build/images/small-shuttle.png" alt="" id="small-shuttle">
        <img src="/build/images/rectangle.png" alt="" id="rectangle">
        <!-- / DECORATION -->

        <div class="section section__main" id="main-section">
            <div class="section__container">
                <div class="section__main-numbering-block">
                    <div class="number-of-section">.01</div>
                </div>
                <div class="section__column section__column--col-sm-offset-4">
                    <div class="section__title">
                        <p class="h2">
                            <?= $lang->text('header.home') ?>
                        </p>
                    </div>
                </div>

                <div class="pagination-el pagination-el__main">
                    <a href="#action-tab-1" class="pagination-el__page active">1</a>
                    <a href="#action-tab-2" class="pagination-el__page">2</a>
                </div>
                <div class="actions__tabs-content">
                    <div id="action-tab-1">
                        <div class="action-block action-block__main-zero">
                            <p class="action-block__number">.00</p>
                            <p class="action-block__inner_text"><?= $lang->text('main-action-00') ?></p>
                        </div>
                        <div class="action-block action-block__main-first">
                            <p class="action-block__number">.01</p>
                            <p class="action-block__inner_text"><?= $lang->text('main-action-01') ?></p>
                        </div>
                        <div class="action-block action-block__main-tenth">
                            <p class="action-block__number">.10</p>
                            <p class="action-block__inner_text"><?= $lang->text('main-action-10') ?></p>
                        </div>
                    </div>
                    <div id="action-tab-2">
                        <div class="action-block action-block__main-zero">
                            <p class="action-block__number">.11</p>
                            <p class="action-block__inner_text"><?= $lang->text('main-action-00-p2') ?></p>
                        </div>
                        <div class="action-block action-block__main-first">
                            <p class="action-block__number">.100</p>
                            <p class="action-block__inner_text"><?= $lang->text('main-action-01-p2') ?></p>
                        </div>
                        <div class="action-block action-block__main-tenth">
                            <p class="action-block__number">.101</p>
                            <p class="action-block__inner_text"><?= $lang->text('main-action-10-p2') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section__activity" id="activity-section">
            <div class="number-of-section number-of-section--second">.02</div>
            <div class="section__container">

                <div class="line line--left" style="height: 100%">
                    <img src="/build/images/decore-el-2.png" alt="" style="position: absolute; right: 1px; top: 500px;">
                </div>
                <div class="line line--right" style="height: 100%">
                    <img src="/build/images/decore-el-7.jpg" alt="" style="position: absolute; bottom: 100px; left: -36px;">
                </div>

                <img src="/build/images/big-rabbit.png" alt="" id="big-rabbit">
                <div class="section__column section__column--col-sm-offset-4">
                    <div class="section__title section__title--whatwe-do">
                        <p class="h2">
                            <?= $lang->text('what-we-do'); ?>
                        </p>
                    </div>
                </div>
                <div class="pagination-el pagination-el__actions">
                    <a href="#our-action-tab-1" class="pagination-el__page pagination-el__page--dark active">1</a>
                    <a href="#our-action-tab-2" class="pagination-el__page pagination-el__page--dark">2</a>
                </div>
                <div class="our-actions__tabs-content">
                    <div id="our-action-tab-1">
                        <div class="action-block action-block__actions-zero">
                            <p class="action-block__number">.00</p>
                            <p class="action-block__title"><?= $lang->text('what-we-do-00-title'); ?></p>
                            <p class="action-block__inner_text action-block__inner_text--second-section"><?= $lang->text('what-we-do-00'); ?></p>
                        </div>
                        <div class="action-block action-block__actions-first">
                            <p class="action-block__number">.01</p>
                            <p class="action-block__title"><?= $lang->text('what-we-do-01-title'); ?></p>
                            <p class="action-block__inner_text action-block__inner_text--second-section"><?= $lang->text('what-we-do-01'); ?></p>
                        </div>
                        <div class="action-block action-block__actions-tenth">
                            <p class="action-block__number">.10</p>
                            <p class="action-block__title"><?= $lang->text('what-we-do-10-title'); ?></p>
                            <p class="action-block__inner_text action-block__inner_text--second-section"><?= $lang->text('what-we-do-10'); ?></p>
                        </div>
                    </div>
                    <div id="our-action-tab-2">
                        <div class="action-block action-block__actions-zero">
                            <p class="action-block__number">.11</p>
                            <p class="action-block__title"><?= $lang->text('what-we-do-00-title-p2'); ?></p>
                            <p class="action-block__inner_text action-block__inner_text--second-section"><?= $lang->text('what-we-do-00-p2'); ?></p>
                        </div>
                        <div class="action-block action-block__actions-first">
                            <p class="action-block__number">.100</p>
                            <p class="action-block__title"><?= $lang->text('what-we-do-01-title-p2'); ?></p>
                            <p class="action-block__inner_text action-block__inner_text--second-section"><?= $lang->text('what-we-do-01-p2'); ?></p>
                        </div>
                        <div class="action-block action-block__actions-tenth">
                            <p class="action-block__number">.101</p>
                            <p class="action-block__title"><?= $lang->text('what-we-do-10-title-p2'); ?></p>
                            <p class="action-block__inner_text action-block__inner_text--second-section"><?= $lang->text('what-we-do-10-p2'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="/build/images/decore-el-1.png" alt="" style="position: absolute; bottom: -46px; left: 626px;">
        </div>
        <div class="section section__clients" id="clients">
            <div class="number-of-section number-of-section--third"><span class="number-of-section__dot">.</span>03</div>
            <img src="/build/images/left-line_second-section.png" alt="" class="clients-left-stripe">
            <img src="/build/images/decore-el-3.png" alt="" class="decore-el-3">
            <img src="/build/images/decore-el-4.jpg" alt="" class="decore-el-4">
            <div id="carrot" class="carrot"></div>
            <img src="/build/images/big-shuttle.png" alt="" style="" id="big-shuttle">
            <div class="section__container">
                <div class="section__row">
                    <div class="section__column section__column--col-sm-offset-4">
                        <div class="section__title section__title--clients">
                            <p class="h2">
                                <?= $lang->text('our-clients') ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="clients">
                    <div class="breadcrumbs__wrapper">
                        <div class="breadcrumbs-content agency-brands_switch">
                            <span class="active"><a href="#tab-brands"><?= $lang->text('brands') ?></a></span>
                                <sup style="padding: 5px; position: relative; top: -20px"><?= count($clients['brand']) ?></sup> /&nbsp;&nbsp;&nbsp;
                            <span><a href="#tab-agency"><?= $lang->text('agency') ?></a></span>
                                <sup style="padding: 5px; position: relative; top: -20px"><?= count($clients['agency']) ?></sup>
                        </div>
                    </div>
                    <div class="clients__tabs-content">
                        <div id="tab-brands" class="clients__grid">
                            <div>
                            <?php
                            foreach ($clients['brand'] as $agency) {
                                ?>
                                <div class="clients__grid-elements">
                                    <img src="/admin/data/clients/icon-<?=$agency['icon_path'];?>" alt="">
                                </div>
                                <?php
                            }
                            ?>
                            </div>
                        </div>
                        <div id="tab-agency" class="clients__grid">
                            <div>
                                <?php
                                foreach ($clients['agency'] as $agency) {
                                    ?>
                                    <div class="clients__grid-elements">
                                        <img src="/admin/data/clients/icon-<?=$agency['icon_path'];?>" alt="">
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div><!-- tabs content -->
                </div>
            </div>
            <img src="/build/images/decore-el-5.png" alt="" class="decore-el-5">
        </div>


<?php include_once 'includes/layouts/footer.php';?>