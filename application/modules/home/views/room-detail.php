        
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-16">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Phòng hạng sang</h2>
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->
        
        <!-- ROOM DETAIL -->
        <section class="section-room-detail bg-white">
            <div class="container">
                <!-- DETAIL -->
                <div class="room-detail">
                    <div class="row">
                        <div class="col-lg-9">
                            <!-- LAGER IMGAE -->
                            <div class="room-detail_img">
                                <div class="room_img-item">
                                    <img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-1.jpg" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                                <div class="room_img-item">
                                    <img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-2.jpg" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                                <div class="room_img-item">
                                    <img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-3.jpg" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                                <div class="room_img-item">
                                    <img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-4.jpg" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                                <div class="room_img-item">
                                    <img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-5.jpg" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                                <div class="room_img-item">
                                    <img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-6.jpg" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                                <div class="room_img-item">
                                    <img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-7.jpg" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                                <div class="room_img-item">
                                    <img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-8.jpg" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                                <div class="room_img-item">
                                    <img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-9.jpg" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                            </div>
                            <!-- END / LAGER IMGAE -->
                            
                            <!-- THUMBNAIL IMAGE -->
                            <div class="room-detail_thumbs">
                                <a href="#"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-1.jpg" alt=""></a>
                                <a href="#"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-2.jpg" alt=""></a>
                                <a href="#"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-3.jpg" alt=""></a>
                                <a href="#"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-4.jpg" alt=""></a>
                                <a href="#"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-5.jpg" alt=""></a>
                                <a href="#"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-6.jpg" alt=""></a>
                                <a href="#"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-7.jpg" alt=""></a>
                                <a href="#"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-8.jpg" alt=""></a>
                                <a href="#"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/lager/img-9.jpg" alt=""></a>
                            </div>
                            <!-- END / THUMBNAIL IMAGE -->

                        </div>

                        <div class="col-lg-3">

                            <!-- FORM BOOK -->
                            <div class="room-detail_book">

                                <div class="room-detail_total">
                                    <img src="<?= PATH_URL ?>assets/images/frontend/icon-logo.png" alt="" class="icon-logo">
                                    
                                    <h6>STARTING ROOM FROM</h6>
                                    
                                    <p class="price">
                                        <span class="amout">$260</span>  /days
                                    </p>
                                </div>
                                
                                <div class="room-detail_form">
                                    <label>Arrive</label>
                                    <input type="text" class="awe-calendar from" placeholder="Arrival Date">
                                
                                    <label>Depature</label>
                                    <input type="text" class="awe-calendar to" placeholder="Departure Date">
                                    <label>Adult</label>
                                    <select class="awe-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option selected>3</option>
                                        <option>4</option>
                                    </select>
                                    <label>Chirld</label>
                                    <select class="awe-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option selected>3</option>
                                        <option>4</option>
                                    </select>
                                    <button class="awe-btn awe-btn-13" onclick="booking();">Book Now</button>
                                </div>

                            </div>
                            <!-- END / FORM BOOK -->

                        </div>
                    </div>
                </div>
                <!-- END / DETAIL -->
                <script type="text/javascript">
                    function booking(){
                        window.location.href =('<?= PATH_URL ?><?=$this->lang->lang();?>/booking-step-1');
                    }
                </script>
                <!-- TAB -->
                <div class="room-detail_tab">
                    
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="room-detail_tab-header">
                                <li><a href="#overview" data-toggle="tab">OVERVIEW</a></li>
                                <li class="active"><a href="#amenities" data-toggle="tab">amenities</a></li>
                                <li><a href="#package" data-toggle="tab">PACKAGE</a></li>
                            </ul>
                        </div>
                                        
                        <div class="col-md-9">
                            <div class="room-detail_tab-content tab-content">
                                
                                <!-- OVERVIEW -->
                                <div class="tab-pane fade" id="overview">

                                    <div class="room-detail_overview">
                                        <h5 class='text-uppercase'>Không gian hài hòa</h5>
                                        <p>Để Du khách được thưởng trọn sự ưu ái của tạo hóa tại căn phòng của mình, không gian thiết kế đã tạo nên tâm điểm tuyệt đẹp, hướng nhìn ấn tượng. Quý khách sẽ thoả lòng từ ngắm nhìn bước đầu, đến khi trải nghiệm. Bởi thế Calm Sea như trở thành chốn mà ta mong trở về, như ngôi nhà ta tự làm chủ, để thả mình với sự hài lòng nhất.</p>

                                        <div class="row">
                                            <div class="col-xs-6 col-md-4">
                                                <h6>SPECIAL ROOM</h6>
                                                <ul>
                                                    <li>Max: 4 Person(s)</li>
                                                    <li>Size: 35 m2 / 376 ft2</li>
                                                    <li>View: Ocen</li>
                                                    <li>Bed: King-size or twin beds</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-md-4">
                                                <h6>SERVICE ROOM</h6>
                                                <ul>
                                                    <li>Oversized work desk</li>
                                                    <li>Hairdryer</li>
                                                    <li>Iron/ironing board upon request</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- END / OVERVIEW -->

                                <!-- AMENITIES -->
                                <div class="tab-pane fade active in" id="amenities">
                                    
                                    <div class="room-detail_amenities">
                                        <h5 class='text-uppercase'>Thiết kế sang trọng.</h5>
                                        <p>Không chỉ là sự đủ đầy đơn thuần, chúng tôi hướng đến cảm giác tận hưởng đem lại giá trị tinh thần quý giá. Với nền gỗ truyền thống chủ đạo không chỉ sửi ấm khi se lạnh, làm tươi mát những ngày hè; quan trọng hơn là đưa đến nét đẹp cổ điển, đem thiên nhiên gần gũi mà sang trọng gắn kết khéo léo với những tiện nghi hiện đại. Từng bình hoa nhỏ, ánh đèn phòng,… được lựa chọn bày trí đầy dụng ý sẽ đem lại không gian mới mẻ, hoàn hảo cho Du khách.</p>
                                        
                                        <div class="row">
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>LIVING ROOM</h6>
                                                <ul>
                                                    <li>Oversized work desk</li>
                                                    <li>Hairdryer</li>
                                                    <li>Iron/ironing board upon request</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>KITCHEN ROOM</h6>
                                                <ul>
                                                    <li>AM/FM clock radio</li>
                                                    <li>Voicemail</li>
                                                    <li>High-speed Internet access</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>balcony</h6>
                                                <ul>
                                                    <li>AM/FM clock radio</li>
                                                    <li>Voicemail</li>
                                                    <li>High-speed Internet access</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>bedroom</h6>
                                                <ul>
                                                    <li>Coffee maker</li>
                                                    <li>25 inch or larger TV</li>
                                                    <li>Cable/satellite TV channels</li>
                                                    <li>AM/FM clock radio</li>
                                                    <li>Voicemail</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>bathroom</h6>
                                                <ul>
                                                    <li>Dataport</li>
                                                    <li>Phone access fees waived</li>
                                                    <li>24-hour Concierge service</li>
                                                    <li>Private concierge</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>Oversized work desk</h6>
                                                <ul>
                                                    <li>Dataport</li>
                                                    <li>Phone access fees waived</li>
                                                    <li>24-hour Concierge service</li>
                                                    <li>Private concierge</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- END / AMENITIES -->

                                <!-- PACKAGE -->
                                <div class="tab-pane fade" id="package">
                            
                                    <div class="room-detail_package">

                                        <!-- ITEM package -->
                                        <div class="room-package_item">
                                        
                                            <div class="text">
                                                <h4><a href="#">package standar</a></h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                                                                    
                                                <div class="room-package_price">
                                                    <p class="price">
                                                        <span class="amout">$260</span> / Package
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Book package</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END / ITEM package -->
                                                                    
                                        <!-- ITEM package -->
                                        <div class="room-package_item">
                                        
                                            <div class="text">
                                                <h4><a href="#">package standar</a></h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                                                                    
                                                <div class="room-package_price">
                                                    <p class="price">
                                                        <span class="amout">$260</span> / Package
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Book package</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END / ITEM package -->
                                        
                                        <!-- ITEM package -->
                                        <div class="room-package_item">
                                        
                                            <div class="text">
                                                <h4><a href="#">package standar</a></h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                                                                    
                                                <div class="room-package_price">
                                                    <p class="price">
                                                        <span class="amout">$260</span> / Package
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Book package</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END / ITEM package -->
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
                    <h2 class="room-compare_title">COMPARE ACCOMMODATION</h2>

                    <div class="room-compare_content">
                        
                        <div class="row">
                            <!-- ITEM -->
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="room-compare_item">
                                    <div class="img">
                                        <a href="#"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/compare/img-1.jpg" alt=""></a>
                                    </div>  
                                
                                    <div class="text">
                                        <h2><a href="">LUxury room</a></h2>
                                
                                        <ul>
                                            <li><i class="lotus-icon-person"></i> Max: 2 Person(s)</li>
                                            <li><i class="lotus-icon-bed"></i> Bed: King-size or twin beds</li>
                                            <li><i class="lotus-icon-view"></i> View: Ocen</li>
                                        </ul>
                                
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                
                                    </div>
                                
                                </div>
                            </div>
                            <!-- END / ITEM -->
                            
                            <!-- ITEM -->
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="room-compare_item">
                                    <div class="img">
                                        <a href="#"><img src="<?= PATH_URL ?>assets/images/frontend/room/detail/compare/img-1.jpg" alt=""></a>
                                    </div>  
                                
                                    <div class="text">
                                        <h2><a href="">Family Room</a></h2>
                                
                                        <ul>
                                            <li><i class="lotus-icon-person"></i> Max: 2 Person(s)</li>
                                            <li><i class="lotus-icon-bed"></i> Bed: King-size or twin beds</li>
                                            <li><i class="lotus-icon-view"></i> View: Ocen</li>
                                        </ul>
                                
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                
                                    </div>
                                
                                </div>
                            </div>
                            <!-- END / ITEM -->
                        </div>
                    </div>
                </div>
                <!-- END / COMPARE ACCOMMODATION -->
            </div>
        </section>
        <!-- END / SHOP DETAIL