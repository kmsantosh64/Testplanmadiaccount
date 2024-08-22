<?php /* Template Name:venue enquiry Page */ ?>

<?php get_header(); 
$partnerName = $_POST['partnername'];
?>

<section id="enquiry-form-layouts">
  <div class="fixed-columns">
    <div class="enquiry-forms">
      <form id="venues-enquiry" method="post">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="enquiry-form-container">
              <h3>Booking Details for <?php echo $partnerName ?></h3>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-item">
                    <label>Check in Date</label>
                    <input type="date" id="checkinDate" name="checkinDate" class="cntinp" placeholder=" Checkin Date" />
                    <span class="info" id="enqcheckindateinfo"></span>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-item">
                    <label>Check out Date</label>
                    <input type="date" id="checkoutDate" name="checkoutDate" class="cntinp"
                      placeholder="Checkout Date" />
                    <span class="info" id="enqcheckoutdateinfo"></span>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-item">
                    <input type="number" name="enqadultgroupsize" id="enqadultgroupsize" class="cntinp"
                      placeholder="No of Adults" min="1">
                    <span class="info" id="enqadultgroupsizeinfo"></span>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-item">
                    <input type="number" name="enqchildrengroupsize" id="enqchildrengroupsize" class="cntinp"
                      placeholder="No of Children" min="1">
                    <span class="info" id="enqchildrengroupsizeinfo"></span>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-item">
                    <input type="number" name="roomnumbers" id="roomnumbers" class="cntinp" placeholder="No of rooms"
                      min="1">
                    <span class="info" id="roomnumbersinfo"></span>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-item">
                    <select name="roomtype" id="roomtype" class="cntinp">
                      <option value="">Select Room Type</option>
                      <option value="AC">AC</option>
                      <option value="Non AC">Non AC</option>
                    </select>
                    <span class="info" id="roomtypeinfo"></span>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-item">
                    <div class="multiSelect" id="multiselect-dropdown">
                      <select multiple data-placeholder=" Special Packages (Includes Food + Decoration)"
                        class="cntinp special-package" name="splpackages[]" id="splpackages">
                        <option value="Anniversary Celebration">Anniversary Celebration </option>
                        <option value="Birthday Celebration">Birthday Celebration</option>
                        <option value="Candelight Dinner">Candelight Dinner</option>
                        <option value="Prewedding Photoshoot">Prewedding Photoshoot</option>
                        <option value="Small Events">Small Events</option>
                      </select>
                      
                    </div>
                    

                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-item">
                    <select id="foodoptions" name="foodoptions" class="cntinp">
                      <option value="" disabled selected>Please select your food preference</option>
                      <option value="Vegetarian">Vegetarian</option>
                      <option value="Non-Vegetarian">Non-Vegetarian</option>
                      <option value="Both (Veg & Non-veg)">Both (Veg & Non-Veg)</option>
                    </select>

                  </div>
                </div>

              </div>
            </div>
            <div class="enquiry-form-container">
              <h3>Personal Details</h3>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-item">
                    <input type="text" name="enqnamecnt" id="enqnamecnt" class="cntinp" placeholder="First Name">
                    <span class="info" id="enqnameinfo"></span>
                  </div>
                  <div class="form-item">
                    <input type="text" name="enqphonecnt" id="enqphonecnt" class="cntinp" placeholder="Mobile Number">
                    <span class="info" id="enqnumberinfo"></span>
                  </div>
                  <div class="form-item">
                    <textarea type="text" name="fulladdress" id="fulladdress" class="cntinptxt"
                      placeholder="Please enter your full address"></textarea>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-item">
                    <input type="text" name="enqlastnamecnt" id="enqlastnamecnt" class="cntinp" placeholder="Last Name">
                    <span class="info" id="enqlastnameinfo"></span>
                  </div>
                  <div class="form-item">
                    <input type="text" name="enqemailcnt" id="enqemailcnt" class="cntinp" placeholder="Email Address">
                    <span class="info" id="enqemailinfo"></span>
                  </div>
                  <div class="form-item">
                    <textarea type="text" name="splrequests" id="splrequests" class="cntinptxt"
                      placeholder="Any Special Requests"></textarea>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-submit-button">
          <input type="hidden" id="partnername" name="partnername" value="<?php echo $partnerName ?>" />
          <input type="submit" value="Submit" class="enqsubmit-button" />
          <p id="loader-icons">Please wait we are capturing your information....</p>
        </div>
    </div>
    </form>
  </div>
  </div>
</section>

<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png" />Your Response was submitted.
  our team will contact you shortly.</div>
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


    $('#checkinDate').attr('min', maxDate);
  });
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


    $('#checkoutDate').attr('min', maxDate);
  });
</script>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
        <g stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </g>
    </symbol>
</svg>
<script>
    jQuery(function () {
        jQuery('.multiSelect').each(function (e) {
            var self = jQuery(this);
            var field = self.find('.special-package');
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