<?php get_header(); ?>
<style>
   #package-image-gallery {
    background-color: #fff7eb;
    padding: 20px 0px;
    width:100%;
    float:left;
}

.packages-box{
    display: flex;
    margin: 30px auto;
}
.packages-box img{
    width: 50%;
   
}
.package-contents{
    padding: 12px;
    background: #fff2df;
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
}
.package-contents h4{
    font-family: 'font-bold';
    font-size: 20px;
    color: #a2783a;
    margin-bottom: 12px;
}
.package-contents p{
    font-family: 'font-regular';
    font-size: 16px;
    margin-bottom: 8px;
    color: #1d1d1d;
}
.resort-package-includes{
    list-style: none!important;
    padding-left: 0px;
}
.resort-package-includes li{
    line-height: 1.5;
    position: relative;
    padding-left: 20px;
    padding-bottom: 2px;
    font-family: 'font-regular' !important;
    font-size: 16px; 
}
.resort-package-includes li::before{
    display: inline-block;
    content: '';
    width: 12px; 
    height: 12px; 
    margin-right: 10px; 
    background-image: url('https://www.planmadi.com/wp-content/themes/planmadi/images/ul-check.png'); 
    background-size: cover; 
    position: absolute;
    left: 0px;
    top: 5px;
}
.packages-box:hover{
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
}
@media(max-width:650px){
    .packages-box {
        flex-direction: column;

    }
    .packages-box img{
        width:100%;
        order: 2;
    }
}
#prewedding-packages {
    width: 100%;
    float: left;
    padding: 20px 0px;
    background-color: #fef1de;
    text-align: center;
}
#prewedding-packages h4{
    margin-bottom: 10px;
    font-size: 35px;
    color: #a2783a;
    font-family: 'font-bold';
}
#prewedding-packages p{
    margin-bottom: 5px;
    font-size: 14px;
    color: #a2783a;
    font-family: 'font-regular';
}
#wedding-packages{
    width: 100%;
    float: left;
    padding: 20px 0px;
    background-color: #ffca7a3d;

    }  
.wedding-packages-container h4{
    margin-bottom: 10px;
    font-size: 35px;
    color: #a2783a;
    font-family: 'font-bold';
}
.wedding-packages-container p{
    margin-bottom: 15px;
    font-size: 16px;
    color: #a2783a;
    font-family: 'font-regular';
}
.wedding-package-box {
    background: #fef6ea;
    padding: 15px;
    border-radius: 12px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    min-height: 256px;
    margin-bottom: 20px;
}
.wedding-package-box ul{
    list-style: none!important;
    padding-left: 0px;
}
.wedding-package-box ul li{
    line-height: 1.5;
    position: relative;
    padding-left: 20px;
    padding-bottom: 2px;
    font-family: 'font-regular' !important;
    font-size: 16px; 
}
.wedding-package-box ul li::before{
    display: inline-block;
    content: '';
    width: 12px; 
    height: 12px; 
    margin-right: 10px; 
    background-image: url('https://www.planmadi.com/wp-content/themes/planmadi/images/ul-check.png'); 
    background-size: cover; 
    position: absolute;
    left: 0px;
    top: 5px;
}
.wedding-package-box h5{
    font-family: 'font-bold';
    font-size: 20px;
    color: #a2783a;
    margin-bottom: 10px;
    text-align: center;
}
.wed-col{
    padding-left: 0px!important;
    
}

.celebration-package-cta a{
    background-color: #a2783a;
        color: #fff!important;
        border-radius: 25px;
    border: 1px solid #a2783a;
    font-family: 'font-regular';
    padding: 10px 23px;
    transition: .5s;
    cursor: pointer;
}
.pre-wedding-package {
    text-align: center;
}
.pre-wedding-package a{
    background-color: #a2783a;
        color: #fff!important;
        border-radius: 25px;
    border: 1px solid #a2783a;
    font-family: 'font-regular';
    padding: 10px 23px;
    transition: .5s;
    cursor: pointer;
}
#venue-forms-heading{
    color: #A2783A;
    font-size: 25px;
    font-family: 'font-bold';
    margin: 20px 0px;
}
.celebration-package-cta {
    margin: 15px 0px;
}
.wed-package-image{
    max-width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 12px;
}
@media(max-width:768px){
    #venue-lbl{
        display: none;
    }
}
.photoshoot-destinations{
    max-width: 100%;
}
</style>
<section id="venue-hero-section">
<div class="fixed-columns">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 venue-hero-images">
        <?php 
$image = get_field('hero_image');
if( !empty( $image ) ): ?>
            <img alt="Venue for events image" src="<?php echo esc_url($image['url']); ?>"
                 />
                <?php endif; ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
            <h1><?php echo get_field ('hero_text_heading');?></h1>
            <p><?php echo get_field ('hero_about_content');?></p>
            <div class="venue-cta-division">
                <a href="#package-image-gallery" class="cta-button">Choose Packages</a>
                
          
                
            </div>
        </div>

    </div>
</div>
</section>
<!-- <section id="amenities">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                <h2><?php echo get_field ('about_heading');?></h2>
                <p><?php echo get_field ('about_content');?></p>
                    <div class="venue-cta-division">
                    <form method="post" action="<?php echo home_url(); ?>/enquiry-venues/">
                <input type="hidden" value="<?php echo the_title(); ?>" id="partnername" name="partnername"/>
                <input type="submit" class="cta-button" value="Enquire Now"/>
                </form>
               
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
            <?php 
$resortimage = get_field('resort_image');
if( !empty( $resortimage ) ): ?>
            <img  alt="Venue" src="<?php echo esc_url($resortimage['url']); ?>"
            class="amenition-div-image" />
                <?php endif; ?>
               
            </div>
        </div>
        
    </div>
</section> -->
<section id="amenties-section">
    <div class="fixed-columns">
<div class="amenities-div">
            <h3>Amenities</h3>
        <div class="amenities-list">
        <?php $amenitiesfields = get_field('amenities');
     if( $amenitiesfields  ) { ?>
      <?php foreach( $amenitiesfields  as $amenitiesitem ) { 
           
           $amentiesicon = $amenitiesitem['amenities_image'];
           $amenitiestitle= $amenitiesitem['amenities_label'];
           
       ?>
        <div class="amenities-item">
                            <img alt="venue amenities"
                                src="<?php echo esc_url($amentiesicon['url']); ?>" />
                            <p><?php echo $amenitiestitle;?></p>
                        </div>
                      
                        <?php } ?>
                        <?php } ?> 
        </div>
    </div>
    </div>
</section>
<section id="wedding-packages">
<div class="fixed-columns">
<div class="row">

<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
<div class="wedding-packages-container">
<h4> <?php echo get_field ('wedding_section_heading');?></h4>
<p><?php echo get_field ('wedding_section_text');?></p>
<div class="row">
<?php $wedofferings = get_field('wedding_packages');
     if( $wedofferings ) { ?>
      <?php foreach( $wedofferings as $weddingoffer) { 
           
         
           $packagetitle = $weddingoffer['wedding_package_name'];
           $packagedetails = $weddingoffer['wedding_package_details'];
       ?>
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wed-col">
    <div class="wedding-package-box">
     <h5><?php echo  $packagetitle;?></h5>
     <ul>
     <?php echo $packagedetails;?>
     </ul>
    </div>
</div>
<?php } ?>
<?php } ?> 

</div>

</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
<?php 
$weddingimage = get_field('wedding_package_image');
if( !empty( $weddingimage ) ): ?>
<img class="wed-package-image" src="<?php echo esc_url($weddingimage['url']); ?>"/>
<?php endif; ?>
</div>
</div>
</div>
</section>
<section id="package-image-gallery">
    <div class="fixed-columns">
        <div class="packages-heading">
        <h3><?php echo get_field ('celebration_package_section_heading');?></h3>
            <p> <?php echo get_field ('celebration_package_section_text');?></p>
        </div>
    <div class="row" id="packages-row">
    <?php $packagedetails = get_field('celebration_packages');
     if( $packagedetails ) { ?>
      <?php foreach( $packagedetails as $packagedetail) { 
           
           $packageimage = $packagedetail['package_image'];
           $packageheading = $packagedetail['package_heading'];
           $packagecontent = $packagedetail['package_content'];
           $packagedetails = $packagedetail['package_details'];
          
       ?>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
     <div class="packages-box">
      <img src="<?php echo esc_url($packageimage ['url']); ?>"/>
       <div class="package-contents">
        <h4><?php echo  $packageheading;?></h4>
        <p>  <?php echo  $packagecontent;?></p>
        <ul class="resort-package-includes">
        <?php echo  $packagedetails;?>
        </ul>
        
       </div> 
    </div>
    </div>
    <?php } ?>
    <?php } ?> 
 
    </div>
      
        </div>
        
    </section>

    <section id="prewedding-packages">
     <div class="fixed-columns">
      <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <h4><?php echo get_field ('photoshoot_heading_text');?></h4>
       <p><?php echo get_field ('photoshoot_heading_content');?></p>
       <?php 
$glampiesimage = get_field('photoshoot_image_collages');
if( !empty( $glampiesimage ) ): ?>
<img class="photoshoot-destinations" src="<?php echo esc_url($glampiesimage['url']); ?>"/>
<?php endif; ?>
      </div>
      </div>
      <div class="pre-wedding-package">
       <a>Get in Touch</a>
      </div>
     </div>
    </section>
<!-- <section id="resort-views">
    <div class="fixed-columns">
        <div class="features">
            <span>Features</span>
            <h3>Why Us</h3>
            <div class="row">
            <?php $offerfields = get_field('our_offerings');
     if(  $offerfields  ) { ?>
      <?php foreach(  $offerfields  as $offeringitem ) { 
           
           $offericon = $offeringitem ['offering_icon'];
           $offertitle= $offeringitem ['offering_label'];
           $offercontent= $offeringitem ['offering_content'];
           
       ?>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="features-card">
                    <img alt="Venue Offerings"
                                src="<?php echo esc_url($offericon['url']); ?>" />
                        <h4><?php echo $offertitle;?></h4>
                        <p><?php echo $offercontent;?></p>
                    </div>
                </div>
               
                <?php } ?>
                        <?php } ?> 
            </div>
            <div class="booking-cta">
            <form method="post" action="<?php echo home_url(); ?>/enquiry-venues/">
                <input type="hidden" value="<?php echo the_title(); ?>" id="partnername" name="partnername"/>
                <input type="submit" class="cta-button" value="Book Now"/>
                </form>
               
            </div>
        </div>
    </div>
</section> -->

<section id="venue-gallery">
    <div class="fixed-columns">
        <h3>Experience a Glamourous Retreat</h3>
        <div class="gallery-division">
        <?php
        // Get ACF gallery field value
        $portfolioimages = get_field('our_gallery');
        if ($portfolioimages) {
            echo '<div class="grid-gallery">';
            foreach ($portfolioimages as $portfolioimage) {
                echo '<div class="grid-item-gallery"><img alt="venue Images" src="' . esc_url($portfolioimage['url']) . '" /></div>';
            }
            echo '</div>';
                
        }
        ?>
        </div>
    </div>
</section>


<!-- <section id="things-to-do">
    <div class="fixed-columns">
        <div class="center-div">
            <h3>Things To Do</h3>
            <p>Relax, reconnect, and immerse yourself in a touch of Glamour. </p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="accordion" id="accordionExample">
                <?php
    // Check if the repeater field has rows of data
    if (have_rows('things_to_do')):
        // Loop through the rows of data
        while (have_rows('things_to_do')) : the_row();
            // Get sub-field values
            $activities_title = get_sub_field('activities_title');
            $activities_content = get_sub_field('activities_content');
    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#<?php echo sanitize_title($activities_title); ?>" aria-expanded="false"
                        aria-controls="<?php echo sanitize_title($activities_title); ?>">
                        <?php echo esc_html($activities_title); ?>
                    </button>
                        </h2>
                        <div id="<?php echo sanitize_title($activities_title); ?>" class="accordion-collapse collapse"
                    aria-labelledby="heading<?php echo sanitize_title($activities_title); ?>"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php echo wp_kses_post($activities_content); ?>
                    </div>
                </div>
                    </div>
                    <?php
        endwhile;
    else :
        // No rows found
        echo 'No activities found.';
    endif;
    ?>
                   

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img alt="venue adventure" src="https://theglampies.com/static/images/activities/adventures.webp" />
            </div>
        </div>
    </div>
</section> -->

<section id="booking-cta-div">
    <div class="fixed-columns">
        <div class="center-div-cta">
            <h3><?php echo get_field ('cta_title');?></h3>
            <p><?php echo get_field ('cta_content');?> </p>
            <div class="booking-cta">
            <form method="post" action="<?php echo home_url(); ?>/enquiry-venues/">
                <input type="hidden" value="<?php echo the_title(); ?>" id="partnername" name="partnername"/>
                <input type="submit" class="cta-button" value="Book Now"/>
                </form>
               
            </div>
        </div>
    </div>
</section>

<section id="venue-reviews">
    <div class="fixed-columns">
    <div class="center-div">
            <h3>Our Reviews</h3>
            <p>Discover the tales of pure bliss who have soaked up the joy of their time spent with us. </p>
        </div>
        <?php $testimonialitem = get_field('reviews_card');
     if( $testimonialitem ) { ?>
        <div class="testimonial-carousel">
        <?php foreach( $testimonialitem as $testimonialrow ) { 
             $testimonialTitle = $testimonialrow['review_title'];
             $testimonialdescription = $testimonialrow['review_content'];
            
         ?>
         <div class="testimonial-item">
         <div class="reviews-card">
                    <h5><?php echo $testimonialTitle;?></h5>
                    <p>"<?php echo $testimonialdescription;?>"</p>
                </div>
         </div>
         <?php } ?>
        </div>
        <?php } ?>

    </div>
</section>
<section id="enquiry-form-layouts">
  <div class="fixed-columns">
    <div class="enquiry-forms">
    <form id="venues-enquiry" method="post">
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h4 id="venue-forms-heading">Booking Details</h4>
        <div class="form-item">
        <label>Check in Date</label>
                    <input type="date" id="checkinDate" name="checkinDate" class="cntinp" placeholder=" Checkin Date" />
                    <span class="info" id="enqcheckindateinfo"></span>
        </div>
        <div class="form-item">
        <label>Check out Date</label>
                    <input type="date" id="checkoutDate" name="checkoutDate" class="cntinp"
                      placeholder="Checkout Date" />
                    <span class="info" id="enqcheckoutdateinfo"></span>
        </div>
        <div class="form-item">
                    <input type="number" name="enqadultgroupsize" id="enqadultgroupsize" class="cntinp"
                      placeholder="No of Adults" min="1">
                    <span class="info" id="enqadultgroupsizeinfo"></span>
                  </div>
                  <div class="form-item">
                    <input type="number" name="enqchildrengroupsize" id="enqchildrengroupsize" class="cntinp"
                      placeholder="No of Children" min="1">
                    <span class="info" id="enqchildrengroupsizeinfo"></span>
                  </div>
                  <div class="form-item">
                    <select name="eventtype" id="eventtype" class="cntinp">
                      <option value="">Mention your Special Day</option>
                      <option value="Birthdays">Birthdays </option>
                      <option value="Marriage">Marriage </option>
                      <option value="Photoshoot">Photoshoot </option>
                      <option value="Anniversaries">Anniversaries</option>
                      <option value="Bachelorette party">Bachelorette party</option>
                      <option value="Baby Showers">Baby Showers</option>
                      <option value="Family Get-Togethers">Family Get-Togethers</option>
                      <option value="Special Occasions">Special Occasions</option>
                    </select>
                    <span class="info" id="eventtypeinfo"></span>
                  </div>
                  
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
         <h4 id="venue-forms-heading">Personal Details</h4>
            <label id="venue-lbl"></label>
         <div class="form-item">
                    <input type="text" name="enqnamecnt" id="enqnamecnt" class="cntinp" placeholder="First Name">
                    <span class="info" id="enqnameinfo"></span>
                  </div>
                  <label id="venue-lbl"></label>
                  <div class="form-item">
                    <input type="text" name="enqphonecnt" id="enqphonecnt" class="cntinp" placeholder="Mobile Number">
                    <span class="info" id="enqnumberinfo"></span>
                  </div>
       
                  <div class="form-item">
                    <input type="text" name="enqemailcnt" id="enqemailcnt" class="cntinp" placeholder="Email Address">
                    <span class="info" id="enqemailinfo"></span>
                  </div>
                  <div class="form-item">
                    <textarea type="text" name="fulladdress " id="fulladdress" class="cntinptxt loc-address"
                      placeholder="Please enter your full address"></textarea>
                  </div>
                  
         </div>
         <div class="form-item">
                    <textarea type="text" name="splrequests" id="splrequests" class="cntinptxt"
                      placeholder="Any Special Requests"></textarea>
                  </div>
        </div>
        <div class="enquiry-submit-button">
          <input type="hidden" id="partnername" name="partnername" value="<?php echo $partnerName ?>" />
          <input type="submit" value="Submit" class="enqsubmit-button" />
          <p id="loader-icons">Please wait we are capturing your information....</p>
        </div>
    </form>
    </div>
    </div>
    </section>
    <div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png" />Your Response was submitted.
  our team will contact you shortly.</div>
<script>
    $(".testimonial-carousel").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        dots: true,
        arrows: true,
        pauseOnHover: true,
        responsive: [

{

    breakpoint: 768,

    settings: {

        slidesToShow: 2,

        slidesToScroll: 1,

        infinite: true,

        dots: true

    }

},
{

breakpoint: 560,

settings: {

    slidesToShow: 1,

    slidesToScroll: 1,

    infinite: true,

    dots: true

}

},
]
        
    });
</script>
<script>
  $(function () {
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if (month < 10)
      month = '0' + month.toString();
    if (day < 10)
      day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;

    // or instead:
    // var maxDate = dtToday.toISOString().substr(0, 10);


    $('#checkinDate').attr('min', maxDate);
  });
  $(function () {
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if (month < 10)
      month = '0' + month.toString();
    if (day < 10)
      day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;

    // or instead:
    // var maxDate = dtToday.toISOString().substr(0, 10);


    $('#checkoutDate').attr('min', maxDate);
  });
</script>

<?php get_footer(); ?>