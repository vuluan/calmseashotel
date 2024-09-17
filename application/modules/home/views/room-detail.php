        <script type="text/javascript">
            function searchavailability(){
                var arrive                      = $('#txtarrive').datepicker({dateFormat: 'yy-mm-dd' }).val(); 
                var departure                   = $('#txtdeparture').datepicker({dateFormat: 'yy-mm-dd' }).val(); 
                var adults       =               $('#selAdults').val();
                var children      =              $('#selChildren').val();
                var accommodation  =             $('#txtAccommodation').html();
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
        
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-16">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2><?php $lang = $this->lang->lang(); $name = "name_".$lang; echo $detailRooms[0]->$name ?></h2>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->
        <span id="txtAccommodation" style="display: none;"><?php echo $detailRooms[0]->id ?></span>
        <!-- ROOM DETAIL -->
        <section class="section-room-detail bg-white">
            <div class="container">
                <!-- DETAIL -->
                <div class="room-detail">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- LAGER IMGAE -->
                            <div class="room-detail_img">
                                <?php if ($imagesRooms==''){
                                    echo "no data";
                                }else{?>
                                <?php foreach ($imagesRooms as $key => $v): ;?>
                                <div class="room_img-item">
                                    <img src="<?=PATH_URL.DIR_UPLOAD_ROOMS.$v->image ?>" alt="">    
                                    <h6><?php $lang = $this->lang->lang(); $des = "description_".$lang; echo $v->$des ?></h6>
                                </div>
                                <?php endforeach ?>
                                <?php } ?>
                            </div>
                            <!-- END / LAGER IMGAE -->
                            
                            <!-- THUMBNAIL IMAGE -->
                            <div class="room-detail_thumbs">
                                <?php if ($imagesRooms==''){
                                    echo "no data";
                                }else{?>
                                <?php foreach ($imagesRooms as $key => $v): ;?>
                                <a href="#"><img src="<?=PATH_URL.DIR_UPLOAD_ROOMS.$v->image ?>" alt=""></a>
                                <?php endforeach ?>
                                <?php } ?>
                            </div>
                            <!-- END / THUMBNAIL IMAGE -->

                        </div>

                        
                    </div>
                </div>
                <!-- TAB -->
                <div class="room-detail_tab">
                    
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="room-detail_tab-header">
                                <li class="active"><a href="#amenities" data-toggle="tab"><?=lang('tag_overview')?></a></li>
                            </ul>
                        </div>
                                        
                        <div class="col-md-9">
                            <div class="room-detail_tab-content tab-content">
                                
                                

                                <!-- AMENITIES -->
                                <div class="tab-pane fade active in" id="amenities">
                                    <?php $lang = $this->lang->lang(); $des = "description_".$lang; echo $detailRooms[0]->$des ?>
                                </div>
                                <!-- END / AMENITIES -->
                                <!-- PACKAGE -->
                                <div class="tab-pane fade" id="package">
                            
                                    <div class="room-detail_package">
                                        <?php if ($offersRooms==''){
                                            echo "no data";
                                        }else{?>
                                        <?php foreach ($offersRooms as $key => $value): ;?>
                                            <div class="reservation-package_item">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-3 col-md-3">
                                                        <div class="reservation-package_img">
                                                            <a href="<?= PATH_URL ?><?=$this->lang->lang().'/special-offer/'.$value->slug;?>"><img src="<?=PATH_URL.DIR_UPLOAD_OFFERS.$value->image ?>" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="reservation-package_text">
                                                            <h4><a href="<?= PATH_URL ?><?=$this->lang->lang().'/special-offer/'.$value->slug.'-'.$value->id;?>"><?php $lang = $this->lang->lang(); $title = "title_".$lang; echo $value->$title ?></a></h4>
                                                            <p><?php $lang = $this->lang->lang(); $des = "description_".$lang; echo $value->$des ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-3 col-md-3">
                                                        <div class="reservation-package_text">
                                                                <p class="reservation-package_price">
                                                                    <span class="amout format-price"><?php echo $value->price*(100-$value->discount)/100; ?></span>
                                                                </p>
                                                                <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-1" class="awe-btn awe-btn-default">Book package</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            
                                        <?php endforeach ?>     
                                        <?php }?>
                                    </div>
                            
                                </div>
                                <!-- END / PACKAGE -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-detail_tab">
                    <div class="row">
                        <div class="col-lg-3">
                            <!-- FORM BOOK -->
                            <div class="room-detail_book" style="margin-top: 0px ! important">
                                <div class="room-detail_total">
                                    <!-- <img src="<?= PATH_URL ?>assets/images/frontend/icon-logo.png" alt="" class="icon-logo">
                                    <h6>STARTING ROOM FROM</h6> -->
                                    <p class="price">
                                        <span class="amout format-price"><?php echo $detailRooms[0]->price ?></span>  VNĐ/days
                                    </p>
                                </div>
                                <div class="room-detail_form">
                                    <label>Arrive</label>
                                    <input type="text" class="awe-calendar from" placeholder="Arrival Date" id="txtarrive">
                                
                                    <label>Depature</label>
                                    <input type="text" class="awe-calendar to" placeholder="Departure Date" id="txtdeparture">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Adult</label>
                                            <select class="awe-select" id="selAdults">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Child</label>
                                            <select class="awe-select" id="selChildren">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="awe-btn awe-btn-13" onclick="searchavailability();">Book Now</button>
                                </div>
                            </div>
                            <!-- END / FORM BOOK -->
                        </div>
                        <div class="col-md-9">
                            <div class="room-detail_tab-content tab-content">
                                <!-- PACKAGE -->
                                <div class="tab-pane fade active in">
                            
                                    <div class="room-detail_package">
                                        <?php if ($offersRooms==''){
                                            echo "no data";
                                        }else{?>
                                        <?php foreach ($offersRooms as $key => $value): ;?>
                                            <div class="reservation-package_item">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-3 col-md-3">
                                                        <div class="reservation-package_img">
                                                            <a href="<?= PATH_URL ?><?=$this->lang->lang().'/special-offer/'.$value->slug;?>"><img src="<?=PATH_URL.DIR_UPLOAD_OFFERS.$value->image ?>" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="reservation-package_text">
                                                            <h4><a href="<?= PATH_URL ?><?=$this->lang->lang().'/special-offer/'.$value->slug.'-'.$value->id;?>"><?php $lang = $this->lang->lang(); $title = "title_".$lang; echo $value->$title ?></a></h4>
                                                            <p><?php $lang = $this->lang->lang(); $des = "description_".$lang; echo $value->$des ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-3 col-md-3">

                                                        <div class="reservation-package_text">
                                                            <div class="reservation-package_book-price">
                                                                <p class="reservation-package_price">
                                                                   <span class="amout format-price"><?php echo $value->price*(100-$value->discount)/100; ?></span> <span style="font-weight: bold;">VND</span>
                                                                </p>
                                                                <a  onclick="searchavailability();" class="awe-btn awe-btn-default">Book package</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        <?php endforeach ?>     
                                        <?php }?>
                                    </div>
                            
                                </div>
                                <!-- END / PACKAGE -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END / TAB -->
                <!-- COMPARE ACCOMMODATION -->
                <div class="room-detail_compare">
                    <h2 class="room-compare_title"><?=lang('title_rooms_defferent')?></h2>

                    <div class="room-compare_content">
                        
                        <div class="row">
                            <?php if ($getDifferentRooms==''){
                                echo "no data";
                            }else{?>
                            <?php foreach ($getDifferentRooms as $key => $v): ;?>
                            <!-- ITEM -->
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="room-compare_item">
                                    <div class="img">
                                        <a href="<?=PATH_URL.$this->lang->lang().'/rooms/'.$v->slug?>"><img src="<?=PATH_URL.DIR_UPLOAD_ROOMS.$v->images ?>" alt=""></a>
                                    </div>  
                                
                                    <div class="text">
                                        <h2><a href="<?=PATH_URL.$this->lang->lang().'/rooms/'.$v->slug?>"><?php $lang = $this->lang->lang(); $name = "name_".$lang; echo $v->$name ?></a></h2>
                                
                                        <ul>
                                            <li><i class="lotus-icon-person"></i> <?=lang('span_max_guest')?>: <?php echo $v->occupancyAdult ?></li>
                                            <li><i class="lotus-icon-bed"></i> <?=lang('span_bedding')?>: 0<?php echo $v->bedding ?></li>
                                            <li><i class="lotus-icon-view"></i> <?=lang('span_view')?>: <?php echo $v->view ?></li>
                                        </ul>
                                
                                        <a href="<?=PATH_URL.$this->lang->lang().'/rooms/'.$v->slug?>" class="awe-btn awe-btn-default"><?=lang('btn_viewmore')?></a>
                                
                                    </div>
                                
                                </div>
                            </div>
                            <!-- END / ITEM -->
                            <?php endforeach ?>  
                            <?php }?>
                        </div>
                    </div>
                </div>
                <!-- END / COMPARE ACCOMMODATION -->
            </div>
        </section>
        <!-- END / SHOP DETAIL