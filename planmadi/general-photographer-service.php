<?php /* Template Name:general-photographer-page */ ?>

<?php get_header(); ?>

<section id="partner-enquiry">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="hero-partner-left">
                    <h1>Find the best Photographer for your dream event</h1>
                    <div class="photography-service-layout">
                        <form id="photography-service-enquiry">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-item">
                                        <select name="photoservice[]" id="photoservice" class="cntinp"
                                            placeholder="Photography service Required">
                                            <option value="">Please select the service you are looking for</option>
                                            <option value="Wedding Photography">Wedding Photography</option>
                                            <option value="Pre Wedding Photography">Pre Wedding Photography</option>
                                            <option value="Maternity Photography">Maternity Photography</option>
                                            <option value="Enagagement Photogtography">Enagagement Photogtography
                                            </option>
                                            <option value="House Warming Photogtography">House Warming Photogtography
                                            </option>
                                            <option value="Event Photogtography">Event Photogtography</option>
                                        </select>
                                        <span class="info" id="enqphotoservicesinfo"></span>
                                    </div>
                                    <div class="form-item">
                                <select name="eventtype" id="eventtype" class="cntinp">
                                    <option value="">Occasion</option>
                                    <option value="Birthday Party">Birthday Party</option>
                                    <option value="Marriage">Marriage</option>
                                    <option value="Pre Wedding">Pre Wedding</option>
                                    <option value="Engagement">Engagement</option>   
                                    <option value="Others">Others</option>
                                </select>
                                <span class="info" id="enqeventinfo"></span>
                            </div>
                            <div class="form-item">
                                        <input type="date" id="txtDate" name="txtstartDate" class="cntinp" placeholder="Event Date" />
                                        <span class="info" id="enqeventdate"></span>
                                    </div>
                                    <div class="form-item">
                                <input type="text" name="enqnamecnt" id="enqnamecnt" class="cntinp" placeholder="Name">
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
                                        <select name="photodeliverables[]" id="photodeliverables" class="cntinp"
                                            data-placeholder="Deliverables" multiple="multiple">

                                            <option value="Albums">Albums</option>
                                            <option value="Pen Drive">Pen Drive</option>
                                            <option value="CD">CD</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        <span class="info" id="enqphotodeliverablesinfo"></span>
                                    </div>
                                    <div class="form-item">
                                <input type="text" name="enqeventlocation" id="enqeventlocation" class="cntinp"
                                    placeholder="Event Location">
                                <span class="info" id="enqeventlocationinfo"></span>
                            </div>
                            <div class="form-item">
                                    <input type="time" id="eventappttime" name="eventappttime" class="cntinp">
                                    <span class="info" id="enqeventtime"></span>
                                    </div>
                                    <div class="form-item">
                                <input type="text" name="enqemailcnt" id="enqemailcnt" class="cntinp"
                                    placeholder="Email Address">
                                <span class="info" id="enqemailinfo"></span>
                            </div>
                            <div class="form-item">
                             <textarea class="cntinptxt" id="photographydesc" name="photographydesc" placeholder="Let us know if you want us to know more about your requirement"></textarea>
                            </div>
                                </div>

                            </div>
                            <div class="requirement-submit-button">
                             <input type="submit" class="enqsubmit-button"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
           <img src="https://www.planmadi.com/wp-content/uploads/2024/04/yashu-gowda-works-1.png"/>
            </div>
        </div>
    </div>
</section>
<script>
    // $('#photoservice').chosen();
    $('#photodeliverables').chosen();
</script>
<?php get_footer(); ?>