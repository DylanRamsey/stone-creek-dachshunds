<?php
  $queen_info_img = get_sub_field('queen_image');
  $queen_info_img_alt = get_sub_field('queen_image_alt');
  $queen_info_name = get_sub_field('queen_name');
  $queen_info_body = get_sub_field('queen_text_body');
  $button_text = get_sub_field('button_text');
  $button_link = get_sub_field('button_link');
?>
<section class="container inner-page">
  <div class="">
    <div class="queen">
        <img 
          class="queen-image" 
          src="<?= $queen_info_img ?>" 
          alt="<?= $queen_info_img_alt ?>"
        >
      <div class="queen-content">
        <h3 class="queen-content__heading">
          <?= $queen_info_name ?>
        </h3>
        <p class="queen-content__body">
          <?= $queen_info_body ?>
        </p>
        <?php if($button_text):?>
          <a href="
            <?= $button_link ?>
          ">
            <span class="button button--light">
              <?= $button_text ?>
            </span>
          </a>
        <?php endif;?>
      </div>
    </div>
  </div>
</section>