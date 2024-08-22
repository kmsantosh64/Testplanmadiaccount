<?php /* Template Name:baker offer Page */ ?>

<?php get_header(); ?>
<section id="our-offers">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                <div class="offer-enquires">
                    <h1>Time to Honor Dad: Celebrate Every Dad-licious Moment!</h1>
<p>This Father's Day surprise your Dad. Book your order & get exciting discount.</p>
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
                                placeholder="Can you tell us more about your requirement? Eg: Message on Cake, Flavour etc..."></textarea>
                            <span class="info" id="more-info"></span>
                        </div>
                        <div class="submit-button">
                            <input type="submit" id="contact-submit" value="Order Your Cake" />
                            <p id="loader-icons">Please wait we are capturing your information.</p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <img src="<?php bloginfo('template_directory') ?>/images/fathers-day-special-offers.png" class="offer-image" alt="Father's Day Special"/>
            </div>
        </div>
    </div>
</section>
<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/images/checked.png" />Your order details are successfully captured.
    Our team will contact you shortly.</div>
<?php get_footer(); ?>