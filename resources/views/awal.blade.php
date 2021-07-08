<html lang="{{ app()->getLocale() }}">


<head>

	<!--begin::Base Path (base relative path for assets of this page) -->
	<title>Monitoring</title>
	<!--end::Base Path -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Basic datatables examples">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!--begin::Fonts -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			},
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!--end::Fonts -->
	<style>
		.kt-aside--minimize .kt-aside__brand .kt-aside__brand-logo svg {
			display: none;
		}
		.kt-header .kt-header__topbar .kt-header__topbar-item .kt-header__topbar-icon svg g [fill] {
			fill: #5d78ff!important;
		}
		hr {
			border: 0;
			clear:both;
			display:block;
			width: 100%;
			background-color:#ecf0f1;
			height: 1px;
		}
	</style>
	@stack('css')

	<!--end::Page Vendors Styles -->

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="{{ asset('assets/vendors/global/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/demo1/style.bundle.css') }}" rel="stylesheet" type="text/css" />

	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->
	<link href="{{ asset('assets/css/demo1/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/demo1/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/demo1/skins/brand/light.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/demo1/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet" type="text/css" />

	<!--end::Layout Skins -->
	<link rel="shortcut icon" href="" />
</head>
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-page--loading">
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

						<!-- begin:: Header Menu -->
						<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
							<div class="kt-header-logo">
								
							</div>
							
						</div>

					
					</div>

					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" >

						  @yield('content')
					</div>

					
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		
		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>
	<script>
		var KTAppOptions = {
			"colors": {
				"state": {
					"brand": "#5d78ff",
					"dark": "#282a3c",
					"light": "#ffffff",
					"primary": "#5867dd",
					"success": "#34bfa3",
					"info": "#36a3f7",
					"warning": "#ffb822",
					"danger": "#fd3995"
				},
				"base": {
					"label": [
						"#c5cbe3",
						"#a1a8c3",
						"#3d4465",
						"#3e4466"
					],
					"shape": [
						"#f0f3ff",
						"#d9dffa",
						"#afb4d4",
						"#646c9a"
					]
				}
			}
		};
	</script>
	<script src="{{ asset('assets/vendors/global/vendors.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/demo1/scripts.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/lightbox.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datepicker.id.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/vendors/custom/moment/moment-with-locales.min.js') }}" type="text/javascript"></script>

		@stack('js')
	</body>

	<!-- end::Body -->
</html>