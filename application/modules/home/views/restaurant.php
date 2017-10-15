<!-- SUB BANNER -->
        <section class="section-sub-banner bg-17">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2><?php $lang = $this->lang->lang(); $name = "name_".$lang; echo $detailUtilities[0]->$name ?></h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SUB BANNER -->

        <!-- ROOM -->
        <section class="section-room bg-white">
            <div class="container">

                <?php $lang = $this->lang->lang(); $content = "content_".$lang; echo $detailUtilities[0]->$content ?>
                
            </div>
        </section>
        <!-- END / ROOM -->