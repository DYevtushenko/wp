<?php
get_header();


if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Если запись находится в рубрике, которую мы хотим исключить, мы просто переходим к следующей записи. -->



    <div class="post">

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <small><?php the_time('F jS, Y'); ?></small>

        <div class="entry">
            <?php the_content(); ?>
        </div>

        <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
    </div> <!-- closes the first div box -->

<?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif;


get_footer();