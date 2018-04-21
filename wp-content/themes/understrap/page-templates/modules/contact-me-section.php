<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section id="contact-me-section" class="contact-me-section py-5">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
		<?php if ( get_sub_field( 'heading' ) ) { ?>
            <h1 class="heading text-center"><?= get_sub_field( 'heading' ) ?></h1>
		<?php } ?>
		<?php if ( get_sub_field( 'description_text' ) ) { ?>
            <p class="contact-me-text mx-auto mt-4 text-center"><?= get_sub_field( 'description_text' ) ?></p>
		<?php } ?>
        <div class="row arrow justify-content-center">
            <i class="fa fa-angle-double-down"></i>
        </div>
        <ul class="contacts text-center">
			<?php if ( get_sub_field( 'email' ) ) { ?>
                <li class="contact email">
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:<?= get_sub_field( 'email' ); ?>" class="contact-link">
						<?= get_sub_field( 'email' ); ?>
                    </a>
                </li>
			<?php } ?>

			<?php if ( get_sub_field( 'phone' ) ) { ?>
                <li class="contact phone">
                    <i class="fa fa-phone"></i>
                    <a href="tel:<?= get_sub_field( 'phone_link' ); ?>" class="contact-link">
						<?= get_sub_field( 'phone' ); ?>
                    </a>
                </li>
			<?php } ?>

			<?php if ( get_sub_field( 'telegram_nickname' ) ) { ?>
                <li class="contact telegram">
                    <i class="fa fa-telegram"></i>
                    <span class="telegram-name">
				        <?= get_sub_field( 'telegram_nickname' ); ?>
                    </span>
                </li>
			<?php } ?>


        </ul>
    </div>
</section>
