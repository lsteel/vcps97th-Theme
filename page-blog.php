<?php
/**
* The blog template file.
*
* @package vicaps97th
*/

get_header(); ?>
<div class="hero-wrapper" >
  <?php
    query_posts('posts_per_page=1&cat=6');
    if ( have_posts() ) while ( have_posts() ) : the_post();
  ?>
  <div class="hero-right">
    <div class="background-container">
      <?php
        $exclude_post_id = get_the_ID();
        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
      ?>
      <img src="<?php if (has_post_thumbnail()) { echo $thumb_url[0]; } ?>" class="hero-right-background vert-center hor-center off-center-left" />
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/triangle-right-photo-cover.png' ); ?>" class="right-cover" />
    </div>
    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/triangle-left-photo-cover.png' ); ?>" class="left-cover" />
  </div><!--
  --><div class="hero-left"></div>
  <div class="max-width-wrapper">
    <h1 class="green"><a href=”<?php the_permalink(); ?>”><?php the_title(); /*3*/ ?></a></h1>
      <div class="entry-meta">
        <?php vicaps97th_posted_on(); ?>
      </div><!-- .entry-meta -->
    <p><?php the_excerpt(); ?></p>
    <div class="hero-btn"><a href=”<?php the_permalink(); ?>”>Read More <span class="triangle-text">&#x25b6;&#xfe0e;</span></a></div>
  </div>
  <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
</div>
<div class="blogroll-page-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="grid">
        <div class="grid-sizer"></div>
        <?php // Display blog posts on any page @ http://m0n.co/l
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('showposts=20' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>



        <?php

        /*
        * Include the Post-Format-specific template for the content.
        * If you want to override this in a child theme, then include a file
        * called content-___.php (where ___ is the Post Format name) and that will be used instead.
        */

        //Skip the first featured post by excluded id
        if ($post->ID == $exclude_post_id) continue;
        get_template_part( 'template-parts/content', get_post_format() );
        ?>

      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>
    </div><!-- .grid -->

  </main><!-- #main -->
</div><!-- #primary -->

</div>
<?php get_footer(); ?>
