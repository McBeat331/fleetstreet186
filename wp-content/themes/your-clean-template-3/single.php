<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>

<div onmouseover="hoverSidebar()" class="call-sidebar"></div>
    <!--sticky sidebar-->
<div class="sidebar-small sticky-top" id="sidebar-small" onmouseover="hoverSidebar()" onmouseout="hideSidebar()">
    <span class="sidebar-close" onclick="closeNav()">&times;</span>
    <span class="sidebar-close-small" onclick="closeFullNav()">&times;</span>
    <a href="tel:+380936335432">
        <div class="small-phone">Позвонить</div>
    </a>
    <div class="player">
        <p class="player-text" id="player-text" onclick="play()">Вкл. плеер</p>
        <audio id="audio" src="<?php echo get_template_directory_uri();?>/img/music.mp3" preload="auto" loop="loop"></audio>
    </div>
    <div class="main-navigation">
        <nav>
            <ul>
                <li><a href="<?php echo get_home_url();?>/#firstPage">Главная</a></li>
                <li><a href="<?php echo get_home_url();?>/#secondPage">О нас</a></li>
                <li><a href="<?php echo get_home_url();?>/#3rdPage">Услуги</a></li>
                <li><a href="<?php echo get_home_url();?>/#4thPage">Контакты</a></li>
            </ul>
        </nav>
    </div>
    <div class="socials">
        <a href="https://www.facebook.com/FleetStreet.186" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a class="second" href="https://instagram.com/fleetstreet.186" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </div>
    <div class="order" data-toggle="modal" data-target="#modal-2">
        <div class="order-call">
            <p>Заказать </br> обратный </br> звонок</p>
        </div>
        <div class="order-image">

        </div>
    </div>
    <div class="phone-numbers">
        <a class="tel" href="tel:+380988984133">+380 98 898–41–33</a>
        </br>
        <a class="tel" href="tel:+380936335432">+380 93 633–54–32</a>
    </div>
    <div class="made-by">
        <p>Created by<a href="http://greatpro.com.ua/"> Great Pro</a></p>
        <p>© Fleet Street.186 2016. </p>
    </div>
</div>

<div id="pagepiling">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
    <div class="section services services-inner pp-scrollable" id="services-inner">
        <div class="container-fluid">
            <div class="row">
                <span class="sidebar-button" onclick="openNav()">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </span>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <span class="sidebar-button-small" onclick="openFullNav()">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </span>
                    <div class="row">
                        <div class="services-header-inner">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-7 no-gutter-left">
                                <div class="all-line"></div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                                <div class="services-title">
                                    <h1 class="title">Услуги</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 left-sidebar">
                            <div class="men-menu">
                                <p>Мужчинам</p>
                                <ul class="men">
                                    <li><a href="/strizhka-muzhskaya/" <?php if(get_permalink()==get_home_url().'/strizhka-muzhskaya/') echo 'class="active"'?>>Стрижка</a></li>
                                    <li><a href="/oformlenie-borody/" <?php if(get_permalink()==get_home_url().'/oformlenie-borody/') echo 'class="active"'?>>Оформление бороды</a></li>
                                    <li><a href="/dopolnitelnye-uslugi-muzhchinam/" <?php if(get_permalink()==get_home_url().'/dopolnitelnye-uslugi-muzhchinam/') echo 'class="active"'?>>Дополнительные услуги</a></li>
                                    <li><a href="/uhod-za-rukami-i-nogami/" <?php if(get_permalink()==get_home_url().'/uhod-za-rukami-i-nogami/') echo 'class="active"'?>>Уход за руками и ногами</a></li>
                                </ul>
                            </div>
                            <div class="women-menu">
                                <p>Женщинам</p>
                                <ul class="women">
                                    <li><a href="/strizhka-zhenskaya/" <?php if(get_permalink()==get_home_url().'/strizhka-zhenskaya/') echo 'class="active"'?>>Стрижка</a></li>
                                    <li><a href="/pokraska/" <?php if(get_permalink()==get_home_url().'/pokraska/') echo 'class="active"'?>>Окрашивание волос</a></li>
                                    <li><a href="/ukladka-volos/" <?php if(get_permalink()==get_home_url().'/ukladka-volos/') echo 'class="active"'?>>Укладка волос</a></li>
                                    <li><a href="/uhod-za-volosami/" <?php if(get_permalink()==get_home_url().'/uhod-za-volosami/') echo 'class="active"'?>>Уход за волосами</a></li>
                                    <li><a href="/dopolnitelnye-uslugi-zhenshhinam/" <?php if(get_permalink()==get_home_url().'/dopolnitelnye-uslugi-zhenshhinam/') echo 'class="active"'?>>Дополнительные услуги</a></li>
                                    <li><a href="/uhod-za-rukami-i-nogami-zhenshhinam/" <?php if(get_permalink()==get_home_url().'/uhod-za-rukami-i-nogami-zhenshhinam/') echo 'class="active"'?>>Уход за руками и ногами</a></li>
                                    <li><a href="/uslugi-brovista/" <?php if(get_permalink()==get_home_url().'/uslugi-brovista/') echo 'class="active"'?>>Окрашивание бровей, ресниц</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 price-inner-content">
                            <div class="top-content">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="services-hide">
                                        <div class="nav-button">
                                            <div class="previous"><a href="/#3rdPage"><span aria-hidden="true">&larr;</span>Назад</a></div>
                                        </div>
                                    </div>
                                    <h3><?php the_title(); // заголовок поста ?></h3>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5 col-tiny-12">
                                    <?php the_content(); // контент ?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 col-tiny-12">
                                    <div class="fleet-button main-shape" data-toggle="modal" data-target="#modal-1">
                                        <span>Записаться</span>
                                        <div class="edge top"></div>
                                        <div class="edge left"></div>
                                        <div class="corner top left"></div>
                                        <div class="corner top right"></div>
                                        <div class="corner bottom left"></div>
                                        <div class="corner bottom right"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-content">
                                <div class="col-xs-offset-2 col-xs-8 price-block-small">
                                    <?php the_field('price'); ?>
                                </div>
                                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-7 col-md-7 col-sm-7 col-xs-10 col-tiny-12">
                                    <div class="slider-wrapper">
                                        <div class="main-shape" id="photo-inner">
											<?php the_post_thumbnail('big-thumb'); ?>
                                            <div class="edge top"></div>
                                            <div class="edge left"></div>
                                            <div class="corner top left"></div>
                                            <div class="corner top right"></div>
                                            <div class="corner bottom left"></div>
                                            <div class="corner bottom right"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 price-block">
                                    <?php the_field('price'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php endwhile; // конец цикла ?>
</div>

<?php get_footer(); // подключаем footer.php ?>
