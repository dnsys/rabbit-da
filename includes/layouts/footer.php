        <!-- end content -->

        <div class="section section__contacts">
            <div class="section__container">
                <div class="section__column section__column--col-sm-offset-4">
                    <div class="section__title section__title--contacts" id="contacts_anchor">
                        <p class="h2">
                            <?= $lang->text('contacts') ?>
                        </p>
                    </div>
                </div>
                <div class="contact-wrapper" style="position: relative">
                    <div class="contacts-map">
                        <a href="#contact-popup" class="js-popup contacts-map__link">
                            <img src="/build/images/map-img.jpg" alt="">
                        </a>
                        <div class="contact-info">
                            <div class="contact-info__row tel-info"><a href="tel:88954555555">8 895 455-55-55</a></div>
                            <div class="contact-info__row address-info"><?= $lang->text('address') ?><a href="#contact-popup" style="padding: 20px;"></a></div>
                            <div class="contact-info__row email-info"><a href="mailto:hi@rabbit-agency.ru">hi@rabbit-agency.ru</a></div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <a href="#color-scheme" class="js-popup footer__mood">
                        <div class="footer__info footer__img-label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45.969" height="24" viewBox="0 0 45.969 24">
                                <path class="cls-1" d="M210.829,3109.57a28.674,28.674,0,0,0-9.847-8.42,28.146,28.146,0,0,0-6.2-2.33,28.56,28.56,0,0,0-13.589,0,28.127,28.127,0,0,0-6.2,2.33,28.716,28.716,0,0,0-9.844,8.41,0.707,0.707,0,0,0,0,.85,28.626,28.626,0,0,0,9.848,8.43,28.2,28.2,0,0,0,6.2,2.34,28.56,28.56,0,0,0,13.589,0,28.168,28.168,0,0,0,6.2-2.34,28.668,28.668,0,0,0,9.845-8.42A0.705,0.705,0,0,0,210.829,3109.57Zm-1.575.43-0.142.18a26.705,26.705,0,0,1-42.253,0l-0.142-.18,0.142-.18a26.705,26.705,0,0,1,42.253,0Zm-21.269-6.87a6.874,6.874,0,1,0,7.1,6.87A6.995,6.995,0,0,0,187.985,3103.13Zm0,12.3a5.433,5.433,0,1,1,5.606-5.43A5.529,5.529,0,0,1,187.985,3115.43Z" transform="translate(-165 -3098)"/>
                            </svg>
                        </div>
                        <div class="footer__info footer__text-label">
                            M<span class="mood_mobile"><span class="mood_mobile-center">OO</span>D</span>
                        </div>
                    </a>
                    <div class="footer__copyright">
                        <span>&copy; <?= $lang->text('copyright')?>, 2017</span>
                    </div>
                    <div class="footer__info footer__social">
                        <div class="footer__social-icon footer__social-fb">
                            <a href="//www.facebook.com/rabbitdigitalagency/?fref=ts" target="_blank">
                                <svg id="fb-icon" xmlns="http://www.w3.org/2000/svg" width="7.5" height="16" viewBox="0 0 7.5 16">
                                    <path d="M967.983,4417h-3.318v-7.99h-1.659v-2.76h1.659v-1.65c0-2.25.936-3.59,3.6-3.59h2.214v2.76h-1.383c-1.036,0-1.1.38-1.1,1.1l0,1.38h2.507l-0.293,2.76h-2.214V4417Z" transform="translate(-963 -4401)"/>
                                </svg>
                                <div class="twitter-circle"></div>
                            </a>
                        </div>
                        <!--<div class="footer__social-icon footer__social-vk">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9.47" height="11.82" viewBox="0 0 9.47 11.82">
                                    <path d="M1034.62,4410.34a3.212,3.212,0,0,0-1.75-.94v-0.06a2.646,2.646,0,0,0,1.19-1,2.776,2.776,0,0,0,.44-1.54,2.675,2.675,0,0,0-.32-1.31,2.2,2.2,0,0,0-.95-0.91,3.475,3.475,0,0,0-1.26-.42,14.044,14.044,0,0,0-1.98-.1h-4.19v11.82h4.75a7.616,7.616,0,0,0,2.03-.23,3.926,3.926,0,0,0,1.47-.74,3.066,3.066,0,0,0,.9-1.11,3.424,3.424,0,0,0,.34-1.54A2.658,2.658,0,0,0,1034.62,4410.34Zm-3.28-2.26a0.946,0.946,0,0,1-.5.46,1.749,1.749,0,0,1-.63.17c-0.2.01-.56,0.02-1.07,0.02h-0.38v-2.51h0.21c0.53,0,.93.01,1.2,0.02a1.68,1.68,0,0,1,.7.14,0.859,0.859,0,0,1,.45.43,1.323,1.323,0,0,1,.15.59A1.588,1.588,0,0,1,1031.34,4408.08Zm0.69,4.89a1.2,1.2,0,0,1-.59.51,2.555,2.555,0,0,1-.91.21c-0.3.01-.83,0.02-1.61,0.02h-0.16v-2.96h0.55c0.53,0,.96,0,1.27.01a2.341,2.341,0,0,1,.75.12,1.342,1.342,0,0,1,.67.46,1.462,1.462,0,0,1,.22.86A1.517,1.517,0,0,1,1032.03,4412.97Z" transform="translate(-1025.81 -4404.06)"/>
                                </svg>
                            </a>
                        </div>
                        <div class="footer__social-icon footer__social-twitter">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.28" height="11.53" viewBox="0 0 14.28 11.53">
                                    <path d="M1098.99,4406.27a5.975,5.975,0,0,1-1.68.46,2.89,2.89,0,0,0,1.28-1.61,5.656,5.656,0,0,1-1.86.71,2.936,2.936,0,0,0-5.07,1.99,2.84,2.84,0,0,0,.08.66,8.336,8.336,0,0,1-6.04-3.04,2.882,2.882,0,0,0,.91,3.88,2.839,2.839,0,0,1-1.33-.36V4409a2.915,2.915,0,0,0,2.35,2.85,3.249,3.249,0,0,1-.77.1,3.308,3.308,0,0,1-.55-0.05,2.937,2.937,0,0,0,2.73,2.02,5.885,5.885,0,0,1-3.64,1.24,5.221,5.221,0,0,1-.69-0.04,8.35,8.35,0,0,0,4.49,1.31,8.25,8.25,0,0,0,8.34-8.28c0-.12-0.01-0.25-0.01-0.37a5.825,5.825,0,0,0,1.46-1.51h0Z" transform="translate(-1084.72 -4404.91)"/>
                                </svg>
                                <div class="twitter-circle"></div>
                            </a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- / wrapper__content -->
</div><!-- / wrapper -->


<!--POPUPS-->

<!--CONTACTS_POPUP-->
<div id="contact-popup" class="contact-popup mfp-hide">
    <button type="button" class="mfp-close-custom" onClick="closePopup();">
        <img src="/build/images/close-btn.png" alt="">
    </button>
    <div class="contact-popup__map">
        <img src="/build/images/popup-map.jpg" alt="">
        <svg class="contact-popup__marker" xmlns="http://www.w3.org/2000/svg" width="34" height="43" viewBox="0 0 34 43">
            <path class="cls-1" d="M751.941,1481H750v43h1.941v-18.92L784,1493Z" transform="translate(-750 -1481)"/>
        </svg>
    </div>
    <div class="contact-form-wrap">
        <div class="contact-popup__form">
            <div class="contact-popup__form-title">
                <div class="h2 h2--form">
                    <?= $lang->text('contact-form.title') ?>
                </div>
            </div>
            <form action="/includes/SendMail.php" class="contact-popup__form-inputs" method="post">
                <div class="input-label"><?= $lang->text('contact-form.field.name') ?>*</div>
                <input type="text" name="name">
                <div class="input-label"><?= $lang->text('contact-form.field.email') ?></div>
                <input type="email" name="email">
                <div class="input-label"><?= $lang->text('contact-form.field.message') ?>*</div>
                <textarea rows="10" name="message"></textarea>
                <div class="button-wrap">
                    <input type="submit" id="send-form" class="send-form" value="<?= $lang->text('send') ?>">
                </div>
            </form>
        </div>
    </div>
</div>
<!--END_CONTACTS_POPUP-->


<!--CHANGE_COLOR-->
<div id="color-scheme" class="color-scheme mfp-hide">
    <button type="button" class="mfp-close-custom" onClick="closePopup();">
        <img src="/build/images/close-btn.png" alt="">
    </button>
    <div class="color-scheme__switch color-scheme__carrot">
        <div class="color-scheme__wrapper">
            <div class="switch-inner-wrap">
                <div class="switch-title switch-title--carrot">
                    carrot<br/>time
                </div>
                <div class="switch-link">
                    <a href="/includes/switch_theme.php?theme=<?= Themes::THEME_CARROT ?>"><?= $lang->text('install') ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="color-scheme__switch color-scheme__legacy">
        <div class="color-scheme__wrapper">
            <div class="switch-inner-wrap">
                <div class="switch-title switch-title--legacy">
                    ‘80th<br/>
                    legacy
                </div>
                <div class="switch-link">
                    <a href="/includes/switch_theme.php?theme=<?= Themes::THEME_LEGACY ?>"><?= $lang->text('install') ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="color-scheme__switch color-scheme__spring-melody">
        <div class="color-scheme__wrapper">
            <div class="switch-inner-wrap">
                <div class="switch-title switch-title--spring-melody">
                    spring<br/>
                    melody
                </div>
                <div class="switch-link">
                    <a href="/includes/switch_theme.php?theme=<?= Themes::THEME_SPRING ?>"><?= $lang->text('install') ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="color-scheme__switch color-scheme__logo">
        <div class="color-scheme__wrapper">
            <div class="switch-inner-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="164" height="83" viewBox="0 0 164 83">
                    <path id="main-logo" data-name="main-logo" class="big-main-logo" d="M921.615,3516.55a2.223,2.223,0,1,1-1.652-2.68,2.218,2.218,0,0,1,1.652,2.68m15,11.26-0.892.6c-8.3,5.61-19.12,4.04-22.652,3.32l-1.727,4.55,5.124,0.23a6.123,6.123,0,0,1,1.055.15,5.131,5.131,0,0,1-1.532,10.13l-17.009-.81-16.816,3.87a5.663,5.663,0,0,1-2.525,0,5.161,5.161,0,0,1-3.865-3.9,4.913,4.913,0,0,1,.779-3.97,5.432,5.432,0,0,1,2.29-1.83,21.861,21.861,0,0,1-5.21-7.12,6.113,6.113,0,1,1-1.6-11.62c0.074-.47.161-0.93,0.274-1.39a20.615,20.615,0,0,1,13.169-14.57c-4-1.71-9.6-5.06-12.248-11.1-2.83-6.46-1.66-14.38,3.474-23.54l1.461-2.6,1.024,2.8a36.694,36.694,0,0,0,2.729,5.89,45.628,45.628,0,0,1,5.581-7.77l1.87-2.13,0.5,2.79c2.754,15.23,16.927,23.94,21.914,26.57,10.9,3.64,15.636,6.61,24.458,30.43ZM883.6,3479.56c5.023,7.08,11.766,10.68,17.578,13.06-5.311-4.37-11-10.82-13.378-19.58a39.5,39.5,0,0,0-4.2,6.52m49.681,47.15c-8.725-23.32-12.559-24.57-24.835-28.56-1.191-.39-2.448-0.8-3.787-1.25-10.428-3.86-21-8.77-26.932-22.16-3.536,7.26-4.21,13.47-2,18.51,3.071,7,10.9,9.9,13.78,10.75,0.653,0.16,1.249.31,1.788,0.44l4.682,1c0.764,0.12,1.313.17,1.957,0.23,0.327,0.03.67,0.06,1.065,0.1l-0.272,2.73c-0.383-.04-0.719-0.07-1.03-0.1a34.365,34.365,0,0,1-6.132-1.08c-0.381-.09-0.809-0.19-1.249-0.3-7.675,1.2-13.689,6.53-15.352,13.62a17.038,17.038,0,0,0-.411,2.66l-0.143,2.01-1.813-.88a3.01,3.01,0,0,0-.713-0.25,3.374,3.374,0,1,0,1.48,5.79l1.515-1.36,0.687,1.91a19.312,19.312,0,0,0,6.775,8.96,8.867,8.867,0,0,0,3.3,1.39l-0.482,2.7c-0.17-.03-0.347-0.07-0.525-0.11a11.913,11.913,0,0,1-3.036-1.22l-1.091.25a2.869,2.869,0,0,0-1.724,1.08,2.147,2.147,0,0,0-.334,1.78,2.387,2.387,0,0,0,1.814,1.83,2.962,2.962,0,0,0,1.291-.01l17.182-3.94,17.378,0.82a2.408,2.408,0,0,0,2.741-2.21,2.436,2.436,0,0,0-1.964-2.51,3.348,3.348,0,0,0-.549-0.08l-3.335-.15-10.225-.45a1.96,1.96,0,0,1-.249-0.04,1.347,1.347,0,0,1-.968-0.85,1.383,1.383,0,0,1,.333-1.48,10.837,10.837,0,0,0-8.853-18.62l-0.36-2.72a13.417,13.417,0,0,1,4.888.25,13.582,13.582,0,0,1,8.125,20.84l2.763,0.13,2.913-7.68,1.2,0.33s0.131,0.03.349,0.08c2.048,0.49,12.36,2.57,20.362-2.18m15.5-45.83h5.725a5,5,0,0,1,3.649,1.27,3.989,3.989,0,0,1,1.073,2.91,3.891,3.891,0,0,1-2.683,3.89l3.059,4.48h-3.22l-2.72-4.01h-2.128v4.01h-2.755v-12.55Zm5.545,6.1a1.827,1.827,0,0,0,2.111-1.81c0-1.19-.823-1.8-2.164-1.8h-2.737v3.61h2.79Zm13.446-6.19h2.541l5.367,12.64h-2.88l-1.145-2.81h-5.3l-1.144,2.81h-2.809Zm2.9,7.39-1.664-4.07-1.664,4.07h3.328Zm7.524-7.3h5.813a4.545,4.545,0,0,1,3.274,1.11,3.1,3.1,0,0,1-.788,4.88,3.082,3.082,0,0,1,2.343,3.12c0,2.3-1.859,3.44-4.687,3.44H978.2v-12.55Zm5.223,5.08c1.217,0,1.985-.4,1.985-1.37,0-.82-0.645-1.29-1.806-1.29h-2.72v2.66h2.541Zm0.732,5.05c1.217,0,1.951-.43,1.951-1.4,0-.84-0.626-1.36-2.04-1.36h-3.184v2.76h3.273Zm8.518-10.13h5.813a4.53,4.53,0,0,1,3.272,1.11,3.1,3.1,0,0,1-.78,4.88,3.09,3.09,0,0,1,2.34,3.12c0,2.3-1.86,3.44-4.687,3.44h-5.958v-12.55Zm5.223,5.08c1.217,0,1.987-.4,1.987-1.37,0-.82-0.644-1.29-1.807-1.29h-2.721v2.66H997.9Zm0.735,5.05c1.215,0,1.947-.43,1.947-1.4,0-.84-0.625-1.36-2.038-1.36h-3.185v2.76h3.276Zm9.087-10.13h2.76v12.56h-2.76v-12.56Zm10.6,2.55h-3.81v-2.55h10.38v2.55h-3.82v10h-2.75v-10Zm-69.532,22.56h4.884c3.935,0,6.655,2.71,6.655,6.28,0,3.53-2.72,6.27-6.655,6.27h-4.884v-12.55Zm4.884,10.06a3.785,3.785,0,0,0,0-7.57h-2.129v7.57h2.129Zm10.126-10.06h2.754v12.55H963.8v-12.55Zm6.226,6.28a6.442,6.442,0,0,1,6.566-6.5,6.834,6.834,0,0,1,4.92,1.73l-1.735,2.09a4.637,4.637,0,0,0-3.274-1.27,3.976,3.976,0,0,0,.2,7.93,4.335,4.335,0,0,0,2.594-.76v-1.79h-2.772v-2.38h5.438v5.45a8.136,8.136,0,0,1-5.349,1.99,6.281,6.281,0,0,1-6.584-6.49m15.6-6.28h2.754v12.55h-2.754v-12.55Zm9.7,2.55H991.51v-2.55h10.38v2.55h-3.813v10h-2.756v-10Zm12.259-2.64h2.54l5.36,12.64h-2.88l-1.14-2.81h-5.3l-1.14,2.81h-2.81Zm2.89,7.39-1.66-4.07-1.66,4.07h3.32Zm7.84-7.3h2.76v10.04h6.24v2.51h-9v-12.55Zm-66.224,25.02h2.541l5.367,12.64h-2.88l-1.145-2.81h-5.3l-1.144,2.81h-2.81Zm2.9,7.39-1.664-4.07-1.664,4.07h3.328Zm6.476-1.02a6.442,6.442,0,0,1,6.566-6.5,6.874,6.874,0,0,1,4.92,1.72l-1.735,2.1a4.637,4.637,0,0,0-3.274-1.27,3.976,3.976,0,0,0,.2,7.93,4.407,4.407,0,0,0,2.594-.76v-1.79h-2.773v-2.39h5.439v5.46a8.136,8.136,0,0,1-5.349,1.99,6.287,6.287,0,0,1-6.584-6.49m15.476-6.28h9.445v2.45h-6.708v2.55h5.9v2.46h-5.9v2.63h6.8v2.46h-9.534V3531.1Zm12.882,0h2.54l5.868,7.73v-7.73h2.723v12.55H998.6l-6.065-7.98v7.98h-2.719V3531.1Zm14.111,6.28a6.376,6.376,0,0,1,6.53-6.5,6.269,6.269,0,0,1,4.84,2.05l-1.64,1.9a4.334,4.334,0,0,0-3.22-1.4,3.959,3.959,0,0,0,0,7.89,4.494,4.494,0,0,0,3.29-1.47l1.75,1.88a6.658,6.658,0,0,1-11.55-4.35m17.5,1.32-4.81-7.6h3.22l2.99,5.04,3.04-5.04H1029l-4.81,7.55v5h-2.76v-4.95Z" transform="translate(-865 -3467)"/>
                </svg>
            </div>
        </div>
    </div>
</div>
<!--END_CHANGE_COLOR-->

<!--END_POPUPS-->
<script type="text/javascript" src="/build/js/vendor.js"></script>
<script type="text/javascript" src="/build/js/application.js"></script>
</body>
</html>