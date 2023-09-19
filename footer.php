  <footer class="footer">
    <div class="container">
      <div class="footer__content">

    <?php 
      wp_nav_menu(
        array(
          'menu' => 'footer',
          'container' => '',
          'theme_location' => 'footer',
          'items_wrap' => '<ul class="footer__navigation">%3$s</ul>'
        )
      );
    ?>        
        <div class="footer__badge-container">
          <figure class="footer__badge">
            <img src="/wp-content/uploads/good-breeder-icon.webp" alt="Good Breeder Badge">
          </figure>
          <figure class="footer__badge">
            <img src="/wp-content/uploads/east-coast-k9-badge.webp" alt="East Coast K9 Badge">
          </figure>
        </div>
        <div class="footer__contact">
          <figure class="footer__logo">
            <img src="/wp-content/uploads/cropped-logo_nobackground.webp" alt="Stone Creek Dachshunds Logo">
          </figure>
        </div>
      </div>
      <div class="footer__credit">
        <a href="https://dylanbradramsey.com/" target="_blank">Website designed and developed by Dylan Ramsey</a>
      </div>
    </div>
  </footer>

  <?php 
    wp_footer();
  ?>
</body>
</html>