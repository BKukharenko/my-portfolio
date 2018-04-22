<?php
get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper pt-0" id="single-wrapper">

	<?php
			while (have_rows('home_modules')) : the_row();
				switch (get_row_layout()) {
					case 'welcome_section' :
						get_template_part('page-templates/modules/welcome-section');
						break;
					case 'about_me_section' :
						get_template_part('page-templates/modules/about-me-section');
						break;
					case 'my_skills_section' :
						get_template_part('page-templates/modules/my-skills-section');
						break;
					case 'my_portfolio_section' :
						get_template_part('page-templates/modules/my-portfolio-section');
						break;
					case 'contact_me_section' :
						get_template_part('page-templates/modules/contact-me-section');
						break;
					default:
						break;
				}
			endwhile;
			?>


</div><!-- Wrapper end -->


<?php
get_footer();
?>

