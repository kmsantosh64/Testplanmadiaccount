<?php /* Template Name:bakerforms*/
if (!session_id()) {
    session_start();
}

?>

<?php
// Include the partner header
get_header();

$partnerName = $_POST["partnername"];
// Retrieving data from session
$itemsToPass = isset($_SESSION["itemsToPass"]) ? $_SESSION["itemsToPass"] : [];
session_start();
$cakeItemsToPass = isset($_SESSION["cakeItemsToPass"])
    ? $_SESSION["cakeItemsToPass"]
    : [];
session_start();
$creamItemsToPass = isset($_SESSION["creamItemsToPass"])
    ? $_SESSION["creamItemsToPass"]
    : [];

?>
<section id="enquiry-form-layouts" onload="setDateInputFormat()">
    <div class="fixed-columns">
        <div class="enquiry-forms">
            <form id="cake-enquiry-form" method="post">
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
                                            <?php if (
                                                !empty($cakeItemsToPass)
                                            ): ?>
                                                <?php foreach ($cakeItemsToPass as $cakeitems): ?>
                                                    <option value="<?php echo htmlspecialchars(
                                                        $cakeitems
                                                    ); ?>"><?php echo htmlspecialchars($cakeitems); ?></option>
                                                    <?php session_destroy(); ?>
                                                <?php endforeach; ?>
                                            <?php else: ?>

                                                <option value="Egg">Egg</option>
                                                <option value="Eggless">Eggless</option>
                                                <option value="Vegan">Vegan</option>
                                                <option value="Sugarfree">Sugarfree</option>

                                            <?php endif; ?>
                                        </select>
                                        <span class="info" id="enqcaketypeinfo"></span>
                                    </div>
                                    <!-- <div class="form-item">
                            <input  type="text" name="caketypeothers" id="caketypeothers" class="cntinp hidden"
                                    placeholder="Please enter your cake type">
                                <span class="info" id="enqcaketypeotherinfo"></span>
                            </div> -->

                                    <div class="form-item">
                                        <select name="cakeformat" id="cakeformat" class="cntinp">
                                            <option value="" disabled selected>Please select how your cake should look
                                                like </option>
                                            <option value="Tall Cake">Tall Cake</option>
                                            <option value="Wide Cake">Wide Cake</option>


                                        </select>
                                        <span class="info" id="enqcakelookinfo"></span>
                                    </div>
                                    <!-- <div class="form-item">
                            <input  type="text" name="cakelookothers" id="cakelookothers" class="cntinp hidden"
                                    placeholder="Please enter your cake look">
                                <span class="info" id="enqcakelookotherinfo"></span>
                            </div> -->
                                    <div class="form-item">
                                        <select class="cntinp" name="cakesize" id="cakesize">
                                            <option value="" disabled selected>Please select the cake size in Kgs
                                            </option>

                                            <option value="1 Kg">1 Kg</option>
                                            <option value="1.5 Kg">1.5 Kg</option>
                                            <option value="2 Kg">2 Kg</option>
                                            <option value="3+ Kg">3+ Kg</option>

                                        </select>
                                        <span class="info" id="enqcakesizeinfo"></span>
                                        <!-- <input type="text" name="cakesize" id="cakesize" class="cntinp"
                                            placeholder="Cake Size (in Kgs)" /> -->
                                        <span class="info" id="enqcakesizeinfo"></span>
                                    </div>
                                    <div class="form-item">
                                        <!-- <div class="event-radio-boxes">
                                            <p>Is it tier cake?</p>
                                            <input type="radio" id="yes" name="tier_cake" class="tier_cake"
                                                value="Yes">
                                            <label for="Yes">Yes</label>
                                            <input type="radio" id="no" name="tier_cake" class="tier_cake"
                                                value="No">
                                            <label for="No">No</label>
                                            <span class="info" id="enqtieredcakeinfo"></span>
                                        </div> -->
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
                                        <!-- <input  type="text" name="tiercakenumber" id="tiercakenumber" class="cntinp hidden"
                                    placeholder="Please enter how many tiers required">
                                <span class="info" id="enqtiercakenumberinfo"></span> -->
                                    </div>
                                    <!-- <div class="form-item">
                                        <select name="cakeadditionalservice[]" id="cakeadditionalservice" class="cntinp cakeaddons"
                                            data-placeholder="Additional Cakes" multiple>
                                            <option value="Cupcakes">Cupcakes</option>
                                            <option value="Cake Pops">Cake Pops</option>
                                            <option value="Brownies">Brownies</option>
                                            <option value="Doughnuts">Doughnuts</option>
                                        </select>
                                      
                                        <span class="info" id="cakeaddoninfo"></span>
                                    </div> -->
                                    <div class="form-item">
                                        <div class="multiSelect" id="multiselect-dropdown">
                                            <select multiple data-placeholder=" Select additional cakes.."
                                                class="cntinp cakeaddons" name="cakeadditionalservice[]"
                                                id="cakeadditionalservice">
                                                <?php if (
                                                    !empty($itemsToPass)
                                                ): ?>
                                                    <?php foreach ($itemsToPass as $item): ?>
                                                        <option value="<?php echo htmlspecialchars(
                                                            $item
                                                        ); ?>"><?php echo htmlspecialchars($item); ?></option>
                                                        <?php session_destroy(); ?>
                                                    <?php endforeach; ?>

                                                <?php else: ?>

                                                    <option value="Cupcakes">Cupcakes</option>
                                                    <option value="Cakepops">Cakepops</option>
                                                    <option value="Brownies">Brownies</option>
                                                    <option value="Donuts">Donuts</option>
                                                    <option value="Cakesicles">Cakesicles</option>
                                                <?php endif; ?>
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
                                            <option value="" disabled selected>Please select your cream preference
                                            </option>
                                            <?php if (!empty($creamItemsToPass)): ?>
                                                <?php foreach ($creamItemsToPass as $creamitems): ?>
                                                    <option value="<?php echo htmlspecialchars(
                                                        $creamitems
                                                    ); ?>"><?php echo htmlspecialchars($creamitems); ?></option>
                                                    <?php session_destroy(); ?>
                                                <?php endforeach; ?>
                                            <?php else: ?>

                                                <option value="Whipped Cream">Whipped Cream</option>
                                                <option value="Butter Cream">Butter Cream</option>
                                                <option value="Not Sure">Not Sure</option>

                                            <?php endif; ?>

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
                                            <option value="Rs.500 to Rs.1000">Rs. 500 to Rs. 1000</option>
                                            <option value="Rs. 1000 to Rs. 2000">Rs. 1000 to Rs. 2000</option>
                                            <option value="Rs. 2000 to Rs. 3000">Rs. 2000 to Rs. 3000</option>
                                            <option value="Rs. 3000 to Rs. 4000">Rs. 3000 to Rs. 4000</option>
                                            <option value="Rs. 4000 and Above">Rs. 4000 and Above</option>
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
                    <input type="hidden" name="partnername" value="<?php echo $partnerName ?>" />
                    <input type="submit" value="Submit" class="enqsubmit-button" />
                    <p id="loader-icons">Please wait we are capturing your information....</p>
                </div>

            </form>
        </div>
    </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
        <g stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </g>
    </symbol>
</svg>
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

        // or instead:
        // var maxDate = dtToday.toISOString().substr(0, 10);


        $('#txtDate').attr('min', maxDate);
    });
</script>
<!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css"> -->

<!-- JS -->
<!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script> -->
<script>
    // $('#cakeadditionalservice').chosen();
    // $('#caketypeservice').chosen();
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
<!--  -->
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

<script>
    function formatDate(date) {
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        const day = date.getDate();
        const month = months[date.getMonth()];
        const year = date.getFullYear();
        return `${day}-${month}-${year}`;
    }

    // Function to set date input value in desired format
    function setDateInputFormat() {
        const dateInput = document.getElementById('txtDate');
        const currentDate = new Date();
        dateInput.value = formatDate(currentDate);
    }
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
<?php get_footer(); ?>