<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Zanex – Bootstrap  Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('template/assets/images/brand/favicon.ico')}}" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

		<!-- TITLE -->
		<title>Liste ArriveDjib</title>

		<!-- BOOTSTRAP CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- STYLE CSS -->
		<link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset('template/assets/css/dark-style.css')}}" rel="stylesheet"/>
		<link href="{{asset('template/assets/css/skin-modes.css')}}" rel="stylesheet" />

		<!-- SIDE-MENU CSS -->
		<link href="{{asset('template/assets/css/sidemenu.css')}}" rel="stylesheet" id="sidemenu-theme">

		<!--C3 CHARTS CSS -->
		<link href="{{asset('template/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>

		<!-- SELECT2 CSS -->
		<link href="{{asset('template/assets/plugins/select2/select2.min.css')}}" rel="stylesheet"/>

		<!-- DATA TABLE CSS -->
		<link href="{{asset('template/assets/plugins/datatable/css/dataTables.bootstrap5.css')}}" rel="stylesheet" />
		<link href="{{asset('template/assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}"  rel="stylesheet">
		<link href="{{asset('template/assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet" />

		<!-- INTERNAL SELECT2 CSS -->
		<link href="{{asset('template/assets/plugins/select2/select2.min.css')}}" rel="stylesheet"/>

		<!-- P-scroll bar css-->
		<link href="{{asset('template/assets/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="{{asset('template/assets/css/icons.css')}}" rel="stylesheet"/>

		<!-- SIDEBAR CSS -->
		<link href="{{asset('template/assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('template/assets/colors/color1.css')}}" />

		<script type="text/javascript" src="https://webqr.com/llqrcode.js"></script>
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
		<script type="text/javascript" src="https://webqr.com/webqr.js"></script>
		<style>
			#outdiv
			{
				width:640px;
				height:480px;
				border: solid;
				border-width: 3px 3px 3px 3px;
			}
			#result
			{
				border: solid;
				border-width: 1px 1px 1px 1px;
				padding:20px;
				width:70%;
			}
			#mp1
			{
				text-align:center;
				font-size:35px;
			}
		</style>
	</head>

	<body class="app sidebar-mini">

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{asset('template/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!--APP-SIDEBAR-->
				<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="side-header">
						<a class="header-brand1" href="index.html">
							<img src="{{asset('template/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
							<img src="{{asset('template/assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
							<img src="{{asset('template/assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
							<img src="{{asset('template/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
						</a><!-- LOGO -->
					</div>
					<ul class="side-menu">
						<li><h3>Main</h3></li>
						<li class="slide">
							<a class="side-menu__item"  data-bs-toggle="slide" href="{{ route('dashboard') }}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Liste</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item"  data-bs-toggle="slide" href="{{ route('qrcode') }}"><i class="side-menu__icon fas fa-qrcode"></i><span class="side-menu__label">QrCode</span></a>
						</li>
					</ul>
				</aside>
				<!--/APP-SIDEBAR-->

				<!-- Mobile Header -->
				<div class="app-header header">
					<div class="container-fluid">
						<div class="d-flex">
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
							<a class="header-brand1 d-flex d-md-none" href="index.html">
								<img src="{{asset('template/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
								<img src="{{asset('template/assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
								<img src="{{asset('template/assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
								<img src="{{asset('template/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
							</a><!-- LOGO -->
							<div class="main-header-center ms-3 d-none d-md-block">
								<input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<div class="d-flex order-lg-2 ms-auto header-right-icons">
								<div class="dropdown d-lg-none d-md-block d-none">
									<a href="#" class="nav-link icon" data-bs-toggle="dropdown">
										<i class="fe fe-search"></i>
									</a>
									<div class="dropdown-menu header-search dropdown-menu-start">
										<div class="input-group w-100 p-2">
											<input type="text" class="form-control" placeholder="Search....">
											<div class="input-group-text btn btn-primary">
												<i class="fa fa-search" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div><!-- SEARCH -->
								<button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
								</button>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon theme-layout nav-link-bg layout-setting">
										<span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Dark Theme"><i class="fe fe-moon"></i></span>
										<span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Light Theme"><i class="fe fe-sun"></i></span>
									</a>
								</div><!-- Theme-Layout -->
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<i class="fe fe-minimize fullscreen-button"></i>
									</a>
								</div><!-- FULL-SCREEN -->
								

								<div class="dropdown d-none d-md-flex header-settings">
									<a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-menu"></i>
									</a>
								</div><!-- SIDE-MENU -->
							</div>
						</div>
					</div>
				</div>
				<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 ms-auto">
							<div class="dropdown d-sm-flex">
								<a href="#" class="nav-link icon" data-bs-toggle="dropdown">
									<i class="fe fe-search"></i>
								</a>
								<div class="dropdown-menu header-search dropdown-menu-start">
									<div class="input-group w-100 p-2">
										<input type="text" class="form-control" placeholder="Search....">
										<div class="input-group-text btn btn-primary">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div><!-- SEARCH -->
							<div class="dropdown d-md-flex">
								<a class="nav-link icon theme-layout nav-link-bg layout-setting">
									<span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Dark Theme"><i class="fe fe-moon"></i></span>
									<span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Light Theme"><i class="fe fe-sun"></i></span>
								</a>
							</div><!-- Theme-Layout -->
							<div class="dropdown d-md-flex">
								<a class="nav-link icon full-screen-link nav-link-bg">
									<i class="fe fe-minimize fullscreen-button"></i>
								</a>
							</div><!-- FULL-SCREEN -->

							<div class="dropdown d-md-flex header-settings">
								<a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-target=".sidebar-right">
									<i class="fe fe-menu"></i>
								</a>
							</div><!-- SIDE-MENU -->
						</div>
					</div>
				</div>
				<!-- /Mobile Header -->

                <!--app-content open-->
				<div class="app-content">
					<div class="side-app">

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Scan Qr Code</h1>
							</div>
							
						</div>
						<!-- PAGE-HEADER END -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
											<table id="file-datatable" class="">
												<div id="mainbody">
													<table class="tsel" border="0" width="100%">
														<tr>
															<td valign="top" align="center" width="50%">
																<table class="tsel" border="0">
																	<tr>
																		<td><img class="selector" id="webcamimg" src="https://webqr.com/vid.png" onclick="setwebcam()" align="left" /></td>
																		<td><img class="selector" id="qrimg" src="https://webqr.com/cam.png" onclick="setimg()" align="right"/></td></tr>
																		<tr><td colspan="2" align="center"><div id="outdiv"></div></td>
																	</tr>
																</table>
															</td>
														</tr>		
														<tr>
															<td colspan="3" align="center">
																<div id="result"></div>
															</td>
														</tr>
													</table>
												</div>
												<canvas id="qr-canvas" style="display: none"></canvas>
											</table>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>

			<!-- Sidebar-right -->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="panel panel-primary card mb-0 shadow-none border-0">
					<div class="tab-menu-heading border-0 d-flex p-3">
						<div class="card-title mb-0">Notifications</div>
						<div class="card-options ms-auto">
							<a href="#" class="sidebar-icon text-end float-end me-1" data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x text-white"></i></a>
						</div>
					</div>
					<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
						<div class="tabs-menu border-bottom">
							<!-- Tabs -->
							<ul class="nav panel-tabs">
								<li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-user me-1"></i> Profile</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="side1">
								<div class="card-body text-center">
									<div class="dropdown user-pro-body">
										<div class="">
											<img alt="user-img" class="avatar avatar-xl brround mx-auto text-center" src="{{asset('template/assets/images/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
										</div>
										<div class="user-info mg-t-20">
											<h6 class="fw-semibold  mt-2 mb-0">Mintrona Pechon</h6>
											<span class="mb-0 text-muted fs-12">Premium Member</span>
										</div>
									</div>
								</div>
								<a class="dropdown-item d-flex border-bottom border-top" href="profile.html">
									<div class="d-flex"><i class="fe fe-user me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">My Profile</h6>
											<p class="tx-12 mb-0 text-muted">Profile Personal information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="chat.html">
									<div class="d-flex"><i class="fe fe-message-square me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">My Messages</h6>
											<p class="tx-12 mb-0 text-muted">Person message information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="emailservices.html">
									<div class="d-flex"><i class="fe fe-mail me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">My Mails</h6>
											<p class="tx-12 mb-0 text-muted">Persons mail information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="editprofile.html">
									<div class="d-flex"><i class="fe fe-settings me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">Account Settings</h6>
											<p class="tx-12 mb-0 text-muted">Settings Information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="{{ route('deconnexion') }}">
									<div class="d-flex"><i class="fe fe-power me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">Sign Out</h6>
											<p class="tx-12 mb-0 text-muted">Account Signout</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/Sidebar-right-->

			<!-- FOOTER -->
			
			<!-- FOOTER CLOSED -->
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY JS -->
		<script src="{{asset('template/assets/js/jquery.min.js')}}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{asset('template/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- SPARKLINE JS-->
		<script src="{{asset('template/assets/js/jquery.sparkline.min.js')}}"></script>

		<!-- CHART-CIRCLE JS-->
		<script src="{{asset('template/assets/js/circle-progress.min.js')}}"></script>

		<!-- C3 CHART JS -->
		<script src="{{asset('template/assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/charts-c3/c3-chart.js')}}"></script>

		<!-- INPUT MASK JS-->
		<script src="{{asset('template/assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

        <!-- SIDE-MENU JS -->
		<script src="{{asset('template/assets/plugins/sidemenu/sidemenu.js')}}"></script>

		<!-- INTERNAL SELECT2 JS -->
		<script src="{{asset('template/assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- DATA TABLE JS-->
		<script src="{{asset('template/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
		<script src="{{asset('template/assets/js/table-data.js')}}"></script>

		<!-- SIDEBAR JS -->
		<script src="{{asset('template/assets/plugins/sidebar/sidebar.js')}}"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="{{asset('template/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
		<script src="{{asset('template/assets/plugins/p-scroll/pscroll.js')}}"></script>
		<script src="{{asset('template/assets/plugins/p-scroll/pscroll-1.js')}}')}}"></script>

		<!-- CUSTOM JS-->
		<script src="{{asset('template/assets/js/custom.js')}}"></script>

		<script>
			load();
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-24451557-1']);
			_gaq.push(['_trackPageview']);
			
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
</html>