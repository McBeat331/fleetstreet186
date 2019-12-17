<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // Подключаем header.php ?>
<div id="pagepiling">
    <div class="section services" id="section0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="main-page error-page">
                        <div class="error-bg">
                            <img id="main-logo" class="main-logo" src="<?php echo get_template_directory_uri();?>/img/logo_about.png" alt="logo" title="logo">
                            <h1>Fleet St. 186</h1>
                            <h2>семейная парикмахерская</h2>
                            <a href="<?php echo get_home_url();?>">
                                <div class="fleet-button main-shape">
                                    <span>На главную</span>
                                    <div class="edge top"></div>
                                    <div class="edge left"></div>
                                    <div class="corner top left"></div>
                                    <div class="corner top right"></div>
                                    <div class="corner bottom left"></div>
                                    <div class="corner bottom right"></div>
                                </div>
                            </a>
                        </div>
                        <div class="error-message">
                            <h3>404</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); // подключаем footer.php ?>