<?php /* Template Name: Contact Page */ ?>

<?php
  get_header();
?>

<?php
  if (have_posts()) {
    while(have_posts()) {
      the_post();
      get_template_part('template-parts/content', 'page');
    }
  }
?>

<section class="contact-us container">
  <h2 class="contact-us__heading site-primary-color">
    Send us an email
  </h2>
  <div class="contact-us__form ">
    <?php echo apply_shortcodes( '[contact-form-7 id="93" title="Site Contact"]' ); ?>
  </div>
</section>

<?php
  get_footer();
?>
