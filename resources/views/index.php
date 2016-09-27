<!DOCTYPE html>
<html lang="en" ng-app="mcare" class="ng-scope">
<head>
    <meta charset="utf-8">
    <title>MCARE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="MCARE 2016 Hosptal System">
    <meta name="author" content="softmed">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

    <link type="text/css" href="<?php echo asset('assets/fonts/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link type="text/css" href="<?php echo asset('assets/fonts/themify-icons/themify-icons.css') ?>" rel="stylesheet">
    <!-- Themify Icons -->
    <link type="text/css" href="<?php echo asset('assets/css/styles.css') ?>" rel="stylesheet">
    <!-- Core CSS with all styles -->
    <link type="text/css" href="<?php echo asset('assets/plugins/codeprettifier/prettify.css') ?>" rel="stylesheet">
   <!-- Code Prettifier -->
    <link type="text/css" href="<?php echo asset('assets/plugins/iCheck/skins/minimal/blue.css') ?>" rel="stylesheet">
    <!-- iCheck -->


    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->

<link type="text/css" href="<?php echo asset('assets/plugins/fullcalendar/fullcalendar.css') ?>" rel="stylesheet">
<!-- FullCalendar -->
<link type="text/css" href="<?php echo asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet">
<!-- jVectorMap -->
<link type="text/css" href="<?php echo asset('assets/plugins/switchery/switchery.css') ?>" rel="stylesheet">
<!-- Switchery -->
</head>

    <body class="animated-content">

        <header id="topnav" class="navbar navbar-default navbar-fixed-top navbar-cyan" role="banner">

	<div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
			</a>
		</span>

		<a class="navbar-brand" href="#">MCARE</a>
		<!--div class="toolbar-icon-bg hidden-xs" id="toolbar-search">
            <div class="input-group">
            	<span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-search"></i></button></span>
				<input type="text" class="form-control" placeholder="Search...">
				<span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-close"></i></button></span>
			</div>
        </div-->

	</div><!-- logo-area -->

	<ul class="nav navbar-nav toolbar pull-right">

		<li class="toolbar-icon-bg visible-xs-block" id="trigger-toolbar-search">
			<a href="index.html#"><span class="icon-bg"><i class="ti ti-search"></i></span></a>
		</li>

		<li class="toolbar-icon-bg hidden-xs">
            <a href="index.html#"><span class="icon-bg"><i class="ti ti-world"></i></span></i></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs">
            <a href="index.html#"><span class="icon-bg"><i class="ti ti-view-grid"></i></span></i></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="index.html#" class="toggle-fullscreen"><span class="icon-bg"><i class="ti ti-fullscreen"></i></span></i></a>
        </li>

        <li class="dropdown toolbar-icon-bg hidden-xs">
			<a href="index.html#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="ti ti-email"></i></span><span
			class="badge badge-deeporange">2</span></a>
			<div class="dropdown-menu notifications arrow">
				<div class="topnav-dropdown-header">
					<span>Messages</span>
				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content">
						<li class="media notification-message">
							<a href="index.html#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_01.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Vincent Keller</strong> <span class="text-gray">‒ Design should be ...</span></h4>
									<span class="notification-time">2 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="index.html#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_09.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Frend Pratt</strong> <span class="text-gray">‒ I will start with the ...</span></h4>
									<span class="notification-time">40 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="index.html#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_02.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Cynthia Hines</strong> <span class="text-gray">‒ Interior bits are ...</span></h4>
									<span class="notification-time">6 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="index.html#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_03.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Robin Horton</strong> <span class="text-gray">‒ Are you even ...</span></h4>
									<span class="notification-time">8 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="index.html#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_04.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Amanda Torrez</strong> <span class="text-gray">‒ The message is ...</span></h4>
									<span class="notification-time">16 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="index.html#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_05.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Khan Farhan</strong> <span class="text-gray">‒ Expected the stuff ...</span></h4>
									<span class="notification-time">2 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="index.html#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_06.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Will Whedon</strong> <span class="text-gray">‒ The movie of this ...</span></h4>
									<span class="notification-time">4 days ago</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="index.html#">See all messages</a>
				</div>
			</div>
		</li>

		<li class="dropdown toolbar-icon-bg">
			<a href="index.html#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="ti ti-bell"></i></span><span class="badge badge-deeporange">2</span></a>
			<div class="dropdown-menu notifications arrow">
				<div class="topnav-dropdown-header">
					<span>Notifications</span>
				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content">
						<li class="media notification-success">
							<a href="index.html#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Update 1.0.4 successfully pushed</h4>
									<span class="notification-time">8 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-info">
							<a href="index.html#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Update 1.0.3 successfully pushed</h4>
									<span class="notification-time">24 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-teal">
							<a href="index.html#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Update 1.0.2 successfully pushed</h4>
									<span class="notification-time">16 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-indigo">
							<a href="index.html#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Update 1.0.1 successfully pushed</h4>
									<span class="notification-time">2 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-danger">
							<a href="index.html#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-arrow-up"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Initial Release 1.0</h4>
									<span class="notification-time">4 days ago</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="index.html#">See all notifications</a>
				</div>
			</div>
		</li>

		<li class="dropdown toolbar-icon-bg">
			<a href="index.html#" class="dropdown-toggle username" data-toggle="dropdown">
				<img class="img-circle" src="assets/demo/avatar/avatar_15.png" alt="" />
			</a>
			<ul class="dropdown-menu userinfo arrow">
				<li><a href="index.html#/"><i class="ti ti-user"></i><span>Profile</span><span class="badge badge-info pull-right">80%</span></a></li>
				<li><a href="index.html#/"><i class="ti ti-panel"></i><span>Account</span></a></li>
				<li><a href="index.html#/"><i class="ti ti-settings"></i><span>Settings</span></a></li>
				<li class="divider"></li>
				<li><a href="index.html#/"><i class="ti ti-stats-up"></i><span>Earnings</span></a></li>
				<li><a href="index.html#/"><i class="ti ti-view-list-alt"></i><span>Statement</span></a></li>
				<li><a href="index.html#/"><i class="ti ti-money"></i><span>Withdrawals</span></a></li>
				<li class="divider"></li>
				<li><a href="index.html#/"><i class="ti ti-shift-right"></i><span>Sign Out</span></a></li>
			</ul>
		</li>

	</ul>

</header>

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-cyan">
                    <div class="static-sidebar">
                        <div class="sidebar">
	<!--div class="widget">
        <div class="widget-body">
            <div class="userinfo">
                <div class="avatar">
                    <img src="assets/demo/avatar/avatar_15.png" class="img-responsive img-circle">
                </div>
                <div class="info">
                    <span class="username">Jonathan Smith</span>
                    <span class="useremail">jon@avenxo.com</span>
                </div>
            </div>
        </div>
    </div-->
	<div class="widget stay-on-collapse" id="widget-sidebar">
        <nav role="navigation" class="widget-body">
		<ul class="acc-menu">
			<li class="nav-separator"><span>Explore</span></li>
			<li><a href="./#findPatient"><i class="ti ti-search"></i><span>Find Patient</span></a></li>
			<li><a href="./#register"><i class="ti ti-shield"></i><span>Registration</span></span></a></li>
		    <li><a href="./#dataManagement"><i class="ti ti- ti-harddrives"></i><span>Data Management</span></span></a></li>
			<li class="nav-separator"><span>Extras</span></li>
			<li><a href="app-inbox.html"><i class="ti ti-email"></i><span>Inbox</span><span class="badge badge-danger">3</span></a></li>
			<li><a href="extras-calendar.html"><i class="ti ti-calendar	"></i><span>Calendar</span><span class="badge badge-orange">1</span></a></li>
		</ul>
    </nav>
</div>
</div>
                    </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">

<li class=""><a href="index.html">Home</a></li>
<li class="active"><a href="index.html">Dashboard</a></li>

                            </ol>
                                  <div ng-view></div>
                        </div> <!-- #page-content -->

                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;">&copy; 2016 MCARE</h6></li>
        </ul>
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
    </div>
</footer>


                </div>
            </div>
        </div>


    <!-- Switcher -->




<!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script type="text/javascript" src="<?php echo asset('assets/js/jquery-1.10.2.min.js') ?>"></script>

<!-- Load jQuery -->
<script type="text/javascript" src="<?php echo asset('assets/js/jqueryui-1.10.3.min.js') ?>"></script>
<!-- Load jQueryUI -->
<script type="text/javascript" src="<?php echo asset('assets/js/bootstrap.min.js') ?>"></script>
<!-- Load Bootstrap -->
<script type="text/javascript" src="<?php echo asset('assets/js/enquire.min.js') ?>"></script>
<!-- Load Enquire -->
<script type="text/javascript" src="<?php echo asset('assets/plugins/velocityjs/velocity.min.js') ?>"></script>
<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="<?php echo asset('assets/plugins/velocityjs/velocity.ui.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('assets/plugins/wijets/wijets.js') ?>"></script>     	<!-- Wijet -->
<script type="text/javascript" src="<?php echo asset('assets/plugins/codeprettifier/prettify.js') ?>"></script>
<!-- Code Prettifier  -->
<script type="text/javascript" src="<?php echo asset('assets/plugins/bootstrap-switch/bootstrap-switch.js') ?>"></script>
<!-- Swith/Toggle Button -->
<script type="text/javascript" src="<?php echo asset('assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') ?>"></script>
<!-- Bootstrap Tabdrop -->
<script type="text/javascript" src="<?php echo asset('assets/plugins/iCheck/icheck.min.js') ?>"></script><!-- iCheck -->
<script type="text/javascript" src="<?php echo asset('assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js') ?>"></script>
<!-- nano scroller -->
<script type="text/javascript" src="<?php echo asset('assets/js/application.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('assets/demo/demo.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('assets/demo/demo-switcher.js') ?>"></script>

<!-- End loading site level scripts -->

    <!-- Load page level scripts-->

<script type="text/javascript" src="<?php echo asset('assets/plugins/switchery/switchery.js') ?>"></script> <!-- Switchery -->
<script type="text/javascript" src="<?php echo asset('assets/plugins/easypiechart/jquery.easypiechart.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('assets/plugins/fullcalendar/moment.min.js') ?>"></script>
<!-- Moment.js Dependency -->
<script type="text/javascript" src="<?php echo asset('assets/plugins/fullcalendar/fullcalendar.min.js') ?>"></script>   			<!-- Calendar Plugin -->


<!-- Initialize scripts for this page-->
<script type="text/javascript" src="<?php echo  asset('js/angular.js') ?>"></script>
<script type="text/javascript" src="<?php echo  asset('js/angular-resource.js') ?>"></script>
<script type="text/javascript" src="<?php echo  asset('js/angular-route.js') ?>"></script>
<script type="text/javascript" src="<?php echo  asset('js/angular-sanitize.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo  asset('js/angular-animate.min.js') ?>"></script>

<script src="<?php echo  asset("libs/tree/angular-multi-select-tree-0.1.0.min.js") ?>"></script>
<script src="<?php echo  asset("libs/tree/angular-multi-select-tree-0.1.0.tpl.js") ?>"></script>
<script src="<?php echo  asset("libs/angular-bootstrap-multiselect/angular-bootstrap-multiselect.js") ?>"></script>
<script src="<?php echo  asset("libs/spinkit/angular-spinkit.min.js") ?>"></script>
<script src="<?php echo  asset("libs/ng-csv/ng-csv.js") ?>"></script>
<script src="<?php echo  asset("libs/moment/moment.min.js") ?>"></script>

<script type="text/javascript" src="<?php echo  asset("js/app.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("js/services.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("js/directives.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("js/controllers.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("js/filters.js") ?>"></script>

<!--controllers-->
<script type="text/javascript" src="<?php echo  asset("controllers/mainController.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("controllers/registerPatientController.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("controllers/patientController.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("controllers/dataManagementCtrl.js") ?>"></script>

<script src="<?php echo  asset("libs/pagination/dirPagination.js") ?>"></script>

<script src="<?php echo  asset("libs/angular-strap/angular-strap.js") ?>" data-semver="v2.3.7"></script>
<script src="<?php echo  asset("libs/angular-strap/angular-strap.tpl.js") ?>" data-semver="v2.3.7"></script>
<script src="<?php echo  asset("libs/angular-strap/angular-strap.docs.tpl.js") ?>" data-semver="v2.3.7"></script>


<script type="text/javascript" src="<?php echo  asset("libs/Highcharts/js/highcharts.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("libs/Highcharts/js/modules/exporting.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("libs/Highcharts/js/highcharts-more.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("libs/Highcharts/js/modules/solid-gauge.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("libs/Highcharts/js/modules/data.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("libs/highcharts-ng/dist/highcharts-ng.min.js") ?>"></script>


<!-- End loading page level scripts-->

    </body>
</html>
