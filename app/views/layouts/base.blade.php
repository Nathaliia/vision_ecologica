<html>
<head>
	<title>Vision Ecologica y Ambiental</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bigvideo.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

	<script src="{{ asset('assets/js/jquery-1.12.2.min.js') }}"></script>
</head>
<body>

<section class="home" id="home">
	@yield('home')
</section>

<div class="sections">
	<section class="menu">
		@yield('menu')
	</section>

	<section class="about_us" id="about_us">
		@yield('about_us')
	</section>

	<section class="services" id="services">
		@yield('services')
	</section>

	<section class="clients" id="clients">
		@yield('clients')
	</section>
	
	<section class="contact" id="contact">
		@yield('contact')
	</section>

	<section class="form">
		@yield('form')
	</section>
</div>
	<footer>
		<a><div class="enlace">Blog</div></a>
		<div class="texto">Copyright 2016-2017</div>
		<div class="icons">
			<a href=""><img width="25px" src="{{ asset('assets/images/footer/facebook.png') }}"></a>
			<a href=""><img width="25px" src="{{ asset('assets/images/footer/twitter.png') }}"></a>
		</div>
	</footer>

	<script src="{{ asset('assets/js/videojs.min.js') }}"></script>
	<script src="{{ asset('assets/js/video.js') }}"></script>	
	<script src="{{ asset('assets/js/bigvideo.js') }}"></script>


	<script type="text/javascript">
	    $(function() {
		    var BV = new $.BigVideo({useFlashForFirefox:false});
			BV.init();
		    BV.show([
		        { type: "video/mp4",  src: "assets/videos/video_1.mp4" },
		        { type: "video/webm", src: "assets/videos/video_1.webm" },
		        { type: "video/ogg",  src: "assets/videos/video_1.ogv" }
		    ],{ambient:true});
		    BV.getPlayer().currentTime(22.5);

		});

		//MOSTRAR MENU
		$(window).on('scroll', function () {
			var visible = true;
		    var windowTop = $(document).scrollTop();
		    var windowBottom = windowTop + window.innerHeight;
		    var elementPositionTop = $(".home").offset().top;
		    var elementPositionBottom = elementPositionTop + $(".home").height();
		    if (elementPositionTop > windowBottom || elementPositionBottom < windowTop) {
		      visible = false;
		    }
		    
		    if(visible == true){
		    	$(".menu").css("position", "absolute");
		    } else {
		    	$(".menu").css("position", "fixed");
		    }
		});

	</script>

</body>
</html>
