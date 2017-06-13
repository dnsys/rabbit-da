<?php

require_once 'includes/bootstrap.php';

$nav->setPage('Case');

$db = DB::getInstance();
$case = $db->getCaseById($_GET['id']);
$prev = $db->getPrevCase($_GET['id']);
$next = $db->getNextCase($_GET['id']);


?>


<?php include_once 'includes/layouts/header.php';?>

        <!-- DECORATION -->
        <div class="section__container">
            <!--<img src="/images/left-line-2.png" alt="" style="position: absolute; left: 26.8%;">-->
            <!--<img src="/images/right-line-2.png" alt="" style="position: absolute; right: 11.7%">-->
            <div class="line line--left">
                <img src="/build/images/decore-el-6.png" alt="" style="position: absolute;top: 2315px;right: 1px;">
            </div>
            <div class="line line--right"></div>
        </div>

        <img id="digital" src="/build/images/digital.png" alt="" style="position: absolute; top: 585px; left: -3%">
        <svg id="A-element" style="top: 800px" xmlns="http://www.w3.org/2000/svg" width="86" height="90" viewBox="0 0 86 90">
            <path id="A" d="M1388.28,624.809l5.08-17.749h26.39l5.21,17.749h21.29l-28.75-84.6h-21.77l-28.75,84.6h21.3Zm14.79-50.762c1.06-3.549,2.13-8.4,3.43-14.554h0.23l3.44,14.554,4.73,16.448h-16.69Z" transform="translate(-1363.5 -537.5)"/>
        </svg>
        <svg id="R-element" xmlns="http://www.w3.org/2000/svg" width="135.188" height="262.439" viewBox="0 0 135.188 262.439">
            <path id="R" class="cls-1" d="M-0.986,1218.97v-88.45H7.823c13.581,0,19.086,2.2,23.491,9.91l30.832,59.09c7.708,15.78,17.618,19.45,37.072,19.45h35.97v-55.05h-4.4c-9.176,0-15.049-2.94-17.986-8.44l-16.517-31.57c-4.038-7.71-9.176-12.85-16.15-15.78v-0.74l4.037-2.2c5.506-2.57,13.214-9.91,20.554-19.09,7.708-9.91,13.948-27.53,13.948-46.98,0-51.753-34.869-82.585-86.623-82.585H-90.546v55.055h23.858v207.38h65.7Zm0-207.38H22.872c19.087,0,28.63,10.65,28.63,31.57,0,21.65-9.91,32.3-29.731,32.3H-0.986v-63.87Z" transform="translate(0 -956.531)"/>
        </svg>
        <img src="/build/images/small-shuttle.png" alt="" id="small-shuttle" style="top: 850px;">
        <div id="carrot-wrapper" style="position: absolute; top: 2220px; right: 5%;">
            <div id="carrot-2" class="carrot" style="position: absolute; right: 0"></div>
        </div>
        <img src="/build/images/rectangle.png" alt="" style="position: absolute; top: 2250px; right: 5%">
        <!-- / DECORATION -->

        <div class="section section--cases-item">
            <div class="section__inner">

                <div class="case-page">
                    <img src="/admin/data/cases/cover-<?=$case['cover_path']?>" alt="" class="case-page__promo">
                    <div class="section__container">
                        <div class="section__column section__column--col-sm-offset-2 section__column--col-md-offset-3">
                            <div class="section__title">
                                <h1 class="h3">
                                    <?=$case["name{$lang_prefix}"]?>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="section__container">
                        <div class="section__row">
                            <div class="section__column section__column--col-md-5 section__column--col-sm-offset-2 section__column--col-md-offset-3">
                                <div class="case-page__tasks">
                                    <?php
                                        if($case["questions{$lang_prefix}"] != '') {
                                            ?>
                                            <span class="section__number">.001</span>
                                            <h2 class="h4"><?= $lang->text('case-page.tasks') ?></h2>
                                            <div class="case-page__text">
                                                <p>
                                                    <?= $case["questions{$lang_prefix}"] ?>
                                                </p>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="section__row">
                            <div class="section__column section__column--col-sm-offset-2 section__column--col-md-offset-3">
                                <?php if($case["solution{$lang_prefix}"] !== ''){ ?>
                                <div class="case-page__solution">
                                    <span class="section__number">.002</span>
                                    <h2 class="h4"><?= $lang->text('case-page.solution') ?></h2>
                                    <div class="case-page__text">
                                        <p>
                                            <?=$case["solution{$lang_prefix}"]?>
                                        </p>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="section__slider">
                        <div class="case-page__slider">
                            <div class="case-page__slider-wrapper case-page__slider-wrapper--bg">
                                <div class="case-page__carousel-bg owl-carousel">
                                    <?php foreach ($db->getSliderCase($case['id']) as $slid) {
                                        echo Helpers::printSlid($slid['icon_path']);
                                    }
                                    ?>
                                </div>
                                <div class="case-page__carousel owl-carousel">
                                    <?php foreach ($db->getSliderCase($case['id']) as $slid){
                                        echo Helpers::printSlid($slid['icon_path']);
                                    } ?>

                                </div>
                            </div>
                            <div class="case-page__slider-wrapper">
                                <div class="case-page__slider-nav">
                                    <div class="case-page__slider-counter">0 / 0</div>
                                </div>
                                <div class="case-page__slider-title">
                                    <?=$case["slider_name{$lang_prefix}"]?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section__container">
                        <div class="section__column section__column--col-sm-10 section__column--col-md-8  section__column--col-sm-offset-2 section__column--col-md-offset-3">
                            <?php if($case["result{$lang_prefix}"] !== ''){ ?>
                                <div class="case-page__result">
                                    <span class="section__number">.003</span>
                                    <h2 class="h4"><?= $lang->text('case-page.result') ?></h2>
                                    <div class="case-page__text">
                                        <?=$case["result{$lang_prefix}"]?>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="case-page__pagination">
                                <?php if($prev) {?>
                                    <a href="/case.php?id=<?=$prev['id']?>" class="case-page__paginate-link case-page__paginate-link--prev"><?= $lang->text('project.prev') ?></a>
                                <?php } ?>
                                <?php if($next) {?>
                                    <a href="/case.php?id=<?=$next['id']?>" class="case-page__paginate-link case-page__paginate-link--next"><?= $lang->text('project.next') ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

<?php include_once 'includes/layouts/footer.php';?>
