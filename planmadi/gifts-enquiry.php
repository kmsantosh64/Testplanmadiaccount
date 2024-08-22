<?php /* Template Name:giftforms*/ ?>

<?php
// Include the partner header
get_header();

$partnerName = $_POST['partnername'];

?>
<section id="enquiry-form-layouts">
    <div class="fixed-columns">
        <div class="enquiry-forms">
            <form id="gift-enquiry-form" method="post">
                <div class="form-item">
                    <p id="service-provider" name="service-provider">Your enquiring for <?php echo $partnerName ?> </p>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                        <div class="enquiry-form-container">
                            <h3>Service Requirements</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-item">
                                        <select name="gifttypeservice" id="gifttypeservice" class="cntinp">
                                            <option value="">Gift Type</option>
                                            <option value="Paper Crafting">Paper Crafting</option>
                                            <option value="Handmade Gifts">Handmade Gifts</option>
                                            <option value="Customised Bride to be Hampers">Customised Bride to be Hampers</option>
                                            <option value="Customised Mom to be Hampers">Customised Mom to be Hampers</option>
                                            <option value="Customised Baby Shower Hampers">Customised Baby Shower Hampers</option>
                                            <option value="Customised Wedding Hampers">Customised Wedding Hampers</option>
                                            <option value="Customised Naming Ceremony Hampers">Customised Naming Ceremony Hampers</option>
                                            <option value="Customised Birthday Hampers">Customised Birthday Hampers</option>
                                            <option value="Photo Collage Frames">Photo Collage Frames</option>
                                            <option value="Scrapbooks">Scrapbooks</option>
                                            <option value="Greetings">Greetings</option>
                                            <option value="Homemade Chocolates">Homemade Chocolates</option>
                                            <option value="Explosion Boxes">Explosion Boxes</option>
                                            <option value="Glass Frames">Glass Frames</option>
                                            <option value="Pop Up Cubes">Pop Up Cubes</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        <span class="info" id="enqgifttypeinfo"></span>
                                    </div>
                                    <!-- <div class="form-item">
                            <input  type="text" name="caketypeothers" id="caketypeothers" class="cntinp hidden"
                                    placeholder="Please enter your requirements here">
                                <span class="info" id="enqcaketypeotherinfo"></span>
                            </div> -->
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-item">
                                        <input type="text" name="enqgiftsquantity" id="enqgiftsquantity" class="cntinp"
                                            placeholder="Quantity">
                                        <span class="info" id="enqgiftsquantityinfo"></span>
                                    </div>
                                    


                                </div>
                                <div class="form-item">
                                    <textarea type="text" name="giftsdesc" id="giftsdesc" class="cntinptxt"
                                    placeholder="Further Requirement Details"></textarea>
                                    </div>
                               
                                
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
                            <!-- <div class="form-item">
                            <input  type="text" name="eventtypeothers" id="eventtypeothers" class="cntinp hidden"
                                    placeholder="Please enter your occasion here">
                                <span class="info" id="enqeventtypeotherinfo"></span>
                            </div> -->

                            <div class="form-item">
                                <input type="text" name="giftdeliverylocation" id="giftdeliverylocation" class="cntinp"
                                    placeholder="Delivery Location">
                                <span class="info" id="giftdeliverylocationinfo"></span>
                            </div>
                            
                                
                                    <div class="form-item">
                                        <input type="date" id="txtDate" name="txtdeliveryDate" class="cntinp"
                                            placeholder="Delivery Expected date" />
                                        <span class="info" id="giftdeliverydateinfo"></span>
                                    </div>

                                
                                
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
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
                        </div>
                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="enquiry-form-container">
                                    <h3>Budget</h3>
                                    <div class="form-item">
                                        <select name="eventbudget" id="eventbudget" class="cntinp">
                                            <option value="">Select a budget</option>
                                            <option value="Rs 2,000 and below">Rs 2,000 and below</option>
                                            <option value="Rs 2,000 - 5,000">Rs 2,000 - 5,000</option>
                                            <option value="Rs 5,000 and above">Rs 5,000 and above</option>

                                        </select>
                                        <span class="info" id="enqgiftbudgetinfo"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="enquiry-form-container" id="uploadimage-form">
                                    <p class="upload-doc-text">Please Upload any reference image if you have in mind</p>
                                    <div class="form-item">
                                        <label for="upload-doc" id="file-upload">Upload Reference image</label>
                                        <div class="uploadimage"> <span class="filenm"></span> <input type="file"
                                                name="upload" id="upload-doc" class="ip-txt"> <span id="lblError"
                                                class="info"></span></div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="enquiry-submit-button">
                    <input type="hidden" name="partnername" value="<?php echo $partnerName ?>" />
                    <input type="submit" value="Submit" class="enqsubmit-button" />
                    <p id="loader-icons">Please wait we are capturing your information....</p>
                </div>

            </form>
        </div>
    </div>
</section>
<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png" />Your Response was submitted.
    our team will contact you shortly.</div>

    <?php get_footer(); ?>