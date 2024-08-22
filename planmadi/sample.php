<?php /* Template Name:samplepage*/ ?>

<?php get_header(); ?>
<section id="portfolio">
<!-- <a>Back to Home</a> -->
    <!-- <div class="partner-header">
       
        <h1><?php the_title(); ?></h1>
        
    </div> -->
    <!-- <div class="portfolio-main">
    <div class="line-1"></div>
        <div class="fixed-width">
            <div class="row">
            <?php $bannerportfolios = get_field('banner_items');
     if( $bannerportfolios ) { ?>
      <?php foreach( $bannerportfolios as $bannerportfoliorow) { 
           
          
           $contentleftimg = $bannerportfoliorow['banner_images'];
           $bannerleftimage  = $contentleftimg[0];
           $contentleftheading = $bannerportfoliorow['text1'];
       ?>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12" id="col-divs">
               
                    <div class="portfolio-left">
                        <img src="<?php echo $bannerleftimage ['url']; ?>" />
                        <div class="main-portfolio-banner-left">
                        <?php if($contentleftheading) { ?>
                            <p><?php echo $contentleftheading ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    
                </div>
                <?php } ?>
            <?php } ?> 
          
            <?php $bannerrightportfolios = get_field('banner_items');
     if( $bannerrightportfolios ) { ?>
      <?php foreach( $bannerrightportfolios as $bannerrightrow) { 
           
          
           $contentrightimage = $bannerrightrow['banner_images'];
           $bannerrightimage  = $contentrightimage[1];
           $contentrighttext = $bannerrightrow['text2'];
       ?>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12" id="col-divs">
                    <div class="portfolio-right">
                        <img src="<?php echo $bannerrightimage ['url']; ?>" />
                        <div class="main-portfolio-banner-right">
                        <?php if($contentrighttext) { ?>
                            <p><?php echo $contentrighttext ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php } ?> 
            </div>
        </div>
        <div class="line-2"></div>
    </div> -->
</section>

<!-- <section id="partner-hero-item">
<div class="fixed-columns">
<?php $partnerbanner = get_field('hero_section');
 if( $partnerbanner) { ?>
    <div class="partner-hero-lists">
    <?php foreach( $partnerbanner as $partnersbannerrow) { 
         $partnercarouselimages = $partnersbannerrow['hero_banner_image'];
         $partnercarosuelContent = $partnersbannerrow['hero_banner_contents'];
     ?>
     <div class="partner-hero-item">
     <img class="partner-hero-image" src="<?php echo $partnercarouselimages ['url']; ?>" />
     <h1><?php echo $partnercarosuelContent ?></h1>
     <p><a>Learn More</a></p>
     </div>
     <?php } ?>
    </div>
    <?php } ?> 
</div>
</section> -->


<section id="about-me">

    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-12 column-1" id="col-divs">
            <?php 
$image = get_field('partner_about_image');
if( !empty( $image ) ): ?>
                <img   src="<?php echo esc_url($image['url']); ?>" class="about-image" />
                <?php endif; ?>
            </div>
            <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12 col-12 column-2" id="col-divs">
                <div class="about-me-contents">
                    <div class="about-heading">
                    <!-- <div class="line-3"></div> -->
                    <h2>I'm <?php echo get_field ('partner_name');?></h2>
                    <!-- <div class="line-4"></div> -->
                    </div>
                    <p><?php echo get_field('about_partner'); ?></p>
                    <div>
                        <!-- <form id="partnerdetailcapture" method="post" action="<?php echo home_url(); ?>/">
                        <input type="hidden" value="<?php echo get_field ('partner_name');?>" id="partnername" name="partnername"/>
                        <input type="submit" class="cta-button" value="Work with me"/>
                        </form> -->
                   <button class="cta-button">Work with me</button>
</div>
                </div>
          
            </div>
         
        </div>
    </div>
    
</section>




<section id="what-i-do">

    <div class="fixed-width">
        
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
                   <button class="cta-button">Let's Work</button>
</div>
            <?php } ?> 
                    </div>
                      
                    <!-- row -->
               <!-- <ul>
                <li>Video shooting</li>
                <li>Photo shoot</li>
                <li>Drone filming</li>
                <li>Video shooting</li>
                <li>Video shooting</li>
                <li>Video shooting</li>
               </ul> -->
                </div>
                    <!-- <div class="tabs">
                        <input type="radio" name="tabs" id="tabone" checked="checked">
                        <label for="tabone">Video shooting</label>
                        <div class="tab">
                            <h1>Video shooting</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                        </div>
                        <input type="radio" name="tabs" id="tabtwo">
                        <label for="tabtwo">Photo shooting</label>
                        <div class="tab">
                            <h1>Photo shooting</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                        </div>
                        <input type="radio" name="tabs" id="tabthree">
                        <label for="tabthree">Drone filming</label>
                        <div class="tab">
                            <h1>Drone filming</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                        </div>
                        <input type="radio" name="tabs" id="tabfour">
                        <label for="tabfour">Location stalking</label>
                        <div class="tab">
                            <h1>Location stalking</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                        </div>
                        <input type="radio" name="tabs" id="tabfive">
                        <label for="tabfive">Love story</label>
                        <div class="tab">
                            <h1>Love story</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                        </div>
                    </div> -->
                    <!-- <div class="what-i-do-cta-btn">
                        <a>Learn More</a>
                    </div> -->
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
<section id="call-to-action">
    <div>
    <?php 
$image = get_field('cta_image');
if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>"
                    class="profile-images" />
                    <?php endif; ?>
    </div>
</section>

<section id="portfolio-galleries">
    <div class="fixed-width">
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

    <div class="fixed-width">
   
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

            <!-- <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="why-me-cards">
                    <img src="<?php bloginfo('template_directory') ?>/images/idea.svg" />
                    <h4>Idea</h4>
                    <p>I offer photo shooting options based on your preferences. If you have an idea, I will help you
                        bring it to life.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="why-me-cards">
                    <img src="<?php bloginfo('template_directory') ?>/images/Heart.svg" />
                    <h4>Comfort</h4>
                    <p>I will give you some advice on posing, help you open up and create a comfortable atmosphere for
                        you.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="why-me-cards">
                    <img src="<?php bloginfo('template_directory') ?>/images/Lightning.svg" />
                    <h4>Creativity</h4>
                    <p>Atypical photographs, creativity and the embodiment of any bold fantasy in life. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="why-me-cards">
                    <img src="<?php bloginfo('template_directory') ?>/images/quality.svg" />
                    <h4>Quality</h4>
                    <p>All photos will go through several stages of processing before they fall into your hands.</p>
                </div>
            </div> -->
        </div>
       
</div>
    </div>
</section>
<?php 

$images = get_field('awardsrecognition');
if( $images ): ?>
<section id="clients">
    <div class="fixed-width">

        <div class="my-clients">
        <?php foreach( $images as $image ): ?>
            <img src="<?php echo $image['url']; ?>" />
            <?php endforeach; ?>
           
        </div>
        
       
    </div>
</section>
<?php endif; ?>
<?php 
$image = get_field('testimonial_image');
if( !empty( $image ) ): ?>
<section id="testimonials">

    <div class="fixed-width">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-12 column-1" id="col-divs">
            
                <img src="<?php echo esc_url($image['url']); ?>"
                    class="profile-images" />
                    
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-12 column-2" id="col-divs">
                <div class="testimonial-contents">
                    <div class="testimonial-heading">
                    <!-- <div class="line-9"></div> -->
                        <h3><?php echo get_field('testimonial_heading'); ?></h3>
                        <!-- <div class="line-10"></div> -->
                    </div>

                 
                    <?php $testimonialitem = get_field('testimonial_lists');
     if( $testimonialitem ) { ?>
<div class="testimonial-carousel">
<?php foreach( $testimonialitem as $testimonialrow ) { 
             $testimonialTitle = $testimonialrow['testimonial_name'];
             $testimonialdescription = $testimonialrow['testimonial_content'];
            
         ?>
<div class="slides">
    <div class="testimonial-item">
   <p>"<?php echo $testimonialdescription;?>"</p>
<h6>-<?php echo $testimonialTitle;?></h6>
</div>

</div>
<?php } ?>

</div>
<?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<p><?php echo get_field('sample_gallery'); ?></p>
<!-- wp:jetpack/tiled-gallery {"columnWidths":[["66.74718","33.25282"],["25.28222","74.71778"]],"ids":[60,61,62,63,64,65]} -->

<!-- /wp:jetpack/tiled-gallery -->
<!-- <section id="get-in-touch">
<div class="line-11"></div>
    <div class="fixed-width">
       <div class="faq-contents">
        <h3>Faq</h3>
        <div class="line-12"></div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12" id="col-divs">
            <div class="accordion" id="accordionExample">
            <?php $faqfields = get_field('faq_item');
     if( $faqfields ) { ?>
      <?php foreach( $faqfields as $faqrow ) { 
           
          
           $faqtitle= $faqrow['faq_question'];
           $faqanswer = $faqrow['faq_answer'];
       ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <?php echo $faqtitle;?>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong><?php echo $faqanswer;?></strong>
      </div>
    </div>
  </div>
  <?php } ?>
            <?php } ?>  


</div>
            </div>
            
        </div>
    </div>
</div>
</section> -->

<?php get_footer(); ?>