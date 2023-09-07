<?php
  get_header();
?>

<?php
// These are all the different components created in the Content Designer flexible content ACF field
?>
<?php if( have_rows('content_designer') ):?>
  <?php while(have_rows('content_designer')): the_row();?>
    <?php if (get_row_layout() == 'banner'):?>
      <?php get_template_part('components/banner');?>
    <?php endif;?>    
    <?php if (get_row_layout() == 'content_block'):?>
      <?php get_template_part('components/content', 'block');?>
    <?php endif;?>
    <?php if (get_row_layout() == 'text_with_image'):?>
      <?php get_template_part('components/textW', 'image');?>
    <?php endif;?>
    <?php if (get_row_layout() == 'queen_cards'):?>
      <?php get_template_part('components/queen', 'cards');?>
    <?php endif;?>         
    <?php if (get_row_layout() == 'photo_cards'):?>
      <?php get_template_part('components/photo', 'gallery');?>
    <?php endif;?>
  <?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>
<?php
  get_footer();
?>