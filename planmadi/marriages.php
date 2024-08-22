<?php /* Template Name:marriage Page */ ?>

<?php get_header(); ?>

<section id="enquiry-individual" class="birthday-events">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                <h1>For the most special day of your life</h1>
                <a href="#contact-us">Plan Madi</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                <img  src="<?php bloginfo('template_directory') ?>/images/plan-madi-weddings.webp" class="single-event-image"
                    alt="Marriages" />
            </div>
        </div>
    </div>

</section>


<section id="about-individual">
    <div class="fixed-columns">
        <h2>Seal your love with a perfect day of celebration. Start of a beautiful chapter with everlasting memories and
            zero stress. <span>Plan Madi.</span></h2>
    </div>
</section>

<section id="our-services">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12" id="col-divs">
                <div class="our-service-contents">
                    <span>Services</span>
                    <h3>What we offer</h3>
                    <p>We bring the top most services to make your dream event a success.</p>
                    <div class="service-mention">
                        <img src="<?php bloginfo('template_directory') ?>/images/arrow.svg" />
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="col-divs">
                <div class="row" id="service-row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12" id="col-divs">
                        <div class="service-card">
                            <img loading="lazy"
                                src="<?php bloginfo('template_directory') ?>/images/pre-wedding-shoot.svg"
                                class="service-icons" />
                            <h4>Wedding Shoot</h4>
                            <p>Capture the magic of your love story with us. Frame your journey in timeless elegance.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12" id="col-divs">
                        <div class="service-card">
                            <img loading="lazy" src="<?php bloginfo('template_directory') ?>/images/Catering.svg"
                                class="service-icons" />
                            <h4>Catering</h4>
                            <p>Indulge in our exquisite catering service for unforgettable flavors.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12" id="col-divs">
                        <div class="service-card">
                            <img loading="lazy" src="<?php bloginfo('template_directory') ?>/images/makeup.svg"
                                class="service-icons" />
                            <h4>Make Up </h4>
                            <p>Transform your look with professional makeup artistry tailored just for you.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12" id="col-divs">
                        <div class="service-card">
                            <img loading="lazy" src="<?php bloginfo('template_directory') ?>/images/cakes.svg"
                                class="service-icons" />
                            <h4>Cakes</h4>
                            <p>Indulge in our delightful cake service for unforgettable sweetness.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12" id="col-divs">
                        <div class="service-card">
                            <img loading="lazy" src="<?php bloginfo('template_directory') ?>/images/decoration.svg"
                                class="service-icons" />
                            <h4>Decoration </h4>
                            <p>Let's make your event unforgettable! Turn your vision into reality with us.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12" id="col-divs">
                        <div class="service-card">
                            <img loading="lazy" src="<?php bloginfo('template_directory') ?>/images/location.svg"
                                class="service-icons" />
                            <h4>Venue Hunting</h4>
                            <p>Let us handle the search for you. Find your perfect venue stress-free with us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="premium-partners">
    <div class="fixed-columns">
        <h4>Our premium service partners</h4>
        <div class="premium-cards">
            <?php

            $args = array(
                'post_type' => 'toppartners',
                'orderby' => 'date',
                'order' => 'DESC',


            );
            $query = new WP_Query($args);
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <div class="premium-partners-list">
                        <a href="<?php echo esc_attr(get_field('partner_profile_url')); ?>">
                            <?php
                            $portfolioimage = get_field('partner_image');
                            if (!empty($portfolioimage)): ?>
                                <img src="<?php echo esc_url($portfolioimage['url']); ?>">
                            <?php endif; ?>
                            <div class="contents-cards-box">
                                <h5><?php the_title(); ?></h5>
                                <i class='fas fa-arrow-right'></i>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</section>
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
                        <input type="text" name="service" id="service" class="cntinp" value="Marriage" readonly/>
                           
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
                    <input type="submit" id="contact-submit" value="Let's Plan" />
                    <p id="loader-icons">Please wait we are capturing your information.</p>
                </div>
            </form>
        </div>
    </div>
</section>
<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png" />Your Response was submitted.
    our team will contact you shortly.</div>

<script>
    $(".premium-cards").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        pauseOnHover: true,
        responsive: [

{

  breakpoint: 1024,

  settings: {

    slidesToShow: 3,

    slidesToScroll: 1,

    infinite: true,

    dots: false,
    arrows: true,

  }

},
{

breakpoint: 600,

settings: {

  slidesToShow: 2,

  slidesToScroll: 1,

  infinite: true,

  dots: true,
  arrows: false,

}

},
{

breakpoint: 460,

settings: {

  slidesToShow: 1,

  slidesToScroll: 1,

  infinite: true,

  dots: true,
  arrows:false

}

},
        ]
        
    });
</script>
<?php get_footer(); ?>