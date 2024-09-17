<!-- SUB BANNER  -->
        <section class="section-sub-banner bg-20">

            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>RESERVATION</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->
        
        <!-- RESERVATION -->
        <section class="section-reservation-page bg-white">

            <div class="container">
                <div class="reservation-page">
                    <!-- STEP -->
                    <div class="reservation_step">
                        <ul>
                            <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-1"><span>1.</span> Choose Room</a></li>
                            <li class="active"><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><span>2.</span> Add oftions</a></li>
                            <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-3"><span>3.</span> Confirmation</a></li>
                        </ul>
                    </div>
                    <!-- END / STEP -->
                    <?php if (isset($session)){?>
                        <div class="row">
                            <!-- SIDEBAR -->
                            <div class="col-md-4 col-lg-3">
                                <div class="reservation-sidebar">
                                    <!-- RESERVATION DATE -->
                                    <div class="reservation-date bg-gray">
                                        <!-- HEADING -->
                                        <h2 class="reservation-heading">Dates</h2>
                                        <!-- END / HEADING -->
                                        <ul>
                                            <li>
                                                <span>Check-In</span>
                                                <span><?php echo date('d-m-Y', strtotime($session['checkindate'])); ?></span>
                                            </li>
                                            <li>
                                                <span>Check-Out</span>
                                                <span><?php echo date('d-m-Y', strtotime($session['checkoutdate'])); ?></span>
                                            </li>
                                            <li>
                                                <span>Total Nights</span>
                                                <span><?php echo $session['totalday']?></span>
                                            </li>
                                            <li>
                                                <span>Total Rooms</span>
                                                <span><?php echo $session['totalRoom'] ?></span>
                                            </li>
                                            <li>
                                                <span>Guests</span>
                                                <span><?php echo $session['totaladults']?> Adults <?php echo $session['totalchildren']?> Child</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END / RESERVATION DATE -->
                                    <!-- ROOM SELECT -->
                                    <div class="reservation-room-selected bg-gray">

                                        <!-- HEADING -->
                                        <!-- <h2 class="reservation-heading">Select Rooms</h2> -->
                                        <!-- END / HEADING -->
                                        <!-- ITEM -->

                                        <div class="reservation-room-seleted_item">
                                            
                                                <?php if ($session['booking_type'] == 'offer'){ ?>
                                                    <h6><?php $lang = $this->lang->lang(); $title = "title_".$lang; echo $session['result']->$title?></h6>
                                                    <div class="reservation-room-seleted_name has-package">
                                                        <h2><a href=""><?php $lang = $this->lang->lang(); $roomname = "roomname_".$lang; echo $session['result']->$roomname ?></a></h2>
                                                    </div>
                                                        
                                                <?php }elseif ($session['booking_type'] == 'normal') {?>
                                                    <div class="reservation-room-seleted_name has-package">
                                                        <h2><a href=""><?php $lang = $this->lang->lang(); $name = "name_".$lang; echo $session['result']->$name ?></a></h2>
                                                    </div>
                                                <?php } ?> 
                                            
                                            <?php if ($session['totalAdd']==0) {?>
                                                <div class="reservation-room-seleted_package">
                                                    <h6>Space Price (VND)</h6>
                                                    <ul>
                                                        <li>
                                                            <span>Room Charges</span>
                                                            <span class="format-price"> <?php  echo ($session['totalPrice']*$session['totalRoom'])?></span>
                                                        </li>
                                                        <!-- <li>
                                                            <span>6 June 2015</span>
                                                            <span>$320.00</span>
                                                        </li> -->
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>Service Charge 5%</span>
                                                            <span class="format-price"> <?php $service=($session['totalPrice']*($session['totalRoom']))*(5/100); echo $service ?></span>
                                                        </li>
                                                        <li>
                                                            <span>Tax</span>
                                                            <span class="format-price"><?php $tax=($session['totalPrice']*($session['totalRoom']))*(10/100); echo $tax; ?></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="reservation-room-seleted_total-room">
                                                    TOTAL
                                                    <span class="reservation-amout format-price"> <?php echo (($session['totalPrice']*$session['totalRoom'])*(10/100))+(($session['totalPrice']*$session['totalRoom'])*(5/100))+($session['totalPrice']*$session['totalRoom']) ; ?> </span>
                                                </div>
                                            <?php }else{?>
                                                <div class="reservation-room-seleted_package">
                                                    <h6>Space Price (VND)</h6>
                                                    <ul>
                                                        <li>
                                                            <span>Room Charges</span>
                                                            <span class="format-price"> <?php  $totalPrice=($session['totalPrice'])*($session['totalRoom']);echo $totalPrice  ?></span>
                                                        </li>
                                                        <li>
                                                            <span>Person Guests</span>
                                                            <span class="format-price"><?php  $totalPrice=($session['totalAdd'])*($session['totalRoom'])*($session['totalday']);echo $totalPrice  ?></span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>Service Charge 5%</span>
                                                            <span class="format-price"> <?php $service=(($session['totalPrice']+$session['totalAdd'])*$session['totalRoom'])*(5/100); echo $service ?></span>
                                                        </li>
                                                        <li>
                                                            <span>Tax 10%</span>
                                                            <span class="format-price"><?php $tax=(($session['totalPrice']+$session['totalAdd'])*$session['totalRoom'])*(10/100); echo $tax; ?></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="reservation-room-seleted_total-room">
                                                    TOTAL
                                                    <span class="reservation-amout format-price"> <?php echo ($session['totalAdd'])*($session['totalRoom'])+(($session['totalPrice']*$session['totalRoom'])*(10/100))+(($session['totalPrice']*$session['totalRoom'])*(5/100))+($session['totalPrice']*$session['totalRoom']) ; ?> </span>
                                                </div>
                                            <?php } ?>                                            
                                        </div>
                                        <!-- END / ITEM -->
                                        <!-- TOTAL -->
                                        <!-- <div class="reservation-room-seleted_total bg-blue">
                                            <label>GRAND TOTAL</label>
                                            <span class="reservation-total">$470.00</span>
                                        </div> -->
                                        <!-- END / TOTAL -->
                                    </div>
                                    <!-- END / ROOM SELECT -->
                                </div>
                            </div>
                            <!-- END / SIDEBAR -->
                            <!-- CONTENT -->
                            <div class="col-md-8 col-lg-9">
                                <div class="reservation_content">
                                    <div class="reservation-billing-detail">
                                        <?php if ($dataService==''){
                                            echo "no data";
                                        }else{?>
                                        <?php foreach ($dataService as $key => $v): ;?>
                                        <div class="reservation-package_item" <?php if ($key==0){ echo 'style="background: #f1f1f1" ! important';  } ?> >
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-8 col-md-8">
                                                    <label class="left label-radio">
                                                        <input type="checkbox" class="input-radio">
                                                        <?php $lang = $this->lang->lang(); $title = "title_".$lang; echo $v->$title ?>
                                                    </label>
                                                </div>
                                                <div class="col-xs-6 col-sm-4 col-md-4">
                                                    <label class="right label-radio">
                                                        <span class="format-price"><?php echo $v->price ?></span> VND
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-3 col-md-3">
                                                    <div class="reservation-package_img">
                                                        <a href="#"><img src="<?=PATH_URL.DIR_UPLOAD_SERVICES.$v->image ?>" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-9 col-md-9">
                                                    <div class="reservation-package_text">
                                                        <p><?php $lang = $this->lang->lang(); $description = "description_".$lang; echo $v->$description ?></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <?php endforeach ?>
                                        <?php }?>
                                        
                                        <button class="awe-btn awe-btn-13">PLACE ORDER</button>
                                    </div>
                                </div>
                            </div>
                            <!-- END / CONTENT -->
                        </div>
                    <?php }else{
                        echo "no data";
                     } ?>
                </div>
            </div>

        </section>
        <!-- END / RESERVATION