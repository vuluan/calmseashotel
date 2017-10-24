<!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2><?= lang('title_special_offers') ?></h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SUB BANNER -->
        
        <!-- GUEST BOOK -->
        <section class="section-guest-book">
            <div class="container">
                <div class="guest-book">
                    <!-- GUEST BOOK MASONRY -->
                    <div class="guest-book_content">

                        <div class="row">
                            <div class="guest-book_mansory">
                                <?php if ($offers==''){
                                    echo "no data";
                                }else{?>
                                <?php foreach ($offers as $key => $v): ;?>
                                <!-- ITEM -->
                                <div class="item-masonry col-xs-6 col-md-4">
                                    <div class="guest-book_item guest-book_item-2">
                                        <div class="activiti_item">
                                            <div class="img">
                                                <a href="<?= PATH_URL ?><?=$this->lang->lang().'/special-offer/'.$v->slug.'-'.$v->id;?>"><img src="<?=PATH_URL.DIR_UPLOAD_OFFERS.$v->image ?>" alt=""></a>
                                            </div>
                                        </div>
                                        <h2><?php $lang = $this->lang->lang(); $title = "title_".$lang; echo $v->$title ?></h2>
                                        <p><?php $lang = $this->lang->lang(); $des = "description_".$lang; echo $v->$des ?></p>
                                        <span><b>Save <?php echo $v->discount  ?>% </b> - <?php $lang = $this->lang->lang(); $room_name = "room_name_".$lang; echo $v->$room_name ?></span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <?php endforeach ?>
                                <?php  } ?>
                                

                                <!-- ITEM -->
                                <!-- <div class="item-masonry col-xs-6 col-md-4">
                                    <div class="guest-book_item guest-book_item-2">
                                        <div class="activiti_item">
                                            <div class="img">
                                                <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/offers-detail"><img src="<?= PATH_URL ?>assets/images/frontend/offers/ver2-restaurant13.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <h2>ADVANCED SAVER (29% OFF)</h2></a>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                                        <span><b>Jonatha Owens</b> - Sydney Australia</span>
                                    </div>
                                </div> -->
                                <!-- END / ITEM -->

                            </div>
                        </div>

                        <!-- PAGE NAVIGATION   -->
                        <ul class="page-navigation text-center">
                            <li class="first"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="current-page"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li class="last"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                        <!-- END / PAGE NAVIGATION   -->

                    </div>
                    <!-- END / GUEST BOOK MASONRY -->
                </div>
            </div>
        </section>
        <!-- END / GUEST BOOK