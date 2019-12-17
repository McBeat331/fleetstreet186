<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>

<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>

    <script type="text/javascript">
       $(document).ready(function() {
             $('#pagepiling').pagepiling({
			        menu: null,
					direction: 'vertical',
					verticalCentered: false,
					sectionsColor: ['#093b4d', '#093b4d', '#093b4d', '#093b4d', '#093b4d'],
					anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', 'services-inner'],
					scrollingSpeed: 700,
					easing: 'swing',
					loopBottom: false,
					loopTop: false,
					css3: true,
					navigation: false,
					//{
					//	'textColor': '#000',
					//	'bulletsColor': '#000',
					//	'position': 'right',
					//	'tooltips': ['section1', 'section2', 'section3', 'section4']
					//},
					normalScrollElements: null,
					normalScrollElementTouchThreshold: 5,
					touchSensitivity: 200,
					keyboardScrolling: true,
					sectionSelector: '.section',
					animateAnchor: true,
                    menu: '#myMenu',

					afterLoad: function(anchorLink, index){


					if(index == 2) {
					        $('.about-header').css("opacity", "1");
							$('.about-header').addClass('animated slideInLeft');
							setTimeout(function () {
								$('.content-text').css("opacity", "1");
								$('.content-text').addClass('animated fadeIn');
								setTimeout(function () {
									$('.haircut').css("opacity", "1");
									$('.haircut').addClass('animated slideInUp');
									setTimeout(function () {
									    $('.shaving').css("opacity", "1");
										$('.shaving').addClass('animated slideInUp');
										setTimeout(function () {
										   $('.cares').css("opacity", "1");
										   $('.cares').addClass('animated slideInUp');
										}, 800);
									}, 800);
								}, 800);
							}, 500);
					}
					if(index == 3) {
					        $('.services-header').css("opacity", "1");
							$('.services-header').addClass('animated slideInLeft');
							setTimeout(function () {
								$('.services-content').css("opacity", "1");
								$('.services-content').addClass('animated fadeIn');
								setTimeout(function () {
									$('.men').css("opacity", "1");
									$('.men').addClass('animated slideInLeft');
									setTimeout(function () {
									    $('.women').css("opacity", "1");
										$('.women').addClass('animated slideInRight');
									}, 800);
								}, 800);
							}, 500);
					}
					if(index == 4) {
					        $('.contacts-header').css("opacity", "1");
							$('.contacts-header').addClass('animated slideInLeft');
                        if ($(window).width() > 768) {
                            setTimeout(function () {
                                $('.map').css("opacity", "1");
                                $('.map').addClass('animated fadeIn');
                                setTimeout(function () {
                                    $('.schedule').css("opacity", "1");
                                    $('.schedule').addClass('animated slideInRight');
                                    setTimeout(function () {
                                        $('.contacts-button').css("opacity", "1");
                                        $('.contacts-button').addClass('animated slideInUp');
                                    }, 800);
                                }, 800);
                            }, 500);
                        }
                        else {
                            setTimeout(function () {
                                $('.small-map-vis').css("opacity", "1");
                                $('.small-map-vis').addClass('animated slideInRight');
                                setTimeout(function () {
                                    $('.schedule').css("opacity", "1");
                                    $('.schedule').addClass('animated slideInLeft');
                                    setTimeout(function () {
                                        $('.contacts-button').css("opacity", "1");
                                        $('.contacts-button').addClass('animated slideInUp');
                                    }, 800);
                                }, 800);
                            }, 500);
                        }

					}

					},
              });
        });

    </script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdOlDwQ6PddStNypa4ki-6ssutV9_fqYg&callback=initMap"></script>


</body>
</html>