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
                            <li class="active"><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-1"><span>1.</span> Choose Room</a></li>
                            <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><span>2.</span> Make a Reservation</a></li>
                            <li><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-3"><span>3.</span> Confirmation</a></li>
                        </ul>
                    </div>
                    <!-- END / STEP -->

                    <div class="row">

                        <!-- SIDEBAR -->
                        <div class="col-md-4 col-lg-3">
                            
                            <div class="reservation-sidebar">

                                <!-- ROOM SELECT -->
                                <div class="reservation-room-selected bg-gray">
                                    <!-- HEADING -->
                                    <h2 class="reservation-heading">Select Rooms</h2>
                                    <!-- END / HEADING -->

                                    <!-- CURRENT -->
                                    <div class="reservation-room-seleted_current bg-blue">
                                        <h6>YOU ARE BOOKING ROOM 1</h6>  
                                        <span>2 Adult, 1 Chirld</span>   
                                    </div>
                                    <!-- CURRENT -->

                                </div>
                                <!-- END / ROOM SELECT -->
                            
                                <!-- SIDEBAR AVAILBBILITY -->
                                <div class="reservation-sidebar_availability bg-gray">

                                    <!-- HEADING -->
                                    <h2 class="reservation-heading">YOUR RESERVATION</h2>
                                    <!-- END / HEADING -->

                                    <h6 class="check_availability_title">your stay dates</h6>
                                        
                                    <div class="check_availability-field">
                                        <label>Arrive</label>
                                        <input type="text" class="awe-calendar awe-input" placeholder="Arrive">
                                    </div>
                                    
                                    <div class="check_availability-field">
                                        <label>Depature</label>
                                        <input type="text" class="awe-calendar awe-input" placeholder="Depature">
                                    </div>
                                    
                                    <h6 class="check_availability_title">ROOMS &amp; GUest</h6>
                                    
                                    <div class="check_availability-field">
                                        <label>ROOMS</label>
                                        <select class="awe-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                    
                                    <div class="check_availability_group">
                                        <div class="check_availability-field_group">
                                            <div class="check_availability-field">
                                                <label>Adult</label>
                                                <select class="awe-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                            <div class="check_availability-field">
                                                <label>Chirld</label>
                                                <select class="awe-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="awe-btn awe-btn-13">CHECK AVAILABLE</button>

                                </div>
                                <!-- END / SIDEBAR AVAILBBILITY -->

                            </div>

                        </div>
                        <!-- END / SIDEBAR -->
                        
                        <!-- CONTENT -->
                        <div class="col-md-8 col-lg-9">

                            <div class="reservation_content">
                                
                                <!-- RESERVATION ROOM -->
                                <div class="reservation-room">

                                    <!-- ITEM -->
                                    <div class="reservation-room_item">
                                        <h2 class="reservation-room_name"><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2">Standard Room</a></h2>
                                        <div class="reservation-room_img">
                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-1.jpg" alt=""></a>
                                        </div>
                                        <div class="reservation-room_text">
                                            <div class="reservation-room_desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type ...</p>
                                                <ul>
                                                    <li>1 King Bed</li>
                                                    <li>Free Wi-Fi in all guest rooms</li>
                                                    <li>Separate sitting area</li>
                                                </ul>
                                            </div>
                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="reservation-room_view-more">View More Infomation</a>
                                            <div class="clear"></div>
                                            <p class="reservation-room_price">
                                                <span class="reservation-room_amout">$260</span> / days
                                            </p>
                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="awe-btn awe-btn-default">BOOK ROOM</a>
                                        </div>
                                        <div class="reservation-room_package">
                                            <a data-toggle="collapse" href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2reservation-room_package-1" class="reservation-room_package-more " >Show more package</a>
                                            <div class="reservation-room_package-content" id="reservation-room_package-1">
                                                <!-- ITEM PACKAGE -->
                                                <div class="reservation-package_item">
                                                    <div class="reservation-package_img">
                                                        <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="reservation-package_text">
                                                        <h4><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2">package standar</a></h4>
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                        <div class="reservation-package_book-price">
                                                            <p class="reservation-package_price">
                                                                <span class="amout">$260</span>
                                                            </p>
                                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="awe-btn awe-btn-default">Book package</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM PACKAGE -->

                                                <!-- ITEM PACKAGE -->
                                                <div class="reservation-package_item">
                                                    <div class="reservation-package_img">
                                                        <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="reservation-package_text">
                                                        <h4><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2">package standar</a></h4>
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                        <div class="reservation-package_book-price">
                                                            <p class="reservation-package_price">
                                                                <span class="amout">$260</span>
                                                            </p>
                                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="awe-btn awe-btn-default">Book package</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM PACKAGE -->

                                                <!-- ITEM PACKAGE -->
                                                <div class="reservation-package_item">
                                                    <div class="reservation-package_img">
                                                        <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-4.jpg" alt=""></a>
                                                    </div>
                                                    <div class="reservation-package_text">
                                                        <h4><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2">package standar</a></h4>
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                        <div class="reservation-package_book-price">
                                                            <p class="reservation-package_price">
                                                                <span class="amout">$260</span>
                                                            </p>
                                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="awe-btn awe-btn-default">Book package</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM PACKAGE -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="reservation-room_item">
                                        <h2 class="reservation-room_name"><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2">Deluxe Room</a></h2>
                                        <div class="reservation-room_img">
                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-5.jpg" alt=""></a>
                                        </div>
                                        <div class="reservation-room_text">
                                            <div class="reservation-room_desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type ...</p>
                                                <ul>
                                                    <li>1 King Bed</li>
                                                    <li>Free Wi-Fi in all guest rooms</li>
                                                    <li>Separate sitting area</li>
                                                </ul>
                                            </div>
                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="reservation-room_view-more">View More Infomation</a>
                                            <div class="clear"></div>
                                            <p class="reservation-room_price">
                                                <span class="reservation-room_amout">$260</span> / days
                                            </p>
                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="awe-btn awe-btn-default">BOOK ROOM</a>
                                        </div>

                                        <div class="reservation-room_package">
                                            <a data-toggle="collapse" href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2reservation-room_package-2" class="reservation-room_package-more collapsed" >Show more package</a>
                                            <div class="reservation-room_package-content collapse" id="reservation-room_package-2">
                                                <!-- ITEM PACKAGE -->
                                                <div class="reservation-package_item">
                                                    <div class="reservation-package_img">
                                                        <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-5.jpg" alt=""></a>
                                                    </div>
                                                    <div class="reservation-package_text">
                                                        <h4><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2">package Deluxe</a></h4>
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                        <div class="reservation-package_book-price">
                                                            <p class="reservation-package_price">
                                                                <span class="amout">$260</span>
                                                            </p>
                                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="awe-btn awe-btn-default">Book package</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM PACKAGE -->

                                                <!-- ITEM PACKAGE -->
                                                <div class="reservation-package_item">
                                                    <div class="reservation-package_img">
                                                        <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-5.jpg" alt=""></a>
                                                    </div>
                                                    <div class="reservation-package_text">
                                                        <h4><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2">package Deluxe</a></h4>
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                        <div class="reservation-package_book-price">
                                                            <p class="reservation-package_price">
                                                                <span class="amout">$260</span>
                                                            </p>
                                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="awe-btn awe-btn-default">Book package</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM PACKAGE -->

                                                <!-- ITEM PACKAGE -->
                                                <div class="reservation-package_item">
                                                    <div class="reservation-package_img">
                                                        <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-5.jpg" alt=""></a>
                                                    </div>
                                                    <div class="reservation-package_text">
                                                        <h4><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2">package Deluxe</a></h4>
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                        <div class="reservation-package_book-price">
                                                            <p class="reservation-package_price">
                                                                <span class="amout">$260</span>
                                                            </p>
                                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="awe-btn awe-btn-default">Book package</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- END / ITEM PACKAGE -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->
                                    <!-- ITEM -->
                                    <div class="reservation-room_item  current-select">
                                        <h2 class="reservation-room_name"><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2">Suite Room</a></h2>
                                        <div class="reservation-room_img">
                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-9.jpg" alt=""></a>
                                        </div>
                                        <div class="reservation-room_text">
                                            <div class="reservation-room_desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type ...</p>
                                                <ul>
                                                    <li>1 King Bed</li>
                                                    <li>Free Wi-Fi in all guest rooms</li>
                                                    <li>Separate sitting area</li>
                                                </ul>
                                            </div>
                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="reservation-room_view-more">View More Infomation</a>
                                            <div class="clear"></div>
                                            <p class="reservation-room_price">
                                                <span class="reservation-room_amout">$260</span> / days
                                            </p>
                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="awe-btn awe-btn-default">BOOK ROOM</a>
                                        </div>
                                        <div class="reservation-room_package">
                                            <a data-toggle="collapse" href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2reservation-room_package-3" class="reservation-room_package-more collapsed" >Show more package</a>
                                            <div class="reservation-room_package-content " id="reservation-room_package-3">
                                                <!-- ITEM PACKAGE -->
                                                <div class="reservation-package_item">
                                                    <div class="reservation-package_img">
                                                        <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-9.jpg" alt=""></a>
                                                    </div>
                                                    <div class="reservation-package_text">
                                                        <h4><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2">package Suite</a></h4>
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                        <div class="reservation-package_book-price">
                                                            <p class="reservation-package_price">
                                                                <span class="amout">$260</span>
                                                            </p>
                                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="awe-btn awe-btn-default">Book package</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM PACKAGE -->

                                                <!-- ITEM PACKAGE -->
                                                <div class="reservation-package_item">
                                                    <div class="reservation-package_img">
                                                        <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-9.jpg" alt=""></a>
                                                    </div>
                                                    <div class="reservation-package_text">
                                                        <h4><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2">package Suite</a></h4>
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                        <div class="reservation-package_book-price">
                                                            <p class="reservation-package_price">
                                                                <span class="amout">$260</span>
                                                            </p>
                                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="awe-btn awe-btn-default">Book package</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM PACKAGE -->

                                                <!-- ITEM PACKAGE -->
                                                <div class="reservation-package_item">
                                                    <div class="reservation-package_img">
                                                        <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-9.jpg" alt=""></a>
                                                    </div>
                                                    <div class="reservation-package_text">
                                                        <h4><a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2">package Suite</a></h4>
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                        <div class="reservation-package_book-price">
                                                            <p class="reservation-package_price">
                                                                <span class="amout">$260</span>
                                                            </p>
                                                            <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-2" class="awe-btn awe-btn-default">Book package</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM PACKAGE -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->
                                </div>
                                <!-- END / RESERVATION ROOM -->
                            </div>
                        </div>
                        <!-- END / CONTENT -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END / RESERVATION -->
