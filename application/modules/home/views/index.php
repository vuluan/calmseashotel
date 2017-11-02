
    <script type="text/javascript">
        function searchavailability(){
            var arrive                      = $('#txtarrive').datepicker({dateFormat: 'yy-mm-dd' }).val(); 
            var departure                   = $('#txtdeparture').datepicker({dateFormat: 'yy-mm-dd' }).val(); 
            var adults       =               $('#selAdults').val();
            var children      =              $('#selChildren').val();
            var accommodation  =             $('#selAccommodation').val();
            if(arrive=="" || departure=="" ){
                alert("Please input arrive or departure");
                return false;
            }
            if(adults=="" || children=="" ){
                alert("Please input infomation");
                return false;
            }
            window.location.href =('<?= PATH_URL ?><?=$this->lang->lang();?>/booking/search?checkindate='+arrive+'&checkoutdate='+departure+'&adult='+adults+'&children='+children+'&accommodation='+accommodation+'');
        }
    </script>
        <!-- BANNER SLIDER -->
        <section class="section-slider">
            <h1 class="element-invisible">Slider</h1>
            <div id="slider-revolution">
                <ul>

                    <?php foreach ($banner as $key => $v): ;?>
                    <li data-transition="fade">
                        <img src="<?=PATH_URL.DIR_UPLOAD_BANNER.$v->image ?>" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">
                        <div class="tp-caption sft fadeout" data-x="center" data-y="195" data-speed="700" data-start="1300" data-easing="easeOutBack">
                        </div>
                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                            <?php $lang = $this->lang->lang(); $des = "description_".$lang; echo $v->$des  ?>
                        </div>
                        <div class="tp-caption sfb fadeout slider-caption slider-caption-3" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="2000">
                            <?php $lang = $this->lang->lang(); $title = "title_".$lang; echo $v->$title  ?>
                        </div>
                        <a href="<?=$v->url ?>" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200"><?=lang('btn_viewmore')?></a>
                    </li> 
                    <?php endforeach ?>
                </ul>
            </div>

        </section>
        <!-- END / BANNER SLIDER -->

      
        <!-- CHECK AVAILABILITY -->
        <section class="section-check-availability">
            <div class="container">
                <div class="check-availability">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2>CHECK AVAILABILITY</h2>
                        </div>
                        <div class="col-lg-9">
                            
                                <div class="availability-form">
                                    <input type="text" name="arrive"  id="txtarrive" class="awe-calendar from" placeholder="Arrival Date" data-date-format="yyyy-mm-dd">
                                    <input type="text" name="departure" id="txtdeparture" class="awe-calendar to" placeholder="Departure Date" data-date-format="yyyy-mm-dd">

                                    <select class="awe-select" name="adults" id="selAdults">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <select class="awe-select" name="child" id="selChildren">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                    <div class="vailability-submit">
                                        <button class="awe-btn awe-btn-13" onclick="searchavailability();">FIND THE BEST RATE</button>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CHECK AVAILABILITY -->

        
        <!-- ACCOMMODATIONS -->
        <section class="section-accommo_1 bg-white">
            <div class="container">
                <div class="accomd-modations_1">
                    <h2 class="heading"><?=lang('title_rooms')?></h2>
                    <div class="accomd-modations-content_1" >
                        <div class="accomd-modations-slide_1" >
                            <!-- ITEM -->
                            <?php if ($room==''){
                                echo "no data";
                            }else{?>
                            <?php foreach ($room as $key => $v): ;?>
                            <div class="item room-item text-center accomd-modations-room_1">
                                <div class="img">
                                    <a href="<?=PATH_URL.$this->lang->lang().'/rooms/'.$v->slug?>"><img class="img-responsive img-full" src="<?=PATH_URL.DIR_UPLOAD_ROOMS.$v->images ?>" alt=""></a>
                                </div>
                                <h2 class="title"><a href="<?=PATH_URL.$this->lang->lang().'/rooms/'.$v->slug?>"><?php $lang = $this->lang->lang(); $name = "name_".$lang; echo $v->$name ?></a></h2>
                                <p class="price"><span class="format-price"><?php echo $v->price ?></span> VNĐ</p>
                                <div class="info upper">
                                    <p>
                                        <span class="number">02</span>
                                        <span><?=lang('span_max_guest')?></span>
                                    </p>
                                    <p>
                                        <span class="number"><?php echo $v->size ?></span>
                                        <span><?=lang('span_size')?> M<sup>2</sup></span>
                                    </p>
                                    <p>
                                        <span class="number">01</span>
                                        <span><?=lang('span_bedding')?></span>
                                    </p>
                                </div>
                                <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="<?=PATH_URL.$this->lang->lang().'/rooms/'.$v->slug?>"> <?=lang('btn_viewmore')?></a>
                            </div>
                            <?php endforeach ?>
                            <!-- END / ITEM -->
                            <?php } ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ACCOMMODATIONS -->
        
        

        <!-- OUR BEST -->
        <section class="section-our-best bg-white">
            <div class="container">
                <div class="our-best">
                    <div class="row">
                        <div class="col-md-6 col-md-push-6">
                             <div class="event-slide owl-single">
                                <!-- ITEM -->
                                <div class="event-item">
                                    <div class="img hover-zoom">
                                        <a href="#">
                                            <img src="<?=PATH_URL?>assets/images/frontend/home/ourbest/img-1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="event-item">
                                    <div class="img hover-zoom">
                                        <a href="#">
                                            <img src="<?=PATH_URL?>assets/images/frontend/home/ourbest/img-2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="event-item">
                                    <div class="img hover-zoom">
                                        <a href="#">
                                            <img src="<?=PATH_URL?>assets/images/frontend/home/ourbest/img-3.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="event-item">
                                    <div class="img hover-zoom">
                                        <a href="#">
                                            <img src="<?=PATH_URL?>assets/images/frontend/home/ourbest/img-4.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                            </div>
                        </div>
                        <div class="col-md-6 col-md-pull-6 ">
                            <div class="text">
                                <h2 class="heading"><?=lang('title_services')?></h2>
                                <p><?=lang('title_services_des')?>.</p>
                                <ul>
                                    <li><img src="<?=PATH_URL?>assets/images/frontend/home/ourbest/icon-1.png" alt="icon"><?=lang('title_services_li1')?></li>
                                    <li><img src="<?=PATH_URL?>assets/images/frontend/home/ourbest/icon-5.png" alt="icon"><?=lang('title_services_li2')?></li>
                                    <li><img src="<?=PATH_URL?>assets/images/frontend/home/ourbest/icon-6.png" alt="icon"><?=lang('title_services_li3')?></li>
                                    <li><img src="<?=PATH_URL?>assets/images/frontend/home/ourbest/icon-3.png" alt="icon"><?=lang('title_services_li4')?></li>
                                    <li><img src="<?=PATH_URL?>assets/images/frontend/home/ourbest/icon-4.png" alt="icon"><?=lang('title_services_li5')?></li>
                                    <li><img src="<?=PATH_URL?>assets/images/frontend/home/ourbest/icon-2.png" alt="icon"><?=lang('title_services_li6')?></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END / OUR BEST -->

        <!-- HOME GUEST BOOK -->
        <div class="section-home-guestbook awe-parallax bg-13">
            <div class="container">
                <div class="home-guestbook"> 
                    <div class="row">
                        <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                            <div class="ot-heading mb40 row-20 text-center">
                                <h2 style="color: #fff ! important;"><?=lang('title_guest_book')?></h2>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="guestbook-content owl-single">
                                <?php if ($comments==''){
                                    echo "no data";
                                }else{?>
                                <?php foreach ($comments as $key => $v): ;?>
                                <!-- ITEM -->
                                <div class="guestbook-item">
                                    <div class="text">
                                        <p><?php echo $v->comment; ?></p>
                                        <span style="color: #E1BD85 ! important;"><?php echo $v->name; ?> from <?php echo $v->address; ?></span>
                                        
                                    </div> 
                                    <div class="img">
                                        <img src="<?=PATH_URL.DIR_UPLOAD_COMMENTS.$v->image ?>" alt="">
                                    </div>

                                </div>
                                <!-- END ITEM -->
                                <?php endforeach ?>
                                <?php } ?>
                            
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- END / HOME GUEST BOOK -->

        <!-- HOME NEW -->
        <section class="section-news mt70">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                            <div class="ot-heading row-20 mb40 text-center">
                                <h2><?=lang('title_news')?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php if ($ThreeNews==''){
                            echo "no data";
                        }else{?>
                        <?php foreach ($ThreeNews as $key => $v): ;?>
                        <div class="col-xs-12 col-sm-4">
                            <div class="item">
                                <div class="img">
                                    <img class="img-responsive img-full" src="<?=PATH_URL.DIR_UPLOAD_NEWS.$v->image ?>" alt="">
                                </div>
                                <div class="info">
                                    <p class="date f20"><?php $lang = $this->lang->lang(); $cate_name = "cate_name_".$lang; echo $v->$cate_name ?></p>
                                    <a class="title font-monserat f20 mb20 block bold" href="<?=PATH_URL.$this->lang->lang().'/detail-news/'.$v->slug.'-'.$v->id?>"><?php $lang = $this->lang->lang(); $title = "title_".$lang; echo $v->$title ?></a>
                                    <a class="more block f13" href="<?=PATH_URL.$this->lang->lang().'/detail-news/'.$v->slug.'-'.$v->id?>">[<?=lang('btn_readmore')?>]</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                        <?php  } ?>
                    </div>
                    <div class="text-center" style="margin-bottom: 20px;">
                        <a href="<?=PATH_URL.$this->lang->lang().'/news'?>" class="awe-btn btn-medium font-hind bold f12 awe-btn-default mt15 awe-btn-default mt15 f13"><?=lang('btn_viewmore')?></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / HOME NEW -->
        





