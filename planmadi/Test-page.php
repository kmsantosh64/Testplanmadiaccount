<?php /* Template Name:Testing Page */


get_header();

?>

<style>
    .grid-gallery{
        transition: all 1s;
    }
    .grid-item-gallery:hover {
        transition: all .5s;
    transform : translateX(10px);
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
<section id="enquiry-form-layouts" onload="setDateInputFormat()">
    <div class="fixed-columns">
        <div class="enquiry-forms">
            <form id="duplicate-cake-enquiry-form" action="https://www.planmadi.com/wp-content/themes/planmadi/mail/enquiry-baker.php" method="post" enctype="multipart/form-data" >
                <div class="form-item">
                    <p id="service-provider" name="service-provider">Your enquiring for <?php echo $partnerName ?> </p>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                        <div class="enquiry-form-container">
                            <h3>Service Requirements</h3>
                            <div class="row">



                                <!-- <select id="Cake-type" name="cake-type" class="cntinp">
                                <option disabled selected value="">I Need </option>
                                <option value="Cake">Cake</option>
                                <option value="Add on cakes">Add on cakes (Cake Pops, Cupcakes, Brownies, Doughnuts, Cakesicles)</option>
                                <option value="Cake&addons">Both (Cake and Add Ons)</option>
                                </select> -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-item">
                                        <select id="Cake-type" name="cake-type" class="cntinp">
                                            <option disabled selected value="">I Need </option>
                                            <option value="Cake">Cake</option>
                                            <option value="Add on cakes">Add on cakes (Cake Pops, Cupcakes, Brownies,
                                                Doughnuts, Cakesicles)</option>
                                            <option value="Cake&addons">Both (Cake and Add Ons)</option>
                                        </select>
                                        <span class="info" id="enqcakemaintypeinfo"></span>
                                    </div>
                                    <div class="form-item">
                                        <select name="caketypeservice[]" id="caketypeservice" class="cntinp">
                                            <option value="" disabled selected>Please select the cake type</option>
                                            <option value="With Egg"> With Egg</option>
                                            <option value="Eggless">Eggless</option>
                                            <option value="Vegan">Vegan</option>
                                            <option value="sugarfree">Sugarfree</option>
                                           
                                        </select>
                                        <span class="info" id="enqcaketypeinfo"></span>
                                    </div>
                                    

                                    <div class="form-item">
                                        <select name="cakeformat" id="cakeformat" class="cntinp">
                                            <option value="" disabled selected>Please select how your cake should look
                                                like </option>
                                            <option value="Tall Cake">Tall Cake</option>
                                            <option value="Wide Cake">Wide Cake</option>


                                        </select>
                                        <span class="info" id="enqcakelookinfo"></span>
                                    </div>
                                   
                                    <div class="form-item">
                                        <select class="cntinp" name="cakesize" id="cakesize">
                                            <option value="" disabled selected>Please select the cake size in Kgs
                                            </option>
                                            <option value="1/2 Kg">1/2 Kg</option>
                                            <option value="1 Kg">1 Kg</option>
                                            <option value="1.5 Kg">1.5 Kg</option>
                                            <option value="2 Kg">2 Kg</option>
                                            <option value="3+ Kg">3+ Kg</option>

                                        </select>
                                        <span class="info" id="enqcakesizeinfo"></span>
                                   
                                        
                                    </div>
                                    <div class="form-item">
                                     
                                        <select name="tier_cake" id="tier_cake" class="cntinp">
                                            <option value="" disabled selected>Is it Tier Cake?</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <span class="info" id="enqtiercakeinfo"></span>

                                    </div>
                                    <div class="form-item">
                                        <select class="cntinp hidden" id="tiercakenumber" name="tiercakenumber">
                                            <option value="" disabled selected>Select the number of tiers required
                                            </option>
                                            <option value="1">1 </option>
                                            <option value="2">2 </option>
                                            <option value="3+">3+</option>
                                        </select>
                                        <span class="info" id="enqtiercakenumberinfo"></span>
                                       
                                    </div>
                                   
                                    <div class="form-item">
                                        <div class="multiSelect" id="multiselect-dropdown">
                                            <select multiple data-placeholder=" Select additional cakes.."
                                                class="cntinp cakeaddons" name="cakeadditionalservice[]"
                                                id="cakeadditionalservice">
                                                <option value="Cupcakes">Cupcakes</option>
                                                <option value="Cake Pops">Cake Pops</option>
                                                <option value="Brownies">Brownies</option>
                                                <option value="Doughnuts">Doughnuts</option>
                                            </select>
                                            <span class="info" id="cakeaddoninfo"></span>
                                        </div>
                                    </div>
                                    <div class="form-item">
                                        <textarea type="text" name="additionalcakenumber" id="additionalcakenumbers"
                                            class="cntinptxt"
                                            placeholder="10 Cakepops, 15 Cupcakes (mention flavor or other details) etc..."></textarea>
                                        <span class="info" id="additionalcakenumberinfo"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-pad">
                                            <div class="form-item">
                                                <label>Delivery Date</label>
                                                <input type="date" id="txtDate" name="deliveryDate" class="cntinp"
                                                    placeholder="Delivery Date" />
                                                <span class="info" id="enqeventdateinfo"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-pad">
                                            <div class="form-item">
                                                <label>Delivery Time</label>
                                                <input type="time" id="eventappttime" name="eventdeliverytime"
                                                    class="cntinp" placeholder="Delivery Time">
                                                <span class="info" id="enqeventtime"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-item">
                                        <p class="upload-doc-text">Any specific theme/design?</p>
                                        <div class="form-item">
                                            <label for="upload-doc" id="file-upload">Upload image</label>
                                            <div class="uploadimage"> <span class="filenm"></span> <input type="file"
                                                    name="upload" id="upload-doc" class="ip-txt"> <span id="lblError"
                                                    class="info"></span></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <div class="form-item">
                                        <input type="text" name="flavor-cake" id="flavor-cake" class="cntinp"
                                            placeholder="Flavor of cake" />
                                        <span class="info" id="enqflavorinfo"></span>
                                    </div>
                                    <div class="form-item">
                                        <input type="text" name="enqtotalpeople" id="enqtotalpeople" class="cntinp"
                                            placeholder="Number of persons">
                                        <span class="info" id="enqtotalpeopleinfo"></span>
                                    </div>
                                    <div class="form-item">
                                        <input type="number" name="cakequantity" id="cakequantity"
                                            placeholder="Quantity" class="cntinp" />
                                        <span class="info" id="enqcakequantityinfo"></span>
                                    </div>
                                    <div class="form-item">
                                        <select class="cntinp" name="fondant_cake" id="fondant_cake">
                                            <option value="" disabled selected>Is this a fondant Cake</option>
                                            <option value="Not Sure">Not Sure</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>


                                    </div>
                                    <div class="form-item">
                                        <select name="creampreferred" id="creampreferred" class="cntinp">
                                            <option value="">Please select your cream preference</option>
                                            <option value="Whipped Cream">Whipped Cream</option>
                                            <option value="Butter Cream">Butter Cream</option>
                                            <option value="Not Sure">Not Sure</option>

                                        </select>
                                        <span class="info" id="creampreferredinfo"></span>
                                    </div>

                                    <div class="form-item">
                                        <textarea type="text" name="enqbakeinstructions" id="enqbakeinstructions"
                                            class="cntinptxt"
                                            placeholder="Let us know if any allergies or special instructions?"></textarea>
                                        <span class="info" id="enqbakeinstructionsinfo"></span>
                                    </div>
                                    <div class="form-item">
                                        <input style="margin-bottom:0px;" type="text" name="caketoppers"
                                            id="caketoppers" class="cntinp"
                                            placeholder="Any toppers required (Tiara, HappyBirthday cake topper, Butterfly for cakes etc..)  " />
                                        <div class="toppers-availability"><span style="margin-bottom:15px;">(Cake
                                                Toppers are provided based on availability)</span></div>
                                    </div>
                                    <div class="form-item">
                                        <input type="text" name="cakemessage" id="cakemessage" class="cntinp"
                                            placeholder="Message on the cake">
                                        <span class="info" id="cakemessageinfo"></span>
                                    </div>
                                    <div class="form-item">
                                        <select id="cakebudget" name="cakebudget" class="cntinp">
                                            <option value="" disabled selected>Please select your budget range</option>
                                            <option value="Rs. 500 to Rs.1000">Rs. 500 to Rs. 1000</option>
                                            <option value="Rs.1000 to Rs.2000">Rs. 1000 to Rs. 2000</option>
                                            <option value="Rs.2000 to Rs.3000">Rs. 2000 to Rs. 3000</option>
                                            <option value="Rs.3000 to Rs.4000">Rs. 3000 to Rs. 4000</option>
                                            <option value="Rs. 4000 and above">Rs. 4000 and Above</option>
                                            <option value="Flexible">Flexible</option>
                                        </select>

                                        <span class="info" id="enqcakebudgetinfo"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 personaldetails">
                        <div class="enquiry-form-container">
                            <h3>Personal Details</h3>
                            <div class="form-item">
                                <input type="text" name="enqnamecnt" id="enqnamecnt" class="cntinp" placeholder="Name">
                                <span class="info" id="enqnameinfo"></span>
                            </div>
                            <div class="form-item">
                                <input type="text" name="enqemailcnt" id="enqemailcnt" class="cntinp"
                                    placeholder="Email Address">
                                <span class="info" id="enqemailinfo"></span>
                            </div>
                            <div class="form-item">
                                <input type="text" name="enqphonecnt" id="enqphonecnt" class="cntinp"
                                    placeholder="Mobile Number">
                                <span class="info" id="enqnumberinfo"></span>
                            </div>
                            <div class="form-item">
                                <p>Is this Cake a surprise? (if yes please fill the below details) </p>
                                <div class="event-radio-boxes">
                                    <input type="radio" id="orderyes" name="surprise_cake" class="surprise_cake"
                                        value="Yes">
                                    <label for="Yes">Yes</label>
                                    <input type="radio" id="orderno" name="surprise_cake" class="surprise_cake"
                                        value="No">
                                    <label for="No">No</label>
                                </div>
                                <span class="info" id="enqsurprisebakinginfo"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                        <div class="enquiry-form-container">
                            <h3>Event Details</h3>
                            <div class="form-item">
                                <select name="eventtype" id="eventtype" class="cntinp">
                                    <option value="">Occasion</option>
                                    <option value="Birthday Party">Birthday Party</option>
                                    <option value="Pre Wedding">Pre Wedding</option>
                                    <option value="Engagement">Engagement</option>
                                    <option value="Others">Others</option>
                                </select>
                                <span class="info" id="enqeventinfo"></span>
                            </div>
                            <div class="form-item">
                                <input type="text" name="eventtypeothers" id="eventtypeothers" class="cntinp hidden"
                                    placeholder="Please enter your occasion here">
                                <span class="info" id="enqeventtypeotherinfo"></span>
                            </div>
                            <div class="form-item">
                                <textarea type="text" name="enqeventlocation" id="enqeventlocation" class="cntinptxt"
                                    placeholder="Delivery Location"></textarea>
                                <span class="info" id="enqeventlocationinfo"></span>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-pad">
                                    <div class="form-item">
                                        <input type="text" name="gmaplink" id="gmaplink" placeholder="Google Map Link"
                                            class="cntinp" />
                                        <span class="info" id="enqeventurllocationinfo"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-pad">
                                    <div class="form-item">
                                        <input type="text" name="landmarklocation" id="landmarklocation" class="cntinp"
                                            placeholder="Please enter the landmark" maxlength="150" />
                                        <span class="info" id="enqeventlandmarklocationinfo"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 surpriseevent">
                        <div class="enquiry-form-container hidden" id="surprisecakegift">
                            <div class="form-item">
                                <h3>Details of your Special One</h3>
                                <p>Note: Please update the receiver's person details only.</p>
                                <br />
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-item">
                                        <input type="text" Placeholder="Full Name" name="receiversname"
                                            id="receiversname" class="cntinp" />
                                        <span class="info" id="enqreceiversnameinfo"></span>
                                    </div>
                                    <div class="form-item">
                                        <input type="text" placeholder="Please enter the landmark" name="landmark"
                                            id="landmark" class="cntinp" maxlength="150" />
                                        <span class="info" id="enqreceiverlandmarkinfo"></span>
                                    </div>
                                    <div class="form-item">
                                        <textarea type="text" placeholder="Delivery Address" name="receiver-address"
                                            id="receiver-address" class="cntinptxt"></textarea>
                                        <span class="info" id="enqreceiversaddressinfo"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-item">
                                        <input type="text" placeholder="Mobile Number" name="receiversnumber"
                                            id="receiversnumber" class="cntinp" />
                                        <span class="info" id="enqreceiversnumberinfo"></span>
                                    </div>
                                    <div class="form-item">
                                        <input type="text" placeholder="Alternate Phone Number" name="altnumber"
                                            id="altnumber" class="cntinp" />
                                        <span class="info" id="enqreceiversaltnumberinfo"></span>
                                    </div>

                                    <div class="form-item">
                                        <input type="text" placeholder=" Google Map Link" name="rmaplink" id="rmaplink"
                                            class="cntinp" />
                                        <span class="info" id="enqreceiversmaplinkinfo"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="enquiry-submit-button">
                    <input type="hidden" name="partnername" value="Santosh" />
                    <input type="submit" value="Submit" class="enqsubmit-button" />
                    <p id="loader-icons">Please wait we are capturing your information....</p>
                </div>

            </form>
        </div>
    </div>
</section>
<form action="https://www.planmadi.com/wp-content/themes/planmadi/mail/new-test-mailer.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        
        <label for="event_date">Event Date:</label>
        <input type="date" id="event_date" name="event_date" required><br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" onclick="gotowhatsapp()"  value="Submit">
    </form>
               <h6 class="classes-payment">Pay Now and Book your slot!</h6>
                <div class="payment-division">
<input type="text" id="payment-option" value="upi id"/><img  src="<?php bloginfo('template_directory') ?>/images/copy-to-clipboard.png"/> <br/> 
</div>
<span class="tooltiptext" id="tooltip-text"></span>

<!-- <script>
function gotowhatsapp() {
    
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var eventdate = document.getElementById("event_date").value;

    var formattedPhone = encodeURIComponent(phone);
    var url = "https://wa.me/" + formattedPhone + "?text=" 
    + "Name: " + encodeURIComponent(name) + "%0a"
    + "Phone: " + encodeURIComponent(phone) + "%0a"
    + "Email: " + encodeURIComponent(email) + "%0a"
    + "Event Date: " + encodeURIComponent(eventdate);
    window.open(url, '_blank').focus();
}
</script> -->

<script>

function copyPayment() {
        var copyText = document.getElementById("payment-option").innerText;
        navigator.clipboard.writeText(copyText).then(function() {
            // Show tooltip with the 'Copied' message
            var tooltip = document.getElementById("tooltip-text");
            tooltip.innerText = "Copied!";
            tooltip.classList.add("show");
            
            // Hide tooltip after a short delay
            setTimeout(function() {
                tooltip.classList.remove("show");
                tooltip.innerText = "";
            }, 2000);
        })
    }
  
</script>
<style>
    #payment-option{
        border: none;
        pointer-events: none;

    }
    #payment-option:focus{
        outline: none;
        box-shadow: none;
    }
</style>
<section id="single-gallery">
    <div class="fixed-columns">
        <h3>Our Gallery</h3>
        <div class="gallery-division">
            <?php
            $args = array(
                'post_type' => 'catering',
                'posts_per_page' => 1, // Adjust as needed
                // Add any additional arguments as needed
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $portfolioimages = get_field('catering_gallery');
                    if ($portfolioimages) {
                        echo '<div class="grid-gallery">';
                        foreach ($portfolioimages as $portfolioimage) {
                            echo '<div class="grid-item-gallery"><img src="' . esc_url($portfolioimage['url']) . '" /></div>';
                        }
                        echo '</div>';
                    }
                }
                wp_reset_postdata();
            } else {
                echo '<p>No catering posts found.</p>';
            }
            ?>
        </div>
    </div>
</section>



<section id="stats">
    <div class="fixed-columns">
        <h4>Explore Our Data Universe</h4>

        <div class="stats-wrapper">
         <div class="active-partners">
          <h5>30+</h5>
          <p>Active Partners</p>
         </div>
         <div class="memories-created">
          <h5>15</h5>
          <p>Memories Created</p>
         </div>
         <div class="cities-offered">
          <h5>9+</h5>
          <p>Cities</p>
         </div>
         <div class="statistics">
          <h5>10+</h5>
          <p> Services Offered</p>
         </div>
         <div class="happy-clients">
          <h5>12+</h5>
          <p>Happy Clients</p>
         </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                <div class="stats-boxes">
                    <h5>30</h5>
                    <p>Active Partners</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                <div class="stats-boxes">
                    <h5>15+</h5>
                    <p>Service Offered</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                <div class="stats-boxes">
                    <h5>15</h5>
                    <p>Memories created</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="reviews">
    <div class="fixed-columns">
        <div class="center-div">
            <h3>Testimonials</h3>
        </div>
        <?php
        $testimonial_args = array(
            'post_type'      => 'reviews', 
            'posts_per_page' => -1, 
        );

        $testimonial_query = new WP_Query($testimonial_args);

        if ($testimonial_query->have_posts()) { ?>
            <div class="testimonial-carousel">
                <?php while ($testimonial_query->have_posts()) {
                    $testimonial_query->the_post();
                    // Get the repeater field data associated with the current review post
                    $testimonial_lists = get_field('reviews');
                    if ($testimonial_lists) {
                        foreach ($testimonial_lists as $testimonial_row) {
                            $testimonial_title = $testimonial_row['name'];
                            $testimonial_content = $testimonial_row['review_content'];
                ?>
                            <div class="testimonial-item">
                                <div class="reviews-cards">
                                    <p>"<?php echo $testimonial_content; ?>"</p>
                                    <h6>-<?php echo $testimonial_title; ?></h6>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
        <?php
            wp_reset_postdata(); // Reset post data
        } ?>
    </div>
</section>

<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png" />Your order details are
    successfully captured.
    Our team will contact you shortly.</div>
<!-- <a href="<?php echo home_url(); ?>/enquiry?q=Makeupartist">Makeup Artist</a>
<a href="<?php echo home_url(); ?>/enquiry?q=Photographer">Photographer</a>
<a href="<?php echo home_url(); ?>/enquiry?q=Catering">Catering</a>
<a href="<?php echo home_url(); ?>/enquiry?q=Baker">Baker</a>
<a href="<?php echo home_url(); ?>/enquiry?q=Decorator">Decorator</a>
<a href="<?php echo home_url(); ?>/enquiry?q=Venue">Venue</a>

<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png" />Your Response was submitted.
    our team will contact you shortly.</div> -->


<!-- catering -->

<section id="catering-main-div">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="catering-hero-section-div">
                    <h1>This is the future of Catering</h1>
                    <p>Revolutionizing office events with a digital touch. From boardroom banquets to casual gatherings,
                        culinary planning is now effortless.</p>
                    <a>Order Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <img
                    src="https://images.pexels.com/photos/3217157/pexels-photo-3217157.jpeg?auto=compress&cs=tinysrgb&w=600" />
            </div>
        </div>
    </div>
</section>

<section id="catering-services">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="catering-service-card">
                    <img src="https://cdn.blastcatering.com/wp-content/uploads/2024/02/Full-Service-Catering.png" />
                    <div class="catering-service-card-content">
                        <h2>Full Service Catering</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quos possimus repellendus
                            libero minima a dicta quod nobis! Voluptatum eveniet nisi soluta aspernatur vitae neque eum
                            sint quibusdam porro deleniti?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="catering-service-card">
                    <img src="https://cdn.blastcatering.com/wp-content/uploads/2024/02/Full-Service-Catering.png" />
                    <div class="catering-service-card-content">
                        <h2>Delivered Catering</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quos possimus repellendus
                            libero minima a dicta quod nobis! Voluptatum eveniet nisi soluta aspernatur vitae neque eum
                            sint quibusdam porro deleniti?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- catering -->


<!-- <section id="premium-partners">
    <div class="fixed-columns">
        <h4>Our premium service collaborators</h4>
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
</section> -->

<!-- offers -->
<!-- <section id="offers">
    <div class="fixed-columns">
        <h4>
            Walkthrough Our Irresistible Deals
        </h4>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 offer-cards">
                <img src="<?php bloginfo('template_directory') ?>/images/premium-partner.png">
                <div class="contents-cards-box">
                    <h5>Get 10% off on booking for at least 3 functions</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 offer-cards">
                <img src="<?php bloginfo('template_directory') ?>/images/premium-partner.png">
                <div class="contents-cards-box">
                    <h5>Get 10% off on booking for at least 3 functions</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 offer-cards">
                <img src="<?php bloginfo('template_directory') ?>/images/premium-partner.png">
                <div class="contents-cards-box">
                    <h5>Get 10% off on booking for at least 3 functions</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 offer-cards">
                <img src="<?php bloginfo('template_directory') ?>/images/premium-partner.png">
                <div class="contents-cards-box">
                    <h5>Get 10% off on booking for at least 3 functions</h5>
                </div>
            </div>
        </div>
        <div class="offers-view-all">
            <a class="offers-all-button">View All</a>
        </div>
    </div>
</section> -->
<!-- offers -->




<section id="catering-menu">
    <div class="fixed-columns">
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


<!-- <section id="faq-section">
    <div class="fixed-columns">
        <div class="faq-columns">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These
                            classes control the overall appearance, as well as the showing and hiding via CSS
                            transitions. You can modify any of this with custom CSS or overriding our default variables.
                            It's also worth noting that just about any HTML can go within the
                            <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until
                            the collapse plugin adds the appropriate classes that we use to style each element. These
                            classes control the overall appearance, as well as the showing and hiding via CSS
                            transitions. You can modify any of this with custom CSS or overriding our default variables.
                            It's also worth noting that just about any HTML can go within the
                            <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These
                            classes control the overall appearance, as well as the showing and hiding via CSS
                            transitions. You can modify any of this with custom CSS or overriding our default variables.
                            It's also worth noting that just about any HTML can go within the
                            <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- Button trigger modal -->
<!-- Button trigger modal -->
<!-- <button id="open-popup-modal" class="btn">Open Model</button>
<div id="popup-modal" class="modal">
    <div class="modal-content animated bounce">
        <a class="modal-close">×</a>
        <h1>Mother's Day Special <span>Get 15% off</span></h1>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                <div class="modal-img">
                    <img src="https://img.freepik.com/free-photo/medium-shot-family-celebratig-with-cake_23-2150280676.jpg?t=st=1715234464~exp=1715238064~hmac=63dd22d99e835eb1081d4301556b4a4f7f1fc46b10a9e712f64177355567782d&w=900"
                        alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                <div class="modal-text">


                    <form id="offers-enquiry" method="post">
                        <div class="form-item">
                            <input type="text" name="namecnt" id="namecnt" class="cntinp" placeholder="Name">
                            <span class="info" id="nameinfo"></span>
                        </div>
                        <div class="form-item">
                            <input type="text" name="emailcnt" id="emailcnt" class="cntinp" placeholder="Email Address">
                            <span class="info" id="emailinfo"></span>
                        </div>
                        <div class="form-item">
                            <input type="text" name="phonecnt" id="phonecnt" class="cntinp" placeholder="Mobile Number">
                            <span class="info" id="numberinfo"></span>
                        </div>
                        <div class="form-item">
                            <textarea type="text" name="msgcnt" id="msgcnt" class="cntinptxt"
                                placeholder="Can you tell us more about your requirement? Eg: Message on cake, Flavour etc..."></textarea>
                            <span class="info" id="more-info"></span>
                        </div>
                        <div class="submit-button">
                            <input type="submit" id="contact-submit" value="Book your Cake" />
                            <p id="loader-icons">Please wait we are capturing your information.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div> -->




<!-- <script>
    var modal = document.getElementById('popup-modal');
    var btn = document.getElementById("open-popup-modal");
    var span = document.getElementsByClassName("modal-close")[0];
    btn.onclick = function () {
        modal.style.display = "block";
    }
    span.onclick = function () {
        modal.style.display = "none";
    }
    window.onload = function () {
        setTimeout(function () {
            modal.style.display = 'block';
        }, 3000);
    }
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script> -->


<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        padding-top: 10px;
        left: 0;
        top: 0;
        width: 100%;

        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        font-family: sans-serif;
    }

    @media(max-width:768px) {
        .modal {
            padding-top: 0px !important;
        }

        .modal-img img {
            margin-bottom: 18px;
        }
    }

    .modal-content {
        background-color: #fff2e0;
        width: 100%;
        padding: 15px;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        max-width: 950px;
        border-radius: 8px;
        margin: auto;
        border-radius: 0px;
        border: 0px solid #fcfcfc;
        padding: 15px;
        -webkit-border-image: url(none) 30 stretch;
        /* Safari 3.1-5 */
        -o-border-image: url(none) 30 stretch;
        /* Opera 11-12.1 */
        border-image: url(none) 30 stretch;
    }

    .modal-content h1 {
        font-size: 55px;
        font-family: 'font-regular';
        font-size: 24px;
        text-align: center;
        color: #000;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .modal-close {

        float: right;
        font-weight: 700;
        color: #a2783a;
        text-decoration: none;
        font-size: 25px;
        margin-top: -10px;
        transition: all .2s;
        cursor: pointer;
        width: auto;
        text-align: end;
    }

    .modal-close:hover {
        color: #3b3b3b;
    }

    .modal-img img {
        width: 100%;
    }

    .modal-text {
        text-align: center;
        color: #ffffff;
    }

    .modal-text h2 {
        font-size: 24px;
        font-weight: 600;
        font-family: Lato;
    }

    .modal-text p {
        font-size: 17px;
        margin-top: -15px;
        margin-bottom: 50px;
        font-family: Lato;
    }







    /* Style the tab content */


    /* Show the active tab */
</style>
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

<script type="text/javascript">
    $(document).ready(function () {

        $('.menu-tab').click(function () {

            $('.menu-hide').toggleClass('show');

            $('.menu-tab').toggleClass('active');

        });

        $('.menuopen.active').click(function () {

            $('.menu-hide').removeClass('show');

            $('.menu-tab').removeClass('active');

        });



        $('.menuholder > ul > li:has( > ul)').addClass('menu-dropdown-iconh');

        $(".menuholder > ul > li").click(function () {

            if ($(window).width() <= 991) {

                if ($($(this).children("ul")).hasClass("exp-dwnrr")) {

                    $($(this).children("ul.exp-dwnrr")).removeClass("exp-dwnrr").slideUp(150);

                    $(this).removeClass("of-dwn");

                }

                else {

                    $('.sidemenu li ul').not($(this).siblings()).removeClass("exp-dwnrr").slideUp(150);
                    $($(this).children("ul")).addClass("exp-dwnrr").slideDown(150);

                    $(this).addClass("of-dwn");
                    $("ul.sidemenu li").not($(this)).removeClass("of-dwn");

                }

            }

        });
    });

</script>
<script>
    $('#upload-doc').change(function () {
        var i = $(this).prev('span.filenm').clone();
        var file = $('#upload-doc')[0].files[0].name;
        $(this).prev('span.filenm').text(file);
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


        $('#txtDate').attr('min', maxDate);
    });
</script>


<!-- JS -->
<!-- <script src="https://realize.be/sites/default/files/chosen.jquery.min_.js.txt"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script> -->
<script>
    // $('#cakeadditionalservice').chosen();
    // $('#caketypeservice').chosen();
    // if ($('.cakeadditionalservice').length > 0) {
    //   $('.cakeadditionalservice').on('touchstart', function(e){
    //     e.stopPropagation(); e.preventDefault();
    //     // Trigger the mousedown event.
    //     $(this).trigger('mousedown');
    //   });
    // }
</script>

<script>
    var cakeTypeMain = document.getElementById('Cake-type');
    var cakeAddonTwo = document.getElementById('cakeadditionalservice');
    var cakeAddOnNumber = document.getElementById('additionalcakenumbers');
    var cakeLook = document.getElementById('cakeformat');
    var cakeSize = document.getElementById('cakesize');
    var fondantCake = document.getElementById('fondant_cake');
    var creampreferred = document.getElementById('creampreferred');
    var tieredCakes = document.getElementById('tier_cake');
    var mainCakeQuantity = document.getElementById('cakequantity');
    var tierCakeInfo = document.getElementById('enqtiercakeinfo');
    var tiercakenumberinfo = document.getElementById('enqtiercakenumberinfo');
    var tierCakeNumberInput = document.getElementById('tiercakenumber');
    var creamPrefInfo = document.getElementById('creampreferredinfo');
    var cakeSizeInfo = document.getElementById('enqcakesizeinfo');
    var addCakeNumberInfo = document.getElementById('additionalcakenumberinfo');
    var addCakeNumInfo = document.getElementById('cakeaddoninfo');
    var cakequantityinfo = document.getElementById('enqcakequantityinfo');
    var cakeAddOn = document.getElementById('multiselect-dropdown');
    cakeTypeMain.addEventListener('change', function () {
        // Check if the selected value is 'other'
        if (cakeTypeMain.value === 'Cake') {
            cakeAddonTwo.classList.add('hidden');
            cakeAddOnNumber.classList.add('hidden');
            tieredCakes.classList.remove('hidden');
            mainCakeQuantity.classList.remove('hidden');
            cakeLook.classList.remove('hidden');
            cakeSize.classList.remove('hidden');
            fondantCake.classList.remove('hidden');
            creampreferred.classList.remove('hidden');
            addCakeNumInfo.classList.add('hidden');
            addCakeNumberInfo.classList.add('hidden');
            cakeSizeInfo.classList.remove('hidden');
            creamPrefInfo.classList.remove('hidden');
            tierCakeInfo.classList.remove('hidden');
            cakequantityinfo.classList.remove('hidden');
            tiercakenumberinfo.classList.remove('hidden');
            cakeAddOn.classList.add('hidden');
        } else if (cakeTypeMain.value === 'Add on cakes') {
            cakeLook.classList.add('hidden');
            cakeSize.classList.add('hidden');
            fondantCake.classList.add('hidden');
            creampreferred.classList.add('hidden');
            cakeAddOnNumber.classList.remove('hidden');
            tieredCakes.classList.add('hidden');
            mainCakeQuantity.classList.add('hidden');
            cakeSizeInfo.classList.add('hidden');
            creamPrefInfo.classList.add('hidden');
            tierCakeInfo.classList.add('hidden');
            addCakeNumInfo.classList.remove('hidden');
            addCakeNumberInfo.classList.remove('hidden');
            cakequantityinfo.classList.add('hidden');
            tiercakenumberinfo.classList.add('hidden');
            tierCakeNumberInput.classList.add('hidden');
            cakeAddonTwo.classList.remove('hidden');
            cakeAddOn.classList.remove('hidden');
        } if (cakeTypeMain.value === 'Cake&addons') {
            cakeLook.classList.remove('hidden');
            cakeSize.classList.remove('hidden');
            fondantCake.classList.remove('hidden');
            creampreferred.classList.remove('hidden');
            cakeAddOnNumber.classList.remove('hidden');
            tieredCakes.classList.remove('hidden');
            mainCakeQuantity.classList.remove('hidden');
            addCakeNumInfo.classList.remove('hidden');
            addCakeNumberInfo.classList.remove('hidden');
            cakequantityinfo.classList.remove('hidden');
            tiercakenumberinfo.classList.remove('hidden');
            cakeAddonTwo.classList.remove('hidden');
            cakeAddOn.classList.remove('hidden');
        }
    });
</script>
<!-- <script>
    $(".premium-cards").slick({
        slidesToShow: 4,
        infinite: true,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: true,
        arrows: true,
        pauseOnHover: true,
        responsive: [

            {

                breakpoint: 1024,

                settings: {

                    slidesToShow: 3,

                    slidesToScroll: 1,

                    infinite: true,

                    dots: true

                }

            },
            {

                breakpoint: 600,

                settings: {

                    slidesToShow: 2,

                    slidesToScroll: 1,

                    infinite: true,

                    dots: true

                }

            },
            {

                breakpoint: 460,

                settings: {

                    slidesToShow: 1,

                    slidesToScroll: 1,

                    infinite: true,

                    dots: true

                }

            },
        ]

    });
</script> -->
<script>
    $(".testimonial-carousel").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
        pauseOnHover: true,
        responsive: [

{

  breakpoint: 800,

  settings: {

    slidesToShow: 2,

    slidesToScroll: 1,

    infinite: true,

    dots: true,

  }

},

{

breakpoint: 600,

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

<script>
    jQuery(document).ready(function (e) {
    jQuery('#loader-icons').hide();

    jQuery("#duplicate-cake-enquiry-form").on('submit', function (e) {
        e.preventDefault();
        var valid;
        valid = validationbakerenquiry();

        if (valid) {
            jQuery('#loader-icons').show();

            jQuery.ajax({
                url: "https://www.planmadi.com/wp-content/themes/planmadi/mail/enquiry-baker.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log('Success:', data);
                    document.getElementById("duplicate-cake-enquiry-form").reset();
                    jQuery('#loader-icons').hide();
                    toastalert();
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
                },
                error: function () { }
            });
        } else {
            // Scroll to the first error message
            var firstError = jQuery('.info:visible').first();
            if (firstError.length) {
                // Scroll smoothly to the first error message
                jQuery('html, body').animate({
                    scrollTop: firstError.offset().top - 100 // Adjust this value as needed
                }, 500);
            }
        }
    });
});

    function validationbakerenquiry() {

        var valid = true;

        jQuery(".info").html('');

        if (!jQuery("#enqnamecnt").val()) {

            jQuery("#enqnameinfo").html("Please enter a Name");

            jQuery("#enqnamecnt").css('border-color', 'red');

            valid = false;

        }

        else if (!jQuery("#enqnamecnt").val().match(/^[\s\S]{1,100}$/) || !jQuery("#enqnamecnt").val().match(/^[a-zA-Z\s]+$/)) {
            jQuery("#enqnameinfo").html("Please enter a valid Name (up to 100 characters)");
            jQuery("#enqnamecnt").css('border-color', 'red');
            valid = false;
        }
        else {
            jQuery("#enqnameinfo").html(""); // 
            jQuery("#enqnamecnt").css('border-color', '');
          
        }


        if (!jQuery("#enqphonecnt").val()) {

            jQuery("#enqnumberinfo").html("Please enter mobile number");

            jQuery("#enqphonecnt").css('border-color', 'red');

            valid = false;

        }

        else if (!jQuery("#enqphonecnt").val().match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {

            jQuery("#enqnumberinfo").html("Please enter valid digits");

            jQuery("#enqphonecnt").css('border-color', 'red ');

            valid = false;

        }
        else {
            jQuery("#enqnumberinfo").html(""); // 
            jQuery("#enqphonecnt").css('border-color', '');
           
        }

        if (!jQuery("#enqemailcnt").val()) {

            jQuery("#enqemailinfo").html("Please enter Email");

            jQuery("#enqemailcnt").css('border-color', 'red');

            valid = false;

        }

        else if (!jQuery("#enqemailcnt").val().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {

            jQuery("#enqemailinfo").html("Please enter valid Email");

            jQuery("#enqemailcnt").css('border-color', 'red');

            valid = false;

        }
        else {
            jQuery("#enqemailinfo").html("");
            jQuery("#enqemailcnt").css('border-color', '');
           
        }

        if (!jQuery("#eventtype").val()) {
            jQuery("#enqeventinfo").html("Please select an event type");
            jQuery("#eventtype").css('border-color', 'red');
            valid = false;

        }
        else {
            jQuery("#enqeventinfo").html("");
            jQuery("#eventtype").css('border-color', '');

        }
        if (!jQuery("#enqeventlocation").val()) {

            jQuery("#enqeventlocationinfo").html("Please enter the location");

            jQuery("#enqeventlocation").css('border-color', 'red');

            valid = false;

        }
        else if (!/^[\s\S]{0,400}$/.test(jQuery("#enqeventlocation").val())) {

            jQuery("#enqeventlocationinfo").html("Please enter your information below 400 characters");

            jQuery("#enqeventlocation").css('border-color', 'red');

            valid = false;

        }
        else {
            jQuery("#enqeventlocationinfo").html("");

            jQuery("#enqeventlocation").css('border-color', '');

        }
        if (!jQuery("#txtDate").val()) {

            jQuery("#enqeventdateinfo").html("Please enter the Delivery date");

            jQuery("#txtDate").css('border-color', 'red');

            valid = false;

        }
        else {
            jQuery("#enqeventdateinfo").html("");

            jQuery("#txtDate").css('border-color', '');


        }
        if (!jQuery("#eventappttime").val()) {
            jQuery("#enqeventtime").html("Please enter the time ");
            jQuery("#eventappttime").css('border-color', 'red');
            valid = false;

        }
        else {
            jQuery("#enqeventtime").html("");
            jQuery("#eventappttime").css('border-color', '');

        }
        if (!jQuery("#caketypeservice").val()) {
            jQuery("#enqcaketypeinfo").html("Please select caketype you required");
            jQuery("#caketypeservice").css('border-color', 'red');
            valid = false;

        }
        if (!jQuery("#cakesize").hasClass('hidden')) {
            if (!jQuery("#cakesize").val()) {

                jQuery("#enqcakesizeinfo").html("Please enter the cake size ");

                jQuery("#cakesize").css('border-color', 'red');

                valid = false;

            }
            else {
                jQuery("#enqcakesizeinfo").html("");

                jQuery("#cakesize").css('border-color', '');


            }
        }
        if (!jQuery("#cakequantity").hasClass('hidden')) {
            if (!jQuery("#cakequantity").val()) {

                jQuery("#enqcakequantityinfo").html("Please enter the Cake quantity");

                jQuery("#cakequantity").css('border-color', 'red');

                valid = false;

            }
            else if (!jQuery("#cakequantity").val().match(/^([0-9]|10)$/)) {
                jQuery("#enqcakequantityinfo").html("Please enter a valid quantity (0-10)");
                jQuery("#cakequantity").css('border-color', 'red');
                valid = false;
            }
            else {
                jQuery("#enqcakequantityinfo").html("");

                jQuery("#cakequantity").css('border-color', '');


            }
        }
        if (!jQuery("#enqtotalpeople").val()) {

            jQuery("#enqtotalpeopleinfo").html("Please enter the total number of guests ");

            jQuery("#enqtotalpeople").css('border-color', 'red');

            valid = false;

        }
        else if (!/^\d{1,3}$/.test(jQuery("#enqtotalpeople").val())) {
            jQuery("#enqtotalpeopleinfo").html("Please enter up to 3 digit numbers only");
            jQuery("#enqtotalpeople").css('border-color', 'red');
            valid = false;
        }
        else {
            jQuery("#enqtotalpeopleinfo").html("");

            jQuery("#enqtotalpeople").css('border-color', '');


        }
        if (!jQuery("#cakebudget").val()) {
            jQuery("#enqcakebudgetinfo").html("Please select your budget");
            jQuery("#cakebudget").css('border-color', 'red');
            valid = false;

        }
        else {
            jQuery("#enqcakebudgetinfo").html("");
            jQuery("#cakebudget").css('border-color', '');
        }

        if (!jQuery("#tier_cake").hasClass('hidden')) {
            if (!jQuery("#tier_cake").val()) {
                jQuery("#enqtiercakeinfo").html("Please select for tier cakes");
                jQuery("#tier_cake").css('border-color', 'red');


            }
            else {
                jQuery("#enqtiercakeinfo").html("");
                jQuery("#tier_cake").css('border-color', '');

            }
        }
        if (!jQuery("#tiercakenumber").hasClass('hidden')) {
            if (!jQuery("#tiercakenumber").val()) {
                jQuery("#enqtiercakenumberinfo").html("Please select no of tier cakes");
                jQuery("#tiercakenumber").css('border-color', 'red');
                valid = false;

            }
            else {
                jQuery("#enqtiercakenumberinfo").html("");
                jQuery("#tiercakenumber").css('border-color', '');

            }
        }
        if (!$('input[name="surprise_cake"]:checked').val()) {

            $("#enqsurprisebakinginfo").html("Please select an option");
            valid = false;
        } else {

            $("#enqsurprisebakinginfo").html("");
        }

        if (!jQuery("#cakemessage").val()) {

            jQuery("#cakemessageinfo").html("Please enter the name on the cake ");

            jQuery("#cakemessage").css('border-color', 'red');

            valid = false;

        }
        else if (!/^[\s\S]{0,100}$/.test(jQuery("#cakemessage").val())) {

            jQuery("#cakemessageinfo").html("Please enter your information below 100 characters");

            jQuery("#cakemessage").css('border-color', 'red');

            valid = false;

        }
        else {
            jQuery("#cakemessageinfo").html("");

            jQuery("#cakemessage").css('border-color', '');


        }
        if (!jQuery("#flavor-cake").val()) {

            jQuery("#enqflavorinfo").html("Please enter the flavor for the cake");

            jQuery("#flavor-cake").css('border-color', 'red');

            valid = false;

        }
        else if (!/^[\s\S]{0,150}$/.test(jQuery("#flavor-cake").val())) {

            jQuery("#enqflavorinfo").html("Please enter your information below 150 characters");

            jQuery("#flavor-cake").css('border-color', 'red');

            valid = false;

        }
        else {
            jQuery("#enqflavorinfo").html("");

            jQuery("#flavor-cake").css('border-color', '');


        }
        if (!jQuery("#creampreferred").hasClass('hidden')) {
            if (!jQuery("#creampreferred").val()) {

                jQuery("#creampreferredinfo").html("Please select the cream required on cake");

                jQuery("#creampreferred").css('border-color', 'red');

                valid = false;

            }
            else {
                jQuery("#creampreferredinfo").html("");

                jQuery("#creampreferred").css('border-color', '');


            }
        }
        if (!jQuery("#cakeadditionalservice").hasClass('hidden')) {
            if (!jQuery("#cakeadditionalservice").val()) {

                jQuery("#cakeaddoninfo").html("Please select your requirements");

                jQuery(".multiSelect_dropdown").css('border-color', 'red');

                valid = false;

            }
            else {
                jQuery("#cakeaddoninfo").html("");

                jQuery(".multiSelect_dropdown").css('border-color', '');


            }
        }
        if (!jQuery("#additionalcakenumbers").hasClass('hidden')) {
            if (!jQuery("#additionalcakenumbers").val()) {

                jQuery("#additionalcakenumberinfo").html("Please enter your requirement details");

                jQuery("#additionalcakenumbers").css('border-color', 'red');

                valid = false;

            }
            else if (!/^[\s\S]{0,600}$/.test(jQuery("#additionalcakenumbers").val())) {

                jQuery("#additionalcakenumberinfo").html("Please enter your information below 600 characters");

                jQuery("#additionalcakenumbers").css('border-color', 'red');

                valid = false;

            }
            else {
                jQuery("#additionalcakenumberinfo").html("");
                jQuery("#additionalcakenumbers").css('border-color', '');

            }
        }
        if (!jQuery("#enqbakeinstructions").val()) {

            jQuery("#enqbakeinstructionsinfo").html("Please enter the required information");

            jQuery("#enqbakeinstructions").css('border-color', 'red');

            valid = false;

        }
        else if (!/^[\s\S]{0,600}$/.test(jQuery("#enqbakeinstructions").val())) {

            jQuery("#enqbakeinstructionsinfo").html("Please enter your information below 600 characters");

            jQuery("#enqbakeinstructions").css('border-color', 'red');



        }
        else {
            jQuery("#enqbakeinstructionsinfo").html("");

            jQuery("#enqbakeinstructions").css('border-color', '');
        }
        if (!jQuery("#Cake-type").val()) {

            jQuery("#enqcakemaintypeinfo").html("Please select an option");

            jQuery("#Cake-type").css('border-color', 'red');

            valid = false;

        }
        else {
            jQuery("#enqcakemaintypeinfo").html("");

            jQuery("#Cake-type").css('border-color', '');


        }
        // if(!jQuery("#gmaplink").val()) {

        // jQuery("#enqeventurllocationinfo").html("Please enter the required information");

        // jQuery("#gmaplink").css('border-color','red');

        // valid = false;

        // }
        // if(!jQuery("#landmarklocation").val()) {

        // jQuery("#enqeventlandmarklocationinfo").html("Please enter the required information");

        // jQuery("#landmarklocation").css('border-color','red');

        // valid = false;

        // }
        // if(!jQuery("#cakeformat").val()) {

        // jQuery("#enqcakelookinfo").html("Please enter the required information");

        // jQuery("#cakeformat").css('border-color','red');

        // valid = false;

        // }
        // if (!cakeLookOthers.classList.contains('hidden')) {
        //       // Perform validation only if visible
        //       if (!document.getElementById('cakelookothers').value.trim()) {

        //           document.getElementById('enqcakelookotherinfo').innerHTML = "Please provide additional information";
        //           document.getElementById('cakelookothers').style.borderColor = 'red';
        //           valid = false;
        //       } else {
        //           // If eventtypeothers is not empty, clear error message
        //           document.getElementById('enqcakelookotherinfo').innerHTML = "";
        //           document.getElementById('cakelookothers').style.borderColor = '';
        //       }
        //   }
        // if (!tierCakeNumberInput.classList.contains('hidden')) {
        //     // Perform validation only if visible
        //     if (!document.getElementById('tiercakenumber').value.trim()) {

        //         document.getElementById('enqtiercakenumberinfo').innerHTML = "Please provide additional information";
        //         document.getElementById('tiercakenumber').style.borderColor = 'red';
        //         valid = false;
        //     } else {
        //         // If eventtypeothers is not empty, clear error message
        //         document.getElementById('enqtiercakenumberinfo').innerHTML = "";
        //         document.getElementById('tiercakenumber').style.borderColor = '';
        //     }
        // }
        if (!surprisecakegift.classList.contains('hidden')) {

            // Perform validation only if visible
            if (!document.getElementById('receiversname').value.trim()) {

                document.getElementById('enqreceiversnameinfo').innerHTML = "Please enter receviers name";
                document.getElementById('receiversname').style.borderColor = 'red';
                valid = false;
            }
            else{
                document.getElementById('enqreceiversnameinfo').innerHTML = ""
                document.getElementById('receiversname').style.borderColor = '';
            }

            if (!document.getElementById('receiversnumber').value.trim()) {

                document.getElementById('enqreceiversnumberinfo').innerHTML = "Please enter receviers number";
                document.getElementById('receiversnumber').style.borderColor = 'red';
                valid = false;
            }

           
            else if (!document.getElementById('receiversnumber').value.match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {

                document.getElementById('enqreceiversnumberinfo').innerHTML = "Please enter valid digits";
                document.getElementById('receiversnumber').style.borderColor = 'red';
                valid = false;
            }
            else{
                document.getElementById('enqreceiversnumberinfo').innerHTML = ""
                document.getElementById('receiversnumber').style.borderColor = '';
            }

            //   if (!document.getElementById('landmark').value.trim()) {

            //       document.getElementById('enqreceiverlandmarkinfo').innerHTML = "Please provide receviers location landmark";
            //       document.getElementById('landmark').style.borderColor = 'red';
            //       valid = false;
            //   } 
            if (!document.getElementById('altnumber').value.trim()) {

                document.getElementById('enqreceiversaltnumberinfo').innerHTML = "Please enter receviers alternate number";
                document.getElementById('altnumber').style.borderColor = 'red';
                valid = false;
            }
           
           
           else if (!document.getElementById('altnumber').value.match(/^(\+\d{1,3}[- ]?)?\d{10}$/)) {

                document.getElementById('enqreceiversaltnumberinfo').innerHTML = "Please enter valid digits";
                document.getElementById('altnumber').style.borderColor = 'red';
                valid = false;
            }
            else{
                document.getElementById('enqreceiversaltnumberinfo').innerHTML = ""
                document.getElementById('altnumber').style.borderColor = '';
            }
            if (!document.getElementById('receiver-address').value.trim()) {
                document.getElementById('enqreceiversaddressinfo').innerHTML = "Please enter receviers address";
                document.getElementById('receiver-address').style.borderColor = 'red';
                valid = false;
            }
            // else here error
            else{
                document.getElementById('enqreceiversaddressinfo').innerHTML = ""
                document.getElementById('receiver-address').style.borderColor = '';
            }
            // else here error
           
           

        }
        return valid;
    }


</script>

<!-- <script>
      var cakeLook = document.getElementById('cakeformat');
    var cakeLookOthers = document.getElementById('cakelookothers');
    cakeLook.addEventListener('change', function() {
        // Check if the selected value is 'other'
        if (cakeLook.value === 'Others') {
            // If 'other' is selected, show the additional input box
            cakeLookOthers.classList.remove('hidden');
        } else {
            // If any other option is selected, hide the additional input box
            cakeLookOthers.classList.add('hidden');
        }
    });
</script>
<script>
    var tierCakeYes = document.getElementById('yes');
var tierCakeNo = document.getElementById('no');

// Select the hidden div for entering the number of tiers
var tierCakeNumberInput = document.getElementById('tiercakenumber');

// Function to toggle visibility of input based on selected value
function toggleTierCakeNumberInput() {
    // Check if "Yes" is selected
    if (tierCakeYes.checked) {
        // If "Yes" is selected, show the input for entering the number of tiers
        tierCakeNumberInput.classList.remove('hidden');
    } else {
        // If "No" is selected or neither option is selected, hide the input for entering the number of tiers
        tierCakeNumberInput.classList.add('hidden');
    }
}

// Add event listeners to the radio buttons
tierCakeYes.addEventListener('change', toggleTierCakeNumberInput);
tierCakeNo.addEventListener('change', toggleTierCakeNumberInput);

// Call the function initially to set the initial visibility based on the default selected value
toggleTierCakeNumberInput();
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var yesRadio = document.getElementById('orderyes');
        var noRadio = document.getElementById('orderno');
        var surpriseDiv = document.getElementById('surprisecakegift');

        function toggleSurpriseDiv() {
            if (yesRadio.checked) {
                surpriseDiv.classList.remove('hidden');
            } else {
                surpriseDiv.classList.add('hidden');
            }
        }

        yesRadio.addEventListener('change', toggleSurpriseDiv);
        noRadio.addEventListener('change', toggleSurpriseDiv);

        // Initial check
        toggleSurpriseDiv();
    });


</script> -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
        <g stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </g>
    </symbol>
</svg>
<script>


    function changeColor(e) {
        var color = e.value;

    }
</script>
<script>
    var caketiers = document.getElementById('tier_cake');
    var caketiernumbers = document.getElementById('tiercakenumber');
    caketiers.addEventListener('change', function () {
        // Check if the selected value is 'other'
        if (caketiers.value === 'Yes') {
            // If 'other' is selected, show the additional input box
            caketiernumbers.classList.remove('hidden');
        } else {
            // If any other option is selected, hide the additional input box
            caketiernumbers.classList.add('hidden');
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var yesRadio = document.getElementById('orderyes');
        var noRadio = document.getElementById('orderno');
        var surpriseDiv = document.getElementById('surprisecakegift');

        function toggleSurpriseDiv() {
            if (yesRadio.checked) {
                surpriseDiv.classList.remove('hidden');
            } else {
                surpriseDiv.classList.add('hidden');
            }
        }

        yesRadio.addEventListener('change', toggleSurpriseDiv);
        noRadio.addEventListener('change', toggleSurpriseDiv);

        // Initial check
        toggleSurpriseDiv();
    });


</script>
<style>
    .multiSelect {
        width: 100%;
        position: relative;
    }

    .multiSelect *,
    .multiSelect *::before,
    .multiSelect *::after {
        box-sizing: border-box;
    }

    .multiSelect_dropdown {
        font-size: 14px;
        min-height: 35px;
        line-height: 35px;
        border-radius: 4px;
        box-shadow: none;
        width: 100%;
        color: #0606069e;
        background-color: transparent;
        border: 1px solid #0606069e;
        margin-bottom: 25px;
        height: 46px;
        font-family: 'font-regular';
        padding: 0px 8px;
        border-radius: 13px;
        font-size: 14px;
        cursor: pointer;
    }

    .multiSelect_dropdown.-hasValue {
        padding: 5px 30px 5px 5px;
        cursor: default;
        height: auto;
    }

  

    .multiSelect_arrow::before,
    .multiSelect_arrow::after {
        content: '';
        position: absolute;
        display: block;
        width: 2px;
        height: 8px;
        border-radius: 20px;
        border-bottom: 8px solid #99A3BA;
        top: 40%;
        transition: all .15s ease;
    }

    .multiSelect_arrow::before {
        right: 18px;
        -webkit-transform: rotate(-50deg);
        transform: rotate(-50deg);
    }

    .multiSelect_arrow::after {
        right: 13px;
        -webkit-transform: rotate(50deg);
        transform: rotate(50deg);
    }

    .multiSelect_list {
        margin: 0;
        margin-bottom: 25px;
        padding: 0;
        list-style: none;
        opacity: 0;
        visibility: hidden;
        position: absolute;
        max-height: calc(10 * 31px);
        top: 28px;
        left: 0;
        z-index: 9999;
        right: 0;
        background: #fff;
        border-radius: 4px;
        overflow-x: hidden;
        overflow-y: auto;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        transition: opacity 0.1s ease, visibility 0.1s ease, -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
        transition: opacity 0.1s ease, visibility 0.1s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
        transition: opacity 0.1s ease, visibility 0.1s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32), -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
        -webkit-transform: scale(0.8) translate(0, 4px);
        transform: scale(0.8) translate(0, 4px);
        border: 1px solid #d9dbde;
        box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.12);
    }

    .multiSelect_option {
        margin: 0;
        padding: 0;
        opacity: 0;
        -webkit-transform: translate(6px, 0);
        transform: translate(6px, 0);
        transition: all .15s ease;
    }

    .multiSelect_option.-selected {
        display: none;
    }

    .multiSelect_option:hover .multiSelect_text {
        color: #fff;
        background: #4d84fe;
    }

    .multiSelect_text {
        cursor: pointer;
        display: block;
        padding: 5px 13px;
        color: #525c67;
        font-size: 14px;
        text-decoration: none;
        outline: none;
        position: relative;
        transition: all .15s ease;
        font-family: 'font-regular';
        color: #0606069e;
    }

    .multiSelect_list.-open {
        opacity: 1;
        visibility: visible;
        -webkit-transform: scale(1) translate(0, 12px);
        transform: scale(1) translate(0, 12px);
        transition: opacity 0.15s ease, visibility 0.15s ease, -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
        transition: opacity 0.15s ease, visibility 0.15s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
        transition: opacity 0.15s ease, visibility 0.15s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32), -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
    }

    .multiSelect_list.-open+.multiSelect_arrow::before {
        -webkit-transform: rotate(-130deg);
        transform: rotate(-130deg);
    }

    .multiSelect_list.-open+.multiSelect_arrow::after {
        -webkit-transform: rotate(130deg);
        transform: rotate(130deg);
    }

    .multiSelect_list.-open .multiSelect_option {
        opacity: 1;
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0);
    }

    .multiSelect_list.-open .multiSelect_option:nth-child(1) {
        transition-delay: 10ms;
    }

    .multiSelect_list.-open .multiSelect_option:nth-child(2) {
        transition-delay: 20ms;
    }

    .multiSelect_list.-open .multiSelect_option:nth-child(3) {
        transition-delay: 30ms;
    }

    .multiSelect_list.-open .multiSelect_option:nth-child(4) {
        transition-delay: 40ms;
    }

    .multiSelect_list.-open .multiSelect_option:nth-child(5) {
        transition-delay: 50ms;
    }

    .multiSelect_list.-open .multiSelect_option:nth-child(6) {
        transition-delay: 60ms;
    }

    .multiSelect_list.-open .multiSelect_option:nth-child(7) {
        transition-delay: 70ms;
    }

    .multiSelect_list.-open .multiSelect_option:nth-child(8) {
        transition-delay: 80ms;
    }

    .multiSelect_list.-open .multiSelect_option:nth-child(9) {
        transition-delay: 90ms;
    }

    .multiSelect_list.-open .multiSelect_option:nth-child(10) {
        transition-delay: 100ms;
    }

    .multiSelect_choice {
        background: rgb(255 247 235);
        color: #000;
        padding: 4px 8px;
        line-height: 17px;
        margin: 5px;
        display: inline-block;
        font-size: 13px;
        border-radius: 30px;
        cursor: pointer;
        font-weight: 500;
    }

    .multiSelect_deselect {
        width: 12px;
        height: 12px;
        display: inline-block;
        stroke: #b2bac3;
        stroke-width: 4px;
        margin-top: -1px;
        margin-left: 2px;
        vertical-align: middle;
    }

    .multiSelect_choice:hover .multiSelect_deselect {
        stroke: #a1a8b1;
    }

    .multiSelect_noselections {
        text-align: center;
        padding: 7px;
        color: #b2bac3;
        font-weight: 450;
        margin: 0;
    }

    .multiSelect_placeholder {
        position: absolute;
        left: 5px;
        font-size: 14px;
        top: 8px;
        padding: 0 4px;
        color: #0606069e;
        font-family: 'font-regular';

    }

    .multiSelect_dropdown.-open+.multiSelect_placeholder,
    .multiSelect_dropdown.-open.-hasValue+.multiSelect_placeholder {
        top: -11px;
        left: 17px;
        color: #4073FF;
        font-size: 13px;
        display: none;
    }

    .multiSelect_dropdown.-hasValue+.multiSelect_placeholder {
        top: -11px;
        left: 17px;
        color: #6e7277;
        font-size: 13px;
        display: none;
      
    }
</style>
<script>
    jQuery(function () {
        jQuery('.multiSelect').each(function (e) {
            var self = jQuery(this);
            var field = self.find('.cakeaddons');
            var fieldOption = field.find('option');
            var placeholder = field.attr('data-placeholder');

            field.hide().after(`<div class="multiSelect_dropdown" id="mulitiselect_dropdown"></div>
                        <span class="multiSelect_placeholder">` + placeholder + `</span>
                        <ul class="multiSelect_list"></ul>
                        <span class="multiSelect_arrow"></span>`);

            fieldOption.each(function (e) {
                jQuery('.multiSelect_list').append(`<li class="multiSelect_option" data-value="` + jQuery(this).val() + `">
                                            <a class="multiSelect_text">`+ jQuery(this).text() + `</a>
                                          </li>`);
            });

            var dropdown = self.find('.multiSelect_dropdown');
            var list = self.find('.multiSelect_list');
            var option = self.find('.multiSelect_option');
            var optionText = self.find('.multiSelect_text');

            dropdown.attr('data-multiple', 'true');
            list.css('top', dropdown.height() + 5);

            option.click(function (e) {
                var self = jQuery(this);
                e.stopPropagation();
                self.addClass('-selected');
                field.find('option:contains(' + self.children().text() + ')').prop('selected', true);
                dropdown.append(function (e) {
                    return jQuery('<span class="multiSelect_choice">' + self.children().text() + '<svg class="multiSelect_deselect -iconX"><use href="#iconX"></use></svg></span>').click(function (e) {
                        var self = jQuery(this);
                        e.stopPropagation();
                        self.remove();
                        list.find('.multiSelect_option:contains(' + self.text() + ')').removeClass('-selected');
                        list.css('top', dropdown.height() + 5).find('.multiSelect_noselections').remove();
                        field.find('option:contains(' + self.text() + ')').prop('selected', false);
                        if (dropdown.children(':visible').length === 0) {
                            dropdown.removeClass('-hasValue');
                        }
                    });
                }).addClass('-hasValue');
                list.css('top', dropdown.height() + 5);
                if (!option.not('.-selected').length) {
                    list.append('<h5 class="multiSelect_noselections">No Selections</h5>');
                }
            });

            dropdown.click(function (e) {
                e.stopPropagation();
                e.preventDefault();
                dropdown.toggleClass('-open');
                list.toggleClass('-open').scrollTop(0).css('top', dropdown.height() + 5);
            });

            jQuery(document).on('click touch', function (e) {
                if (dropdown.hasClass('-open')) {
                    dropdown.toggleClass('-open');
                    list.removeClass('-open');
                }
            });
        });
    });
</script>

<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="handle_csv_upload">
    <input type="file" name="csv_file" accept=".csv">
    <input type="submit" value="Upload CSV" name="submit">
</form>
<section>
    <div class="fixed-columns">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
         <h1>Heading text</h1>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas consectetur eum vel neque maiores vero nisi necessitatibus possimus saepe non animi minus sequi iusto, facilis cupiditate. Qui ipsa distinctio perferendis.</p>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 collage-layout">
       <img class="hero-image-collage" src="https://i.ibb.co/LvqQnCc/photo-collage-png-1.png"/>
        
<!-- <div class="hero-grid">
  <div class="hero-grid-item">
    <img src="https://www.planmadi.com/wp-content/uploads/2024/06/Helony-profile-02.png"/>
  </div>
   <div class="hero-grid-item">
    <img src="https://www.planmadi.com/wp-content/uploads/2024/06/Helony-profile-01.png"/>
  </div>
 <div class="hero-grid-item">
    <img src="https://www.planmadi.com/wp-content/uploads/2024/06/Helony-profile-6.png"/>
  </div>
 <div class="hero-grid-item">
    <img src="https://www.planmadi.com/wp-content/uploads/2024/06/Helony-profile-7.png"/>
  </div>
 <div class="hero-grid-item">
    <img src="https://www.planmadi.com/wp-content/uploads/2024/06/Helony-profile-03.png"/>
  </div>
</div> -->
</div>
</div>
</div>
</section>

<style>

    /* .hero-image-collage {
        width: 75%;
        max-height: 100%;
    }
   
    .collage-layout{
        text-align: center;
    }
    .hero-grid-item img{
  width:45%;
} */

/* .hero-grid {
      display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}
.hero-grid .hero-grid-item:first-child {
    grid-column: 1 / 2;
    grid-row: 1;
}

.hero-grid .hero-grid-item:nth-child(3) {
    grid-row: 1 / 3;
  height:100%;
} */




</style>
<?php get_footer(); ?>


