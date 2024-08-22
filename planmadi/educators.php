<?php /* Template Name:educators */


get_header();

?>

<section id="educators-profile-section">
<div class="fixed-columns">
<div class="row">
<?php
          
            $args = array(
                'post_type' => 'educators',
                'posts_per_page' => -1 
            );
            $educators_query = new WP_Query($args);

            if ($educators_query->have_posts()) :
                while ($educators_query->have_posts()) : $educators_query->the_post();
                   
                $name = get_the_title();
                $description = get_field('profession');
                   
                    $image_id = get_post_thumbnail_id(); // Get the ID of the featured image
                    $image_url = wp_get_attachment_image_url($image_id, 'full'); // Get the URL of the image
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); // Get the alt text
                    ?>
<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 col-12 profile_educators_card">
    <div class="profile-educators_inner">
<a href="<?php the_permalink(); ?>">
<div class="educator-box">
<?php if ($image_url): ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="educator-profile-icon" />
                            <?php endif; ?>
<h2><?php echo esc_html($name); ?></h2>
<span><?php echo esc_html($description); ?></span>
</div>
</div>
</a>
</div>
<?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>No educators found.</p>
            <?php endif; ?>
</div>
</div>
</section>


<?php get_footer(); ?>