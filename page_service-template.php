<?php 
/*
	Template Name: Blog
*/
?>

<?php get_header(); ?>
<?php if(get_field('display_hero_section')) : ?>
    <div id="hero-section" class="hero-section blogroll-page-hero-section" <?php if(get_field('hero_section_background_image')){ echo 'style="background: url(' . get_field('hero_section_background_image') . ');"'; } ?>>
        <div class="image-filter blogroll-filter"></div>
        <div class="hero-section-content white-text">
            <div class="hero-section-left">
                <h3 class="featured-line">Featured Blog Post</h3>
                <?php if(get_field('hero_heading')){
                    echo '<h2 class="hero-heading">' . get_field('hero_heading') . '</h2>';
                } ?>
                <?php if(get_field('hero_content')){
                    echo '<div class="hero-content">' . get_field('hero_content') . '</div>';
                } ?>
                <?php if(get_field('hero_button')) : ?>
                    <div class="link-button solid-button white-button">
                        <a href="<?php 
                                if(get_field('hero_section_button_function') == 'custom'):
                                    echo get_field('hero_button_link');
                                else:
                                    echo '#';
                                endif;
                             ?>" class="hero-button <?php 
                                if(get_field('hero_section_button_function') == 'custom'):
                                    echo 'custom-button';
                                else:
                                    echo 'open-form';
                                endif;
                             ?>">
                            <?php echo get_field('hero_button_text'); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(get_field('hero_image')){
                echo '<img src="' . get_field('hero_image') . '" class="hero-image">';
            } ?>
        </div>
        
    </div>
    <div id="hero-bar" class="hero-bar">
        <h2 class="hero-bar-text ">
        <?php if(get_field('hero_bottom_bar_text')) {
            echo get_field('hero_bottom_bar_text');
        } ?>
        &nbsp;</h2>
    </div>
<?php endif; ?>
<div class="page-cover">
    <div class="fade-in-form-container">
        <?php if(get_field('id_of_form_to_display')):
            echo do_shortcode("[vfb id='" . get_field('id_of_form_to_display') . "']");
        else:
            echo do_shortcode("[vfb id='" . get_field('form_id_to_display') . "']");
        endif;
         ?>
    </div>
</div>
<div class="blogroll-page-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
            <?php // Display blog posts on any page @ http://m0n.co/l
                $temp = $wp_query; $wp_query= null;
                $wp_query = new WP_Query(); $wp_query->query('category_name=blog&showposts=5' . '&paged='.$paged);
                while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
            
                
            
				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php 
                //the_posts_navigation(); 
            ?>
            
            <?php if (function_exists("better_pagination")) {
                better_pagination($additional_loop->max_num_pages);
            } ?>
            
            <?php wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->


    <?php get_sidebar('blogroll'); ?>
</div>

<?php get_footer(); ?>