<section class="site-body picture-with-list">
  <?php
    $content_block_heading = get_sub_field('heading');
    $content_block_body = get_sub_field('body');
    $cta = get_sub_field('cta');
    $ctaLink = get_sub_field('cta')['cta_link'];
    $ctaText = get_sub_field('cta')['cta_text'];
    $ctaStyle = get_sub_field('cta')['cta_style'];

  ?>
  <?php if ($ctaStyle == 'Gold') {
    $cta_style = 'button--light';
  }
  ?>
  <?php if ($ctaStyle == 'Black') {
    $cta_style = 'button--dark';
  }
  ?>     
  <section class="full-width-content container">
    <h1 class="full-width-content__heading">
      <?php
        if($content_block_heading) {
          echo $content_block_heading;
        }
      ?>
    </h1>
    <p class="full-width-content__body">
      <?php
        if($content_block_body) {
          echo $content_block_body;
        }
      ?>
    </p>
    <?php if($ctaLink && $ctaText):?>
      <a href="
        <?php
          if($ctaLink) {
            echo $ctaLink;
          }
        ?>
      ">
        <span class="button <?= $cta_style ?>">
          <?php
            if($ctaText) {
              echo $ctaText;
            }
          ?>
        </span>
      </a>
    <?php endif;?>
  </section>
</section>