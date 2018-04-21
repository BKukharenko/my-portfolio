<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section id="my-skills-section" class="my-skills-section py-5">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
		<?php if ( get_sub_field( 'heading' ) ) { ?>
        <h1 class="heading text-center"><?= get_sub_field( 'heading' ) ?></h1>
		<?php }

		if( have_rows( 'skills' ) ):?>
        <ul class="skills-list row justify-content-around mt-5 pl-0">
			<?php // loop through the rows of data
			while ( have_rows( 'skills' ) ) :
			the_row(); ?>
            <li class="skill col-md-6 col-lg-4 text-center mb-5">
                <img src="<?php the_sub_field( 'skill_image' ); ?>" alt="skill image">
                <h3 class="skill-label mt-3"><?php the_sub_field( 'skill_label' ); ?></h3>
            </li>
            <?php

            endwhile;

            else :

            // no rows found
            ?>
        </ul>
        <?php
        endif;
        ?>
    </div>
</section>
