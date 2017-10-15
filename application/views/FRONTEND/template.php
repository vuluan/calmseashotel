
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Calm Seas Hotel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="<?= PATH_URL . 'assets/images/frontend/' ?>favicon.png"/>
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- CSSRARY -->
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/frontend/' ?>font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/frontend/' ?>font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/frontend/' ?>bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/frontend/' ?>owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/frontend/' ?>jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/frontend/' ?>magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/frontend/' ?>settings.css">
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/frontend/' ?>custom.css">
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/frontend/' ?>bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/frontend/' ?>helper.css">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="<?= PATH_URL . 'assets/css/frontend/' ?>style.css"> 

</head>
<body> <!--<![endif]-->
    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header" class="header-v2">
            
            <!-- HEADER TOP -->
            <div class="header_top">
                <div class="container">
                    <div class="header_left float-left">
                        <span><i class="lotus-icon-cloud"></i> 18 °C</span>
                        <span><i class="lotus-icon-location"></i> <?=lang('top_address')?></span>
                        <span><i class="lotus-icon-phone"></i> (+84) (0258) 3543 888</span>
                    </div>
                    <div class="header_right float-right">

                        <span class="login-register">
                            <a href=""><?=lang('top_en')?></a>
                            <a href=""><?=lang('top_vn')?></a>
                        </span>
 
                        <div class="dropdown currency">
                            <span>USD <i class="fa fa"></i></span>
                            <ul>
                                <li class="active"><a href="#">USD</a></li>
                                <li><a href="#">VNĐ</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
            <!-- END / HEADER TOP -->
            
            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">

                <div class="container">
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                        <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/home"><img src="<?= PATH_URL ?>assets/images/frontend/logo-header.png" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->
                    
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                        <ul class="menu">
                            <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/home"> <?=lang('menu_home')?> </a></li>
                            <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/about"> <?=lang('menu_about')?></a></li>
                            <li><a href="hinhanh360"><?=lang('menu_overview')?></a></li>
                            <li>
                                <a href="#"><?=lang('menu_rooms')?> <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <?php if ($room==''){
                                        echo "no data";
                                    }else{?>
                                    <?php foreach ($room as $key => $value): ;?>
                                    <li><a href="<?=PATH_URL.$this->lang->lang().'/rooms/'.$value->slug?>"><?php $lang = $this->lang->lang(); $name = "name_".$lang; echo $value->$name ?></a></li>
                                    <?php endforeach ?>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/offers"><?=lang('menu_special')?></a></li>
                            <li>
                                <a href="#"><?=lang('menu_restaurant')?> <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <?php if ($utility==''){
                                        echo "no data";
                                    }else{?>
                                    <?php foreach ($utility as $key => $value): ;?>
                                    <li><a href="<?=PATH_URL.$this->lang->lang().'/restaurant/'.$value->slug?>"><?php $lang = $this->lang->lang(); $name = "name_".$lang; echo $value->$name ?></a></li>
                                    <?php endforeach ?>
                                    <?php } ?>
                                </ul>
                            </li>
                           
                            <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/contact"><?=lang('menu_contact')?></a></li>
                        </ul>
                    </nav>
                    <!-- END / HEADER MENU -->

                    <!-- MENU BAR -->
                    <span class="menu-bars">
                        <span></span>
                    </span>
                    <!-- END / MENU BAR -->

                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->

        </header>
        <!-- END / HEADER -->
        <?= $content; ?>

                <!-- FOOTER -->
        <footer id="footer">

            <!-- FOOTER TOP -->
            <div class="footer_top">
                <div class="container">
                    <div class="row">

                        <!-- WIDGET MAILCHIMP -->
                        <div class="col-lg-9">
                            <div class="mailchimp">
                                <h4><?=lang('footer_news&offers')?></h4>
                                <div class="mailchimp-form">
                                    <form action="#" method="POST">
                                        <input type="text" name="email" placeholder="<?=lang('footer_placeholder_email')?>" class="input-text">
                                        <button class="awe-btn"><?=lang('footer_signup')?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET MAILCHIMP -->
                        
                        <!-- WIDGET SOCIAL -->
                        <div class="col-lg-3">
                            <div class="social">
                                <div class="social-content">
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET SOCIAL -->

                    </div>
                </div>
            </div>
            <!-- END / FOOTER TOP -->

            <!-- FOOTER CENTER -->
            <div class="footer_center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-4">
                            <div class="widget widget_logo">
                                <div class="widget-logo">
                                    <div class="img">
                                        <a href="#"><img src="<?= PATH_URL ?>assets/images/frontend/logo-footer.png" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p><i class="lotus-icon-location"></i> <?=lang('footer_address')?></p>
                                        <p><i class="lotus-icon-phone"></i> (+84) (0258) 3543 888</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:info@calmseashotel.com.vn">info@calmseashotel.com.vn</a></p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-xs-3 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title"><?=lang('footer_row1_title')?></h4>
                                <ul>
                                    <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/about"><?=lang('footer_row1_about')?></a></li>
                                    <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/overview360"><?=lang('footer_row1_overview360')?></a></li>
                                    <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/news"><?=lang('footer_row1_news')?></a></li>
                                    <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/offers"><?=lang('footer_row1_offers')?></a></li>
                                    <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/contact"><?=lang('footer_row1_contact')?></a></li>
                                </ul>
                            </div>
                            <div class="rows">
                                <div class="widget widget_tripadvisor">
                                    <h4 class="widget-title"><?=lang('footer_row1_title1')?></h4>
                                    <div class="tripadvisor">
                                        <img src="<?= PATH_URL ?>assets/images/frontend/dadangky1.png" width="80%" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-3 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title"><?=lang('footer_row2_title')?></h4>
                                <ul>
                                    <?php if ($room==''){
                                        echo "no data";
                                    }else{?>
                                    <?php foreach ($room as $key => $value): ;?>
                                    <li><a href="<?=PATH_URL.$this->lang->lang().'/rooms/'.$value->slug?>"><?php $lang = $this->lang->lang(); $name = "name_".$lang; echo $value->$name ?></a></li>
                                    <?php endforeach ?>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-3 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title"><?=lang('footer_row3_title')?></h4>
                                <ul>
                                    <?php if ($utility==''){
                                        echo "no data";
                                    }else{?>
                                    <?php foreach ($utility as $key => $value): ;?>
                                    <li><a href="<?=PATH_URL.$this->lang->lang().'/restaurant/'.$value->slug?>"><?php $lang = $this->lang->lang(); $name = "name_".$lang; echo $value->$name ?></a></li>
                                    <?php endforeach ?>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-3 col-lg-2">
                            <div class="rows">
                                <div class="widget widget_tripadvisor">
                                    <h4 class="widget-title"><?=lang('footer_row4_title')?></h4>
                                    <div class="tripadvisor">
                                        <p><?=lang('footer_row4_p')?></p>
                                        <img src="<?= PATH_URL ?>assets/images/frontend/tripadvisor.png" alt="">
                                        <span class="tripadvisor-circle">
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i class="part"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END / FOOTER CENTER -->

            <!-- FOOTER BOTTOM -->
            <div class="footer_bottom">
                <div class="container">
                    <p>&copy; 2016 Lotus Hotel All rights reserved.</p>
                </div>
            </div>
            <!-- END / FOOTER BOTTOM -->

        </footer>
        <!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->
   
    <!-- LOAD JQUERY -->
    
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/bootstrap-select.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script> -->
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/owl.carousel.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jquery.appear.min.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jquery.countTo.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/SmoothScroll.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/scripts.js"></script>
    <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jquery.number.js"></script>
     <script type="text/javascript">
        $(document).ready(function() {
            $(".format-price").number( true,0);
        });

    </script>
    <script type="text/javascript">
        var root = '<?=PATH_URL?>';
        var csrf_token;
    </script>
</body>
</html>