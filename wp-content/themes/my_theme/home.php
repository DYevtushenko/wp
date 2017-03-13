<?php
get_header();
?>

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1><?php wp_title(); ?></h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Blog</li>
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


                <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <!-- Если запись находится в рубрике, которую мы хотим исключить, мы просто переходим к следующей записи. -->

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
                                    else {
                                        the_placeholder ();
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
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>



                <?php endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif;

                $menu = paginate_links( [
                    'type' => 'array',
                    'prev_text' => 'Назад',
                    'next_text' => 'Далее'
                ] );
                if(!is_null($menu)):
                ?>

                <div class="text-center">
                    <ul class="pagination">

                        <?php foreach ($menu as $item): ?>

                        <li><?php echo $item ?></li>

                    <?php endforeach; ?>

                    </ul>
                </div>

                    <?php endif; ?>

            </div>

            <div class="col-lg-3">

                <?php get_sidebar(); ?>

            </div>

            <!--blog end-->
        </div>

    </div>
    <!--container end-->


<?php
get_footer();