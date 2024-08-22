<?php /* Template Name:photographyforms*/ ?>
<?php
// Include the partner header
get_header(); 
$partnerName = $_POST['partnername']; 
?>

<section id="enquiry-form-layouts">
    <div class="fixed-columns">
        <div class="enquiry-forms">
            <form id="photography-form" method="post">
            <div class="form-item">
                   <p id="service-provider" name="service-provider">Your enquiring for <?php echo $partnerName ?>  </p>
                </div>
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                        <div class="enquiry-form-container">
                            <h3>Service Requirements</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-item">
                                        <select name="photoservice[]" id="photoservice" class="cntinp" placeholder="Photography service Required" >
                                            <option value="">Please select the service you are looking for</option>
                                            <option value="Photography">Photography</option>
                                            <option value="Videography">Videography</option>

                                        </select>
                                     

                                        <span class="info" id="enqphotoservicesinfo"></span>
                                    </div>
                          
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                               

                                    <div class="form-item">
                                        <div class="multiSelect" id="multiselect-dropdown">
                                            <select multiple data-placeholder="Deliverables"
                                                class="cntinp photodeliverables" name="photodeliverables[]"
                                                id="photodeliverables">
                                                <option value="Albums">Albums</option>
                                            <option value="Pen Drive">Pen Drive</option>
                                            <option value="CD">CD</option>
                                            <option value="Others">Others</option>
                                            </select>
                                            <span class="info" id="enqphotodeliverablesinfo"></span>
                                        </div>
                                    </div>
                                    

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
                                            <option value="Wedding">Wedding </option>
                                            <option value="Pre Wedding">Pre Wedding</option>
                                            <option value="Maternity">Maternity </option>
                                            <option value="Enagagement">Enagagement </option>
                                            <option value="House Warming">House Warming</option>
                                            <option value="Birthday Party">Birthday Party</option>
                                            <option value="Events">Events</option>
                                </select>
                                <span class="info" id="enqeventinfo"></span>
                            </div>
                            <!-- <div class="form-item">
                            <input  type="text" name="eventtypeothers" id="eventtypeothers" class="cntinp hidden"
                                    placeholder="Please enter your occasion here">
                                <span class="info" id="enqeventtypeotherinfo"></span>
                            </div> -->
                         	
                            <div class="form-item">
                                <input type="text" name="enqeventlocation" id="enqeventlocation" class="cntinp"
                                    placeholder="Event Location">
                                <span class="info" id="enqeventlocationinfo"></span>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-pad">
                                    <div class="form-item">
                                    <label>Event Date</label>
                                        <input type="date" id="txtDate" name="txtstartDate" class="cntinp" placeholder="Event Date" />
                                        <span class="info" id="enqeventdate"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-pad">
                                    <div class="form-item">
                                    <label>Event Time</label>
                                    <input type="time" id="eventappttime" name="eventappttime" class="cntinp">
                                    <span class="info" id="enqeventtime"></span>
                                    </div>
                                </div>
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
                                    <option value="Rs. 25,000 and below">Rs. 25,000 and below</option>
                                    <option value="Rs. 25,000 - 35,000">Rs. 25,000 - 35,000</option>
                                    <option value="Rs. 35,000 and above">Rs. 35,000 and above</option>
                                    
                                </select>
                                <span class="info" id="enqphotobudgetinfo"></span>
                            </div>
                        </div>

                    </div>
                    


                </div>
                <div class="enquiry-submit-button">
                    <input type="hidden" id="partnername" name="partnername" value="<?php echo $partnerName ?>"/>
                 <input type="submit" value="Submit" class="enqsubmit-button"/>
                 <p id="loader-icons">Please wait we are capturing your information....</p>
                </div>
               
            </form>
        </div>
    </div>
</section>
<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png"/>Your Response was submitted. our team will contact you shortly.</div>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
        <g stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </g>
    </symbol>
</svg>
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
<script>
    jQuery(function () {
        jQuery('.multiSelect').each(function (e) {
            var self = jQuery(this);
            var field = self.find('.photodeliverables');
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