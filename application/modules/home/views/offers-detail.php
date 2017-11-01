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
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2><?=lang('title_special_offers') ?></h2>
                    </div>
                </div>

            </div>
        </section>
        <!-- END / SUB BANNER -->
        
        <!-- BLOG -->
        <section class="section-blog bg-white">
            <div class="container">
                <div class="blog">
                    <div class="row">
                        <div class="col-md-8 col-md-push-4">
                            <h1 class="element-invisible">Activity detail</h1>
                            <div class="blog-content">
                                <!-- POST SINGLE -->
                                <article class="post post-single">
                                    <div class="entry-media">
                                        <img src="<?=PATH_URL.DIR_UPLOAD_OFFERS.$detailOffers[0]->image ?>" alt="">
                                        <span class="posted-on"><strong><?php $date = $detailOffers[0]->created ;echo date("d", strtotime($date)); ?></strong><?php $date = $detailOffers[0]->created ;echo date("m", strtotime($date)); ?></span>
                                    </div>
                                    <div class="entry-header">
                                        <h2 class="entry-title"><?php $lang = $this->lang->lang(); $title = "title_".$lang; echo $detailOffers[0]->$title ?></h2>
                                        <span id="txtAccommodation" style="display: none;"><?php echo $detailOffers[0]->accommodationId ?></span>
                                        <p class="entry-meta">
                                            <span class="posted-on">
                                                <span class="screen-reader-text">Posted on</span>
                                                <span class="entry-time"><?php $date = $detailOffers[0]->created ;echo date("d/m", strtotime($date)); ?></span>
                                            </span>
                                            <span class="entry-author">
                                                <span class="screen-reader-text">By </span>
                                                <a href="" class="entry-author-link">
                                                    <span class="entry-author-name">Calm Seas</span>
                                                </a>
                                            </span>
                                            <span class="entry-categories">
                                                <a href=""><?php $lang = $this->lang->lang(); $room_name = "room_name_".$lang; echo $detailOffers[0]->$room_name ?></a>, 
                                            </span>
                                            <span class="entry-comments-link">
                                                <a href="">Save <?php echo $detailOffers[0]->discount ; ?>%</a>
                                            </span>
                                        </p>
                                    </div>

                                    <div class="entry-content">

                                        <p><b><p><?php $lang = $this->lang->lang(); $des = "description_".$lang; echo $detailOffers[0]->$des ?></p></b></p><br />

                                        <?php $lang = $this->lang->lang(); $content = "content_".$lang; echo $detailOffers[0]->$content ?>

                                    </div>

                                </article>
                                <!-- END / POST SINGLE -->

                                <!-- COMMENT -->
                                <div id="comments">
                                    
                                </div>
                                <!-- END / COMMENT -->
                            </div>
                        </div> 

                        <div class="col-md-4 col-md-pull-8">
                            <div class="sidebar">
                                <!-- SIDEBAR AVAILBBILITY -->
                                <div class="reservation-sidebar">
                                <!-- SIDEBAR AVAILBBILITY -->

                                <div class="reservation-sidebar_availability bg-gray availability-form">
                                    <!-- HEADING -->
                                    <h2 class="reservation-heading">YOUR RESERVATION</h2>
                                    <!-- END / HEADING -->
                                    <h6 class="check_availability_title">your stay dates</h6>
                                    <div class="check_availability_group">
                                        <div class="check_availability-field_group">
                                            <div class="check_availability-field">
                                                <label>Arrive</label>
                                                <input type="text" name="arrive"  id="txtarrive" class="awe-calendar from" placeholder="Arrival">
                                            </div>

                                            <div class="check_availability-field">
                                                <label>Depature</label>
                                                <input type="text" name="departure" id="txtdeparture" class="awe-calendar to" placeholder="Departure">
                                            </div>
                                        </div>
                                    </div>  
                                    <h6 class="check_availability_title">ROOMS & GUESTS</h6>
                                    <div class="check_availability_group">
                                        <div class="check_availability-field_group">
                                            <div class="check_availability-field">
                                                <label>Adult</label>
                                                <select class="awe-select" id="selAdults">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                            <div class="check_availability-field">
                                                <label>Chirld</label>
                                                <select class="awe-select" id="selChildren">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="awe-btn awe-btn-13" onclick="searchavailability();">Search</button>
                                </div>
                                <!-- END / SIDEBAR AVAILBBILITY -->
                            </div>
                                <!-- END / SIDEBAR AVAILBBILITY -->


                               

                                <!-- WIDGET RECENT POST HAS THUMBNAIL -->
                                <div class="widget widget_recent_entries has_thumbnail">        
                                    <h4 class="widget-title">Other offers</h4>
                                    <ul>
                                        <?php if ($FiveDifferentData==''){
                                            echo "no data";
                                        }else{?>
                                        <?php foreach ($FiveDifferentData as $key => $v): ;?>
                                        <li>
                                            <div class="img">
                                                <a href="<?= PATH_URL ?><?=$this->lang->lang().'/special-offer/'.$v->slug.'-'.$v->id;?>"><img src="<?=PATH_URL.DIR_UPLOAD_OFFERS.$v->image ?>" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <a href="<?= PATH_URL ?><?=$this->lang->lang().'/special-offer/'.$v->slug.'-'.$v->id;?>"><?php $lang = $this->lang->lang(); $title = "title_".$lang; echo $v->$title ?></a>
                                                <span class="date"><?php $date = $v->created ;echo date("d/m", strtotime($date)); ?> - Save <?php echo $v->discount; ?>% - <?php $lang = $this->lang->lang(); $room_name = "room_name_".$lang; echo $v->$room_name ?></span>
                                            </div>
                                        </li>
                                        <?php endforeach ?>  
                                        <?php }?>
                                    </ul>
                                </div>
                                <!-- END / WIDGET RECENT POST HAS THUMBNAIL -->

                                
                                

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END / BLOG -->