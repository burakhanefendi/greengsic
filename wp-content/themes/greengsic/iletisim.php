<?php

/**
 *  Template Name: İletişim
 */

get_header(); ?>

<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.4610280094275!2d28.672731515414302!3d41.01516857930005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa09dbc633989%3A0x766b4fa269e32ad3!2sFuture%20park%20istanbul!5e0!3m2!1str!2str!4v1595623168605!5m2!1str!2str" width="1920" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></section>

<section class="ls columns_padding_25 section_padding_top_75 section_padding_bottom_100">
    <div class="container">
        <div class="row">

            <div class="col-md-8 to_animate" data-animation="scaleAppear">

                <h3 class="text-capitalize">İletişim Formu</h3>

                <?php echo do_shortcode( '[contact-form-7 id="310" title="İletişim formu 1"]' ); ?>

            </div>
            <!--.col-* -->

            <div class="col-md-4 to_animate" data-animation="scaleAppear">

                <h3 class="text-capitalize">İletişim Bilgilerimiz</h3>

                <p>
                    <i class="fa fa-map-marker highlight rightpadding_5" aria-hidden="true"></i>
                    Akevler Mah., 1069. Sk. Futura Park Sitesi E3 Blok No: 9 E İç Kapı No: 141 P.K. 34513<br>
                    Esenyurt-İstanbul
                </p>
                <p>
                    <i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i>  +90 543 410 80 58
                </p>
                <p class="greylinks">
                    <i class="fa fa-envelope highlight rightpadding_5" aria-hidden="true"></i> <a href="mailto:info@greengsic.com">info@greengsic.com</a>
                </p>

            </div>
            <!--.col-* -->

        </div>
        <!--.row -->

    </div>
    <!--.container -->

</section>


<?php get_footer() ?>
