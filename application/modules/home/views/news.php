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
                            <div class="blog-content events-content">
                                <h1 class="element-invisible">Event fullwidth</h1>
                                <?php if ($news==''){
                                    echo "no data";
                                }else{?>
                                <?php foreach ($news as $key => $v): ;?>
                                <!-- POST ITEM -->
                                <article class="post">
                                    <div class="entry-media">
                                        <a href="<?= PATH_URL ?><?=$this->lang->lang();?>/news-detail" class="post-thumbnail hover-zoom"><img src="<?=PATH_URL.DIR_UPLOAD_NEWS.$v->image ?>" alt=""></a>
                                        <span class="posted-on"><strong><?php $date = $v->created ;echo date("d", strtotime($date)); ?></strong><?php $date = $v->created ;echo date("m", strtotime($date)); ?></span>
                                    </div>
                                    <div class="entry-header">
                                        <h2 class="entry-title"><a href="<?=PATH_URL.$this->lang->lang().'/detail-news/'.$v->slug .'-'.$v->id?>"><?php $lang = $this->lang->lang(); $title = "title_".$lang; echo $v->$title ?></a></h2>
                                    </div>
                                    <div class="entry-content">
                                        <p><?php $lang = $this->lang->lang(); $des = "description_".$lang; echo $v->$des ?>.</p>
                                    </div>
                                    <div class="entry-footer">
                                        <p class="entry-meta">
                                            <span class="posted-on">
                                                <span class="screen-reader-text">Posted on</span>
                                                <span class="entry-time"><?php echo $v->created; ?></span>
                                            </span>
                                            <span class="entry-author">
                                                <span class="screen-reader-text">Posted by </span>
                                                <a href="#" class="entry-author-link">
                                                    <span class="entry-author-name">Calm seas</span>
                                                </a>
                                            </span>
                                            <span class="entry-categories">
                                                <a href="#"><?php $lang = $this->lang->lang(); $cate_name = "cate_name_".$lang; echo $v->$cate_name ?></a>
                                            </span>
                                            <!-- <span class="entry-comments-link">
                                                <a href="#">3 Comments</a>
                                            </span> -->
                                        </p>
                                    </div>

                                </article>
                                <!-- END / POST ITEM -->
                                <?php endforeach ?>
                                <?php } ?>
                                <!-- PAGE NAVIGATION   -->
                                <ul class="page-navigation">
                                    <li class="first"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="current-page"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li class="last"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                                <!-- END / PAGE NAVIGATION   -->

                            </div>
                        </div> 

                    </div>
                </div>
            </div>
        </section>
        <!-- END / BLOG