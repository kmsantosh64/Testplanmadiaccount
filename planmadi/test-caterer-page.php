<?php /* Template Name:caterer page*/ ?>


<?php get_header(); ?>

<section id="caterer-hero-section">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 text-center mx-auto">
                <div class="caterer-hero-container">
                    <span>Rao's Catering Services</span>
                    <h1>Refine your taste buds!</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quaerat architecto molestias
                        adipisci ratione quam totam, iusto repellendus quidem libero asperiores illum facilis soluta
                        illo perferendis esse. Molestiae, provident esse?</p>
                    <a>Get Menu</a>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="about-caterer">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                <img src="<?php bloginfo('template_directory') ?>/images/catering-1.png" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="about-catering">
                    <span>About</span>
                    <h2>Rao's Catering</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore nulla deserunt aliquam,
                        delectus esse numquam harum laudantium fugit voluptatibus ex voluptates placeat aperiam quas eos
                        nobis obcaecati eius sit! <br /> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Corporis tempore nulla deserunt aliquam, delectus esse numquam harum laudantium fugit
                        voluptatibus ex voluptates placeat aperiam quas eos nobis obcaecati eius sit!Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Corporis tempore nulla deserunt aliquam, delectus esse
                        numquam harum laudantium fugit voluptatibus ex voluptates placeat aperiam quas eos nobis
                        obcaecati eius sit! <br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                        tempore nulla deserunt aliquam, delectus esse numquam harum laudantium fugit voluptatibus ex
                        voluptates placeat aperiam quas eos nobis obcaecati eius sit!</p>
                    <p><strong>We Offer services for all types of occasion</strong></p>
                    <a>Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="venue-gallery">
    <div class="fixed-columns">
        <h3>Our Gallery</h3>
        <div class="gallery-division">
            <?php
            $portfolioimages = get_field('our_gallery');
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
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="why-caterer-card">
                        <h4>Culinary Creativity</h4>
                        <p>Our pure veg catering service offers a diverse menu filled with innovative
                            and flavorful dishes, showcasing the boundless possibilities of vegetarian
                            cuisine. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="why-caterer-card">
                        <h4>Eco-Friendly Practices</h4>
                        <p>We take pride in our eco-friendly approach to catering, sourcing ingredients
                                            locally and minimizing waste through sustainable practices. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="why-caterer-card">
                        <h4>Professional Excellence</h4>
                        <p>With a team of experienced chefs and attentive staff, our catering service
                                            ensures seamless execution from start to finish. Sit back, relax, and let us
                                            handle every detail.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="why-caterer-card">
                        <h4>Customized Culinary Experiences</h4>
                        <p>Whether you're hosting an intimate gathering or a grand celebration, our
                                            catering service offers customizable menus and personalized service to suit
                                            your needs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="why-caterer-card">
                        <h4>Hygiene Standards</h4>
                        <p>At our pure veg catering service, hygiene is our top priority. We adhere to
                                            stringent cleanliness protocols, ensuring that every dish is prepared in sanitized environment.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="why-caterer-card">
                        <h4>Customer Service</h4>
                        <p>Our dedicated team goes above and beyond to cater to your needs, ensuring a
                                            seamless and stress-free experience, with prompt communication.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="catering-menu">
    <div class="fixed-columns">
        <h3 class="menu-head"> Explore our Sensational Menu</h3>
        <div class="menu-tabs">
            <?php
            $args = array(
                'taxonomy' => 'catering_cat', // Replace 'your_custom_taxonomy' with the actual taxonomy name
                // 'orderby' => 'name',  // Uncomment and customize if you want to order by name or other parameters
                // 'order' => 'ASC',     // Uncomment and customize if you want to specify the order
            );

            $categories = get_categories($args);

            foreach ($categories as $key => $category) {
                $active_class = ($key === 0) ? ' active' : ''; // Add 'active' class to the first tab
                echo '<button class="tablink' . $active_class . '" onclick="openTab(event, \'tab-' . $category->slug . '\')">' . $category->name . '</button>';
            }
            ?>
        </div>

        <?php
        foreach ($categories as $key => $category) {
            $active_style = ($key === 0) ? 'display: block;' : 'display: none;'; // Show the first tab content
            echo '<div id="tab-' . $category->slug . '" class="tabcontent" style="' . $active_style . '">';
            echo '<div class="row" id="menu-card-row">';
            // Query your custom posts of the 'catering' type that belong to this category
            $args = array(
                'post_type' => 'catering',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'catering_cat', // Replace 'your_custom_taxonomy' with the actual taxonomy name
                        'field' => 'slug',
                        'terms' => $category->slug,
                    ),
                ),
            );
            $catering_posts = new WP_Query($args);

            if ($catering_posts->have_posts()) {
                while ($catering_posts->have_posts()) {
                    $catering_posts->the_post();
                    echo '<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 menu-card">';
                    the_title('<h2>', '</h2>');
                    $catering_menu_lists = get_field('catering_menu_lists');
                    // Display the value of the ACF field
                    if ($catering_menu_lists) {
                        echo '<div class="catering-menu-lists">' . $catering_menu_lists . '</div>';
                    } else {
                        echo '<p>No catering menu lists found for this post.</p>';
                    }
                    echo '</div>';
                }
                wp_reset_postdata();
            } else {
                echo '<p>No catering posts found for this category.</p>';
            }
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</section>

<section id="catering-cta">
    <div class="fixed-columns">
        <div class="catering-order-booking">
            <span>Book Today</span>
            <h3>Book our amazing food on <br /> your dream event </h3>
            <a>Get Quote</a>
        </div>
    </div>
</section>

<section id="testimonials-caterers">
    <div class="fixed-columns">
        <div class="center-div">
            <h3>Our Reviews</h3>
        </div>
        <div class="testimonial-carousel">
            <div class="testimonial-item">
                <div class="reviews-card">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos odio aut repellendus dolore debitis
                        maxime cum amet aperiam incidunt, tenetur corrupti dignissimos. Molestias eligendi atque
                        accusantium facilis magni doloribus sit?</p>
                    <h6>Mahesh</h6>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="reviews-card">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos odio aut repellendus dolore debitis
                        maxime cum amet aperiam incidunt, tenetur corrupti dignissimos. Molestias eligendi atque
                        accusantium facilis magni doloribus sit?</p>
                    <h6>Mahesh</h6>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="reviews-card">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos odio aut repellendus dolore debitis
                        maxime cum amet aperiam incidunt, tenetur corrupti dignissimos. Molestias eligendi atque
                        accusantium facilis magni doloribus sit?</p>
                    <h6>Mahesh</h6>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="reviews-card">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos odio aut repellendus dolore debitis
                        maxime cum amet aperiam incidunt, tenetur corrupti dignissimos. Molestias eligendi atque
                        accusantium facilis magni doloribus sit?</p>
                    <h6>Mahesh</h6>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="reviews-card">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos odio aut repellendus dolore debitis
                        maxime cum amet aperiam incidunt, tenetur corrupti dignissimos. Molestias eligendi atque
                        accusantium facilis magni doloribus sit?</p>
                    <h6>Mahesh</h6>
                </div>
            </div>
        </div>
    </div>
</section>
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

<?php get_footer(); ?>