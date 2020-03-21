<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title ?></title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="{{asset('images/front/favicon.ico')}}">
		<link rel="shortcut icon" href="{{asset('images/front/favicon.ico')}}" />
		<link rel="stylesheet" href="{{asset('css/front/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('css/front/slider.css')}}">
		<link rel="stylesheet" href="{{asset('css/front/style.css')}}">
	</head>
	<body class="page1" id="top">
    @include('layouts.front_layout.header')
    @yield('content')
    @include('layouts.front_layout.footer')
  </div>
  	</body>
  </html>
    <script src="{{asset('js/front/jquery.js')}}"></script>
		<script src="{{asset('js/front/jquery-migrate-1.1.1.js')}}"></script>
		<script src="{{asset('js/front/script.js')}}"></script>
		<script src="{{asset('js/front/jquery.ui.totop.js')}}"></script>
		<script src="{{asset('js/front/superfish.js')}}"></script>
		<script src="{{asset('js/front/jquery.equalheights.js')}}"></script>
		<script src="{{asset('js/front/jquery.mobilemenu.js')}}"></script>
		<script src="{{asset('js/front/jquery.easing.1.3.js')}}"></script>
		<script src="{{asset('js/front/owl.carousel.js')}}"></script>
		<script src="{{asset('js/front/jquery.flexslider-min.js')}}"></script>
		<script src="{{asset('js/front/kwiks.js')}}"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
				var owl = $("#owl");
				owl.owlCarousel({
					items : 4, //10 items above 1000px browser width
					itemsDesktop : [995,3], //5 items between 1000px and 901px
					itemsDesktopSmall : [767, 2], // betweem 900px and 601px
					itemsTablet: [700, 2], //2 items between 600 and 0
					itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
					navigation : true,
				});
			})
			var Main = Main || {};
			jQuery(window).load(function() {
				window.responsiveFlag = jQuery('#responsiveFlag').css('display');
				Main.gallery = new Gallery();
				jQuery(window).resize(function() {
					Main.gallery.update();
				});
			});
			function Gallery(){
				var self = this,
					container = jQuery('.flexslider'),
					clone = container.clone( false );
					this.init = function (){
						if( responsiveFlag == 'block' ){
						var slides = container.find('.slides');
						slides.kwicks({
							max : 500,
							spacing : 0
						}).find('li > a').click(function (){
							return false;
						});
						} else {
							container.flexslider();
						}
					}
					this.update = function () {
						var currentState = jQuery('#responsiveFlag').css('display');
						if(responsiveFlag != currentState) {
							responsiveFlag = currentState;
							container.replaceWith(clone);
							container = clone;
							clone = container.clone( false );
							this.init();
						}
					}
				this.init();
			}
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
