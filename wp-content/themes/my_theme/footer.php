<!--footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <h1>contact info</h1>
                <address>
                    <p>Address: <?php the_field('address','options') ?></p>
                    <p>Phone: <?php the_field('phone','options') ?></p>
                    <p>Fax: <?php the_field('fax','options') ?></p>
                    <p>Email: <?php the_field('e-mail','options') ?></p>
                </address>
            </div>
            <div class="col-lg-5 col-sm-5">
                <h1>latest tweet</h1>
                <div class="tweet-box">
                    <i class="fa fa-twitter"></i>
                    <em>Please follow <a href="javascript:;">@nettus</a> for all future updates of us! <a
                            href="javascript:;">twitter.com/vectorlab</a></em>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-lg-offset-1">
                <h1>stay connected</h1>
                <ul class="social-link-footer list-unstyled">


                    <?php
                    if( have_rows('social','options') ):

                        while ( have_rows('social','options') ) :
                            the_row();
                            ?>
                            <li><a href="<?php the_sub_field('url'); ?>"><i class="fa <?php the_sub_field('icon'); ?>"></i></a></li>
                            <?php

                        endwhile;
                    endif;
                    ?>


                </ul>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<!-- js placed at the end of the document so the pages load faster -->
<?php wp_footer(); ?>

<script>

    jQuery(document).ready(function ($) {
        //RevSlide.initRevolutionSlider();

        $(window).load(function () {
            $('[data-zlname = reverse-effect]').mateHover({
                position: 'y-reverse',
                overlayStyle: 'rolling',
                overlayBg: '#fff',
                overlayOpacity: 0.7,
                overlayEasing: 'easeOutCirc',
                rollingPosition: 'top',
                popupEasing: 'easeOutBack',
                popup2Easing: 'easeOutBack'
            });
        });

        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });

        //    fancybox
        jQuery(".fancybox").fancybox();

    });


</script>

</body>
</html>