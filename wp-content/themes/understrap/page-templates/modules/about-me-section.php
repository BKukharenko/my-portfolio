<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section id="about-me-section" class="about-me-section text-center py-5">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
	    <?php if ( get_sub_field( 'heading' ) ) { ?>
            <h1 class="heading text-center"><?= get_sub_field( 'heading' ) ?></h1>
	    <?php } ?>
	    <?php if ( get_sub_field( 'about_me_description' ) ) { ?>
            <p class="about-me-text mx-auto text-center"><?= get_sub_field( 'about_me_description' ) ?></p>
	    <?php } ?>
	    <?php if ( get_sub_field( 'github_account_text' ) ) { ?>
            <span class="about-me-text"><?= get_sub_field( 'github_account_text' ) ?></span>
	    <?php } ?>
        <div class="row arrow justify-content-center">
            <i class="fa fa-angle-double-down"></i>
        </div>
        <i class="fa fa-github-square"></i>
	    <?php if ( get_sub_field( 'github_link' ) ) { ?>
            <a href="<?= get_sub_field( 'github_link' ) ?>" class="github-link" target="_blank">
	            <?= get_sub_field( 'github_link_text' ) ?>
            </a>
	    <?php } ?>
    </div>
</section>
