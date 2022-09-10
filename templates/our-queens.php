<?php /* Template Name: Our Queens */ ?>

<?php
  get_header();
?>

<section class="container inner-page">
  <h1 class="">
    Our Queens
  </h1>

  <div class="queens">
    <div class="queen">
      <figure class="queen-image">
        <img src="
          <?php
            $value = get_field("queen_image");
            if($value) {
                echo $value;
            }
          ?>        
        " alt="Picture of one of our Queens">
      </figure>
      <div class="queen-content">
        <h3 class="queen-content__heading">
          <?php
            $value = get_field("queen_name");
            if($value) {
                echo $value;
            }
          ?>    
        </h3>
        <p class="queen-content__body">
          <?php
            $value = get_field("queen_body");
            if($value) {
                echo $value;
            }
          ?>  
        </p>
        <a href="
          <?php
            $value = get_field("button_link");
            if($value) {
                echo $value;
            }
          ?>        
        ">
          <span class="button button--light">
            <?php
              $value = get_field("button_text");
              if($value) {
                  echo $value;
              }
            ?>
          </span>
        </a>
      </div>
    </div>
    <div class="queen">
      <figure class="queen-image">
        <img src="
          <?php
            $value = get_field("queen_image_two");
            if($value) {
                echo $value;
            }
          ?>        
        " alt="Picture of one of our Queens">
      </figure>
      <div class="queen-content">
        <h3 class="queen-content__heading">
          <?php
            $value = get_field("queen_name_two");
            if($value) {
                echo $value;
            }
          ?>    
        </h3>
        <p class="queen-content__body">
          <?php
            $value = get_field("queen_body_two");
            if($value) {
                echo $value;
            }
          ?>  
        </p>
        <a href="
          <?php
            $value = get_field("button_link_two");
            if($value) {
                echo $value;
            }
          ?>        
        ">
          <span class="button button--light">
            <?php
              $value = get_field("button_text_two");
              if($value) {
                  echo $value;
              }
            ?>
          </span>
        </a>
      </div>
    </div>
    <div class="queen">
      <figure class="queen-image">
        <img src="
          <?php
            $value = get_field("queen_image_three");
            if($value) {
                echo $value;
            }
          ?>        
        " alt="Picture of one of our Queens">
      </figure>
      <div class="queen-content">
        <h3 class="queen-content__heading">
          <?php
            $value = get_field("queen_name_three");
            if($value) {
                echo $value;
            }
          ?>    
        </h3>
        <p class="queen-content__body">
          <?php
            $value = get_field("queen_body_three");
            if($value) {
                echo $value;
            }
          ?>  
        </p>
        <a href="
          <?php
            $value = get_field("button_link_three");
            if($value) {
                echo $value;
            }
          ?>        
        ">
          <span class="button button--light">
            <?php
              $value = get_field("button_text_three");
              if($value) {
                  echo $value;
              }
            ?>
          </span>
        </a>
      </div>
    </div>       
  </div>
</section>

<?php
  get_footer();
?>