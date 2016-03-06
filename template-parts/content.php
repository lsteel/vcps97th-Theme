<?php
/**
* Template part for displaying posts.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package vicaps97th
*/

?>
<div class="grid-item <?php if ( in_category( 'featured' )) : ?>grid-item-featured<?php endif; ?>">
  <div class="inner">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php
      echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
      the_post_thumbnail();
      echo '</a>';
      ?>
      <div class="blog-content-wrapper">
        <header class="entry-header">
          <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

          <?php if ( 'post' == get_post_type() ) : ?>
            <div class="entry-meta">
              <?php vicaps97th_posted_on(); ?>
            </div><!-- .entry-meta -->
          <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <?php
          the_excerpt( sprintf(
          /* translators: %s: Name of current post. */
          wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'vicaps97th' ), array( 'span' => array( 'class' => array() ) ) ),
          the_title( '<span class="screen-reader-text">"', '"</span>', false )
          ) );
          ?>

          <?php
          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vicaps97th' ),
            'after'  => '</div>',
            ) );
            ?>
          </div><!-- .entry-content -->

          <footer class="entry-footer">
            <?php //vicaps97th_entry_footer(); ?>
          </footer><!-- .entry-footer -->
          <div class="read-more-link">
            <?php
            echo '<a href="'; the_permalink(); echo '">';
            ?>
            <p class="green" >READ MORE</p>
            <?php
            echo '</a>';
            ?>
          </div>
        </div>
      </article><!-- #post-## -->
  </div>
</div>
