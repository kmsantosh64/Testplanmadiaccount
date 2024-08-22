<?php /* Template Name:contact thankyou */ ?>

<?php get_header(); ?>
<style>
    .contact-thankyou-section{

        text-align: center;
    width: 100%;
    float: left;
    height: 50vh;
    padding: 20px 0px;
    }
    .contact-thankyou-section p{
        font-family: 'font-regular';
        font-size: 16px;
        color: #000;
        margin: 15px 0px;
    }
</style>
<div class="contact-thankyou-section">
<img src="<?php bloginfo('template_directory') ?>/images/checked.png"/>
<p>Thank you for enquiring with us. Our team will review your requirement contact you soon.</p>
</div>
<?php get_footer(); ?>