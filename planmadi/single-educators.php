<?php get_header(); ?>

<section id="educators-hero-section">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 col-12">
                <h1><?php echo get_field ('hero_section_heading');?></h1>
                <p><?php echo get_field ('hero_section_text');?></p>
                
                <div class="educators-stats">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-6 stats-col">
                            <div class="stats-box">
                                <h2><?php echo get_field ('stats_1_number');?></h2>
                                <span><?php echo get_field ('stats_1_text');?></span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-6 stats-col">
                            <div class="stats-box">
                                <h2><?php echo get_field ('stats_2_number');?></h2>
                                <span><?php echo get_field ('stats_2_text');?></span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-6 stats-col">
                            <div class="stats-box">
                                <h2><?php echo get_field ('stats_3_number');?></h2>
                                <span><?php echo get_field ('stats_3_text');?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="educators-hero-cta">
                    <a href="#educators-classes-section">View Classes</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 col-12 educators-hero-banners">
                <?php
                 $image_id = get_post_thumbnail_id(); 
                 $image_url = wp_get_attachment_image_url($image_id, 'full'); 
                 $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                ?>
                <?php if ($image_url): ?>
                 <img
                    src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" />
                    <?php endif; ?>
                    </div>
        </div>
    </div>
</section>

<section id="educators-classes-section">
    <div class="fixed-columns">
        <div class="educators-classes-heading">
       <h3>My Upcoming Classes</h3>
       
        </div>
        <div class="row">
        <?php $educlasses = get_field('upcoming_classes');
     if( $educlasses ) { ?>
      <?php foreach( $educlasses as $educlass) { 
           
           
           $classtitle= $educlass['class_name'];
           $classdesc = $educlass['class_content_brief'];
           $classdate = $educlass['class_date'];
           $classtime = $educlass['class_timings'];
           $classlocation = $educlass['class_location'];
           $classregistration = $educlass['class_details'];
       ?>
            <div class="col-lg-6 col-md-10 col-sm-12 col-xs-12 col-12 class-box-div">
                <div class="edu-classes-box">
                    
                    <div class="edu-classes-contents">
                        <h5><?php echo $classtitle;?></h5>
                        <p><?php echo $classdesc;?></p>
                        
                        <hr />
                        <div class="educ-class-details">
                            <div class="edu-class-items">
                                <img
                                    src="<?php bloginfo('template_directory') ?>/images/calendar-image-icon.png" />
                                    <?php echo $classdate;?>
                            </div>
                            <div class="edu-class-items">
                                <img
                                    src="<?php bloginfo('template_directory') ?>/images/time-clock-icon.png" />
                                    <?php echo $classtime;?>
                            </div>
                            <div class="edu-class-items">
                                <img
                                    src="<?php bloginfo('template_directory') ?>/images/venue-pin-icon.png" />
                                    <?php echo $classlocation;?>
                            </div>
                        </div>
                        <div class="edu-enquiry-flex">
                        
                        <div class="edu-details-price">
                          <h6><?php echo get_field ('price');?></h6>
                        </div>
                        <div class="edu-details-cta">
                         <a href="<?php echo $classregistration;?>">View More <i class='fas fa-arrow-right'></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?> 
        </div>
    </div>
</section>


<section id="educators-details-box">
    <div class="fixed-columns">
        <div class="row">
        <?php $eduofferings = get_field('educators_offerings');
     if( $eduofferings ) { ?>
      <?php foreach( $eduofferings as $eduoffer) { 
           
           $offericon = $eduoffer['educator_offer_icon'];
           $offertitle= $eduoffer['educators_offer_heading'];
           $offerdesc = $eduoffer['educator_offer_text'];
       ?>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
                <div class="educators-details-information">
                    <img src="<?php echo esc_url($offericon['url']); ?>" />
                    <div class="educators-details-box">
                        <h3><?php echo $offertitle;?></h3>
                        <p><?php echo $offerdesc;?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?> 
        </div>
    </div>
</section>


<section id="students-reviews">
    <div class="fixed-columns">
        <div class="educators-reviews-heading">
            <h3>What Students' have to say</h3>
        
        </div>
        <?php $testimonialitem = get_field('educators_reviews');
     if( $testimonialitem ) { ?>
        <div class="educators-class-testimonials">
        <?php foreach( $testimonialitem as $testimonialrow ) { 
             $testimonialTitle = $testimonialrow['review_name'];
             $testimonialdescription = $testimonialrow['review_content'];
            
         ?>
            <div class="educators-testimonial-items">
                <p>"<?php echo $testimonialdescription;?>"</p>
                <h4>-<?php echo $testimonialTitle;?></h4>
            </div>
            <?php } ?>
           
        </div>
        <?php } ?>
    </div>
</section>

<div id="myModal" class="modal educators-newsletter-modal">

   <!-- Modal content -->
   <div class="modal-content" id="blog-modal">
      <span class="close">&times;</span>
      <div class="popup-contents">
    
         <h1>Be the first to know when new classes are launched for <?php echo get_field('partner_name'); ?></h1>
         
      
         <form id="educator-newsletter" method="post">
         <div class="form-item" id="subscriber-email-id">
               <input type="text" name="emailname" id="emailname" class="cntinp" placeholder="Enter your Name">
               <span class="info" id="emailnameenqinfo"></span>
               
            </div>
            <div class="form-item" id="subscriber-email-id">
               <input type="text" name="emailenq" id="emailenq" class="cntinp" placeholder="Email Address">
               <span class="info" id="emailenqinfo"></span>
               
            </div>
            <div class="form-item" id="subscriber-email-id">
               <input type="text" name="subcontact" id="subcontact" class="cntinp" placeholder="Contact Number">
               <span class="info" id="emailphoneenqinfo"></span>
               
            </div>
            <div class="subscribe-button-email">
                <input type="hidden" id="educator" name="educator" value="<?php echo get_field ('partner_name');?>"/>
            <input type="submit" value="Submit" id="subscribe-blogs-submit" class="subscribebtn"/>
            <p id="loader-icons">Please wait we are capturing your information....</p>
            </div>
         </form>
        
      </div>
   </div>

</div>
<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png" />You will be notified once <?php echo get_field ('partner_name');?> launches new class. </div>
<style>
   .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
   }

   /* Modal Content/Box */
   .modal-content {
      background-color: #fff7eb;
      margin: 10% auto;
      /* 15% from the top and centered */
      padding: 12px;
      border: 1px solid #888;
      width: 40%;
      transition: .3s;
      /* Could be more or less, depending on screen size */
   }

   /* The Close Button */
   .close {
      color: #aaa;
      float: right;
      text-align: end;
      font-size: 22px;
      font-weight: bold;
   }

   .close:hover,
   .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
   }
   #blog-modal h1{
      font-size: 24px;
      text-align: center;
   }
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Get the modal and close button
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    
    // Function to open the modal
    function openModal() {
        modal.style.display = "block";
    }

    // Function to check if the user has scrolled to the last section
    function checkScroll() {
        var section = document.getElementById("students-reviews");
        var rect = section.getBoundingClientRect();
        var windowHeight = window.innerHeight;
        
        if (rect.bottom <= windowHeight) {
            openModal();
            // Remove scroll event listener after modal is shown to prevent repeated openings
            window.removeEventListener("scroll", checkScroll);
        }
    }

    // Add scroll event listener
    window.addEventListener("scroll", checkScroll);
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Optional: Manual trigger button
    var btn = document.getElementById("myBtn");
    if (btn) {
        btn.onclick = openModal;
    }
});

</script>

<script>
    $(".educators-class-testimonials").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: true,
        arrows: true,
        pauseOnHover: true,
        responsive: [

            {

                breakpoint: 800,

                settings: {

                    slidesToShow: 2,

                    slidesToScroll: 1,

                    infinite: true,

                    dots: true,
                    arrows: true,

                }

            },

            {

                breakpoint: 600,

                settings: {

                    slidesToShow: 1,

                    slidesToScroll: 1,

                    infinite: true,

                    dots: false,
                    arrows: true

                }

            },
        ]

    });
</script>

<?php get_footer(); ?>