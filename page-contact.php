<?php
/**
 * The contact template file.
 *
 * @package vicaps97th
 */

get_header(); ?>
<div class="hero-wrapper" >
  <div class="hero-right">
    <?php
      $thumb_id = get_post_thumbnail_id();
      $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
    ?>
    <div class="background-container">
      <img src="<?php if (has_post_thumbnail()) { echo $thumb_url[0]; } ?>" class="hero-right-background vert-center hor-center off-center-left" />
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/triangle-right-photo-cover.png' ); ?>" class="right-cover" />
    </div>
    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/triangle-left-photo-cover.png' ); ?>" class="left-cover" />
  </div><!--
  --><div class="hero-left"></div>
  <div class="max-width-wrapper">
    <h1 class="green">THANKS FOR VISITING</h1>
    <h2>SIMPLE SUBTITLE GOES RIGHT HERE</h2>
    <p>Leading the industry with innovation and superior service, Video Caption Corporation offers open captioning, closed captioning, subtitling, webcast captioning and subtitling, program duplication, video format conversion, and v-chip encoding.</p>
  </div>
</div>
<div class="maps-wrapper">
  <div class="max-width-wrapper">
    <div class="map-container map-left">
      <div class="map">
        <a href="https://www.google.com/maps/place/88+Hunns+Lake+Rd,+Stanfordville,+NY+12581/@41.874835,-73.6949647,17z/data=!3m1!4b1!4m2!3m1!1s0x89dd704e599b5951:0x2dbf8bba034f2615" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/new-york-map.jpg' ); ?>" alt="Map of location in New York" /></a>
        <div class="map-text-container">
          <h3>New York</h3>
          <p><a href="https://www.google.com/maps/place/88+Hunns+Lake+Rd,+Stanfordville,+NY+12581/@41.874835,-73.6949647,17z/data=!3m1!4b1!4m2!3m1!1s0x89dd704e599b5951:0x2dbf8bba034f2615" target="_blank">88 Hunns Lake Road <br>Stanfordville, NY 12581</a></p>
          <p><a href="tel:8458681200">845.868.1200</a></p>
        </div>
      </div>
    </div><!--
    --><div class="map-container map-right">
    <div class="map">
      <a href="https://www.google.com/maps/place/300+E+Magnolia+Blvd+%23506,+Burbank,+CA+91502/@34.1841874,-118.3122499,17z/data=!3m1!4b1!4m2!3m1!1s0x80c295501ea69871:0x640d93bee00ffb9f" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/los-angeles-map.jpg' ); ?>" alt="Map of location in New York" /></a>
      <div class="map-text-container">
        <h3>Los Angeles</h3>
        <p><a href="https://www.google.com/maps/place/300+E+Magnolia+Blvd+%23506,+Burbank,+CA+91502/@34.1841874,-118.3122499,17z/data=!3m1!4b1!4m2!3m1!1s0x80c295501ea69871:0x640d93bee00ffb9f" target="_blank">300 East Magnolia Blvd,  <br>Suite 506 <br>Burbank, CA 91502</a></p>
        <p><a href="tel:8187365446">818.736.5446</a></p>
      </div>
    </div>
    </div>
    <br class="clear flat">
  </div>
</div>
<div class="contact-info-wrapper max-width-wrapper">
  <div class="contact-info thirds">
    <h3>Project Inquiries</h3>
    <p>If you are interested in scheduling a captioning or subtitling project, you can contact us at <a href="mailto:sales@vicaps.com" target="_blank">sales@vicaps.com</a> or <a href="/request-a-quote/">Request A Quote.</a></p>
  </div><!--
  --><div class="contact-info thirds">
  <h3>Career Opportunities</h3>
  <p>To inquire about current employment opportunities with Video Caption Corporation, you can contact us at <a href="mailto:careers@vicaps.com" target="_blank">careers@vicaps.com</a>, or visit our <a href="/careers/">Careers page</a>.</p>
  </div><!--
  --><div class="contact-info thirds">
  <h3>General Questions</h3>
  <p>If you have general questions or comments regarding captioning or subtitling, you can contact us at <a href="mailto:mail@vicaps.com" target="_blank">mail@vicaps.com</a></p>
  </div>
</div>
<div class="raq-banner-wrapper">
  <div class="max-width-wrapper">
    <h3>Let’s take it to the next level.</h3>
    <div class="raq-btn">
      <a href="/request-a-quote/">Request a Quote <span class="triangle-text">&#x25b6;&#xfe0e;</span></a>
    </div>
  </div>
</div>
<?php get_footer(); ?>
