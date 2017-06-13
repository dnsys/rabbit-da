<?php

require_once 'includes/bootstrap.php';

$nav->setPage('Cases');

$db = DB::getInstance();
$cases = $db->getCase();

$count = $db->getAllCountRow();

?>


<?php include_once 'includes/layouts/header.php'; ?>

        <div class="section section--cases">
            <div class="section__inner">

                <div class="section__container">
                    <div class="line line--left"></div>
                    <div class="line line--right">
                        <div id="decorate-cases-wrapper" style="position: absolute; top: 850px; right: 0;">
                            <img id="decorate-cases" src="/build/images/decoration-cases-page.png" alt=""
                                 style="position: absolute; right: 0; transform: translateX(50%)">
                        </div>
                    </div>
                </div>
                <img id="digital" src="/build/images/digital.png" alt=""
                     style="position: absolute; top: 130px; right: 5%">
                <svg id="R-element" xmlns="http://www.w3.org/2000/svg" width="135.188" height="262.439" viewBox="0 0 135.188 262.439">
                    <path id="R" class="cls-1" d="M-0.986,1218.97v-88.45H7.823c13.581,0,19.086,2.2,23.491,9.91l30.832,59.09c7.708,15.78,17.618,19.45,37.072,19.45h35.97v-55.05h-4.4c-9.176,0-15.049-2.94-17.986-8.44l-16.517-31.57c-4.038-7.71-9.176-12.85-16.15-15.78v-0.74l4.037-2.2c5.506-2.57,13.214-9.91,20.554-19.09,7.708-9.91,13.948-27.53,13.948-46.98,0-51.753-34.869-82.585-86.623-82.585H-90.546v55.055h23.858v207.38h65.7Zm0-207.38H22.872c19.087,0,28.63,10.65,28.63,31.57,0,21.65-9.91,32.3-29.731,32.3H-0.986v-63.87Z" transform="translate(0 -956.531)"/>
                </svg>
                <div id="cells-wrapper" style="position: absolute; top: 1150px; left: 13%">
                    <img id="cells" src="/build/images/cells-decoration.png" alt="" style="position: absolute;">
                </div>
                <div id="carrot-wrapper" style="position: absolute; top: 2220px; right: 5%;">
                    <div id="carrot-2" class="carrot" style="position: absolute; right: 0"></div>
                </div>

                <div class="section__container">
                    <div class="section__column section__column--col-sm-offset-3 section__column--col-md-offset-4">
                        <div class="section__title">
                            <h1 class="h2">
                                <?= $lang->text('header.cases') ?>
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="section__container">
                    <div class="section__row">
                        <div class="section__column section__column--col-sm-10 section__column--col-sm-offset-2">
                            <!-- cases -->
                            <div class="cases">
                                <?php
                                $inc = 1;
                                $index = 1;
                                foreach (array_chunk($cases, 2, true) as $key => $array) {
                                    $one = current($array);
                                    $two = next($array);
                                    ?>
                                    <div class="cases__row">

                                        <div class="cases__item cases__item--pad-right <?= ( $inc % 2 != 0) ? 'cases__item--offset-top' : '' ?>">
                                            <a href="/case.php?id=<?= $one["id"] ?>" class="cases__item-wrapper">
                                                <div class="cases__item-bg"
                                                     style="background-image: url(/admin/data/cases/icon-<?= $one["icon_path"] ?>)"></div>
                                                <div class="cases__item-bg-hover"></div>
                                                <div class="cases__border-hover"></div>
                                                <div class="cases__item-inner">
                                                    <div class="cases__item-number">.00<?=$index++?></div>
                                                    <div class="cases__item-title">
                                                        <?= $one["name{$lang_prefix}"] ?>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <?php if($two){ ?>

                                            <div class="cases__item cases__item--pad-left <?= ( $inc % 2 == 0) ? 'cases__item--offset-top' : '' ?>">
                                                <a href="/case.php?id=<?= $two["id"] ?>" class="cases__item-wrapper">
                                                    <div class="cases__item-bg"
                                                         style="background-image: url(/admin/data/cases/icon-<?= $two["icon_path"] ?>)"></div>
                                                    <div class="cases__item-bg-hover"></div>
                                                    <div class="cases__border-hover"></div>
                                                    <div class="cases__item-inner">
                                                        <div class="cases__item-number">.00<?=$index++?></div>
                                                        <div class="cases__item-title">
                                                            <?= $two["name{$lang_prefix}"] ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        <?php } ?>
                                    </div>
                                    <?php
                                    $inc++;
                                }
                                ?>
                            </div>
                            <!-- / cases -->
                        </div>
                    </div>
                    <div class="section__row">
                        <div class="section__column section__column--col-sm-offset-4" style="padding-top: 30px">
                            <?php
                                if($count > 10 )
                                {
                            ?>
                            <a class="btn btn--primary js-show-more" id="show-more" role="button" data-page="1">
                                <?= $lang->text('show-more') ?>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

<?php include_once 'includes/layouts/footer.php'; ?>
