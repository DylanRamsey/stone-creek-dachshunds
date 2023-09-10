<section class="home-form">
  <?php 
    $contact_form_heading = get_sub_field('contact_form_heading');
  ?>
    <section class="contact-us container">
    <h2 class="contact-us__heading h1">
      <?php echo $contact_form_heading;?>
    </h2>
    <div class="contact-us__form">
      <?php echo apply_shortcodes( '[contact-form-7 id="93" title="Site Contact"]' ); ?>
    </div>
  </section>    
</section>