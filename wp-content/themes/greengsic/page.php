<?=get_header(); ?>

<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
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
				</div>
                <?php endif; ?>
			</section>
<?=get_footer(); ?>
