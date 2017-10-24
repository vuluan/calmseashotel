<!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2><?= lang('title_news') ?></h2>
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

                        <div class="col-md-8 col-md-offset-2">
                            <div class="blog-content">
                                <h1 class="element-invisible">Blog detail</h1>
                                <!-- POST SINGLE -->
                                <article class="post post-single">

                                    <div class="entry-media">
                                        <img src="<?=PATH_URL.DIR_UPLOAD_NEWS.$detailNews[0]->image ?>" alt="">
                                        <span class="posted-on"><strong><?php $date = $detailNews[0]->created ;echo date("d", strtotime($date)); ?></strong><?php $date = $detailNews[0]->created ;echo date("m", strtotime($date)); ?></span>
                                    </div>
                                    
                                    <div class="entry-header">

                                        <h2 class="entry-title"><?php $lang = $this->lang->lang(); $title = "title_".$lang; echo $detailNews[0]->$title ?></h2>

                                        <p class="entry-meta">

                                            <span class="posted-on">
                                                <span class="screen-reader-text">Posted on</span>
                                                <span class="entry-time">JUN 23, 2014</span>
                                            </span>
                
                                            <span class="entry-author">
                                                <span class="screen-reader-text">Posted by </span>
                                                <a href="#" class="entry-author-link">
                                                    <span class="entry-author-name">Calm Seas</span>
                                                </a>
                                            </span>

                                            <span class="entry-comments-link">
                                                <a href="#"><?php $lang = $this->lang->lang(); $cate_name = "cate_name_".$lang; echo $detailNews[0]->$cate_name ?></a>
                                            </span>
                                        </p>

                                    </div>

                                    <div class="entry-content">

                                        <p><b><p><?php $lang = $this->lang->lang(); $des = "description_".$lang; echo $detailNews[0]->$des ?></p></b></p><br />

                                        <?php $lang = $this->lang->lang(); $content = "content_".$lang; echo $detailNews[0]->$content ?>

                                    </div>

                                </article>
                                <!-- END / POST SINGLE -->

                                <!-- COMMENT -->
                                <div id="comments">
                                    
                                </div>
                                <!-- END / COMMENT -->

                               

                            </div>
                        </div> 

                    </div>
                </div>
            </div>
        </section>
        <!-- END / BLOG -->