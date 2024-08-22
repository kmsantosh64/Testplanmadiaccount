<?php /* Template Name:general enquiry*/ ?>


<?php get_header(); ?>
<section id="partner-enquiry">
<div class="fixed-columns">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
<div class="partner-enquires">
    <h1>Get Your dream event ready with our partners</h1>
    <p class="enquiry-partner-value">You are enquiring for <span id="service-providers"></span></p>
<form id="enquiry-partner-general">
    <div class="row">
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 row-col">
     <div class="form-item">
             <input hidden type="text" id="service-perferred"  name="service-preferred"class="cntinp" readonly/>
            </div>
     <div class="form-item">
<input type="text" name="namecnt" id="namecnt" class="cntinp" placeholder="Name">
               <span class="info" id="nameinfo"></span>
</div>

            
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 row-col">
     <div class="form-item">
               <input type="text" name="emailcnt" id="emailcnt" class="cntinp" placeholder="Email Address">
               <span class="info" id="emailinfo"></span>
            </div>
            
     </div>
    </div>
    <div class="form-item">
               <input type="text" name="phonecnt" id="phonecnt" class="cntinp" placeholder="Mobile Number">
               <span class="info" id="numberinfo"></span>
            </div>
    <div class="form-item">
            <textarea type="text" name="msgcnt" id="msgcnt" class="cntinptxt"
                  placeholder="Can you tell us more about your event?"></textarea>
                  <span class="info" id="moreinfo"></span>
            </div>
    <div class="submit-button">
         <input type="submit"  id="contact-submit" value="Enquire Now" />
         <p id="loader-icons">Please wait we are capturing your information.</p>
      </div>
</form>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
<img src="" class="hero-image-banner" id="hero-image"/>
</div>
</div>

</div>
</section>
<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png" />Your Response was submitted.
    our team will contact you shortly.</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Get the query parameter from the URL
    var urlParams = new URLSearchParams(window.location.search);
    var queryParamValue = urlParams.get('q');

    // Set the value of the form field to the query parameter value
    var queryParamField = document.getElementById('service-perferred');
    queryParamField.value = queryParamValue;

    var spanElement = document.getElementById('service-providers');

// Set the text content of the span element to the query parameter value
spanElement.textContent = queryParamValue;
    

    var heroImage = document.getElementById('hero-image');
    if (queryParamValue === 'makeup') {
        heroImage.src = "<?php echo bloginfo('template_directory') ?>/images/makeup-enquiry.png";
    } else if (queryParamValue === 'photographer') {
        heroImage.src = "<?php echo bloginfo('template_directory') ?>/images/photgrapher-enquiry.png";
    }
    else if (queryParamValue === 'caterer') {
        heroImage.src = "<?php echo bloginfo('template_directory') ?>/images/caterer-enquiry.png";
    }
    else if (queryParamValue === 'baker') {
        heroImage.src = "<?php echo bloginfo('template_directory') ?>/images/baker-enquiry.png";
    }
    else if (queryParamValue === 'decorator') {
        heroImage.src = "<?php echo bloginfo('template_directory') ?>/images/decorator-enquiry.png";
    }
    else if (queryParamValue === 'female photographer') {
        heroImage.src = "<?php echo bloginfo('template_directory') ?>/images/personalized-female-photographer.png";
    }
    else if (queryParamValue === 'pre wedding photoshoot') {
        heroImage.src = "<?php echo bloginfo('template_directory') ?>/images/pre-wedding.png";
    }
    else if (queryParamValue === 'house warming') {
        heroImage.src = "<?php echo bloginfo('template_directory') ?>/images/house-warming.png";
    }
    else if (queryParamValue === 'team outing') {
        heroImage.src = "<?php echo bloginfo('template_directory') ?>/images/team-outing.png";
    }
    else if (queryParamValue === 'resorts') {
        heroImage.src = "<?php echo bloginfo('template_directory') ?>/images/resort-vacation.png";
    }
    else if (queryParamValue === 'pool party') {
        heroImage.src = "<?php echo bloginfo('template_directory') ?>/images/pool-party.png";
    }
    else if (queryParamValue === 'digital invite') {
        heroImage.src = "<?php echo bloginfo('template_directory') ?>/images/digital-invites.png";
    }
    else if (queryParamValue === 'social media influencer') {
        heroImage.src = "<?php echo bloginfo('template_directory') ?>/images/social-media-influencer.png";
    }
    else {
        
        window.location.href = "/"; 
    }
});
</script>

<?php get_footer(); ?>