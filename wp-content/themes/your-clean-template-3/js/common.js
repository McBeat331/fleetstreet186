//player



var audio = document.getElementById('audio');
// todo delete next line
audio.pause();

$('svg.womens-svg').css( "height", $('.main-page-ul.women').height() - 20 );
var li_count = 7;
var one_li_height = $('.main-page-ul.women').height()/li_count;




function play() {
    if (audio.paused !== true){
        audio.pause();
        document.getElementById('player-text').innerHTML = 'Вкл. плеер';
    }
    else{
        audio.play();
        document.getElementById('player-text').innerHTML = 'Выкл. плеер';
    }
}
$(function() {
    var audio = document.getElementById('audio');
    // todo delete next line
    audio.pause();

    $('svg.womens-svg').css("height", $('.main-page-ul.women').height() - 20);
    var li_count = 7;
    var one_li_height = $('.main-page-ul.women').height() / li_count;


    function play() {
        if (audio.paused !== true) {
            audio.pause();
            document.getElementById('player-text').innerHTML = 'Вкл. плеер';
        }
        else {
            audio.play();
            document.getElementById('player-text').innerHTML = 'Выкл. плеер';
        }
    }

    //sidebar

})
//animations
window.onload = function() {
	var anomaly_offset_m = $('.men li:first-child').position();
	var height_p = $('.progress').height();

    var circle_right = new ProgressBar.Circle('#progress_right', {
        color: '#395d66',
        duration: 3000,
        easing: 'easeOutQuint',
        strokeWidth: 0.5,
    });

    circle_right.animate(0);
	var $set_w = $('.women li');
	var $count_w = $('.women li').length;
	$('.women li').hover( function(e){
		var li = $(this);
		var n= $(this).attr('data-circle');
		circle_right.animate(n, {
			duration: 0
		}, function() {
			li.addClass('active');
		});
	},function(t){
		var li = $(this);
		circle_right.animate(0);
		li.removeClass('active');
	});

    var circle_left = new ProgressBar.Circle('#progress_left', {
        color: '#395d66',
        duration: 3000,
        easing: 'easeOutQuint',
        strokeWidth: 0.5,
    });
    circle_left.animate(0);
	var $set_m = $('.men li');
	var $count_m = $('.men li').length;
	$('.men li').hover(function(e){
		var li = $(this);
		var n= $(this).attr('data-circle');
		circle_left.animate(n, {
			duration: 0
		}, function() {
			li.addClass('active');
		});
	},function(t){
		var li = $(this);
		circle_left.animate(0);
		li.removeClass('active');
	});





	if(window.location.pathname == '/') {
		$('#main-logo').css("opacity", "1");
		$('#main-logo').addClass('animated fadeIn');
		setTimeout(function () {
			$('#cap1').css("opacity", "1");
			$('#cap1').addClass('animated fadeIn');
			setTimeout(function () {
				$('#main-button').css("opacity", "1");
				$('#main-button').addClass('animated slideInUp');
			}, 800);
		}, 800);
	}
	else {
		$('.services-header-inner').css("opacity", "1");
		$('.services-header-inner').addClass('animated slideInLeft');
		setTimeout(function () {
			$('.men, .women').css("opacity", "1");
			$('.men, .women').addClass('animated slideInLeft');
			setTimeout(function () {
				$('.top-content').css("opacity", "1");
				$('.top-content').addClass('animated fadeIn');
				setTimeout(function () {
					$('#photo-inner').css("opacity", "1");
					$('#photo-inner').addClass('animated fadeIn');
					setTimeout(function () {
						$('.price-block').css("opacity", "1");
						$('.price-block').addClass('animated fadeIn');
					}, 500);
				}, 500);
			}, 800);
		}, 500);
	}
};

//select customization
$(document).ready(function(){
    Nodes.multipleInit([{
        "post_name": "e-trade",
        "drawnImage": "/wp-content/themes/your-clean-template-3/img/logos.png",
        "linkTitle": "E*Trade Brings on MullenLowe",
        "linkUrl": "/",
        "particleDensity": "3",
        "particleWidth": "0.5",
        "particleHeight": "0.5",
    }]);
    $(".sroll_to_bottom").on('click',function () {
        var destination = $('#secondPage1').offset().top;
        $('html').animate({ scrollTop: destination }, 1100);
    });
    $("#3rdPage").on('click','li a.load',function(e) {
        e.preventDefault();
        var id_post=$(this).closest("li").attr('id');
        $.ajax({
            type: "GET",
            url: window.wp_data.ajax_url,
            data: {
                action : 'do_something',
				id_post: id_post
            },
            dataType: 'html',
            success: function (data) {
                $('#3rdPage').html(data);
                var val = id_post;
                $('#select1 option#'+id_post).attr("selected", "selected");
                $('#select1').each(function(){
                    $(this).siblings('p').text( $(this).children('option:selected').text() );
                });
                
            }
        });
    });
    $('.previous a').on('click',function(e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: window.wp_data.ajax_url,
            data: {
                action : 'do_something_back'
            },
            dataType: 'html',
            success: function (data) {
                $('#3rdPage').html(data);
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
        });
    });


    /*
        $('.main-page-ul.men li a, .main-page-ul.women li a').click(function(e) {

                if ($(window).width() > 1200) {
                    e.preventDefault();

            $('.left-sidebar .men-menu ul.men li a').removeClass('active');
            $('.left-sidebar .women-menu ul.women li a').removeClass('active');
            $(this).addClass('active');

            var post_id = $(this).parent('li').attr("id");
            var post_id = $(this).parent('li').attr("id");

            var data_string = '';
            data_string += 'action=get_post_field_html_main';
            data_string += '&post_id=' + post_id;


            $.ajax({
                type: 'POST',
                url: urls_array.ajax_url,
                data: data_string,
                success: function(data) {
                    $('.section.services.pp-scrollable > .container-fluid').html(data);
                    $('.services-header-inner').css("opacity", "1");
                    $('.services-header-inner').addClass('animated slideInLeft');
                    setTimeout(function () {
                        $('.men, .women').css("opacity", "1");
                        $('.men, .women').addClass('animated slideInLeft');
                        setTimeout(function () {
                            $('.top-content').css("opacity", "1");
                            $('.top-content').addClass('animated fadeIn');
                            setTimeout(function () {
                                $('#photo-inner').css("opacity", "1");
                                $('#photo-inner').addClass('animated fadeIn');
                                setTimeout(function () {
                                    $('.price-block').css("opacity", "1");
                                    $('.price-block').addClass('animated fadeIn');
                                }, 500);
                            }, 500);
                        }, 800);
                    }, 500);

                    $('.left-sidebar .men-menu ul.men li a, .left-sidebar .women-menu ul.women li a').click(function(e) {
                        e.preventDefault();

                        $('.left-sidebar .men-menu ul.men li a').removeClass('active');
                        $('.left-sidebar .women-menu ul.women li a').removeClass('active');
                        $(this).addClass('active');

                        var post_id = $(this).parent('li').attr("id");
                        var post_id = $(this).parent('li').attr("id");

                        var data_string = '';
                        data_string += 'action=get_post_field_html';
                        data_string += '&post_id=' + post_id;


                        $.ajax({
                            type: 'POST',
                            url: urls_array.ajax_url,
                            data: data_string,
                            success: function(data) {
                                $('#inner-page-content').html(data);

                                $('.services-header-inner').css("opacity", "1");
                                $('.services-header-inner').addClass('animated slideInLeft');
                                setTimeout(function () {
                                    $('.men, .women').css("opacity", "1");
                                    $('.men, .women').addClass('animated slideInLeft');
                                    setTimeout(function () {
                                        $('.top-content').css("opacity", "1");
                                        $('.top-content').addClass('animated fadeIn');
                                        setTimeout(function () {
                                            $('#photo-inner').css("opacity", "1");
                                            $('#photo-inner').addClass('animated fadeIn');
                                            setTimeout(function () {
                                                $('.price-block').css("opacity", "1");
                                                $('.price-block').addClass('animated fadeIn');
                                            }, 500);
                                        }, 500);
                                    }, 800);
                                }, 500);
                            }
                        });

                    });

                }
            });
                }

        });
*/
    $('select').each(function(){
        $(this).siblings('p').text( $(this).children('option:selected').text() );
    });
    $('select').change(function(){
        $(this).siblings('p').text( $(this).children('option:selected').text() );
    });
});

$(function () {
    $('#datetimepicker1').datetimepicker(
        {pickTime: false, minDate: moment(), language: 'ru'}
    );
    $('#datetimepicker2').datetimepicker(
        {pickDate: false, language: 'ru'}
    );
});

//custom marker
//function loadMarker(){
//	var point = new google.maps.LatLng(50.875311, 0.351563);
//	var myMapOptions = {
//		zoom: 5,
//		center: point,
//		mapTypeId: google.maps.MapTypeId.TERRAIN
//	};
//	var map = new google.maps.Map(document.getElementById("map"),myMapOptions);
//	var image = new google.maps.MarkerImage(
//		'marker-images/image.png',
//		new google.maps.Size(55,73),
//		new google.maps.Point(0,0),
//		new google.maps.Point(28,73)
//	);
//	var shadow = new google.maps.MarkerImage(
//		'marker-images/shadow.png',
//		new google.maps.Size(96,73),
//		new google.maps.Point(0,0),
//		new google.maps.Point(28,73)
//	);
//	var shape = {
//		coord: [34,0,37,1,39,2,41,3,42,4,43,5,45,6,46,7,47,8,47,9,48,10,49,11,50,12,50,13,51,14,51,15,52,16,52,17,53,18,53,19,53,20,54,21,54,22,54,23,54,24,54,25,54,26,54,27,54,28,54,29,54,30,54,31,54,32,54,33,54,34,53,35,53,36,53,37,52,38,52,39,51,40,51,41,50,42,50,43,49,44,49,45,48,46,47,47,47,48,46,49,45,50,45,51,44,52,43,53,43,54,42,55,41,56,40,57,40,58,39,59,38,60,37,61,37,62,36,63,35,64,34,65,33,66,32,67,31,68,31,69,30,70,29,71,28,72,26,72,25,71,24,70,23,69,23,68,22,67,21,66,20,65,19,64,18,63,17,62,17,61,16,60,15,59,14,58,14,57,13,56,12,55,11,54,11,53,10,52,9,51,9,50,8,49,7,48,7,47,6,46,5,45,5,44,4,43,4,42,3,41,3,40,2,39,2,38,1,37,1,36,1,35,0,34,0,33,0,32,0,31,0,30,0,29,0,28,0,27,0,26,0,25,0,24,0,23,0,22,0,21,1,20,1,19,1,18,2,17,2,16,3,15,3,14,4,13,4,12,5,11,6,10,7,9,7,8,8,7,9,6,11,5,12,4,13,3,15,2,17,1,20,0,34,0],
//		type: 'poly'
//	};
//	var marker = new google.maps.Marker({
//		draggable: true,
//		raiseOnDrag: false,
//		icon: image,
//		shadow: shadow,
//		shape: shape,
//		map: map,
//		position: point
//	});
//}

    function openNav() {
        //document.getElementById("sidebar-small").style.width = "190px";
        document.getElementById("sidebar-small").style.margin = "0";
    }
    function closeNav() {
        //document.getElementById("sidebar-small").style.width = "0";
        document.getElementById("sidebar-small").style.margin = "0 -190px 0 0";
    }
    function hoverSidebar() {
        //document.getElementById("sidebar-small").style.width = "190px";
        document.getElementById("sidebar-small").style.margin = "0";
    }
    function hideSidebar() {
        //document.getElementById("sidebar-small").style.width = "0";
        document.getElementById("sidebar-small").style.margin = "0 -190px 0 0";
    }
    function openFullNav() {
        document.getElementById("sidebar-small1").style.width = "100%";
        //document.getElementById("sidebar-small").style.margin = "0";
    }
    function closeFullNav(elem) {
        document.getElementById("sidebar-small1").style.width = "0";
        $('.mobile-sidebar #myMenu li').removeClass('active');
        $(elem).addClass('active');
        //document.getElementById("sidebar-small").style.margin = "0 -100% 0 0";
    }
