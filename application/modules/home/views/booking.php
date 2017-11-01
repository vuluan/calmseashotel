<input type="hidden" value="<?=$this->security->get_csrf_hash()?>" id="csrf_token" name="csrf_token" />

<script type="text/javascript">
    $(document).ready( function() {
        searchBooking();
    });
    function searchBooking(){
        var module_url = '<?= PATH_URL ?><?=$this->lang->lang();?>/home/';
        $('#searchBooking').load(module_url+'ajaxSearchBooking',{
            csrf_token                 : $("#csrf_token").val(),
            arrive     :                 $('#txtFromDate').val(), 
            departure   :                $('#txtToDate').val(), 
            adults       :               $('#selAdults').val(),
            children      :              $('#selChildren').val(),
            accommodation  :             $('#selAccommodation').val()
        });
    }
    function reloadurl(){
        var arrive     =                 $('#txtFromDate').val();
        var departure   =               $('#txtToDate').val();
        var adults       =              $('#selAdults').val();
        var children      =              $('#selChildren').val();
        var accommodation  =             $('#selAccommodation').val();
        history.pushState(null, null, '<?= PATH_URL ?><?=$this->lang->lang();?>/booking/search?checkindate='+arrive+'&checkoutdate='+departure+'&adult='+adults+'&children='+children+'&accommodation='+accommodation+'');
    }
    function viewDateRateDetailForOffers(id){
        var module_url = '<?= PATH_URL ?><?=$this->lang->lang();?>/home/';
        $('#viewDateRateDetail').load(module_url+'ajaxViewDateRateDetail', {
            csrf_token                 : $("#csrf_token").val(),
            arrive     :                 $('#txtFromDate').val(), 
            departure   :                $('#txtToDate').val(), 
            id : id
        }, function() {
            $('#myModalOffers').modal('show');
        });
    }
    function viewDateRateDetailForRoom(id){
        var module_url = '<?= PATH_URL ?><?=$this->lang->lang();?>/home/';
        $('#viewDateRateDetailForRoom').load(module_url+'ajaxViewDateRateDetailForRoom', {
            csrf_token                 : $("#csrf_token").val(),
            arrive     :                 $('#txtFromDate').val(), 
            departure   :                $('#txtToDate').val(), 
            id : id
        }, function() {
            $('#myModalRooms').modal('show');
        });
    }

</script>
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>BOOKING</h2>
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
                                                <input type="text" name="arrive"  id="txtFromDate" class="awe-calendar from" value="<?php if(isset($postdata['checkindate'])) { print $postdata['checkindate']; }else{ print '';} ?>" placeholder="<?php if(isset($postdata['checkindate'])) { print $postdata['checkindate']; }else{ print 'arrive';} ?>">
                                            </div>

                                            <div class="check_availability-field">
                                                <label>Depature</label>
                                                <input type="text" name="departure" id="txtToDate" class="awe-calendar to" value="<?php if(isset($postdata['checkoutdate'])) { print $postdata['checkoutdate']; }else{ print '';} ?>" placeholder="<?php if(isset($postdata['checkoutdate'])) { print $postdata['checkoutdate']; }else{ print 'departure';} ?>">
                                            </div>
                                        </div>
                                    </div>  
                                    <h6 class="check_availability_title">SELECT ROOMS</h6>
                                    <div class="check_availability-field">
                                        <select class="awe-select" id='selAccommodation'>
                                            <option value="">--Select--</option>
                                            <?php foreach ($room as $key => $value): ;?>
                                                <?php  
                                                    $select = '';
                                                    if($postdata['accommodation'] == $value->id){
                                                        $select = 'selected="selected"';
                                                    }
                                                ?>
                                            <option value="<?= $value->id?>" <?= $select; ?>><?php $lang = $this->lang->lang(); $name = "name_".$lang; echo $value->$name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <h6 class="check_availability_title">ROOMS & GUESTS</h6>

                                    <div class="check_availability-field">
                                        <label>TOTAL ROOMS</label>
                                        <select class="awe-select" id="selTotalRoom">
                                            <?php  for ($i=1; $i < 6; $i++) { ?>
                                                
                                                <option value='<?php print $i ?>'><?php echo $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="check_availability_group">
                                        <div class="check_availability-field_group">
                                            <div class="check_availability-field">
                                                <label>Adult</label>
                                                <select class="awe-select" id="selAdults" value='<?php print $postdata['adult'];  ?>'>
                                                    <?php for ($i=0; $i < 4; $i++) { ?>
                                                        <?php  
                                                            $select = '';
                                                            if($postdata['adult'] == $i){
                                                                $select = 'selected="selected"';
                                                            }
                                                        ?>
                                                        <option value='<?php print $i ?>' <?= $select; ?> ><?php echo $i ?></option>
                                                    <?php } ?>
                                                    
                                                </select>
                                            </div>
                                            <div class="check_availability-field">
                                                <label>Chirld</label>
                                                <select class="awe-select" id="selChildren" value='<?php print $postdata['children'];  ?>'>
                                                    <?php  for ($i=0; $i < 4; $i++) { ?>
                                                        <?php  
                                                            $select = '';
                                                            if($postdata['child'] == $i){
                                                                $select = 'selected="selected"';
                                                            }
                                                        ?>
                                                        <option value='<?php print $i ?>' <?= $select; ?> ><?php echo $i ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="awe-btn awe-btn-13" onclick="searchBooking();reloadurl();">Search</button>
                                </div>
                                <!-- END / SIDEBAR AVAILBBILITY -->
                            </div>
                        </div>
                        <!-- END / SIDEBAR -->
                        <!-- CONTENT -->
                        <div class="col-md-8 col-lg-9">
                            <div class="reservation_content">
                                <!-- RESERVATION ROOM -->
                                <div class="reservation-room" id="searchBooking">
                                    
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
        <div id="viewDateRateDetail">
            
        </div>

        <div id="viewDateRateDetailForRoom">
            
        </div>