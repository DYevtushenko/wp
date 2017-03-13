<?php
get_header();
the_post();
?>

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">Blog</li>
                        <li class="active"><?php the_title(); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="container">
        <div class="row">
            <!--blog start-->
            <div class="col-lg-9 ">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-lg-2 col-sm-2">
                                <div class="date-wrap">
                                    <span class="date"><?php the_time('j'); ?></span>
                                    <span class="month"><?php the_time('F'); ?></span>
                                </div>
                                <div class="comnt-wrap">
                                <span class="comnt-ico">
                                    <i class="fa fa-comments"></i>
                                </span>
                                    <span class="value">15</span>
                                </div>
                            </div>
                            <div class="col-lg-10 col-sm-10">
                                <div class="blog-img">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail();
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-sm-2 text-right">
                                <div class="author">
                                    By <a href="#">Admin</a>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="javascript:;"><em>travel</em></a></li>
                                    <li><a href="javascript:;"><em>tour</em></a></li>
                                    <li><a href="javascript:;"><em>recreation</em></a></li>
                                    <li><a href="javascript:;"><em>tourism</em></a></li>
                                </ul>
                                <div class="shate-view">
                                    <ul class="list-unstyled">
                                        <li><a href="javascript:;">209 View</a></li>
                                        <li><a href="javascript:;">23 Share</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-10 col-sm-10">
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-lg-3">
                <div class="blog-side-item">
                    <div class="search-row">
                        <input type="text" class="form-control" placeholder="Search here">
                    </div>
                    <div class="category">
                        <h3>Categories</h3>
                        <ul class="list-unstyled">
                            <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Animals</a></li>
                            <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Landscape</a></li>
                            <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Portait</a></li>
                            <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Wild Life</a></li>
                            <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Video</a></li>
                        </ul>
                    </div>

                    <div class="blog-post">
                        <h3>Latest Blog Post</h3>
                        <div class="media">
                            <a class="pull-left" href="javascript:;">
                                <img class=" " src="<?php echo THEME_URL; ?>img/blog/blog-thumb-1.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="javascript:;">02 May 2013 </a></h5>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus amet int
                                </p>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="javascript:;">
                                <img class=" " src="<?php echo THEME_URL; ?>img/blog/blog-thumb-2.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="javascript:;">02 May 2013 </a></h5>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus amet int
                                </p>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="javascript:;">
                                <img class=" " src="<?php echo THEME_URL; ?>img/blog/blog-thumb-3.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="javascript:;">02 May 2013 </a></h5>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus amet int
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="tags">
                        <h3>Tags</h3>
                        <ul class="list-unstyled tag">
                            <li><a href="#">flat</a></li>
                            <li><a href="#"> clean</a></li>
                            <li><a href="#"> admin</a></li>
                            <li><a href="#"> UI</a></li>
                            <li><a href="#"> responsive</a></li>
                            <li><a href="#"> Web Design</a></li>
                            <li><a href="#"> UIX</a></li>
                            <li><a href="#"> Blog</a></li>
                            <li><a href="#">flat Admin</a></li>
                            <li><a href="#"> Dashboard</a></li>
                        </ul>
                    </div>


                    <div class="archive">
                        <h3>Archive</h3>
                        <ul class="list-unstyled">
                            <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> May 2013</a></li>
                            <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> April 2013</a></li>
                            <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> March 2013</a></li>
                            <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> February 2013</a></li>
                            <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> January 2013</a></li>
                        </ul>
                    </div>


                </div>
            </div>

            <!--blog end-->
        </div>

    </div>
    <!--container end-->


<?php
get_footer();