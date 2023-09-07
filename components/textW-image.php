<?php 
  $text_with_image_heading = get_sub_field("heading");
  $text_with_image_body = get_sub_field("body");
  $text_with_image_cta_text = get_sub_field("cta_text");
  $text_with_image_cta_link = get_sub_field("cta_link");
  $text_with_image_cta_image = get_sub_field("image");
  $text_with_image_cta_image_alt = get_sub_field("image_alt");
?>
<section class="content-with-image">
  <div class="content-with-image__container">
    <div class="content-with-image__content">
      <h2>
        <?php
          if($text_with_image_heading) {
            echo $text_with_image_heading;
          }
        ?>
      </h2>
      <p>
        <?php
          if($text_with_image_body) {
            echo $text_with_image_body;
          }
        ?>
      </p>
      <a href="
        <?php
          if($text_with_image_cta_link) {
            echo $text_with_image_cta_link;
          }
        ?>
      ">
        <span class="button button--dark">
          <?php
            if($text_with_image_cta_text) {
              echo $text_with_image_cta_text;
            }
          ?>
        </span>
      </a>
    </div>
    <div class="content-with-image__image">
      <img src="
        <?php
          if($text_with_image_cta_image) {
            echo $text_with_image_cta_image;
          }
        ?>" 
        alt="
          <?php
            if( $text_with_image_cta_image_alt) {
              echo $text_with_image_cta_image_alt;
            }
        ?>"
      >
    </div>
  </div>
</section>