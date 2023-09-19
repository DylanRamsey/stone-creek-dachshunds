<?php 
  $contact_information = get_sub_field('contact_information');
  $social_media = get_sub_field('social_media');
?>
<div class="container">
  <section class="contact-information">
    <div class="contact-information__form">
      <h2 class="center-text">Send us a message</h2>
      <?php get_template_part('components/contact', 'form');?>
    </div>
    <div class="contact-information__options">
      <h4>
        Contact Information:
      </h4>
      <ul>
        <?php foreach($contact_information as $contact_information_item):?>
          <li class="contact-information__options__contact">
            <img 
              class="header-contact" 
              src="<?php echo $contact_information_item['contact_icon'];?>" 
              alt="<?php echo $contact_information_item['contact_icon_alt_text'];?>"
            >
            <?php if($contact_information_item['contact_link']) : ?>
              <a href="<?php echo $contact_information_item['contact_link'];?>">
                <p><?php echo $contact_information_item['contact_text'];?></p>
              </a>
            <?php else : ?>  
              <p><?php echo $contact_information_item['contact_text'];?></p>
            <?php endif; ?>
          </li>          
        <?php endforeach;?>        
      </ul>
      <div>
        <h5>
        Our Veterinarian:          
        </h5>
        <p>
          Huber Declan DVM<br>
          7081 Prospect Rd<br>
          Sarasota, FL 34243<br>
          (941) 756-1600
        </p>
        <h5 class="heading heading--brown center-text">
          Review Us!
        </h5>
        <div class="review-platforms">
          <?php foreach($social_media as $social_media_item):?>
            <a 
              target="_blank" 
              href="<?php echo $social_media_item['social_media_link'];?>">
                <img 
                  src="<?php echo $social_media_item['social_media_icon'];?>" 
                  alt="<?php echo $social_media_item['icon_alt_text'];?>"
                >
            </a>
          <?php endforeach;?> 
        </div>              
      </div>      
    </div>
  </section>
</div>