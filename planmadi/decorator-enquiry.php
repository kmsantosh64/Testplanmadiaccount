<?php /* Template Name:decoratorforms*/ ?>


<?php get_header(); 
$partnerName = $_POST["partnername"];
?>

<section id="decorator-enquiry">
    <div class="fixed-columns">
        <div class="enquiry-forms">
            <form id="decorator-enquiry-form" method="post" class="enquiry-form-container">
                <div class="form-item">
                    <p id="service-provider" name="service-provider">Your enquiring for <?php echo $partnerName ?> </p>
                </div>
                <div class="enquiry-form-container">
                    <h3>Service Requirements</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-item">
                                <input type="text" name="ocassion-type" id="ocassion-type" class="cntinp"
                                    placeholder="Occasion" />
                                <span class="info" id="ocassion-info"></span>
                            </div>
                            <div class="form-item">
                            <select class="cntinp " id="decorationtype" name="decorationtype">
                                            <option value="" disabled selected>Please select the decoration type
                                            </option>
                                            <option value="Balloon Decoration">Balloon Decoration </option>
                                            <option value="Flower Decoration">Flower Decoration </option>
                                            <option value="Custom Theme Decoration"> Custom Theme Decoration</option>
                                        </select>
                                        <span class="info" id="decorationtype-info"></span>
                            </div>
                            <div class="form-item">
                             <input type="text" id="themedecorationname" name="themedecorationname" class="cntinp hidden" placeholder="Please enter your preferred theme" />
                            <span class="info" id="themedecorinfo"></span>
                            </div>
                           <div class="row">
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-pad">
                           <div class="form-item">
                                <label>Event Date</label>
                                <input type="date" id="txtDate" name="deliveryDate" class="cntinp"
                                    placeholder="Delivery Date" />
                                <span class="info" id="enqeventdateinfo"></span>
                            </div>
                           </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-pad">
                            <div class="form-item">
                                <label>Event Time</label>
                                <input type="time" id="eventappttime" name="eventdeliverytime" class="cntinp"
                                    placeholder="Delivery Time">
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
                                <input type="text" name="venue" id="venue" class="cntinp" placeholder="Venue" />
                                <span class="info" id="venue-info"></span>
                            </div>
                            <div class="form-item">
                                <input type="text" name="city" id="city" class="cntinp" placeholder="City" />
                                <span class="info" id="city-info"></span>
                            </div>
                            <div class="form-item">
                            <select class="cntinp " id="decorationbudget" name="decoration-budget">
                                            <option value="" disabled selected>Please select your decoration budget
                                            </option>
                                            <option value="Rs. 5000 to Rs. 10,000">Rs. 5000 to Rs. 10,000 </option>
                                            <option value="Rs. 10,000 to 20,000">Rs. 10,000 to Rs. 20,000 </option>
                                            <option value="Rs. 20,000 to Rs. 40,000">Rs. 20,000 to Rs. 40,000</option>
                                            <option value="Rs. 40,000 and Above">Rs. 40,000 and Above</option>
                                        </select>
                                <span class="info" id="decorbudgetinfo"></span>
                            </div>
                            
                            <div class="form-item">
                             <textarea class="cntinptxt" name="decorationmessage" id="decorationmessage" placeholder="Enter your decoration detail requirements"></textarea>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="enquiry-form-container">
                    <h3>Personal Details</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                            <div class="form-item">
                                <input type="text" name="decorname" id="decorname" class="cntinp"
                                    placeholder="Full Name" />
                                <span class="info" id="name-info"></span>
                            </div>
                            <div class="form-item">
                                <input type="text" name="decoremail" id="decoremail" class="cntinp"
                                    placeholder="Email Address" />
                                <span class="info" id="decor-email-info"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                            <div class="form-item">
                                <input type="text" name="decormobilenumber" id="decormobilenumber" class="cntinp"
                                    placeholder="Mobile Number" />
                                <span class="info" id="decornum-info"></span>
                            </div>
                            <div class="form-item">
                            <input type="text" name="decoraltmobilenumber" id="decoraltmobilenumber" class="cntinp"
                                    placeholder=" Alternate Mobile Number" />
                                <span class="info" id="decoraltnum-info"></span>
                            </div>
                            
                        </div>
                        <div class="form-item">
                              <textarea class="cntinptxt" name="infoaddress" id="infoaddress" placeholder="Enter your full address"></textarea>
                            </div>
                    </div>
                </div>
                <div class="enquiry-submit-button">
                    <input type="hidden" name="partnername" value="<?php echo $partnerName ?>" />
                    <input type="submit" value="Submit" class="enqsubmit-button" id="enqcontactsubmit" />
                    <p id="loader-icons">Please wait we are capturing your information....</p>
                </div>
            </form>
        </div>
    </div>
</section>
<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png" />Your order details are
    successfully captured.
    Our team will contact you shortly.</div>
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




        $('#txtDate').attr('min', maxDate);
    });
</script>

<script>
    var decorTheme = document.getElementById('decorationtype');
    var decorThemeName = document.getElementById('themedecorationname');
    decorTheme.addEventListener('change', function () {
        // Check if the selected value is 'other'
        if (decorTheme.value === 'Custom Theme Decoration') {
            // If 'other' is selected, show the additional input box
            decorThemeName.classList.remove('hidden');
        } else {
            // If any other option is selected, hide the additional input box
            decorThemeName.classList.add('hidden');
        }
    });
</script>
<?php get_footer(); ?>