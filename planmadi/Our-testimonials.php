<?php /* Template Name:Testimonial Page */


get_header();

?>
<section id="our-testimonials">
    <div class="fixed-columns">
        <div class="testimonials-div-section">
            <h1>Check out what our Superstars have to say</h1>
            <?php
// Query to fetch posts from the 'videoreviews' post type
$args = array(
    'post_type' => 'videoreviews',
    'posts_per_page' => -1 // Adjust this if needed
);

$video_reviews = new WP_Query($args);

if ($video_reviews->have_posts()) :
    while ($video_reviews->have_posts()) : $video_reviews->the_post();
        // Check if the repeater field has rows of data
        if (have_rows('video_types')) :
            ?>
            <div class="row" id="testimonials-row">
            <?php
            
            // Loop through the rows of data
            while (have_rows('video_types')) : the_row();
                $video_url = get_sub_field('video_url');
                $review_name = get_sub_field('review_name');
                $review_content = get_sub_field('review_content');
                $profile_url = get_sub_field('profile_url');
                $profile_profession = get_sub_field('profile_profession');
                $review_image = get_sub_field('review_image');
                $review_texts = get_sub_field('review_texts');
                ?>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 review-slides ">
            <div class="testimonial-video-input">
                <div class="testimonial-video">
                <iframe class="youtube-video" src="<?php echo esc_url($video_url); ?>"></iframe>
                </div>
              <div class="testimonial-video-contents">
              <img class="testimonial-quote-icon" src="<?php bloginfo('template_directory') ?>/images/quote-left-opening.png"/>
             
                             <h4><?php echo esc_html($review_content); ?></h4>
                         
                            
                            <?php if ($review_name) : ?>
                                <div class="avatar-flex">
                                <a href="<?php echo esc_url($profile_url); ?>">
                                <img class="testimonial-avatar" src="<?php echo esc_url($review_image['url']); ?>"/>
                               <h6>   <?php echo esc_html($review_name); ?><br/><span><?php echo esc_html($profile_profession); ?></span></h6>
                               </a>  
                            </div>
                           
                            <?php endif; ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
            
            </div>
            <?php
        endif;
    endwhile;
    wp_reset_postdata();
else :
    // No posts found
    echo '<p>No video reviews found.</p>';
endif;
?>
            <div class="row" id="our-review-testimonials">
    <h5>Our precious testimonials</h5>
    
    <?php
    $testimonial_args = array(
        'post_type' => 'reviews',
        'posts_per_page' => -1,
    );

    $testimonial_query = new WP_Query($testimonial_args);

    if ($testimonial_query->have_posts()) { ?>
     <?php
            while ($testimonial_query->have_posts()) {
                $testimonial_query->the_post();

                $testimonial_lists = get_field('reviews');
                if ($testimonial_lists) {
                    foreach ($testimonial_lists as $testimonial_row) {
                        $testimonial_title = $testimonial_row['name'];
                        $testimonial_content = $testimonial_row['review_content'];
                        ?>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
           
                        <div class="reviews-cards">
                            <p>"<?php echo $testimonial_content; ?>"</p>
                            <h6><?php echo $testimonial_title; ?></h6>
                        </div>
                    
        </div>
        <?php
                    }
                }
            }
            ?>
    <?php
        wp_reset_postdata(); // Reset post data
    }
    ?>
</div>
        </div>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const testimonialInputs = document.querySelectorAll('.testimonial-video-input');

  testimonialInputs.forEach((input, index) => {
    // Determine order based on index (0-based)
    const orderValue = (index % 2 === 0) ? 1 : 2;
    
    // Apply order to .testimonial-video
    const videoElement = input.querySelector('.testimonial-video');
    if (videoElement) {
      videoElement.style.order = orderValue;
      videoElement.id = orderValue === 1 ? `testimonial-video-order1` : `testimonial-video-order2`;
    }
    
    // Apply opposite order to .testimonial-video-contents
    const contentsElement = input.querySelector('.testimonial-video-contents');
    if (contentsElement) {
      contentsElement.style.order = orderValue === 1 ? 2 : 1; // Reverse order for contents

      // Assign unique IDs based on order
      contentsElement.id = orderValue === 1 ? `testimonial-contents-order1` : `testimonial-contents-order2`;
    }
  });
});
</script>
<?php get_footer(); ?>