<?php

/**
 *  Template Name: Gıda Ürünleri
 */

get_header(); ?>

<style>
    .page_breadcrumbs.parallax {
        background-image: url("<?php echo get_post_meta($post->ID, "banner_img", true); ?>");
    }
</style>

<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50" style="height: 200px">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2><?php the_title();?></h2>
            </div>
        </div>
    </div>
</section>

<section class="ls page_portfolio section section_padding_bottom_10 columns_padding_25 columns_margin_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <p><?php the_content();?></p>
                <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/sugar.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        ŞEKER
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            Ham Şeker
                        </li>
                        <li>
                            Beyaz Şeker
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <img src="/wp-content/uploads/2020/07/dairy.jpg">
                    </div>
                    <h4 class="text-uppercase text-center">
                        SÜT ÜRÜNLERİ
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            AMF
                        </li>
                        <li>
                            Tereyağı
                        </li>
                        <li>
                            Süt Tozu
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="teaser with_border text-center">
                    <div class="teaser_icon highlight size_small">
                        <i class="fa fa-thumbs-o-up"  style="font-size: 60px"></i>
                    </div>
                    <h4 class="text-uppercase text-center">
                        Kuvvet
                    </h4>
                    <p>
                    <ul style="text-align: left">
                        <li>
                            Kaliteye özel önem veren, tutarlı tedarik sağlayan özel ve profesyonel personel.
                        </li>
                        <li>
                            Eşsiz ve Eşsiz Lojistik Sistemi. Faaliyet gösterdiği bölgelerde depolama ve depolama düzenlemelerine sahip olmak.
                        </li>
                        <li>
                            Bölgesel pazarlarda yılların deneyimi.
                        </li>
                        <li>
                            Müşteri memnuniyetine dayalı güvenilir pazar payı.
                        </li>
                        <li>
                            Faaliyet gösterdiği alanlarda müşterileri ile güçlü ortaklık ve işbirliği.
                        </li>
                    </ul>
                    </p>

                </div>
            </div>

        </div>
    </div>

</section>


<?php get_footer() ?>
