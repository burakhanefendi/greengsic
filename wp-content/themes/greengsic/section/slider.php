<section class="intro_section page_mainslider ds">
    <div class="flexslider" data-nav="false">
        <ul class="slides">

            <?php
            $loop = new WP_Query( array(
                    'post_type' => 'slider',
                    'posts_per_page' => -1
                )
            );
            ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

                <li>
                    <img src="<?php echo $thumb['0'];?>" alt="">
                </li>

            <?php endwhile; wp_reset_query(); ?>


        </ul>
    </div>
    <!-- eof flexslider -->

</section>
