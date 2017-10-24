<!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">

            <div class="awe-overlay"></div>

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
                            <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><span>2.</span> Add oftions</a></li>
                            <li  class="active"><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-3"><span>3.</span> Confirmation</a></li>
                        </ul>
                    </div>
                    <!-- END / STEP -->

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
                                            <span>Thu 06/03/2015</span>
                                        </li>
                                        <li>
                                            <span>Check-Out</span>
                                            <span>Sat 06/06/2015</span>
                                        </li>
                                        <li>
                                            <span>Total Nights</span>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <span>Total Rooms</span>
                                            <span>2 of 2</span>
                                        </li>
                                        <li>
                                            <span>Total Guests</span>
                                            <span>4 Adults 1 Children</span>
                                        </li>
                                    </ul>

                                </div>
                                <!-- END / RESERVATION DATE -->
                                
                                <!-- ROOM SELECT -->
                                <div class="reservation-room-selected bg-gray">

                                    <!-- HEADING -->
                                    <h2 class="reservation-heading">Select Rooms</h2>
                                    <!-- END / HEADING -->

                                    <!-- ITEM -->
                                    <div class="reservation-room-seleted_item">

                                        <h6>ROOM 1</h6> <span class="reservation-option">2 Adult, 1 Child</span>

                                        <div class="reservation-room-seleted_name has-package">
                                            <h2><a href="#">LUXURY ROOM</a></h2>
                                        </div>

                                        <div class="reservation-room-seleted_package">
                                            <h6>Space Price</h6>
                                            <ul>
                                                <li>
                                                    <span>3 June 2015</span>
                                                    <span>$250.00</span>
                                                </li>
                                                <li>
                                                    <span>6 June 2015</span>
                                                    <span>$320.00</span>
                                                </li>
                                            </ul>

                                            <ul>
                                                <li>
                                                    <span>Service</span>
                                                    <span>Free</span>
                                                </li>
                                                <li>
                                                    <span>Tax</span>
                                                    <span>$320.00</span>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="reservation-room-seleted_total-room">
                                            TOTAL Room 1
                                            <span class="reservation-amout">$470.00</span>
                                        </div>
                                        
                                    </div>
                                    <!-- END / ITEM -->

                                    
                                </div>
                                <!-- END / ROOM SELECT -->
                                
                            </div>

                        </div>
                        <!-- END / SIDEBAR -->
                        
                        <!-- CONTENT -->
                        <div class="col-md-8 col-lg-9">

                            <div class="reservation_content">
                                
                                <div class="reservation-billing-detail">

                                    <h4>BILLING DETAILS</h4>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>First Name<sup>*</sup></label>
                                            <input type="text" class="input-text">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Last Name<sup>*</sup></label>
                                            <input type="text" class="input-text">
                                        </div>
                                    </div>

                                    <label>Address<sup>*</sup></label>
                                    <input type="text" class="input-text" placeholder="Street Address">
                                    <br><br>
                                    <input type="text" class="input-text" placeholder="Apartment, suite, unit etc. (Optional)">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Email Address<sup>*</sup></label>
                                            <input type="text" class="input-text">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Phone<sup>*</sup></label>
                                            <input type="text" class="input-text">
                                        </div>
                                    </div>

                                    <label>Order Notes</label>
                                    <textarea class="input-textarea" placeholder="Notes about your order, eg. special notes for delivery"></textarea>

                                    <ul class="option-bank">
                                        <li>
                                            <label class="label-radio">
                                                <input type="radio" class="input-radio" name="chose-bank">
                                                Direct Bank Transfer
                                            </label>
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </li>

                                        <li>
                                            <label class="label-radio">
                                                <input type="radio" class="input-radio" name="chose-bank">
                                                Cheque Payment
                                            </label>
                                        </li>

                                        <li>
                                            <label class="label-radio">
                                                <input type="radio" class="input-radio" name="chose-bank">
                                                Credit Card
                                            </label>

                                            <img src="<?= PATH_URL ?>assets/images/frontend/icon-card.jpg" alt="">
                                        </li>

                                    </ul>
                                    <button class="awe-btn awe-btn-13">PLACE ORDER</button>
                                </div>

                            </div>

                        </div>
                        <!-- END / CONTENT -->
                        
                    </div>
                </div>
            </div>

        </section>
        <!-- END / RESERVATION -->