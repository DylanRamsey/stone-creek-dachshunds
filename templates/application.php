<?php /* Template Name: Application Page */ ?>

<?php
  get_header();
?>

<section class="contact-us container">
  <h1 class="contact-us__heading site-primary-color">
    Application
  </h1>
  <div class="contact-us__form ">
    <?php echo apply_shortcodes( '[contact-form-7 id="163" title="Dog Application"]' ); ?>
  </div>
</section>

<?php
  get_footer();
?>