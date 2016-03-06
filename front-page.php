<?php
/**
 * The template file for the static home page.
 *
 * @package vicaps97th
 */

get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
  <div class="hero-wrapper" >
    <div class="hero-right">
      <?php
      $thumb_id = get_post_thumbnail_id();
      $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
      ?>
      <div class="background-container">
        <img src="<?php if (has_post_thumbnail()) { echo $thumb_url[0]; } ?>" class="hero-right-background vert-center hor-center" />
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/triangle-right-photo-cover.png' ); ?>" class="right-cover" />
      </div>
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/triangle-left-photo-cover.png' ); ?>" class="left-cover" />
    </div><!--
    --><div class="hero-left"></div>
    <div class="max-width-wrapper">
      <h1 class="green">Your Content</h1>
      <h2>Everywhere. To Everyone.</h2>
      <p>At Video Caption Corporation, we provide high quality English and Spanish offline closed captioning, and multi-language subtitling services for video and DVDs. With offices in New York and  California, our friendly and knowledgeable staff will get your captioning or subtitling project done on time and within budget.</p>
    </div>
  </div>
  <div class="section">

  </div>
  <div class="section">
    <div class="thirds">
      <h2>Subtitling</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore </p>
      <hr>
      <div class="box-btn learn-more-btn">
        <a href="#">
          <p>Learn More <span class="triangle-text"><!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In  -->
            <svg version="1.1"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
            x="0px" y="0px" width="5.3033px" height="10.6066px" viewBox="0 0 5.3033 10.6066" enable-background="new 0 0 5.3033 10.6066"
            xml:space="preserve">
            <defs>
            </defs>
            <polyline id="XMLID_1_" fill="#FFFFFF" points="0,0 5.3033,5.3033 0,10.6066 "/>
          </svg>
        </span></p>
        </a>
      </div>
    </div>
    <div class="thirds">
      <h2>Closed Captioning</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>
      <hr>
      <div class="box-btn learn-more-btn">
        <a href="#">
          <p>Learn More <span class="triangle-text"><!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In  -->
            <svg version="1.1"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
            x="0px" y="0px" width="5.3033px" height="10.6066px" viewBox="0 0 5.3033 10.6066" enable-background="new 0 0 5.3033 10.6066"
            xml:space="preserve">
            <defs>
            </defs>
            <polyline id="XMLID_1_" fill="#FFFFFF" points="0,0 5.3033,5.3033 0,10.6066 "/>
          </svg>
        </span></p>
        </a>
      </div>
    </div>
    <div class="thirds">
      <h2>Audio Description</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore </p>
      <hr>
      <div class="box-btn learn-more-btn">
        <a href="#">
          <p>Learn More <span class="triangle-text"><!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In  -->
            <svg version="1.1"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
            x="0px" y="0px" width="5.3033px" height="10.6066px" viewBox="0 0 5.3033 10.6066" enable-background="new 0 0 5.3033 10.6066"
            xml:space="preserve">
            <defs>
            </defs>
            <polyline id="XMLID_1_" fill="#FFFFFF" points="0,0 5.3033,5.3033 0,10.6066 "/>
          </svg>
        </span></p>
        </a>
      </div>
    </div>
  </div>
  <div class="raq-banner-wrapper blue-banner">
    <div class="max-width-wrapper">
      <h3>Let’s take it to the next level.</h3>
      <div class="raq-btn">
        <a href="/request-a-quote/">Request a Quote <span class="triangle-text"><!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In  -->
          <svg version="1.1"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
          x="0px" y="0px" width="5.3033px" height="10.6066px" viewBox="0 0 5.3033 10.6066" enable-background="new 0 0 5.3033 10.6066"
          xml:space="preserve">
            <defs>
            </defs>
            <polyline id="XMLID_1_" fill="#FFFFFF" points="0,0 5.3033,5.3033 0,10.6066 "/>
          </svg>
        </span></a>
      </div>
    </div>
  </div>
  <div class="section">
    <h2>Trusted by Big Brands and Small Shops Alike.</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
    <hr>
    <div class="buzzfeed-logo">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/buzzfeed-logo.png' ); ?>" alt="BuzzFeed Logo" />
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/disney-logo.png' ); ?>" alt="Disney Logo" />
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/pg-logo.png' ); ?>" alt="Proctor and Gamble Logo" />
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/microsoft-logo.png' ); ?>" alt="Microsoft Logo" />
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/warner-bros-logo.png' ); ?>" alt="Warner Brothers Logo" />
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/amazon-logo.png' ); ?>" alt="Amazon Logo" />
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/coast-guard-logo.png' ); ?>" alt="Coast Guard Logo" />
    </div>
  </div>
  <div class="section">
    <div class="section-back-left"></div><!--
    --><div class="section-back-right"></div>
    <div class="max-width-wrapper">
      <div class="section-left">
        <h2>Frequently Asked Questions</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut </p>
        <div class="raq-btn">
          <a href="/request-a-quote/">View FAQ's <span class="triangle-text"><!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In  -->
            <svg version="1.1"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
            x="0px" y="0px" width="5.3033px" height="10.6066px" viewBox="0 0 5.3033 10.6066" enable-background="new 0 0 5.3033 10.6066"
            xml:space="preserve">
              <defs>
              </defs>
              <polyline id="XMLID_1_" fill="#FFFFFF" points="0,0 5.3033,5.3033 0,10.6066 "/>
            </svg>
          </span></a>
        </div>
      </div><!--
      --><div class="section-right">
        <h2>FCC and IP Regulations</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut </p>
        <div class="raq-btn">
          <a href="/request-a-quote/">Learn More <span class="triangle-text"><!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In  -->
            <svg version="1.1"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
            x="0px" y="0px" width="5.3033px" height="10.6066px" viewBox="0 0 5.3033 10.6066" enable-background="new 0 0 5.3033 10.6066"
            xml:space="preserve">
              <defs>
              </defs>
              <polyline id="XMLID_1_" fill="#FFFFFF" points="0,0 5.3033,5.3033 0,10.6066 "/>
            </svg>
          </span></a>
        </div>
      </div>
    </div>
  </div>
  </main><!-- main -->
</div><!-- #primare -->

<?php get_footer(); ?>
