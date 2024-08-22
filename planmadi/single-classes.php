<?php get_header(); ?>
<section id="class-introduction">
    <div class="fixed-columns">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 bg-left-hero">
            <div class="class-info">
                <h1>
                <?php echo get_field ('hero_heading');?><span class="class-hero-subtext"> <?php echo get_field ('hero_span_text');?></span></h1>
                <p><?php echo get_field ('hero_sub_heading');?></p>
               
                <div class="classes-banner-cta">
                    <a href="#baking-enrollment">Enroll Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 ">
            
            <div class="hero-introduction-swiper">
    <?php
    
    if( have_rows('hero_images') ):
        // Loop through the rows of data
        while ( have_rows('hero_images') ) : the_row();
            
            $image = get_sub_field('hero_image_item');
    ?>
            <div class="hero-banner-item">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
    <?php
        endwhile;
    else :
       
        echo 'No hero images found.';
    endif;
    ?>
</div>
           
        </div>
    </div>
    </div>
</section>
<section id="baking-intro-cta">
    <div class="fixed-columns">
        <div class="baking-information-details">
            <div class="baking-class-info-1">
                <div class="baking-class-info-1details">
                    <div class="class-bg-overlay"></div>
                    <h2>Venue</h2>
                    <?php 
$venueimage = get_field('venue_url');
if( !empty( $venueimage ) ): ?>
                    <img src="<?php echo esc_url($venueimage['url']); ?>"/>
                    <?php endif; ?>
                    <?php
                    $locationurl= get_field('location_url');
                    echo'<a target="_blank" href="' . esc_url($locationurl) . '">Get Location</a>';
                   
                    ?>
                </div>
            </div>

            <div class="info-1">
                <h3>Date & Timings</h3>
                <?php 
                 $workshop_schedule = get_field('workshop_schedule');
         
                 if (!empty($workshop_schedule)) {
        echo '<p>' . esc_html($workshop_schedule) . '</p>';
    }
                ?>
                <span><img src="<?php bloginfo('template_directory') ?>/images/calendar-image-icon.png" /><?php echo get_field ('event_date');?><br/> <?php $workshop_days = get_field('workshop_days'); if(!empty($workshop_days)) { echo esc_html($workshop_days); }?></span>
                <span><img src="<?php bloginfo('template_directory') ?>/images/time-clock-icon.png" /> <?php echo get_field ('time');?></span>
                <span><img src="<?php bloginfo('template_directory') ?>/images/venue-pin-icon.png" /><?php echo get_field ('event_location');?></span>
            </div>
            
            <div class="info-3">
                <h3>For Whom</h3>
                <span><ul class="for_whom-lists"><?php echo get_field ('for_whom');?></ul></span>
            </div>
            <div class="info-2">
                <h3>Price</h3>
                <p class="abt-price"><?php echo get_field ('price');?></p>
              
                <span id="workshop-includes"><ul class="workshop_items"><?php echo get_field ('includes');?></ul></span>
                <?php

$upi_id = get_field('upi_id');
if (!empty($upi_id)) :
    ?>
    <div>
               <h6 class="classes-payment">Pay Now and Book your slot!</h6>
                <div class="payment-division">
<input type="text" id="payment-option" value="<?php echo get_field ('upi_id');?>"/><img onclick="copyPayment();" src="<?php bloginfo('template_directory') ?>/images/copy-to-clipboard.png"/> <br/> 
</div>
<span class="tooltiptext" id="tooltip-text"></span>
<span id="notification-payments">(Note*: Plan Madi is not responsible for any payment related issues.)</span>
</div>
<?php endif; ?>
                <!-- <h3>Masterchef</h3>
                <p> <?php 
  
    $url = get_field('plan_madi_profile');
    
   
    $name = get_field('masterchef_name'); echo '<a target="_blank" href="' . esc_url($url) . '">' . esc_html($name) . '</a>'; ?>
    </p> <span><img class="insta-icon-profile" src="<?php bloginfo('template_directory') ?>/images/profile-instagram-icon.png"/><?php echo get_field ('instagram_handle_name');?></span> -->
            </div>
        </div>
    </div>
</section>


<section id="about-course-information">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 col-12">
                <div class="baking-class-information">
                    <span>About Workshop</span>
                    <h2><?php echo get_field ('about_workshop_heading');?></h2>
                    <p><?php echo get_field ('about_workshop_content');?></h4>
                    <?php if( have_rows('event_contents') ): ?>
    <ul>
        <?php while( have_rows('event_contents') ): the_row(); ?>
            <li><?php echo get_sub_field('event_content_item'); ?></li>
        <?php endwhile; ?>
    </ul>
<?php else: ?>
    <p>No event contents found.</p>
<?php endif; ?>
<div class="baking-enroll">
                        <a href="#baking-enrollment">Enroll Now</a>
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 col-12">
                <img class="workshop-profile-img" src="<?php bloginfo('template_directory') ?>/images/workshop-image-profile.png"/>
            
         
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
            <div class="baking-quote">
                        <img src="<?php bloginfo('template_directory') ?>/images/quote-icon.png"/><h5><?php echo get_field ('quote');?></h5>
                    </div>
                   
            </div>
        </div>
    </div>
</section>
<section id="about-chef-details">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 aboutbox-1">
            <?php 
$aboutimage = get_field('about_collage_image');
if( !empty( $aboutimage ) ): ?>
                    <img class="about-chef-img" src="<?php echo esc_url($aboutimage['url']); ?>"/>
                    <?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 about-box-2">
                <div class="chef-info">
                    <span>About Chef</span>
                    <h2><?php echo get_field ('about_chef_heading');?></h2>
                    <div class="about-chef-contents">
                    <?php 
  
  $url = get_field('plan_madi_profile');
  
 
  $name = get_field('masterchef_name');
  echo '<a target="_blank" href="' . esc_url($url) . '">';
  echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/profile-avatar.png" alt="Profile Avatar" class="avatar-profile"/> ';
  echo esc_html($name);
  echo '</a>';
  ?>
<span><img class="insta-icon-profile" src="<?php bloginfo('template_directory') ?>/images/profile-instagram-icon.png"/><?php echo get_field ('instagram_handle_name');?></span>
                    </div>
                    <p><?php echo get_field ('about_chef_content');?></p>
                    <div class="chef-detail-informations">
                        <div class="row">
                        <?php $valuepoints = get_field('value_adding_points_left');
     if( $valuepoints ) { ?>
      <?php foreach( $valuepoints as $valuerow ) { 
           
           $valueimage = $valuerow ['value_point_image'];
           $valuetitle= $valuerow ['value_point_heading'];
           $valuedesc = $valuerow ['value_point_content'];
       ?>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                                <div class="details-box-chef">
                                    <div class="icon-box">
                                        <img
                                            src="<?php echo esc_url($valueimage['url']); ?>" />
                                    </div>
                                    <div class="details-body">
                                        <h6><?php echo $valuetitle;?></h6>
                                        <p><?php echo $valuedesc;?></p>
                                    </div>
                                </div>
                               
                            </div>
                            <?php } ?>
            <?php } ?>  
                           
                        </div>
                    </div>
                    <div class="baking-enroll">
                        <a href="#baking-enrollment">Enroll Now</a>
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

            <form id="baking-enrollment" method="post">
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
                <input type="hidden" value="<?php echo get_field ('event_date');?>" id="workshopdate" name="workshopdate"/>
                    <input type="submit" value="Submit" id="enrollment-submit" />
                    <p id="loader-icons">Please wait we are capturing your information.</p>
                </div>
            </form>
        </div>
    </div>
</section>
<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png" />Your Response was submitted.
    our team will contact you shortly.</div>
<script>
    $(".hero-introduction-swiper").slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
        pauseOnHover: true,
        responsive: [

            {

                breakpoint: 1024,

                settings: {

                    slidesToShow: 1,

                    slidesToScroll: 1,

                    infinite: true,

                    dots: false,

                }

            },
            {

                breakpoint: 768,

                settings: {

                    slidesToShow: 1,

                    slidesToScroll: 1,

                    infinite: true,

                    dots: false,
                    arrows: false,

                }

            },
            {

                breakpoint: 460,

                settings: {

                    slidesToShow: 1,

                    slidesToScroll: 1,

                    infinite: true,

                    dots: false,
                    arrows: false

                }

            },
        ]

    });
</script>
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