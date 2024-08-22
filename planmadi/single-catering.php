<?php get_header(); ?>

<section id="caterer-hero-section">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 text-center mx-auto">
                <div class="caterer-hero-container">
                    <span><?php echo get_field('catering_name'); ?></span>
                    <h1><?php echo get_field('catering_sub_heading'); ?></h1>
                    <p><?php echo get_field('catering_description'); ?></p>
                    <a href="#catering-menu">Get Menu</a>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="about-caterer">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 about-info-catering">
                <img src="<?php bloginfo('template_directory') ?>/images/catering-1.png" />
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about-catering">
                    <span>About</span>
                    <h2><?php echo get_field('catering_name'); ?></h2>
                    <p><?php echo get_field('about_catering'); ?></p>

                    <a href="#catering-enquiry">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="single-gallery">
    <div class="fixed-columns">
        <h3>Our Gallery</h3>
        <div class="gallery-division">
            <?php
            $portfolioimages = get_field('catering_gallery');
            if ($portfolioimages) {
                echo '<div class="grid-gallery">';
                foreach ($portfolioimages as $portfolioimage) {
                    echo '<div class="grid-item-gallery"><img src="' . esc_url($portfolioimage['url']) . '" /></div>';
                }
                echo '</div>';

            }
            ?>
        </div>
    </div>
</section>

<section id="catering-why-us">
    <div class="fixed-columns">
        <h3>Why Choose us</h3>
        <div class="why-catering-div-box">
            <div class="row">
                <?php $servicefields = get_field('why_choose_us');
                if ($servicefields) { ?>
                    <?php foreach ($servicefields as $serviceitem) {

                        $offericon = $serviceitem['why_choose_icons'];
                        $offertitle = $serviceitem['why_title'];
                        $offercontent = $serviceitem['why_content'];

                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                            <div class="why-caterer-card">
                                <img src="<?php echo esc_url($offericon['url']); ?>" />
                                <h4><?php echo $offertitle; ?></h4>
                                <p><?php echo $offercontent; ?></p>
                            </div>
                        </div>

                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section id="catering-menu">
    <div class="fixed-columns">
        <h3 class="menu-head">Explore our Sensational Menu</h3>
        <div class="menu-tabs">
            <?php
            $repeater_fields = array(
                'breakfast' => 'Breakfast',
                'lunchdinner' => 'Lunch & Dinner',
                'starters' => 'Starters',
                'desserts' => 'Desserts',
                'side_dishes' => 'Side Dishes'
            );

            foreach ($repeater_fields as $repeater_field_name => $repeater_field_label) {
                echo '<button class="tablink" onclick="openTab(event, \'' . $repeater_field_name . '\')">' . $repeater_field_label . '</button>';
            }
            ?>
        </div>

        <?php
        foreach ($repeater_fields as $repeater_field_name => $repeater_field_label) {
            echo '<div id="' . $repeater_field_name . '" class="tabcontent" style="display: none;">'; // Initially hide all tab content
            echo '<div class="row" id="menu-card-row">';


            // Fetch and display repeater field values
            $group_field = get_field('menu_lists'); // Fetch the group field
            if ($group_field && isset($group_field[$repeater_field_name])) {
                $repeater_field_values = $group_field[$repeater_field_name]; // Fetch the repeater field values
                foreach ($repeater_field_values as $value) {
                    echo '<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 menu-card">'; // Adjust column classes according to your design
                    echo '<div class="catering-menu-lists">';

                    // Check if $value is an array
                    if (is_array($value)) {
                        // If it's an array, loop through its elements
                        foreach ($value as $key => $item) {
                            // Display the first item within <h2> tags
                            if ($key === 0) {
                                echo '<h2>' . $item . '</h2>';
                            } else {
                                // Display the rest of the items within individual <div> tags
                                echo '<div>' . $item . '</div>';
                            }
                        }
                    } else {
                        // If it's not an array, just display the value in a single <div>
                        echo '<h2>' . $value . '</h2>';
                    }

                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">'; // Adjust column classes according to your design
                echo '<p>No values found for this repeater field.</p>';
                echo '</div>';
            }

            echo '</div>'; // .row
            echo '</div>'; // .tabcontent
        }
        ?>
    </div>
</section>
<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        document.getElementById(tabName).style.display = "block";
    }
</script>



<section id="catering-cta">
    <img src="<?php bloginfo('template_directory') ?>/images/catering-cta-image.webp" class="catering-service-desktop-image"/>
    <img src="<?php bloginfo('template_directory') ?>/images/catering-cta-mobile-image.webp" class="catering-service-mobile-image"/>
    <div class="catering-cta-row">
        <div class="catering-order-booking">
            <span>Book Today</span>
            <h3>Book our amazing food on <br /> your dream event </h3>
            <a href="#catering-enquiry">Get Quote</a>
        </div>
    </div>
</section>

<section id="testimonials-caterers">
    <div class="fixed-columns">
        <div class="center-div">
            <h3>Our Reviews</h3>
        </div>
        <?php $testimonialitem = get_field('our_reviews');
        if ($testimonialitem) { ?>
            <div class="testimonial-carousel">
                <?php foreach ($testimonialitem as $testimonialrow) {
                    $testimonialTitle = $testimonialrow['review_person'];
                    $testimonialdescription = $testimonialrow['review_content'];

                    ?>
                    <div class="testimonial-item">
                        <div class="reviews-card">
                            
                            <p>"<?php echo $testimonialdescription; ?>"</p>
                            <h5><?php echo $testimonialTitle; ?></h5>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>
<section id="catering-enquiry">
    <div class="fixed-columns">
        <h4 class="catering-form-heading">Contact Us</h4>
        <form id="catering-enquiry-form" method="post">
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
                    <div class="form-item">
                        <input type="text" name="canumberofpersons" id="canumberofpersons" class="cntinp" placeholder="Number of Persons" />
                        <span class="info" id="capersonsinfo"></span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-item">
                        <input type="text" name="caemail" id="caemail" class="cntinp" placeholder="Email Address" />
                        <span class="info" id="caemailinfo"></span>
                    </div>
                    
                    <div class="form-item">
                        <input type="text" name="calocation" id="calocation" class="cntinp" placeholder="Event Location" />
                        <span class="info" id="calocationinfo"></span>
                    </div>
                    <div class="form-item">
                                                <!-- <label>Event Date</label> -->
                                                <input type="date" id="txtDate" name="txteventDate" class="cntinp"
                                                    placeholder="Event Date" />
                                                <span class="info" id="enqeventdateinfo"></span>
                                            </div>
                </div>
                <div class="form-item">
                <textarea class="cntinptxt" name="camoredetails" id="camoredetails" placeholder="Please let us know if you want us to know more"></textarea>
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
<script>
    $(".testimonial-carousel").slick({
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


<!-- <script>
    $(".menu-tabs").slick({
        slidesToShow: 5,
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

                    slidesToShow: 3,

                    slidesToScroll: 1,

                    infinite: true,

                    dots: true,
                    arrows: true,

                }

            },

            {

                breakpoint: 600,

                settings: {

                    slidesToShow: 2,

                    slidesToScroll: 1,

                    infinite: true,

                    dots: false,
                    arrows: true

                }

            },
        ]

    });
</script> -->
<script>



    // Function to switch between tabs
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;

        // Hide all tab content
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Remove the 'active' class from all tab links
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the selected tab, and mark the button as active
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Trigger click event on the first tab link to display the first tab content on page load
    document.querySelector('.tablink').click();

    // var accordions = document.querySelectorAll('.accordion');

    // accordions.forEach(function(accordion) {
    //   accordion.addEventListener('click', function() {
    //     var panelContent = this.nextElementSibling;
    //     // Toggle current panel content
    //     panelContent.classList.toggle('active');
    //   });
    // });

    // // Set initial state of accordions
    // document.getElementById('defaultOpen').click();

</script>

<script>
    //         function formatDate(date) {
    //     const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    //     const day = date.getDate();
    //     const month = months[date.getMonth()];
    //     const year = date.getFullYear();
    //     return `${day}-${month}-${year}`;
    // }

    // Function to set date input value in desired format

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


        $('#txtDate').attr('min', maxDate);
    });
</script>



<?php get_footer(); ?>