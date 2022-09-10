<?php /* Template Name: Reviews Page */ ?>

<?php
  get_header();
?>

<section class="container inner-page">
  <h1 class="center-text">
    Our Reviews
  </h1>
  <div class="review-cards">
    <div class="review-card">
      <figure class="review-card__image">
        <img src="
        <?php
          $value = get_field("review_page_image");
          if($value) {
              echo $value;
          }
        ?>" 
        alt="Picture of reviewer">
      </figure>
      <svg width="56px" height="56px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect x="0" fill="none" width="24" height="24"/><g><path d="M11.192 15.757c0-.88-.23-1.618-.69-2.217-.326-.412-.768-.683-1.327-.812-.55-.128-1.07-.137-1.54-.028-.16-.95.1-1.956.76-3.022.66-1.065 1.515-1.867 2.558-2.403L9.373 5c-.8.396-1.56.898-2.26 1.505-.71.607-1.34 1.305-1.9 2.094s-.98 1.68-1.25 2.69-.346 2.04-.217 3.1c.168 1.4.62 2.52 1.356 3.35.735.84 1.652 1.26 2.748 1.26.965 0 1.766-.29 2.4-.878.628-.576.94-1.365.94-2.368l.002.003zm9.124 0c0-.88-.23-1.618-.69-2.217-.326-.42-.77-.692-1.327-.817-.56-.124-1.074-.13-1.54-.022-.16-.94.09-1.95.75-3.02.66-1.06 1.514-1.86 2.557-2.4L18.49 5c-.8.396-1.555.898-2.26 1.505-.708.607-1.34 1.305-1.894 2.094-.556.79-.97 1.68-1.24 2.69-.273 1-.345 2.04-.217 3.1.165 1.4.615 2.52 1.35 3.35.732.833 1.646 1.25 2.742 1.25.967 0 1.768-.29 2.402-.876.627-.576.942-1.365.942-2.368v.01z"/></g></svg>
      <p class="review-card__copy">
      <?php
          $value = get_field("review_page_review");
          if($value) {
              echo $value;
          }
      ?> wow this one is even more cooler that I gota saty some more stuff line breka here plaz
      </p>
      <div class="review-card__author">
      <?php
          $value = get_field("review_page_reviewer_name");
          if($value) {
              echo $value;
          }
      ?> 
      </div>
    </div>
    <div class="review-card">
      <figure class="review-card__image">
        <img src="
        <?php
          $value = get_field("review_page_image_two");
          if($value) {
              echo $value;
          }
        ?>" 
        alt="Picture of reviewer">
      </figure>
      <svg width="56px" height="56px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect x="0" fill="none" width="24" height="24"/><g><path d="M11.192 15.757c0-.88-.23-1.618-.69-2.217-.326-.412-.768-.683-1.327-.812-.55-.128-1.07-.137-1.54-.028-.16-.95.1-1.956.76-3.022.66-1.065 1.515-1.867 2.558-2.403L9.373 5c-.8.396-1.56.898-2.26 1.505-.71.607-1.34 1.305-1.9 2.094s-.98 1.68-1.25 2.69-.346 2.04-.217 3.1c.168 1.4.62 2.52 1.356 3.35.735.84 1.652 1.26 2.748 1.26.965 0 1.766-.29 2.4-.878.628-.576.94-1.365.94-2.368l.002.003zm9.124 0c0-.88-.23-1.618-.69-2.217-.326-.42-.77-.692-1.327-.817-.56-.124-1.074-.13-1.54-.022-.16-.94.09-1.95.75-3.02.66-1.06 1.514-1.86 2.557-2.4L18.49 5c-.8.396-1.555.898-2.26 1.505-.708.607-1.34 1.305-1.894 2.094-.556.79-.97 1.68-1.24 2.69-.273 1-.345 2.04-.217 3.1.165 1.4.615 2.52 1.35 3.35.732.833 1.646 1.25 2.742 1.25.967 0 1.768-.29 2.402-.876.627-.576.942-1.365.942-2.368v.01z"/></g></svg>
      <p class="review-card__copy">
      <?php
          $value = get_field("review_page_review_two");
          if($value) {
              echo $value;
          }
      ?> 
      </p>
      <div class="review-card__author">
      <?php
          $value = get_field("review_page_reviewer_name_two");
          if($value) {
              echo $value;
          }
      ?> 
      </div>
    </div>
    <div class="review-card">
      <figure class="review-card__image">
        <img src="
        <?php
          $value = get_field("review_page_image_three");
          if($value) {
              echo $value;
          }
        ?>" 
        alt="Picture of reviewer">
      </figure>
      <svg width="56px" height="56px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect x="0" fill="none" width="24" height="24"/><g><path d="M11.192 15.757c0-.88-.23-1.618-.69-2.217-.326-.412-.768-.683-1.327-.812-.55-.128-1.07-.137-1.54-.028-.16-.95.1-1.956.76-3.022.66-1.065 1.515-1.867 2.558-2.403L9.373 5c-.8.396-1.56.898-2.26 1.505-.71.607-1.34 1.305-1.9 2.094s-.98 1.68-1.25 2.69-.346 2.04-.217 3.1c.168 1.4.62 2.52 1.356 3.35.735.84 1.652 1.26 2.748 1.26.965 0 1.766-.29 2.4-.878.628-.576.94-1.365.94-2.368l.002.003zm9.124 0c0-.88-.23-1.618-.69-2.217-.326-.42-.77-.692-1.327-.817-.56-.124-1.074-.13-1.54-.022-.16-.94.09-1.95.75-3.02.66-1.06 1.514-1.86 2.557-2.4L18.49 5c-.8.396-1.555.898-2.26 1.505-.708.607-1.34 1.305-1.894 2.094-.556.79-.97 1.68-1.24 2.69-.273 1-.345 2.04-.217 3.1.165 1.4.615 2.52 1.35 3.35.732.833 1.646 1.25 2.742 1.25.967 0 1.768-.29 2.402-.876.627-.576.942-1.365.942-2.368v.01z"/></g></svg>
      <p class="review-card__copy">
      <?php
          $value = get_field("review_page_review_three");
          if($value) {
              echo $value;
          }
      ?> 
      </p>
      <div class="review-card__author">
      <?php
          $value = get_field("review_page_reviewer_name_three");
          if($value) {
              echo $value;
          }
      ?> 
      </div>
    </div>
    <div class="review-card">
      <figure class="review-card__image">
        <img src="
        <?php
          $value = get_field("review_page_image_four");
          if($value) {
              echo $value;
          }
        ?>" 
        alt="Picture of reviewer">
      </figure>
      <svg width="56px" height="56px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect x="0" fill="none" width="24" height="24"/><g><path d="M11.192 15.757c0-.88-.23-1.618-.69-2.217-.326-.412-.768-.683-1.327-.812-.55-.128-1.07-.137-1.54-.028-.16-.95.1-1.956.76-3.022.66-1.065 1.515-1.867 2.558-2.403L9.373 5c-.8.396-1.56.898-2.26 1.505-.71.607-1.34 1.305-1.9 2.094s-.98 1.68-1.25 2.69-.346 2.04-.217 3.1c.168 1.4.62 2.52 1.356 3.35.735.84 1.652 1.26 2.748 1.26.965 0 1.766-.29 2.4-.878.628-.576.94-1.365.94-2.368l.002.003zm9.124 0c0-.88-.23-1.618-.69-2.217-.326-.42-.77-.692-1.327-.817-.56-.124-1.074-.13-1.54-.022-.16-.94.09-1.95.75-3.02.66-1.06 1.514-1.86 2.557-2.4L18.49 5c-.8.396-1.555.898-2.26 1.505-.708.607-1.34 1.305-1.894 2.094-.556.79-.97 1.68-1.24 2.69-.273 1-.345 2.04-.217 3.1.165 1.4.615 2.52 1.35 3.35.732.833 1.646 1.25 2.742 1.25.967 0 1.768-.29 2.402-.876.627-.576.942-1.365.942-2.368v.01z"/></g></svg>
      <p class="review-card__copy">
      <?php
          $value = get_field("review_page_review_four");
          if($value) {
              echo $value;
          }
      ?> 
      </p>
      <div class="review-card__author">
      <?php
          $value = get_field("review_page_reviewer_name_four");
          if($value) {
              echo $value;
          }
      ?> 
      </div>
    </div>
  </div>
</section>

<section class="contact-us container">
  <h2 class="contact-us__heading h1">
    Submit a review
  </h2>
  <div class="contact-us__form">
    <?php echo apply_shortcodes( '[contact-form-7 id="112" title="Reviews Page Reviews"]' ); ?>
  </div>
</section>

<section>
  <h2 class="center-text site-primary-color">Leave a review on these platforms</h2>
  <div class="review-platforms container">
    <figure class="review-platform">
      <img src="/wp-content/uploads/fb-logo.webp" alt="Facebook Logo">
    </figure>
    <figure class="review-platform">
      <img src="/wp-content/uploads/google-logo.webp" alt="Google Logo">
    </figure>
  </div>
</section>

<?php
  get_footer();
?>