<?php get_header(); ?>
<?php if ( have_posts() ) :

while ( have_posts() ) : the_post(); 
 $image_id = get_post_thumbnail_id(); 
 //go get image attributes [0] => url, [1] => width, [2] => height
 $image_url = wp_get_attachment_image_src($image_id,'', true);
 $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true); ?>
<section id="detail-layouts">
<div class="fixed-columns">
<div class="Layout-start">

<div class="blog-breadcrumbs">
<ul>
   <li><a href="<?php echo home_url(); ?>">Home</a></li>
   <li><a>/</a></li>
   <li><a href="<?php echo home_url(); ?>/blog/">Blog</a></li>
   <li><a>/</a></li>
   <li><a><?php the_title(); ?></a></li>
</ul>
</div>
<?php if ( has_post_thumbnail() ){ ?>
         <img src="<?php echo $image_url[0]; ?>" alt="">
         <?php }?>
         <h1><?php the_title(); ?></h1>
<div class="blog-detail-information">
         <p><img src="<?php bloginfo('template_directory') ?>/images/calendar-image-icon.png" class="blog-card-icons"/><?php the_time( 'F jS, Y' ); ?></p>
   <p><img src="<?php bloginfo('template_directory') ?>/images/time-clock-icon.png" class="blog-card-icons"/><?php echo do_shortcode('[rt_reading_time  postfix="mins"]'); ?></p>
   </div>
<?php the_content(); ?>

</div>
</div>
</section>
<?php endwhile;  endif; ?> 

<section id="contact-us">
<div class="fixed-columns">
<div class="contact-form">
   <form id="general-contact-form" method="post">
      <div class="form-heading">
         <h4>Contact Us</h4>
         <p>Please fill the form and our team will back to you on your requirement</p>
      </div>
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-item">
               <input type="text" name="namecnt" id="namecnt" class="cntinp" placeholder="Name">
               <span class="info" id="nameinfo"></span>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-item">
               <input type="text" name="emailcnt" id="emailcnt" class="cntinp" placeholder="Email Address">
               <span class="info" id="emailinfo"></span>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-item">
               <input type="text" name="phonecnt" id="phonecnt" class="cntinp" placeholder="Mobile Number">
               <span class="info" id="numberinfo"></span>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-item">
               <select name="service" id="service" class="cntinp">
               <option value="" > Select a service</option>
                  <option value="Birthday Party">Birthday Party</option>
                  <option value="Pre Wedding">Pre Wedding</option>
                  <option value="Engagement">Engagement</option>
                  <option value="Marriage">Marriage</option>
                  <option value="Others">Others</option>
               </select>
               <span class="info" id="serviceinfo"></span>
            </div>
         </div>
         <div class="col-xl-12 col-lg-12 colmd-12 col-sm-12 col-xs-12 col-12">
            <div class="form-item">
               <textarea type="text" name="msgcnt" id="msgcnt" class="cntinptxt"
                  placeholder="Can you tell us more about your event?"></textarea>
            </div>
         </div>

      </div>
      <div class="submit-button">
         <input type="submit"  id="contact-submit" value="Let's Plan" />
         <p id="loader-icons">Please wait we are capturing your information.</p>
      </div>
   </form>
</div>
</div>
</section>
<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png"/>Your Response was submitted. our team will contact you shortly.</div>


<div id="myModal" class="modal subscribe-newsletter">

   <!-- Modal content -->
   <div class="modal-content" id="blog-modal">
      <span class="close">&times;</span>
      <div class="popup-contents">
      

        
         <h1>Looks like you are enjoying our content!</h1>
         <p>Subscribe to get more insights like this.</p>
      
         <form id="blog-newsletter" method="Post">
            <div class="form-item" id="subscriber-email-id">
               <input type="text" name="emailenq" id="emailenq" class="cntinp" placeholder="Email Address">
               <span class="info" id="emailenqinfo"></span>
               
            </div>
            <div class="subscribe-button-email">
            <input type="submit" value="Submit" id="subscribe-blogs-submit" class="subscribebtn"/>
           
            </div>
            <span id="pre-loader">Please wait we are capturing your information.......</span>
         </form>
        
      </div>
   </div>
   
</div>
<div id="confirmation-snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png"/>Thank you, For being a fan of our content.</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Get the modal and close button
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    
    var hasOpenedModal = false; // Flag to track if the modal has been opened
    var hasScrolledDown = false; // Flag to track if the user has scrolled down

    function openModal() {
        modal.style.display = "block";
        hasOpenedModal = true; // Update flag to prevent reopening
    }

    function checkScroll() {
        var section = document.getElementById("contact-us");
        var rect = section.getBoundingClientRect();
        var windowHeight = window.innerHeight;
        
        // Check if the user has scrolled down past the top and the section is in view
        if (window.scrollY > 50) { // Change 50 to a value that suits your needs
            hasScrolledDown = true;
        }
        
        if (hasScrolledDown && rect.top <= windowHeight && rect.bottom >= 0 && !hasOpenedModal) {
            openModal();
            window.removeEventListener("scroll", checkScroll); // Remove listener once modal is opened
        }
    }

    // Add scroll event listener to check when the section is in view
    window.addEventListener("scroll", checkScroll);

    // Close modal on clicking the close button
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Remove the click event handler for the modal background to prevent closing the modal
    // Removing this block ensures clicking outside the modal does not close it
});


</script>

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
<?php get_footer(); ?>