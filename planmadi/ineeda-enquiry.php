<?php /* Template Name:i need a page*/ ?>
<?php get_header(); ?>

<section id="order-enquiry">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="enquiry-order-booking">
                    <h1>Effortlessly book services for your events</h1>
                    <form id="order-enquiry-form" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <input type="text" name="enqnamecnt" id="enqnamecnt" class="cntinp"
                                        placeholder="Name">
                                    <span class="info" id="enqnameinfo"></span>
                                </div>
                                <div class="form-item">
                                    <input type="text" name="enqphonecnt" id="enqphonecnt" class="cntinp"
                                        placeholder="Mobile Number">
                                    <span class="info" id="enqnumberinfo"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <input type="text" name="enqemailcnt" id="enqemailcnt" class="cntinp"
                                        placeholder="Email Address">
                                    <span class="info" id="enqemailinfo"></span>
                                </div>
                                <div class="form-item">
                                    <div class="multiSelect" id="multiselect-dropdown">
                                        <select multiple data-placeholder="Select Services" class="cntinp services"
                                            name="generalservices[]" id="generalservices">
                                            <option value="Birthday">Birthday</option>
                                            <option value="Wedding">Wedding</option>
                                            <option value="Engagement">Engagement</option>
                                            <option value="Corporate Events">Corporate Events</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        <span class="info" id="generalservicesinfo"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-item">
                            <textarea type="text" placeholder="Let us know more about your event" name="enquiry-details"
                                            id="enquiry-details" class="cntinptxt"></textarea>
                                        
                            </div>
                            <div class="enquiry-submit-button">
                                <input type="submit" value="Submit" class="enqsubmit-button" id="enqsubmit-button" />
                                <p id="loader-icons">Please wait we are capturing your information....</p>
                            </div>
                            
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
            <img class="enquiry-image" src="<?php bloginfo('template_directory') ?>/images/plan-madi-events.webp"/>
            </div>
        </div>
    </div>
</section>
<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png" />Your enquiry has successfully submitted.
    Our team will contact you shortly.</div>

<script>
    jQuery(function () {
        jQuery('.multiSelect').each(function (e) {
            var self = jQuery(this);
            var field = self.find('.services');
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
                    list.append('<h5 class="multiSelect_noselections"></h5>');
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
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
        <g stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </g>
    </symbol>
</svg>

<script>

const select = document.getElementById("generalservices");

select.addEventListener("change", function() {
  const selectedOptions = Array.from(this.selectedOptions).map(option => option.textContent);
  if (selectedOptions.length > 2) {
    this.nextElementSibling.textContent = `${selectedOptions.slice(0, 2).join(", ")}...`;
  } else {
    this.nextElementSibling.textContent = selectedOptions.join(", ");
  }
});
</script>
<?php get_footer(); ?>