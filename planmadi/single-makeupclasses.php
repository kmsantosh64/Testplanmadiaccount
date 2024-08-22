<?php get_header(); ?>
<section id="makeupclasses-hero">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                <h1><?php echo get_field('hero_section_heading'); ?></h1>

                <p><?php echo get_field('hero_sub_heading'); ?>


                </p>

                <div class="mua-makeup-classes-cta">
                    <a href="#classes-enrollment">Resgister Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <?php
                $muaheroimage = get_field('hero_section_image');
                if (!empty($muaheroimage)): ?>
                    <img class="makeup-classes-hero-image" src="<?php echo esc_url($muaheroimage['url']); ?>" />
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>


<!-- <section id="makeup-course-why">
    <div class="fixed-columns">
        <h2>This Course is for you :</h2>
        <div class="row" id="artistry-row">
            <?php if (have_rows('masterclass_who')): ?>
                <?php while (have_rows('masterclass_who')):
                    the_row();
                    $whomtext = get_sub_field('masterclass_for_whom_text');
                    $whomimage = get_sub_field('masterclass_for_whom_image');
                    ?>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
                        <div class="makeup-courses-artistry">
                            <?php if ($whomimage): ?>
                                <img src="<?php echo esc_url($whomimage['url']); ?>"
                                    alt="<?php echo esc_attr($whomimage['alt']); ?>" class="why-makeup-classes" />
                            <?php endif; ?>

                            <p><?php echo esc_html($whomtext); ?></p>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section> -->


<section id="about-makeup-educator">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                <?php
                $aboutmuaimage = get_field('educator_image');
                if (!empty($aboutmuaimage)): ?>
                    <img src="<?php echo esc_url($aboutmuaimage['url']); ?>" class="makeup-educator" />
                <?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                <div class="about-educator">
                    <span>About Makeup artist  </span>
                    <h2>Meet our Educator <?php echo get_field('partner_name'); ?>   </h2>
                    <!-- <div class="about-educator-contents">
                    <a target="_blank" href=""><img src="https://www.planmadi.com/wp-content/themes/planmadi/images/profile-avatar.png" alt="Profile Avatar" class="avatar-profile"> Anitha</a><span><img class="insta-icon-profile" src="https://www.planmadi.com/wp-content/themes/planmadi/images/profile-instagram-icon.png">@Anitha</span>
                    </div> -->
                    <p><?php echo get_field('about_educator'); ?></p>
                    <ul>
                        <?php if (have_rows('why_our_educator')): ?>
                            <?php while (have_rows('why_our_educator')):
                                the_row();
                                $point = get_sub_field('why_points');
                                ?>
                                <li><?php echo esc_html($point); ?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>


                    </ul>
                </div>

                <div class="mua-makeup-classes-cta">
                    <a href="#classes-enrollment">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about-makeup-masterclass">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                <div class="makeup-class-contents">
                    <span>About Masterclass</span>
                    <h3><?php echo get_field('masterclass_heading'); ?></h3>
                    <p><?php echo get_field('masterclass_sub_text'); ?></p>
                    <ul>
                    <?php if (have_rows('masterclass_details_list')): ?>
                            <?php while (have_rows('masterclass_details_list')):
                                the_row();
                                $point = get_sub_field('masterclass_list_item');
                                ?>
                                <li><?php echo esc_html($point); ?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="mua-makeup-classes-cta">
                    <a href="#classes-enrollment">Enroll Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
            <?php
            $masterclassimage = get_field('master_class_image');
            if (!empty($masterclassimage)): ?>
                <img src="<?php echo esc_url($masterclassimage['url']); ?>"
                    class="makeupclasses" />
                    <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="makeup-gallery">
<div class="fixed-columns">
<h4>Makeup Gallery</h4>
<div class="album">
  <div class="responsive-container-block bg">
    <?php
    // Fetch the gallery field
    $gallery = get_field('makeupclass_gallery');
    
    if ($gallery):
        // Total number of images
        $total_images = count($gallery);

        // Ensure proper indexing
        $index = 0;

        // Block 1
        echo '<div class="responsive-container-block img-cont">';
        if ($index < $total_images) {
            echo '<img class="img" src="' . esc_url($gallery[$index]['url']) . '" alt="' . esc_attr($gallery[$index]['alt']) . '">';
            $index++;
        }
        if ($index < $total_images) {
            echo '<img class="img" src="' . esc_url($gallery[$index]['url']) . '" alt="' . esc_attr($gallery[$index]['alt']) . '">';
            $index++;
        }
        if ($index < $total_images) {
            echo '<img class="img img-last" src="' . esc_url($gallery[$index]['url']) . '" alt="' . esc_attr($gallery[$index]['alt']) . '">';
            $index++;
        }
        echo '</div>';

        // Block 2
        echo '<div class="responsive-container-block img-cont">';
        if ($index < $total_images) {
            echo '<img class="img img-big" src="' . esc_url($gallery[$index]['url']) . '" alt="' . esc_attr($gallery[$index]['alt']) . '">';
            $index++;
        }
        if ($index < $total_images) {
            echo '<img class="img img-big img-last" src="' . esc_url($gallery[$index]['url']) . '" alt="' . esc_attr($gallery[$index]['alt']) . '">';
            $index++;
        }
        echo '</div>';

        // Block 3
        echo '<div class="responsive-container-block img-cont">';
        if ($index < $total_images) {
            echo '<img class="img" src="' . esc_url($gallery[$index]['url']) . '" alt="' . esc_attr($gallery[$index]['alt']) . '">';
            $index++;
        }
        if ($index < $total_images) {
            echo '<img class="img" src="' . esc_url($gallery[$index]['url']) . '" alt="' . esc_attr($gallery[$index]['alt']) . '">';
            $index++;
        }
        if ($index < $total_images) {
            echo '<img class="img" src="' . esc_url($gallery[$index]['url']) . '" alt="' . esc_attr($gallery[$index]['alt']) . '">';
            $index++;
        }
        echo '</div>';
    endif;
    ?>
  </div>
</div>
</div>
</section>
<section id="makeupclasses-enroll-details">
    <div class="fixed-columns">
<div class="row">
<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 col-12 column-div">
<?php
            $masterclassimagenew = get_field('masterclass_detail_image');
            if (!empty($masterclassimagenew)): ?>
     <img src="<?php echo esc_url($masterclassimagenew['url']); ?>" class="mua-enrollment-image"/>
     <?php endif; ?>
    </div>
<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 mua-class-right">
<div class="mua-classes-details">
    <h4 class="register-classes-heading">Register Now</h4>
    <div class="row">
<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 col-12 ">
    <div class="mua-details-container">
<h5>Date & Timings</h5>
<p><img class="information-icon-classes" src="https://www.planmadi.com/wp-content/themes/planmadi/images/calendar-image-icon.png"><?php echo get_field ('masterclass_date');?> <br/><?php echo get_field ('masterclass_days');?></p>
<p><img class="information-icon-classes" src="https://www.planmadi.com/wp-content/themes/planmadi/images/time-clock-icon.png"><?php echo get_field ('masterclass_time');?></p>
<p><img class="information-icon-classes" src="https://www.planmadi.com/wp-content/themes/planmadi/images/venue-pin-icon.png"><?php echo get_field ('masterclass_location');?></p>
</div>
<div class="mua-details-container">
<h5>Price</h5>
<p><b><?php echo get_field ('price');?></b></p>
<h5>Pay Now and Book your slot!</h5>
<div class="payment-division">
<?php

$upi_id = get_field('upi_id');
if (!empty($upi_id)) :
    ?>
<input type="text" class="upi-id-option" id="payment-option" value="<?php echo get_field ('upi_id');?>"><img onclick="copyPayment();" src="https://www.planmadi.com/wp-content/themes/planmadi/images/copy-to-clipboard.png"> <br> 
<?php endif; ?>
</div>
<span class="tooltiptext" id="tooltip-text"></span>
<span id="notification-payments">(Note*: Plan Madi is not responsible for any payment related issues.)</span>

</div>

</div>
<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col-12">
<div class="mua-details-container">
    <h5>Venue Details</h5>
    <?php 
$venueimage = get_field('location_qr_code');
if( !empty( $venueimage ) ): ?>

<img src="<?php echo esc_url($venueimage['url']); ?>" class="mua-location-qr-code"/>
<?php endif; ?>
<br/>
<?php
                    $locationurl= get_field('location_url');
                    if( !empty( $locationurl ) ): ?>
<a target="_blank" href="<?php echo get_field ('location_url');?>" class="get-location-link">Get Location</a>
<?php endif; ?>
</div>
<div class="mua-details-container">
    <h5>Package Includes:</h5>
<ul>
<?php if (have_rows('masterclass_package')): ?>
                            <?php while (have_rows('masterclass_package')):
                                the_row();
                                $point = get_sub_field('package_items');
                                ?>
                                <li><?php echo esc_html($point); ?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
    
</ul>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</section>

<section id="classes-faq">
<div class="fixed-columns">
<div class="course-contents-single">
                    <h3>Frequently Asked Questions</h3>
                    <div class="faq-columns">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accordion-col">

                                <div class="accordion" id="accordionExample">
                                    <?php
                                    $first = true; // Variable to track the first item
                                    if (have_rows('faq_contents_lists')):
                                        // Loop through the rows of data
                                        while (have_rows('faq_contents_lists')):
                                            the_row();
                                            // Get sub-field values
                                            $faq_title = get_sub_field('faq_question');
                                            $faq_content = get_sub_field('faq_answer');
                                            ?>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header"
                                                    id="heading<?php echo sanitize_title($faq_title); ?>">
                                                    <button class="accordion-button <?php if ($first)
                                                        echo '';
                                                    else
                                                        echo 'collapsed'; ?>" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#<?php echo sanitize_title($faq_title); ?>"
                                                        aria-expanded="<?php echo $first ? 'true' : 'false'; ?>"
                                                        aria-controls="<?php echo sanitize_title($faq_title); ?>">
                                                        <?php echo esc_html($faq_title); ?>
                                                    </button>
                                                </h2>
                                                <div id="<?php echo sanitize_title($faq_title); ?>" class="accordion-collapse collapse <?php if ($first)
                                                       echo 'show'; ?>"
                                                    aria-labelledby="heading<?php echo sanitize_title($faq_title); ?>"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <?php echo wp_kses_post($faq_content); ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $first = false; // After the first iteration, set the variable to false
                                        endwhile;
                                    else:
                                        // No rows found
                                        echo 'No FAQs found.';
                                    endif;
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
</div>
</section>
<section id="classes-enrollment">
    <div class="fixed-columns">
        <div class="class-enrollment-details">
            <h4>Enroll Now</h4>

            <form id="makeup-enrollment" method="post">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                        <div class="form-item">
                            <input type="text" name="nameenq" id="nameenq" class="cntinp" placeholder="Name">
                            <span class="info" id="nameenqinfo"></span>
                        </div>
                        <div class="form-item">
                            <input type="text" name="emailenq" id="emailenq" class="cntinp" placeholder="Email Address">
                            <span class="info" id="emailenqinfo"></span>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                        <div class="form-item">
                            <input type="text" name="mobileenq" id="mobileenq" class="cntinp"
                                placeholder="Mobile Number">
                            <span class="info" id="mobileenqinfo"></span>
                        </div>
                        <div class="form-item">
                            <input type="text" name="cityenq" id="cityenq" class="cntinp" placeholder="City">
                            <span class="info" id="cityenqinfo"></span>
                        </div>

                    </div>
                    <div class="form-item">
                        <textarea id="addressenq" name="addressenq" class="cntinptxt"
                            placeholder="Enter your full address"></textarea>
                        <span class="info" id="addressenqinfo"></span>
                    </div>
                </div>
                <div class="enrollment-enq-submit" id="enrollment-enq-submit">
                <input type="hidden" value="<?php echo get_field ('partner_name');?>" id="partnername" name="partnername"/>
                <input type="hidden" value="<?php echo get_field ('masterclass_date');?>" id="masterclassdate" name="masterclassdate"/>
                    <input type="submit" value="Submit" id="enrollment-submit" />
                    <p id="loader-icons">Please wait we are capturing your information.</p>
                </div>
            </form>
        </div>
    </div>
</section>




<script>

function copyPayment() {
    var copyText = document.getElementById("payment-option").value; // Use .value for input fields
    
    navigator.clipboard.writeText(copyText).then(function() {
        // Show tooltip with the copied text message
        var tooltip = document.getElementById("tooltip-text");
        tooltip.innerText = "Copied!";
        tooltip.classList.add("show");
        
        // Hide tooltip after a short delay
        setTimeout(function() {
            tooltip.classList.remove("show");
            tooltip.innerText = ""; // Clear the tooltip text
        }, 2000);
    }).catch(function(err) {
        console.error("Failed to copy text: ", err);
    });
}
  
</script>
<?php get_footer(); ?>