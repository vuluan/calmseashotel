<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8"/>
    <title>Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="<?= PATH_URL . 'assets/css/admin/' ?>font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= PATH_URL . 'assets/css/admin/' ?>simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= PATH_URL . 'assets/css/admin/' ?>bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= PATH_URL . 'assets/css/admin/' ?>uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?= PATH_URL . 'assets/css/admin/' ?>bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= PATH_URL . 'assets/css/admin/' ?>bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= PATH_URL . 'assets/css/admin/' ?>bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
    <link href="<?= PATH_URL . 'assets/css/admin/' ?>multi-select.css" rel="stylesheet" type="text/css"/>
    <link href="<?= PATH_URL . 'assets/uploadify/' ?>uploadifive.css" rel="stylesheet" type="text/css"/>
    <link href="<?= PATH_URL . 'assets/fancybox/' ?>jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/admin/' ?>datepicker3.css"/>
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/admin/' ?>bootstrap-timepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/admin/' ?>select2.css"/>
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/admin/' ?>dataTables.bootstrap.css"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?= PATH_URL . 'assets/css/admin/' ?>components.css" rel="stylesheet" type="text/css"
          id="style_components"/>
    <link href="<?= PATH_URL . 'assets/css/admin/' ?>plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?= PATH_URL . 'assets/css/admin/' ?>layout.css" rel="stylesheet" type="text/css"/>
    <link href="<?= PATH_URL . 'assets/css/admin/' ?>default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?= PATH_URL . 'assets/css/admin/' ?>style.css" rel="stylesheet" type="text/css" id="style_color"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="<?= PATH_URL . 'assets/images/admin/' ?>favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= PATH_URL . 'assets/images/admin/' ?>favicon.ico" type="image/x-icon">
    <script src="<?= PATH_URL . 'assets/js/' ?>jquery-1.11.2.min.js" type="text/javascript"></script>
    <?php if ($this->uri->segment(3) == 'update' || $this->uri->segment(2) == 'setting' || $this->uri->segment(2) == 'update_profile') { ?>
        <script type="text/javascript" src="<?= PATH_URL . 'assets/js/admin/' ?>jquery.form.js"></script>
    <?php } ?>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-quick-sidebar-over-content">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="<?= PATH_URL_ADMIN ?>"><img src="<?= PATH_URL . 'assets/images/admin/' ?>logo.jpg" alt="logo"
                                                 class="logo-default"/></a>
        </div>
        <!-- END LOGO -->

        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
                    <a href="<?=PATH_URL?>" target="_blank" class="dropdown-toggle" style="padding-right:6px"><span class="username username-hide-on-mobile">Visit Site</span></a>
                </li>
                <li class="dropdown dropdown-user">
					<a href="<?=PATH_URL_ADMIN.'help'?>" class="dropdown-toggle" style="padding-right:6px"><img alt="" class="img-circle" src="<?= PATH_URL . 'assets/images/admin/' ?>help.png"/><span class="username username-hide-on-mobile">Help</span></a>
				</li>
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                       data-close-others="true">
                        <img alt="" class="img-circle" src="<?= PATH_URL . 'assets/images/admin/' ?>avatar3_small.png"/>
					<span class="username username-hide-on-mobile">
					<?= $this->session->userdata('userInfo') ?> </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li><a href="<?= PATH_URL_ADMIN . 'update_profile' ?>"><i class="fa fa-lock"></i> Change Password </a>
                        </li>
                        <li><a href="<?= PATH_URL_ADMIN . 'logout' ?>"><i class="icon-key"></i> Log Out </a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!--<li class="start<?php if ($this->uri->segment(2) == '') {
                    print ' active';
                } ?>"><a href="<?= PATH_URL_ADMIN ?>"><i class="icon-home"></i><span class="title">Dashboard</span></a></li>-->
                <?= modules::run('admincp/menu') ?>
                <li class="last<?php if ($this->uri->segment(2) == 'setting') {
                    print ' active';
                } ?>"><a href="<?= PATH_URL_ADMIN . 'setting' ?>"><i class="icon-settings"></i><span class="title">Settings</span></a>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <?= $content ?>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        &copy; 2015 JV-IT. All rights reserved.
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<script type="text/javascript">
    var root = '<?=PATH_URL_ADMIN?>';
    <?php if($this->uri->segment(2)!='update_profile' && $this->uri->segment(2)!='setting'){ ?>
    var module = '<?=$module?>';
    <?php } ?>
    var token_value = '<?=$this->security->get_csrf_hash()?>';
    var Metronic;
</script>
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?=PATH_URL.'assets/js/admin/'?>respond.min.js"></script>
<script src="<?=PATH_URL.'assets/js/admin/'?>excanvas.min.js"></script>
<![endif]-->
<script src="<?= PATH_URL . 'assets/js/' ?>jquery.smoothscroll.js"></script>
<script src="<?= PATH_URL . 'assets/js/admin/' ?>jquery.url.js"></script>
<script src="<?= PATH_URL . 'assets/js/admin/' ?>admin.js"></script>
<script src="<?= PATH_URL . 'assets/js/admin/' ?>jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?= PATH_URL . 'assets/js/admin/' ?>jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?= PATH_URL . 'assets/js/admin/' ?>bootstrap.min.js" type="text/javascript"></script>
<script src="<?= PATH_URL . 'assets/js/admin/' ?>bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?= PATH_URL . 'assets/js/admin/' ?>jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?= PATH_URL . 'assets/js/admin/' ?>jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?= PATH_URL . 'assets/js/admin/' ?>bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?= PATH_URL . 'assets/uploadify/' ?>jquery.uploadifive.min.js" type="text/javascript"></script>
<script src="<?= PATH_URL . 'assets/fancybox/' ?>jquery.fancybox.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?= PATH_URL . 'assets/js/admin/' ?>bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?= PATH_URL . 'assets/js/admin/' ?>bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="<?= PATH_URL . 'assets/js/admin/' ?>bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?= PATH_URL . 'assets/js/admin/' ?>bootstrap-fileinput.js"></script>
<script type="text/javascript" src="<?= PATH_URL . 'assets/js/admin/' ?>select2.min.js"></script>
<script type="text/javascript" src="<?= PATH_URL . 'assets/js/admin/' ?>jquery.multi-select.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= PATH_URL . 'assets/js/admin/' ?>metronic.js" type="text/javascript"></script>
<script src="<?= PATH_URL . 'assets/js/admin/' ?>layout.js" type="text/javascript"></script>
<script src="<?= PATH_URL . 'assets/js/admin/' ?>components-pickers.js" type="text/javascript"></script>
<script src="<?= PATH_URL . 'assets/js/admin/' ?>components-dropdowns.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        ComponentsPickers.init();
        ComponentsDropdowns.init();
    });
</script>
</body>
<!-- END BODY -->
</html>