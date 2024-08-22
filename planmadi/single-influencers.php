<?php get_header(); ?>

<section id="hero-section">
    <div class="fixed-columns">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 hero-banner-column">
    <div class="hero-banner-contents">
<h3><?php echo get_field ('hero_section_text');?> </h3>
<p><?php echo get_field ('hero_sub_text');?></p>
<!-- <form  id="partnerdetailcapture" method="post" action="<?php echo home_url(); ?>/makeup-enquiry/">
                        <input type="hidden" value="<?php echo get_field ('partner_name');?>" id="partnername" name="partnername"/>
                        <input type="submit" class="cta-button" value="Get Quote"/>
                        </form> -->

<!-- <a href="#contact-us">Plan Madi</a> -->
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 collage-layout">
<?php 
$heroimage = get_field('hero_section_image');
if( !empty( $heroimage ) ): ?>
                <img   src="<?php echo esc_url($heroimage['url']); ?>" class="about-image hero-image-collage"  />
                <?php endif; ?>

</div>
</div>
    </div>
</section>

<section id="about-me">

    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 col-12 column-1" id="col-divs">
            <?php 
$image = get_field('partner_about_image');
if( !empty( $image ) ): ?>
                <img   src="<?php echo esc_url($image['url']); ?>" class="about-image" />
                <?php endif; ?>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 col-12 column-2" id="col-divs">
                <div class="about-me-contents">
                    <div class="about-heading">
                    <!-- <div class="line-3"></div> -->
                    <h2>I'm <?php echo get_field ('partner_name');?></h2>
                    <!-- <div class="line-4"></div> -->
                    </div>
                    <div class="about-me-contents">
                    <p><?php echo get_field('about_partner'); ?></p>
</div>
                    <div>
                       
                 
                    <!-- <form  id="partnerdetailcapture" method="post" action="<?php echo home_url(); ?>/makeup-enquiry/">
                        <input type="hidden" value="<?php echo get_field ('partner_name');?>" id="partnername" name="partnername"/>
                        <input type="submit" class="cta-button" value="Work with me"/>
                        </form> -->
</div>
                </div>
          
            </div>
         
        </div>
    </div>
    
</section>
<section id="what-i-do">

    <div class="fixed-columns">
        
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-12 " id="col-divs">
                <div class="what-i-do-contents">
                    <div class="what-i-do-heading">
                <!-- <div class="line-5"></div> -->
                <h3><?php echo get_field('what_wei_do_heading'); ?></h3>
                <!-- <div class="line-6"></div> -->
</div>
                <div class="services-offered">
                    <!-- row -->
                    <div class="row">
                    <?php $servicesnew = get_field('we_we_do_contents');
     if( $servicesnew ) { ?>
      <?php foreach( $servicesnew as $servicenew) { 
           
          
           $serviceitems = $servicenew['what_i_do_lists'];
           
       ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="services-left">
                     <ul>
                     <?php if($serviceitems) { ?>
                        <li><?php echo $serviceitems;?></li>
                        <?php } ?>
                     </ul>
                 
                     </div>
                    </div>
                   
                    <?php } ?>
                    <div>
                    <!-- <form  id="partnerdetailcapture" method="post" action="<?php echo home_url(); ?>/makeup-enquiry/">
                        <input type="hidden" value="<?php echo get_field ('partner_name');?>" id="partnername" name="partnername"/>
                        <input type="submit" class="cta-button" value="Let's Work"/>
                        </form> -->
                   
</div>
            <?php } ?> 
                    </div>
                      
                    <!-- row -->
              
                </div>
                   
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-12 profile-images-right" id="col-divs">
            <?php 
$image = get_field('service_image');
if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>"
                    class="profile-images" />
                    <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="portfolio-galleries">
    <div class="fixed-columns">
        <div class="portfolio-heading">
            <h3>Portfolio</h3>
        </div>

        <?php
        // Get ACF gallery field value
        $images = get_field('portfolio_gallery');

        if ($images) {
            echo '<div class="grid">';
            foreach ($images as $image) {
                echo '<div class="grid-item"><img src="' . esc_url($image['url']) . '" /></div>';
            }
            echo '</div>';
        }
        ?>
    </div>
</section>

<section id="why-me">

    <div class="fixed-columns">
   
        <div class="why-me-contents">
        <div class="why-me-heading">
        <!-- <div class="line-7"></div> -->
            <h3><?php echo get_field('why_me_heading'); ?></h3>
            <!-- <div class="line-8"></div> -->
        </div>
       
        <!-- row -->
        <div class="row" id="why-row">
        <?php $whymefields = get_field('why_us_lists');
     if( $whymefields ) { ?>
      <?php foreach( $whymefields as $whymerow ) { 
           
           $titleimage = $whymerow['why_me_image'];
           $whytitle= $whymerow['why_me_title_'];
           $desc = $whymerow['why_me_title_contents'];
       ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="why-me-cards">
                    <img src="<?php echo esc_url($titleimage['url']); ?>" />
                    <h4><?php echo $whytitle;?></h4>
                    <p><?php echo $desc;?></p>
                </div>
            </div>
            <?php } ?>
            <?php } ?>  

           
        </div>
       
</div>
    </div>
</section>

<section id="influencer-enquiry">
    <div class="fixed-columns">
        <h4 class="influencer-form-heading">Contact Us</h4>
        <form id="influencer-enquiry-form" method="post">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-item">
                        <input type="text" name="caname" id="caname" class="cntinp" placeholder="Full Name" />
                        <span class="info" id="canameinfo"></span>
                    </div>
                    <div class="form-item">
                        <input type="text" name="caphone" id="caphone" class="cntinp" placeholder="Mobile Number" />
                        <span class="info" id="caphoneinfo"></span>
                    </div>
                   
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-item">
                        <input type="text" name="caemail" id="caemail" class="cntinp" placeholder="Email Address" />
                        <span class="info" id="caemailinfo"></span>
                    </div>
                    
                    <div class="form-item">
                        <input type="text" name="subject" id="subject" class="cntinp" placeholder="Subject" />
                        <span class="info" id="subjectinfo"></span>
                    </div>
                   
                </div>
                <div class="form-item">
                <textarea class="cntinptxt" name="camoredetails" id="camoredetails" placeholder="Please let us know your requirement"></textarea>
                </div>

            </div>
            <div class="enquiry-submit-button">
                    <input type="submit" value="Submit" class="enqsubmit-button" id="enqsumit-button" />
                    <p id="loader-icons">Please wait we are capturing your information....</p>
                </div>
        </form>
    </div>
</section>

<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png"/>Your Response was submitted. our team will contact you shortly.</div>
<?php get_footer(); ?>