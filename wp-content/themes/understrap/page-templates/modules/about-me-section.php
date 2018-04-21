<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section id="about-me-section" class="about-me-section py-5">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
	    <?php if ( get_sub_field( 'heading' ) ) { ?>
            <h1 class="heading text-center"><?= get_sub_field( 'heading' ) ?></h1>
	    <?php } ?>
	    <?php if ( get_sub_field( 'about_me_description' ) ) { ?>
            <p class="about-me-text mx-auto text-center"><?= get_sub_field( 'about_me_description' ) ?></p>
	    <?php } ?>
    </div>
</section>
