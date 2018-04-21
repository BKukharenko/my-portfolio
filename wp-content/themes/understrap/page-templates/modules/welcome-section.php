<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section id="welcome-section" class="welcome-section py-5"
         style="background-image: url(<?php the_sub_field( 'background_image' ); ?>);">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
        <div class="row no-gutters justify-content-center">
            <div class="welcome-content-wrapper d-flex flex-column text-center">
				<?php if ( get_sub_field( 'welcome_text' ) ) { ?>
                    <span class="welcome-text"><?= get_sub_field( 'welcome_text' ) ?></span>
				<?php } ?>
	            <?php if ( get_sub_field( 'name' ) ) { ?>
                    <h1 class="name"><?= get_sub_field( 'name' ) ?></h1>
	            <?php } ?>
	            <?php if ( get_sub_field( 'position' ) ) { ?>
                    <h2 class="position"><?= get_sub_field( 'position' ) ?></h2>
	            <?php } ?>
	            <?php if ( get_sub_field( 'button_text' ) ) { ?>
                    <a href="#about-me-section" class="portfolio-btn mx-auto mt-4"><?= get_sub_field('button_text')?></a>
	            <?php } ?>
            </div>
        </div>
    </div>
</section>
