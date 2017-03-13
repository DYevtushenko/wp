<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">Страница не найдена!</h1>
            </div>
            <div class="col-sm-6">
                <h5>Возможно, Вам будет интересно это:</h5>

                <?php wp_nav_menu( [
                    'theme_location'  => '404_menu',
                    'container'       => 'div',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'list-unstyled',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] ); ?>

            </div>
            <div class="col-sm-6">
                <?php the_404_img (); ?>
            </div>


        </div>
    </div>

<?php get_footer();