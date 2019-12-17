<?php
/**
 * Главная страница (front-page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 

<?php get_sidebar(); // подключаем sidebar.php ?>

    <div id="pagepiling" data-spy="scroll" data-target="#navbar-main">
        <div class="section main pp-scrollable" id="firstPage">
            <div class="container-fluid">
                <div class="row">
                    <span class="sidebar-button" onclick="openNav()">
                         <i class="fa fa-bars" aria-hidden="true"></i>
                    </span>
                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <span class="sidebar-button-small" onclick="openFullNav()">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                        <div class="small-phone" data-toggle="modal" data-target="#modal-1"><i class="fa fa-angle-double-down" aria-hidden="true"></i>Записаться</div>
                        <div class="main-page">

                            <div id="canv"></div>
                            <div id="cap1">
							    <h1>Fleet St. 186</h1>
                                <h2>семейная парикмахерская</h2>
							</div>
                            <div class="fleet-button main-shape" id="main-button" data-toggle="modal" data-target="#modal-1">
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
                </div>
            </div>
        </div>
        <div class="section about pp-scrollable" id="secondPage">
            <div class="container-fluid">
                <div class="row">
                    <span class="sidebar-button" onclick="openNav()">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </span>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <span class="sidebar-button-small" onclick="openFullNav()">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                        <div class="small-phone" data-toggle="modal" data-target="#modal-1"><i class="fa fa-angle-double-down" aria-hidden="true"></i>Записаться</div>

                        <div class="row">
                            <div class="about-header" >
                                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-5 col-tiny-3 no-gutter-left">
                                    <div class="all-line"></div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-7 col-tiny-9">
                                    <div class="about-title">
                                        <h1 class="title" >Fleet Street. 186</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-4 col-md-offset-3 col-sm-offset-2 col-lg-5 col-md-6 col-sm-8 col-xs-9 col-tiny-12">
                                <div class="content-text">
                                    <p>Это семейная парикмахерская, которая сочетает в себе лучшие традиции классических английских барбершопов, салонов красоты и бесподобный интерьер.</p>
                                    <p>Неформальная атмосфера уюта и дружелюбия, в сочетании с профессионализмом мастеров, предназначены для мужчин и женщин, которым не безразличны свой стиль.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="services-wrapper">
                                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 col-tiny-10">
                                    <div class="services haircut">
                                        <h3>Стрижем</h3>
                                        <p>Любите эксперименты? Не вопрос. Мы знаем все модные тенденции и готовы воплотить их для Вас</p>
                                        <div class="vertical-line"></div>
                                    </div>
                                </div>
                                <div class="col-sm-offset-0 col-xs-offset-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 col-tiny-10">
                                    <div class="services shaving">
                                        <h3>Бреем</h3>
                                        <p>Красивые усы и ухоженная борода — настоящее украшение каждого мужчины.</p>
                                        <div class="vertical-line"></div>
                                    </div>
                                </div>
                                <div class="col-sm-offset-0 col-xs-offset-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 col-tiny-10">
                                    <div class="services cares">
                                        <h3>Ухаживаем</h3>
                                        <p>Ухоженные руки и изящные ногти — часть успешного образа современных мужчин и женщин.</p>
                                        <div class="vertical-line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-3 col-md-3 col-sm-3 col-xs-4 col-tiny-12">
                                <div class="worker-wrapper">
                                    <div class="main-shape">
                                        <img src="<?php echo get_template_directory_uri();?>/img/worker2.jpeg" alt="worker3" width="175px">
                                    </div>
                                    <h4>Катя</h4>
                                    <h5>женский зал</h5>
                                    <p></p>
                                </div>
                                <div class="worker-frame"></div>
                            </div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 col-tiny-12">
                                <div class="worker-wrapper">
                                    <div class="main-shape">
									    <img src="<?php echo get_template_directory_uri();?>/img/worker1.jpeg" alt="worker1" width="175px" height="175px">
                                    </div>
									<h4>Сами</h4>
                                    <h5>мужской зал</h5>
                                    <p></p>
                                </div>
                                <div class="worker-frame"></div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 col-tiny-12">
                                <div class="worker-wrapper">
                                    <div class="main-shape">
                                        <img src="<?php echo get_template_directory_uri();?>/img/worker3.jpeg" alt="worker2" width="175px" height="175px">
                                    </div>
                                    <h4>Катя</h4>
                                    <h5>мастер маникюра</h5>
                                    <p></p>
                                </div>
                                <div class="worker-frame"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="atmosphere">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-7 no-gutter-left col-tiny-atm1">
                                    <div class="all-line"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 col-tiny-atm2">
                                    <div class="about-title">
                                        <h2>Атмосфера</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-11 slider">
                                <div id="carousel" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="slider-wrapper">
                                                <div class="main-shape">
                                                    <img src="<?php echo get_template_directory_uri();?>/img/1.png" alt="worker3">
                                                    <div class="edge top"></div>
                                                    <div class="edge left"></div>
                                                    <div class="corner top left"></div>
                                                    <div class="corner top right"></div>
                                                    <div class="corner bottom left"></div>
                                                    <div class="corner bottom right"></div>
                                                </div>
                                                <div class="slider-button"></div>
                                                <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-lg-7 col-md-7 col-sm-8">
                                                    <div class="about-footer-text">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slider-wrapper">
                                                <div class="main-shape">
                                                    <img src="<?php echo get_template_directory_uri();?>/img/2.png" alt="worker3">
                                                    <div class="edge top"></div>
                                                    <div class="edge left"></div>
                                                    <div class="corner top left"></div>
                                                    <div class="corner top right"></div>
                                                    <div class="corner bottom left"></div>
                                                    <div class="corner bottom right"></div>
                                                </div>
                                                <div class="slider-button"></div>
                                                <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-lg-7 col-md-7 col-sm-8">
                                                    <div class="about-footer-text">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slider-wrapper">
                                                <div class="main-shape">
                                                    <img src="<?php echo get_template_directory_uri();?>/img/3.png" alt="worker3">
                                                    <div class="edge top"></div>
                                                    <div class="edge left"></div>
                                                    <div class="corner top left"></div>
                                                    <div class="corner top right"></div>
                                                    <div class="corner bottom left"></div>
                                                    <div class="corner bottom right"></div>
                                                </div>
                                                <div class="slider-button"></div>
                                                <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-lg-7 col-md-7 col-sm-8">
                                                    <div class="about-footer-text">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#carousel" class="slider-controller right" data-slide="next"></a>
                                </div>
<!--                                <div class="carousel-border"></div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section services pp-scrollable" id="3rdPage">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                         <span class="sidebar-button-small" onclick="openFullNav()">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                        <div class="small-phone" data-toggle="modal" data-target="#modal-1"><i class="fa fa-angle-double-down" aria-hidden="true"></i>Записаться</div>

                        <div class="row">
                            <div class="services-header">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-7 no-gutter-left">
                                    <div class="all-line"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                                    <div class="services-title">
                                        <h1 class="title">Услуги</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-11 col-md-11 col-sm-11 col-xs-12">
                                <div class="services-content">
									<div class="container-circle">
										<div class="progress" ></div>
										<div class="progress" id="progress_right"></div>
										<div class="progress" id="progress_left"></div>
									</div>
                                    <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-2 col-md-2 col-sm-2 col-xs-6 col-tiny-12">
                                        <h2>Мужчинам</h2>
                                    </div>
                                    <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-4 col-md-4 col-sm-4 col-xs-6 woman">
                                        <h2>Женщинам</h2>
                                    </div>

                                    <!-- мужчины -->
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-tiny-12 mm_left">
                                        <ul class="main-page-ul men">
											<li id="132" data-circle="0.015"><a class="load" data-container-id="content" data-template="home" data-id-post="132" href="/strizhka-muzhskaya/" <?php if(get_permalink()==get_home_url().'/strizhka-muzhskaya/') echo 'class="active"'?>>Стрижка</a></li>
                                            <li id="138" data-circle="0.055"><a class="load" data-container-id="content" data-template="home" data-id-post="138" href="/oformlenie-borody/" <?php if(get_permalink()==get_home_url().'/oformlenie-borody/') echo 'class="active"'?>>Оформление бороды</a></li>
                                            <li id="140" data-circle="0.09"><a class="load" data-container-id="content" data-template="home" data-id-post="140" href="/dopolnitelnye-uslugi-muzhchinam/" <?php if(get_permalink()==get_home_url().'/dopolnitelnye-uslugi-muzhchinam/') echo 'class="active"'?>>Дополнительные услуги</a></li>
                                            <li id="142" data-circle="0.122"><a class="load" data-container-id="content" data-template="home" data-id-post="142" href="/uhod-za-rukami-i-nogami/" <?php if(get_permalink()==get_home_url().'/uhod-za-rukami-i-nogami/') echo 'class="active"'?>>Уход за руками и ногами</a></li>
                                        </ul>
                                    </div>

                                    <!-- женщины -->
                                    <div class="col-lg-offset-6 col-md-offset-5 col-sm-offset-6  col-lg-3 col-md-4 col-sm-3 col-xs-6 col-tiny-12 mm_right" >

                                        <h2 class="woman-small">Женщинам</h2>
                                        <ul class="main-page-ul women">
                                                <li id="145" data-circle="0.02"><a class="load" data-container-id="content" data-template="home" href="/strizhka-zhenskaya/" <?php if(get_permalink()==get_home_url().'/strizhka-zhenskaya/') echo 'class="active"'?>>Стрижка</a></li>
                                                <li id="147" data-circle="0.075"><a class="load" data-container-id="content" data-template="home" href="/pokraska/" <?php if(get_permalink()==get_home_url().'/pokraska/') echo 'class="active"'?>>Окрашивание волос</a></li>
                                                <li id="149" data-circle="0.12"><a class="load" data-container-id="content" data-template="home" href="/ukladka-volos/" <?php if(get_permalink()==get_home_url().'/ukladka-volos/') echo 'class="active"'?>>Укладка волос</a></li>
                                                <li id="152" data-circle="0.167"><a class="load" data-container-id="content" data-template="home" href="/uhod-za-volosami/" <?php if(get_permalink()==get_home_url().'/uhod-za-volosami/') echo 'class="active"'?>>Уход за волосами</a></li>
                                                <li id="154" data-circle="0.205"><a class="load" data-container-id="content" data-template="home" href="/dopolnitelnye-uslugi-zhenshhinam/" <?php if(get_permalink()==get_home_url().'/dopolnitelnye-uslugi-zhenshhinam/') echo 'class="active"'?>>Дополнительные услуги</a></li>
                                                <li id="156" data-circle="0.25"><a class="load" data-container-id="content" data-template="home" href="/uhod-za-rukami-i-nogami-zhenshhinam/" <?php if(get_permalink()==get_home_url().'/uhod-za-rukami-i-nogami-zhenshhinam/') echo 'class="active"'?>>Уход за руками и ногами</a></li>
                                                <li id="158" data-circle="0.30"><a class="load" data-container-id="content" data-template="home" href="/uslugi-brovista/" <?php if(get_permalink()==get_home_url().'/uslugi-brovista/') echo 'class="active"'?>>Окрашивание бровей, ресниц</a></li>
                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts section pp-scrollable" id="4thPage">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <span class="sidebar-button-small" onclick="openFullNav()">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                        <div class="small-phone" data-toggle="modal" data-target="#modal-1"><i class="fa fa-angle-double-down" aria-hidden="true"></i>Записаться</div>

                        <div class="row">
                            <div class="contacts-header">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-7 no-gutter-left col-tiny-atm1">
                                    <div class="all-line"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 col-tiny-atm2">
                                    <div class="services-title">
                                        <h1 class="title">Контакты</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-11 col-md-11 col-sm-11 col-xs-12 no-gutter">
                                <div class="contacts-content">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 no-gutter map-vis">
                                        <div class="map">
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-gutter col-tiny-12">
                                        <div class="schedule">
                                            <h3>9:00 – 20:00 без выходных</h3>
                                            <h4>Киев, ул. Марка Безручка, 29</h4>
                                            <a class="tel" href="tel:+380988984133">+380 98 898–41–33</a>
                                            <a class="tel" href="tel:+380936335432">+380 93 633–54–32</a>
                                            <a class="mail" href="mailto:fleetstreet.186@gmail.com">fleetstreet.186@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 small-map-vis">
                                        <div class="small-map">
                                            <!--                                            <div id="small-map"></div>-->
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.841830645386!2d30.411974316120734!3d50.46266997947699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cc500f66b9c7%3A0x73208b3e95581fae!2z0LLRg9C70LjRhtGPINCc0LDRgNC60LAg0JHQtdC30YDRg9GH0LrQsCwgMjksINCa0LjRl9Cy!5e0!3m2!1sru!2sua!4v1480319198112" width="auto" height="auto" frameborder="0" style="border:0;  -webkit-filter: grayscale(100%);  " allowfullscreen></iframe>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-10 col-md-10 col-sm-10 col-xs-6 no-gutter-left col-tiny-12">
                        <div class="contacts-button">
                            <div class="fleet-button main-shape" id="contact-button" data-toggle="modal" data-target="#modal-1">
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
                </div>
            </div>
        </div>
    </div>
    <div id="mobile-pagepiling" data-spy="scroll" data-target="#navbar-main">
        <div class="main" id="firstPage1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <span class="sidebar-button-small" onclick="openFullNav()">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                        <div class="small-phone" data-toggle="modal" data-target="#modal-1"><i class="fa fa-angle-double-down" aria-hidden="true"></i>Записаться</div>
                        <div class="main-page">

                            <div id="canv1"></div>
                            <div id="cap1">
                                <h1>Fleet St. 186</h1>
                                <h2>семейная парикмахерская</h2>
                            </div>
                            <div class="fleet-button main-shape sroll_to_bottom" id="main-button">
                                <span>Записаться</span>
                                <div class="edge top"></div>
                                <div class="edge left"></div>
                                <div class="corner top left"></div>
                                <div class="corner top right"></div>
                                <div class="corner bottom left"></div>
                                <div class="corner bottom right"></div>
                                <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about" id="secondPage1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">

                        <div class="row">
                            <div class="about-header" >
                                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-5 col-tiny-3 no-gutter-left">
                                    <div class="all-line"></div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-7 col-tiny-9">
                                    <div class="about-title">
                                        <h1 class="title" >Fleet Street. 186</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-offset-4 col-md-offset-3 col-sm-offset-2 col-lg-5 col-md-6 col-sm-8 col-xs-9 col-tiny-12">
                                <div class="content-text">
                                    <p>Это семейная парикмахерская, которая сочетает в себе лучшие традиции классических английских барбершопов, салонов красоты и бесподобный интерьер.</p>
                                    <p>Неформальная атмосфера уюта и дружелюбия, в сочетании с профессионализмом мастеров, предназначены для мужчин и женщин, которым не безразличны свой стиль.</p>
                                </div>
                            </div>
                            <div class="services-wrapper">
                                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 col-tiny-10">
                                    <div class="services haircut">
                                        <h3>Стрижем</h3>
                                        <p>Любите эксперименты? Не вопрос. Мы знаем все модные тенденции и готовы воплотить их для Вас</p>
                                        <div class="vertical-line"></div>
                                    </div>
                                </div>
                                <div class="col-sm-offset-0 col-xs-offset-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 col-tiny-10">
                                    <div class="services shaving">
                                        <h3>Бреем</h3>
                                        <p>Красивые усы и ухоженная борода — настоящее украшение каждого мужчины.</p>
                                        <div class="vertical-line"></div>
                                    </div>
                                </div>
                                <div class="col-sm-offset-0 col-xs-offset-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 col-tiny-10">
                                    <div class="services cares">
                                        <h3>Ухаживаем</h3>
                                        <p>Ухоженные руки и изящные ногти — часть успешного образа современных мужчин и женщин.</p>
                                        <div class="vertical-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="services-wrapper">
                                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 col-tiny-10">
                                    <div class="services haircut">
                                        <h3>Стрижем</h3>
                                        <p>Любите эксперименты? Не вопрос. Мы знаем все модные тенденции и готовы воплотить их для Вас</p>
                                        <div class="vertical-line"></div>
                                    </div>
                                </div>
                                <div class="col-sm-offset-0 col-xs-offset-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 col-tiny-10">
                                    <div class="services shaving">
                                        <h3>Бреем</h3>
                                        <p>Красивые усы и ухоженная борода — настоящее украшение каждого мужчины.</p>
                                        <div class="vertical-line"></div>
                                    </div>
                                </div>
                                <div class="col-sm-offset-0 col-xs-offset-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 col-tiny-10">
                                    <div class="services cares">
                                        <h3>Ухаживаем</h3>
                                        <p>Ухоженные руки и изящные ногти — часть успешного образа современных мужчин и женщин.</p>
                                        <div class="vertical-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-3 col-md-3 col-sm-3 col-xs-4 col-tiny-12">
                                <div class="worker-wrapper">
                                    <div class="main-shape">
                                        <img src="<?php echo get_template_directory_uri();?>/img/worker2.jpeg" alt="worker3" width="175px">
                                    </div>
                                    <h4>Катя</h4>
                                    <h5>женский зал</h5>
                                    <p></p>
                                </div>
                                <div class="worker-frame"></div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 col-tiny-12">
                                <div class="worker-wrapper">
                                    <div class="main-shape">
                                        <img src="<?php echo get_template_directory_uri();?>/img/worker1.jpeg" alt="worker1" width="175px" height="175px">
                                    </div>
                                    <h4>Сами</h4>
                                    <h5>мужской зал</h5>
                                    <p></p>
                                </div>
                                <div class="worker-frame"></div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 col-tiny-12">
                                <div class="worker-wrapper">
                                    <div class="main-shape">
                                        <img src="<?php echo get_template_directory_uri();?>/img/worker3.jpeg" alt="worker2" width="175px" height="175px">
                                    </div>
                                    <h4>Катя</h4>
                                    <h5>мастер маникюра</h5>
                                    <p></p>
                                </div>
                                <div class="worker-frame"></div>
                            </div>
                            <div class="atmosphere">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-7 no-gutter-left col-tiny-atm1">
                                    <div class="all-line"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 col-tiny-atm2">
                                    <div class="about-title">
                                        <h2>Атмосфера</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-11 slider">
                                <div id="carousel1" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="slider-wrapper">
                                                <div class="main-shape">
                                                    <img src="<?php echo get_template_directory_uri();?>/img/1.png" alt="worker3">
                                                    <div class="edge top"></div>
                                                    <div class="edge left"></div>
                                                    <div class="corner top left"></div>
                                                    <div class="corner top right"></div>
                                                    <div class="corner bottom left"></div>
                                                    <div class="corner bottom right"></div>
                                                </div>
                                                <div class="slider-button"></div>
                                                <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-lg-7 col-md-7 col-sm-8">
                                                    <div class="about-footer-text">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slider-wrapper">
                                                <div class="main-shape">
                                                    <img src="<?php echo get_template_directory_uri();?>/img/2.png" alt="worker3">
                                                    <div class="edge top"></div>
                                                    <div class="edge left"></div>
                                                    <div class="corner top left"></div>
                                                    <div class="corner top right"></div>
                                                    <div class="corner bottom left"></div>
                                                    <div class="corner bottom right"></div>
                                                </div>
                                                <div class="slider-button"></div>
                                                <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-lg-7 col-md-7 col-sm-8">
                                                    <div class="about-footer-text">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slider-wrapper">
                                                <div class="main-shape">
                                                    <img src="<?php echo get_template_directory_uri();?>/img/3.png" alt="worker3">
                                                    <div class="edge top"></div>
                                                    <div class="edge left"></div>
                                                    <div class="corner top left"></div>
                                                    <div class="corner top right"></div>
                                                    <div class="corner bottom left"></div>
                                                    <div class="corner bottom right"></div>
                                                </div>
                                                <div class="slider-button"></div>
                                                <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-lg-7 col-md-7 col-sm-8">
                                                    <div class="about-footer-text">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#carousel1" class="slider-controller right" data-slide="next"></a>
                                </div>
                                <!--                                <div class="carousel-border"></div>-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="services" id="3rdPage1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">

                        <div class="row">
                            <div class="services-header">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-7 no-gutter-left">
                                    <div class="all-line"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                                    <div class="services-title">
                                        <h1 class="title">Услуги</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-11 col-md-11 col-sm-11 col-xs-12">
                                <div class="services-content">
                                    <div class="container-circle">
                                        <div class="progress" ></div>
                                        <div class="progress" id="progress_right"></div>
                                        <div class="progress" id="progress_left"></div>
                                    </div>
                                    <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-2 col-md-2 col-sm-2 col-xs-6 col-tiny-12">
                                        <h2>Мужчинам</h2>
                                    </div>
                                    <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-4 col-md-4 col-sm-4 col-xs-6 woman">
                                        <h2>Женщинам</h2>
                                    </div>

                                    <!-- мужчины -->
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-tiny-12 mm_left">
                                        <ul class="main-page-ul men">
                                            <li id="132" data-circle="0.015"><a class="load" data-container-id="content" data-template="home" data-id-post="132" href="/strizhka-muzhskaya/" <?php if(get_permalink()==get_home_url().'/strizhka-muzhskaya/') echo 'class="active"'?>>Стрижка</a></li>
                                            <li id="138" data-circle="0.055"><a class="load" data-container-id="content" data-template="home" data-id-post="138" href="/oformlenie-borody/" <?php if(get_permalink()==get_home_url().'/oformlenie-borody/') echo 'class="active"'?>>Оформление бороды</a></li>
                                            <li id="140" data-circle="0.09"><a class="load" data-container-id="content" data-template="home" data-id-post="140" href="/dopolnitelnye-uslugi-muzhchinam/" <?php if(get_permalink()==get_home_url().'/dopolnitelnye-uslugi-muzhchinam/') echo 'class="active"'?>>Дополнительные услуги</a></li>
                                            <li id="142" data-circle="0.122"><a class="load" data-container-id="content" data-template="home" data-id-post="142" href="/uhod-za-rukami-i-nogami/" <?php if(get_permalink()==get_home_url().'/uhod-za-rukami-i-nogami/') echo 'class="active"'?>>Уход за руками и ногами</a></li>
                                        </ul>
                                    </div>

                                    <!-- женщины -->
                                    <div class="col-lg-offset-6 col-md-offset-5 col-sm-offset-6  col-lg-3 col-md-4 col-sm-3 col-xs-6 col-tiny-12 mm_right" >

                                        <h2 class="woman-small">Женщинам</h2>
                                        <ul class="main-page-ul women">
                                            <li id="145" data-circle="0.02"><a class="load" data-container-id="content" data-template="home" href="/strizhka-zhenskaya/" <?php if(get_permalink()==get_home_url().'/strizhka-zhenskaya/') echo 'class="active"'?>>Стрижка</a></li>
                                            <li id="147" data-circle="0.075"><a class="load" data-container-id="content" data-template="home" href="/pokraska/" <?php if(get_permalink()==get_home_url().'/pokraska/') echo 'class="active"'?>>Окрашивание волос</a></li>
                                            <li id="149" data-circle="0.12"><a class="load" data-container-id="content" data-template="home" href="/ukladka-volos/" <?php if(get_permalink()==get_home_url().'/ukladka-volos/') echo 'class="active"'?>>Укладка волос</a></li>
                                            <li id="152" data-circle="0.167"><a class="load" data-container-id="content" data-template="home" href="/uhod-za-volosami/" <?php if(get_permalink()==get_home_url().'/uhod-za-volosami/') echo 'class="active"'?>>Уход за волосами</a></li>
                                            <li id="154" data-circle="0.205"><a class="load" data-container-id="content" data-template="home" href="/dopolnitelnye-uslugi-zhenshhinam/" <?php if(get_permalink()==get_home_url().'/dopolnitelnye-uslugi-zhenshhinam/') echo 'class="active"'?>>Дополнительные услуги</a></li>
                                            <li id="156" data-circle="0.25"><a class="load" data-container-id="content" data-template="home" href="/uhod-za-rukami-i-nogami-zhenshhinam/" <?php if(get_permalink()==get_home_url().'/uhod-za-rukami-i-nogami-zhenshhinam/') echo 'class="active"'?>>Уход за руками и ногами</a></li>
                                            <li id="158" data-circle="0.30"><a class="load" data-container-id="content" data-template="home" href="/uslugi-brovista/" <?php if(get_permalink()==get_home_url().'/uslugi-brovista/') echo 'class="active"'?>>Окрашивание бровей, ресниц</a></li>
                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts" id="4thPage1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <div class="row">
                            <div class="contacts-header">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-7 no-gutter-left col-tiny-atm1">
                                    <div class="all-line"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 col-tiny-atm2">
                                    <div class="services-title">
                                        <h1 class="title">Контакты</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-11 col-md-11 col-sm-11 col-xs-12 no-gutter">
                                <div class="contacts-content">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 no-gutter map-vis">
                                        <div class="map">
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-gutter col-tiny-12">
                                        <div class="schedule">
                                            <h3>9:00 – 20:00 без выходных</h3>
                                            <h4>Киев, ул. Марка Безручка, 29</h4>
                                            <a class="tel" href="tel:+380988984133">+380 98 898–41–33</a>
                                            <a class="tel" href="tel:+380936335432">+380 93 633–54–32</a>
                                            <a class="mail" href="mailto:fleetstreet.186@gmail.com">fleetstreet.186@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 small-map-vis">
                                        <div class="small-map">
                                            <!--                                            <div id="small-map"></div>-->
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.841830645386!2d30.411974316120734!3d50.46266997947699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cc500f66b9c7%3A0x73208b3e95581fae!2z0LLRg9C70LjRhtGPINCc0LDRgNC60LAg0JHQtdC30YDRg9GH0LrQsCwgMjksINCa0LjRl9Cy!5e0!3m2!1sru!2sua!4v1480319198112" width="auto" height="auto" frameborder="0" style="border:0;  -webkit-filter: grayscale(100%);  " allowfullscreen></iframe>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-10 col-md-10 col-sm-10 col-xs-12 no-gutter-left col-tiny-12">
                        <div class="contacts-button">
                            <div class="fleet-button main-shape" id="contact-button" data-toggle="modal" data-target="#modal-1">
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
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); // подключаем footer.php ?>