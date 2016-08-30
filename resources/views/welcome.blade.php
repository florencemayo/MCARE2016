<!-- 
Template Name: Supr - Responsive Admin Template build with Twitter Bootstrap 3.3.4
Version: 4.0.0
Author: SuggeElson
Website: http://www.suggeeelson.com/
Contact: support@suggeelson.com
Follow: www.twitter.com/suggeelson
Like: https://www.facebook.com/pages/SuggeElson/264113463621030
Purchase: http://themeforest.net/item/supr-responsive-bootstrap-3-admin-template/2834580?ref=SuggeElson
License: You must have a valid license purchased only from themeforest (the above link) in order to legally use the theme for your project.
-->
<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <title>Login | MCARE</title>
    <!-- Mobile specific metas -->
    <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- Force IE9 to render in normal mode -->
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name=author content="">
    <meta name=description content="">
    <meta name=keywords content="">
    <meta name=application-name content="">
    <!-- Css files -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet' type='text/css'>
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
    <link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">               <!-- Themify Icons -->
    <link type="text/css" href="assets/css/styles.css" rel="stylesheet">

    <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
    <meta name=msapplication-TileColor content="#3399cc">

<body class=login-page>
<!-- Start login container -->
<div class="container login-container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
        
        <div id=header class="animated fadeInDown">
    <div class=row>
        <div class=navbar>
            <div class="container text-center"><a class=navbar-brand href="#">MCARE<span class=slogan> (Hospital Management System) </span></a>
            </div>
        </div>
        <!-- /navbar -->
    </div>
    <!-- End .row -->
</div>
<!-- End #header -->

        <div class="panel panel-default">
        <!-- Start .panel -->
        <div class="panel-heading">
               <h2>Login Form</h2>
         </div>

        <div class=panel-body>
            @if(isset($error))
            <div class="alert alert-danger alert-dismissable" style="padding: 5px">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{ $error }}!</strong>
            </div>
            @endif
            <form action="extras-login.html" class="form-horizontal mt0" method="post" action="{{ url('login') }}" id=login-form role=form>
                {!! csrf_field() !!}
                            <div class="form-group mb-md">
                                <div class="col-xs-12">
                                    <div class="input-group">                           
                                        <span class="input-group-addon">
                                            <i class="ti ti-user"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Username" data-parsley-minlength="6" placeholder="At least 6 characters" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-md">
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ti ti-key"></i>
                                        </span>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-n">
                                <div class="col-xs-12">
                                    <a href="extras-forgotpassword.html" class="pull-left">Forgot password?</a>
                                    <div class="checkbox-inline icheck pull-right p-n">
                                        <label for="">
                                            <input type="checkbox"></input>
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
        </div>
        <div class="panel-footer gray-lighter-bg">
                        <div class="clearfix">
                            <a href="extras-registration.html" class="btn btn-default pull-left">Register</a>
                            <a href="extras-login.html" class="btn btn-primary pull-right">Login</a>
                        </div>
        </div>
        </div>
        <!-- End .panel -->
    </div>
    </div>
</div>
<!-- End login container -->

<div class=container>
    <div class=footer>
        <p class=text-center translate="app.copyright"></p>
    </div>
</div>
<!-- Javascripts -->
<!-- Important javascript libs(put in all pages) -->

<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>                           <!-- Load jQuery -->
<script type="text/javascript" src="assets/js/jqueryui-1.10.3.min.js"></script>                             <!-- Load jQueryUI -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>                               <!-- Load Bootstrap -->
<script type="text/javascript" src="assets/js/enquire.min.js"></script>                                     <!-- Load Enquire -->

<script type="text/javascript" src="assets/plugins/velocityjs/velocity.min.js"></script>                    <!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script type="text/javascript" src="assets/plugins/wijets/wijets.js"></script>                          <!-- Wijet -->

<script type="text/javascript" src="assets/plugins/codeprettifier/prettify.js"></script>                <!-- Code Prettifier  -->
<script type="text/javascript" src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>      <!-- Swith/Toggle Button -->

<script type="text/javascript" src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="assets/plugins/iCheck/icheck.min.js"></script>                      <!-- iCheck -->

<script type="text/javascript" src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script type="text/javascript" src="assets/js/application.js"></script>
<script type="text/javascript" src="assets/demo/demo.js"></script>
<script type="text/javascript" src="assets/demo/demo-switcher.js"></script>

<script src="<?php echo  asset('js/libs/jquery-2.1.1.min.js') ?>"></script>
<script src="<?php echo  asset('jqueryui/js/jquery-ui-1.10.4.custom.js') ?>"></script>
<script src="<?php echo  asset('js/libs/jquery-migrate-1.2.1.min.js') ?>"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/libs/excanvas.min.js"></script>
<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="js/libs/respond.min.js"></script>
<![endif]-->
<script src="<?php echo  asset('js/pages/login.js') ?>"></script>
<!-- Google Analytics:  -->
