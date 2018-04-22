<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section id="my-portfolio-section" class="my-portfolio-section py-5">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
		<?php if ( get_sub_field( 'heading' ) ) { ?>
            <h1 class="heading text-center"><?= get_sub_field( 'heading' ) ?></h1>
		<?php } ?>
		<?php
		$args = array(
			'post_type'      => 'portfolio', //custom post type args
			'posts_per_page' => - 1,
			'orderby'        => 'menu_order',
			'order'          => 'ASC'
		);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>
        <ul class="row portfolio-list text-center mt-4 pl-0">
			<?php
			while ( $loop->have_posts() ) : $loop->the_post(); //loop for custom post type

				?>
                <li class="col-md-6 col-xl-4 portfolio-item">
                    <div class="image-wrapper">
						<?php
						the_post_thumbnail( 'full', [ 'class' => 'img-fluid' ] );
						?>
                        <div class="overlay mx-auto d-flex justify-content-center align-items-center">
                            <h3>
                                <a class="item-link text-uppercase" target="_blank"
                                   href="<?= get_field( 'project_link' ) ?>"><?php the_title(); ?></a>
                            </h3>
                        </div>
                    </div>
                </li>
			<?php endwhile; ?>
        </ul>
        <?php endif;
		wp_reset_postdata();
        ?>

    </div>
</section>
