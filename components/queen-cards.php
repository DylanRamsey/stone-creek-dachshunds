<?php
  $serviceCardHeading = get_sub_field('queen_cards_heading');
  $serviceCards = get_sub_field('queen_cards');
  $serviceCardLayout = get_sub_field('queen_card_layout');
?>

<?php if($serviceCardLayout == '2 Column') {
    $serviceCardLayoutClass = 'service-cards-group--two-col';
  }
?>
<?php if($serviceCardLayout == '3 Column') {
    $serviceCardLayoutClass = 'service-cards-group--three-col';
  }
?>
<?php if($serviceCardLayout == '5 Column') {
    $serviceCardLayoutClass = 'service-cards-group--five-col';
  }
?>
<section class="queens container">
  <h2 class="queens_h1">
    <?php
      if($serviceCardHeading) {
        echo $serviceCardHeading;
      }
    ?>
  </h2>
  <section class="queen-boxes serviceCardLayoutClass">
    <?php foreach($serviceCards as $serviceCard):?>
      <div class="queen-box">
        <h3 class="queen-box__heading">
          <?php
            if($serviceCard['queen_card_heading']) {
              echo $serviceCard['queen_card_heading'];
            }
          ?>
        </h3>
        <img class="queen-box__image" src="
          <?php
            if($serviceCard['queen_card_image']) {
              echo $serviceCard['queen_card_image'];
            }
          ?>"
          alt="
          <?php
            if($serviceCard['queen_card_alt']) {
              echo $serviceCard['queen_card_alt'];
            }
          ?>"
        >
        <?php if($serviceCard['queen_card_link']):?>
          <a href="<?= $serviceCard['queen_card_link'] ?>">
            <span class="button button--light">
              <?php
                if($serviceCard['queen_card_heading']) {
                  echo $serviceCard['queen_card_heading'];
                }
              ?>
            </span>
          </a>
        <?php endif;?>
      </div>
    <?php endforeach;?>
  </section>    
</section>