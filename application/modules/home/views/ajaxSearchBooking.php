
    <?php foreach ($searchRooms as $key => $Rooms): ;?>   

        <!-- ITEM -->
        <div class="reservation-room_item">
            <h2 class="reservation-room_name"><a href="<?=PATH_URL.$this->lang->lang().'/rooms/'.$Rooms->slug?>" target="_blank"><?php $lang = $this->lang->lang(); $name = "name_".$lang; echo $Rooms->$name ?></a></h2>
            <div class="reservation-room_img">
                <a href="<?=PATH_URL.$this->lang->lang().'/rooms/'.$Rooms->slug?>" target="_blank"><img src="<?=PATH_URL.DIR_UPLOAD_ROOMS.$Rooms->images ?>" alt=""></a>
            </div>
            <div class="reservation-room_text">
                <div class="reservation-room_desc">
                    <ul>
                        <li></i> Max Adult: <?php echo $Rooms->occupancyAdult ?></li>
                        <li></i> Max Child: <?php echo $Rooms->occupancyChild ?></li>
                        <li></i> <?=lang('span_bedding')?>: 0<?php echo $Rooms->bedding ?></li>
                        <li></i> <?=lang('span_view')?>: <?php echo $Rooms->view ?></li>
                        <li></i> Size: <?php echo $Rooms->size ?> m2</li>
                    </ul>
                </div>
                <a href="<?=PATH_URL.$this->lang->lang().'/rooms/'.$Rooms->slug?>" class="reservation-room_view-more" target="_blank">View More Infomation</a>
                <div class="clear"></div>
                <p class="reservation-room_price">
                    <span class="reservation-room_amout format-price"><?php echo $Rooms->price ?></span> VNĐ / days
                </p>
                <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="awe-btn awe-btn-default">BOOK ROOM</a>
                <br>
                <a class="reservation-room_view-more" style="cursor: pointer; color: #121213;" onclick="viewDateRateDetailForRoom(<?php echo $Rooms->id ?>);">[+] Daily rate detail</a>
            </div>
            <?php if (isset($searchOffers)){ ?>
            <?php if ($searchOffers=='' || $searchOffers == null){
                echo "";
            }else{?>
            <div class="reservation-room_package">
                <div class="reservation-room_package-content" id="reservation-room_package-1">
                <?php foreach ($searchOffers as $key => $Offers): ;?>
                <?php if ($Rooms->id == $Offers->accommodationId ): ?>
                    <div class="reservation-package_item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="reservation-package_img">
                                    <a href="<?= PATH_URL ?><?=$this->lang->lang().'/special-offer/'.$Offers->slug.'-'.$Offers->id;?>" target="_blank"><img src="<?=PATH_URL.DIR_UPLOAD_OFFERS.$Offers->image ?>" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="reservation-package_text">
                                    <h4><a href="<?= PATH_URL ?><?=$this->lang->lang().'/special-offer/'.$Offers->slug.'-'.$Offers->id;?>" target="_blank"><?php $lang = $this->lang->lang(); $title = "title_".$lang; echo $Offers->$title ?></a></h4>
                                    <p><?php $lang = $this->lang->lang(); $des = "description_".$lang; echo $Offers->$des ?></p>
                                    <p class="reservation-package_price">
                                        <a href="<?= PATH_URL ?><?=$this->lang->lang().'/special-offer/'.$Offers->slug.'-'.$Offers->id;?>" target="_blank">[+] View Detail</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="reservation-package_text">
                                    <div class="reservation-package_book-price">
                                        <p class="reservation-package_price">
                                            <span class="amout format-price"><?php echo $Rooms->price*(100-$Offers->discount)/100; ?> </span> <span style="font-weight: bold;">VND</span>
                                        </p>
                                        <p class="reservation-package_price">
                                            <a  onclick="viewDateRateDetailForOffers(<?php echo $Offers->id ?>);">[+] Daily rate detail</a>
                                        </p>
                                        
                                        <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-1" class="awe-btn awe-btn-default">Book package</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <?php endforeach ?>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
        <!-- END / ITEM -->
        <?php endforeach ?>

        <script type="text/javascript">
            $(".format-price").number( true,0);
        </script>

