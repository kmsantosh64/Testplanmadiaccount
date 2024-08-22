<?php /* Template Name:contact Page */ ?>

<?php get_header(); ?>
<style>
   #general-contact-form {
      width: 600px;
      margin: 30px auto;
      background: #FFF2E0;
      padding: 20px;
   }

   .cntinp {
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
      
   }
.form-item{
   position: relative;
}
   .info {
      position: absolute;
    color: red;
    bottom: 9px;
    left: 0px;
    font-family: 'font-bold';
    /* font-weight: 500; */
    font-size: 11px;
   }

   .contact-form {
      width: 100%;
      float: left;
   }

   .cntinptxt {
      width: 100%;
      color: #0606069e;
      background-color: transparent;
      border: 1px solid #0606069e;
      margin-bottom: 25px;
      height: 66px;
      font-family: 'font-regular';
      padding: 0px 8px;
      border-radius: 13px;
      font-size: 14px;
   }
   .cntinp:focus-visible{
      outline: 1px solid #0606069e;
   }
   .cntinptxt:focus-visible{
      outline: 1px solid #0606069e;
   }
   .submit-button {
      text-align: center;
   }

   #contact-submit {
      padding: 10px 23px;
      background-color: #A2783A;
      color: #FDD8A1;
      border-radius: 25px;
      border: 1px solid #a2783a;
      font-family: 'font-regular';
   }
   .form-heading{
      text-align: center;
   }
   .form-heading h1{
      color: #A2783A;
      font-size: 30px;
      font-family: 'font-bold';
      margin-bottom: 20px;
   }
   .form-heading p{
      color: #A2783A;
      font-size: 16px;
      font-family: 'font-regular';
      margin-bottom: 12px;
   }
   .loader-icons{
      font-family: 'font-regular';
      font-size: 14px;
      margin: 10px 0px;
      color: #A2783A;
   }
</style>
<div class="contact-form">
   <form id="general-contact-form" method="post">
      <div class="form-heading">
         <h1>Contact Us</h1>
         <p>Please fill the form and our team back to you on your requirement</p>
      </div>
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-item">
               <input type="text" name="namecnt" id="namecnt" class="cntinp" placeholder="Name">
               <span class="info" id="nameinfo"></span>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-item">
               <input type="text" name="emailcnt" id="emailcnt" class="cntinp" placeholder="Email Address">
               <span class="info" id="emailinfo"></span>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-item">
               <input type="text" name="phonecnt" id="phonecnt" class="cntinp" placeholder="Mobile Number">
               <span class="info" id="numberinfo"></span>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-item">
               <select name="service" id="service" class="cntinp">
               <option value="">Please select one option</option>
                  <option value="Birthday Party">Birthday Party</option>
                  <option value="Pre Wedding">Pre Wedding</option>
                  <option value="Engagement">Engagement</option>
                  <option value="Marriage">Marriage</option>
               </select>
               <span class="info" id="serviceinfo"></span>
            </div>
         </div>
         <div class="col-xl-12 col-lg-12 colmd-12 col-sm-12 col-xs-12 col-12">
            <div class="form-item">
               <textarea type="text" name="msgcnt" id="msgcnt" class="cntinptxt"
                  placeholder="Do you want to us to let us know more details?"></textarea>
            </div>
         </div>

      </div>
      <div class="submit-button">
         <input type="submit" id="contact-submit" value="Contact Us" />
         <p id="loader-icons">Please wait we are capturing your information.</p>
      </div>
   </form>
</div>
<?php get_footer(); ?>