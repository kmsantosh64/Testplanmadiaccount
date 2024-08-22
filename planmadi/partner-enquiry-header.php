<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan ಮಾಡಿ</title>
    <style>
        @font-face {
            font-family: font-bold;
            src: url('https://www.planmadi.com/wp-content/themes/planmadi/fonts/sansation.bold.ttf');
            font-display: swap
        }

        @font-face {
            font-family: font-regular;
            src: url('https://www.planmadi.com/wp-content/themes/planmadi/fonts/sansation.regular.ttf');
            font-display: swap
        }

        .why-us-contents .service-mention img {
            transform: scaleX(-1)
        }

        .why-us-contents .service-mention {
            text-align: justify
        }

        @media (max-width:575px) {
            .our-service-contents h3 {
                font-size: 22px
            }
        }

        h3 {
            margin-top: 0;
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
            color: var(--bs-heading-color)
        }

        .menuholder ul {
            list-style: none
        }

        * {
            box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        #hero-section,
        #our-services,
        .headmenu-cover {
            background-color: #fff7eb
        }

        .logo {
            width: 145px;
            float: left
        }

        .headmenu-cover {
            width: 100%;
            float: left;
            padding: 6px 0
        }

        .ftimg,
        .hero-image-banner {
            max-width: 100%
        }

        .header-menu {
            float: right;
            width: 78%;
            padding: 0
        }

        .header-topcover {
            width: 100%;
            float: left;
            text-align: end;
            margin-top: 9px
        }

        .row {
            margin: 0 !important
        }

        .menuholder ul {
            padding: 0;
            margin-top: 5px
        }

        header {
            width: 100%;
            float: left
        }

        @media only screen and (max-width:1250px) {
            .header-menu {
                width: 82%
            }
        }

        @media only screen and (max-width:991px) {
            .menuopenhamb:after {
                content: "";
                width: 45px;
                height: 45px;
                position: absolute;
                background: url('https://www.planmadi.com/wp-content/themes/planmadi/images/hamburger-menu.png') no-repeat;
                display: inline-block;
                right: 0;
                top: -10px
            }

            .header-menu {
                width: fit-content
            }

            .logo {
                width: 100px
            }

            .menuopen {
                display: inline-block;
                position: absolute
            }

            .menuopen {
                width: 40px;
                height: 40px;
                right: 0;
                top: 22px
            }

            .menu-hide .menu-tab,
            .menuopenhamb {
                display: inline-block;
                width: 40px;
                height: 40px
            }

            .menuopenhamb {
                position: relative
            }

            .menu-hide {
                background: #0e0d13;
                width: 320px;
                right: -320px;
                height: 100vh;
                position: fixed;
                z-index: 99999;
                top: 0
            }

            .menuholder ul {
                list-style: none;
                margin-top: 16px;
                overflow-y: scroll
            }

            .menu-hide .menu-tab {
                content: "";
                top: 10px;
                right: 8px;
                position: absolute;
                background: url('https://www.planmadi.com/wp-content/themes/planmadi/images/close-icon.png') no-repeat
            }

            ul.sidemenu {
                margin-top: 52px;
                padding: 10px 0
            }
        }

        @media only screen and (max-width:736px) {
            ul.sidemenu {
                max-height: 100%
            }
        }

        @media only screen and (max-width:680px) {
            ul.sidemenu {
                max-height: 100%
            }
        }

        @media only screen and (max-width:480px) {
            ul.sidemenu {
                max-height: none !important
            }
        }

        .fixed-columns {
            max-width: 1300px;
            width: 90%;
            margin: 0 auto
        }

        #col-divs {
            padding-left: 0;
            padding-right: 0
        }

        .cta-partner-button {
            color: #a2783a !important;
            font-family: font-regular
        }

        .cta-partner-button {
            border: 1px solid #a2783a;
            border-radius: 45px;
            padding: 8px 20px;
            text-decoration: none !important;
            font-size: 16px;
            font-weight: 500
        }

        .service-mention {
            text-align: end
        }

        #our-services {
            width: 100%;
            float: left;
            padding: 40px 0
        }

        .our-service-contents {
            padding-right: 27px
        }

        .our-service-contents span {
            color: #c37500;
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 14px;
            font-family: font-regular
        }

        .our-service-contents h3 {
            color: #a2783a;
            font-size: 35px;
            margin-bottom: 18px;
            font-family: font-bold
        }

        .our-service-contents p {
            color: #9c8b71;
            font-size: 16px;
            margin-bottom: 10px;
            font-family: font-regular
        }

        .service-mention img {
            width: 50%
        }

        #service-row {
            row-gap: 20px
        }

        .service-card {
            background-color: #fff;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, .16) 0 1px 4px;
            padding: 15px;
            margin-bottom: 15px;
            width: 93%;
            height: 96%
        }

        .service-card h4,
        .service-icons {
            margin-bottom: 10px
        }

        .service-card h4 {
            font-size: 20px;
            color: #925a07;
            font-weight: 600;
            font-family: font-bold
        }

        .service-card p {
            font-size: 16px;
            color: #747582;
            margin-bottom: 30px;
            font-family: font-regular
        }

        @media (max-width:768px) {
            .service-mention {
                display: none
            }

            .our-service-contents {
                padding-right: 0
            }
        }

        @media (max-width:575px) {
            .service-card {
                width: 100%;
                height: 89%
            }

            .our-service-contents h3 {
                font-size: 22px
            }
        }

        #hero-section {
            width: 100%;
            float: left;
            padding: 5px 0
        }

        @media (max-width:991px) {
            .header-topcover {
                margin-top: 4px !important
            }
        }

        @media (max-width:600px) {
            .cta-partner-button {
                font-size: 14px
            }
        }

        body,
        html {
            overflow-x: hidden
        }

        .hero-banner-contents a {
            text-decoration: none
        }

        .hero-banner-column {
            display: flex;
            align-items: center
        }

        .hero-banner-contents h3 {
            font-size: 55px;
            font-family: font-regular;
            margin-bottom: 20px;
            color: #000
        }

        @media (max-width:850px) {
            .hero-banner-contents h3 {
                font-size: 45px !important
            }
        }

        @media (max-width:768px) {
            .hero-banner-contents h3 {
                font-size: 35px !important
            }

            .hero-banner-contents {
                margin-top: 25px;
                margin-bottom: 25px
            }

            .hero-banner-contents a {
                font-size: 18px !important;
                padding: 10px 15px !important
            }

            #snackbar {
                min-width: 150px !important;
                margin-left: -5px !important;
                left: 0 !important
            }
        }

        @media (max-width:575px) {
            .hero-banner-contents h3 {
                font-size: 22px !important
            }
        }

        .hero-banner-contents a {
            background-color: #a2783a;
            color: #fdd8a1 !important;
            font-family: font-regular;
            border-radius: 30px;
            padding: 15px 25px;
            margin-bottom: 20px;
            font-size: 25px
        }

        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #a2783a;
            color: #fff2e0;
            text-align: center;
            border-radius: 10px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 80%;
            bottom: 30px;
            font-size: 16px;
            font-family: font-regular
        }

        #snackbar img {
            width: 22px;
            margin-right: 12px
        }

        ::placeholder {
            color: #ababab !important
        }

        option:first-of-type {
            color: #ababab !important
        }

        :root {
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-black: #000;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-gray-100: #f8f9fa;
            --bs-gray-200: #e9ecef;
            --bs-gray-300: #dee2e6;
            --bs-gray-400: #ced4da;
            --bs-gray-500: #adb5bd;
            --bs-gray-600: #6c757d;
            --bs-gray-700: #495057;
            --bs-gray-800: #343a40;
            --bs-gray-900: #212529;
            --bs-primary: #0d6efd;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-primary-rgb: 13, 110, 253;
            --bs-secondary-rgb: 108, 117, 125;
            --bs-success-rgb: 25, 135, 84;
            --bs-info-rgb: 13, 202, 240;
            --bs-warning-rgb: 255, 193, 7;
            --bs-danger-rgb: 220, 53, 69;
            --bs-light-rgb: 248, 249, 250;
            --bs-dark-rgb: 33, 37, 41;
            --bs-primary-text-emphasis: #052c65;
            --bs-secondary-text-emphasis: #2b2f32;
            --bs-success-text-emphasis: #0a3622;
            --bs-info-text-emphasis: #055160;
            --bs-warning-text-emphasis: #664d03;
            --bs-danger-text-emphasis: #58151c;
            --bs-light-text-emphasis: #495057;
            --bs-dark-text-emphasis: #495057;
            --bs-primary-bg-subtle: #cfe2ff;
            --bs-secondary-bg-subtle: #e2e3e5;
            --bs-success-bg-subtle: #d1e7dd;
            --bs-info-bg-subtle: #cff4fc;
            --bs-warning-bg-subtle: #fff3cd;
            --bs-danger-bg-subtle: #f8d7da;
            --bs-light-bg-subtle: #fcfcfd;
            --bs-dark-bg-subtle: #ced4da;
            --bs-primary-border-subtle: #9ec5fe;
            --bs-secondary-border-subtle: #c4c8cb;
            --bs-success-border-subtle: #a3cfbb;
            --bs-info-border-subtle: #9eeaf9;
            --bs-warning-border-subtle: #ffe69c;
            --bs-danger-border-subtle: #f1aeb5;
            --bs-light-border-subtle: #e9ecef;
            --bs-dark-border-subtle: #adb5bd;
            --bs-white-rgb: 255, 255, 255;
            --bs-black-rgb: 0, 0, 0;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            --bs-body-font-family: var(--bs-font-sans-serif);
            --bs-body-font-size: 1rem;
            --bs-body-font-weight: 400;
            --bs-body-line-height: 1.5;
            --bs-body-color: #212529;
            --bs-body-color-rgb: 33, 37, 41;
            --bs-body-bg: #fff;
            --bs-body-bg-rgb: 255, 255, 255;
            --bs-emphasis-color: #000;
            --bs-emphasis-color-rgb: 0, 0, 0;
            --bs-secondary-color: rgba(33, 37, 41, 0.75);
            --bs-secondary-color-rgb: 33, 37, 41;
            --bs-secondary-bg: #e9ecef;
            --bs-secondary-bg-rgb: 233, 236, 239;
            --bs-tertiary-color: rgba(33, 37, 41, 0.5);
            --bs-tertiary-color-rgb: 33, 37, 41;
            --bs-tertiary-bg: #f8f9fa;
            --bs-tertiary-bg-rgb: 248, 249, 250;
            --bs-heading-color: inherit;
            --bs-link-color: #0d6efd;
            --bs-link-color-rgb: 13, 110, 253;
            --bs-link-decoration: underline;
            --bs-link-hover-color: #0a58ca;
            --bs-link-hover-color-rgb: 10, 88, 202;
            --bs-code-color: #d63384;
            --bs-highlight-bg: #fff3cd;
            --bs-border-width: 1px;
            --bs-border-style: solid;
            --bs-border-color: #dee2e6;
            --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
            --bs-border-radius: 0.375rem;
            --bs-border-radius-sm: 0.25rem;
            --bs-border-radius-lg: 0.5rem;
            --bs-border-radius-xl: 1rem;
            --bs-border-radius-xxl: 2rem;
            --bs-border-radius-2xl: var(--bs-border-radius-xxl);
            --bs-border-radius-pill: 50rem;
            --bs-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            --bs-box-shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
            --bs-box-shadow-inset: inset 0 1px 2px rgba(0, 0, 0, 0.075);
            --bs-focus-ring-width: 0.25rem;
            --bs-focus-ring-opacity: 0.25;
            --bs-focus-ring-color: rgba(13, 110, 253, 0.25);
            --bs-form-valid-color: #198754;
            --bs-form-valid-border-color: #198754;
            --bs-form-invalid-color: #dc3545;
            --bs-form-invalid-border-color: #dc3545
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        @media (prefers-reduced-motion:no-preference) {
            :root {
                scroll-behavior: smooth
            }
        }

        body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%
        }

        h3,
        h4 {
            margin-top: 0;
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
            color: var(--bs-heading-color)
        }

        h3 {
            font-size: calc(1.3rem + .6vw)
        }

        @media (min-width:1200px) {
            h3 {
                font-size: 1.75rem
            }
        }

        h4 {
            font-size: calc(1.275rem + .3vw)
        }

        @media (min-width:1200px) {
            h4 {
                font-size: 1.5rem
            }
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ul {
            padding-left: 2rem
        }

        ul {
            margin-top: 0;
            margin-bottom: 1rem
        }

        a {
            color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
            text-decoration: underline
        }

        img {
            vertical-align: middle
        }

        ::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        ::-webkit-datetime-edit-day-field,
        ::-webkit-datetime-edit-fields-wrapper,
        ::-webkit-datetime-edit-hour-field,
        ::-webkit-datetime-edit-minute,
        ::-webkit-datetime-edit-month-field,
        ::-webkit-datetime-edit-text,
        ::-webkit-datetime-edit-year-field {
            padding: 0
        }

        ::-webkit-inner-spin-button {
            height: auto
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-color-swatch-wrapper {
            padding: 0
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }

        ::file-selector-button {
            font: inherit;
            -webkit-appearance: button
        }

        :root {
            --bs-breakpoint-xs: 0;
            --bs-breakpoint-sm: 576px;
            --bs-breakpoint-md: 768px;
            --bs-breakpoint-lg: 992px;
            --bs-breakpoint-xl: 1200px;
            --bs-breakpoint-xxl: 1400px
        }

        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x))
        }

        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-top: var(--bs-gutter-y)
        }

        .col-12 {
            flex: 0 0 auto;
            width: 100%
        }

        @media (min-width:576px) {
            .col-sm-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%
            }
        }

        @media (min-width:768px) {
            .col-md-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-md-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-md-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }
        }

        @media (min-width:992px) {
            .col-lg-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-lg-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-lg-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }
        }

        ;
    </style>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">

<!-- JS -->
<script src="<?php bloginfo('template_directory') ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick-theme.css" />
    <link rel="preload" href="<?php bloginfo('template_directory') ?>/fonts/sansation.bold.ttf" as="font"
        type="font/ttf" crossorigin />
    <link rel="preload" href="<?php bloginfo('template_directory') ?>/fonts/sansation.regular.ttf" as="font"
        type="font/ttf" crossorigin />
    <link rel="preload" href="<?php bloginfo('template_directory') ?>/fonts/Moniqa-LightCondensedHeading.ttf" as="font"
        type="font/ttf" crossorigin />
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" as="font"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css"
        integrity="sha512-gMjQeDaELJ0ryCI+FtItusU9MkAifCZcGq789FrzkiM49D8lbDhoaUaIX4ASU187wofMNlgBJ4ckbrXM9sE6Pg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!-- Google tag (gtag.js) --> <script async src="
https://www.googletagmanager.com/gtag/js?id=G-K8KJYQKZ24"></script>
<script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-K8KJYQKZ24'); </script>
<?php
$partnerName = $_POST['partnername']; 

?>

    <section id="partner-headers">
    <div class="headmenu-cover ">

<div class="fixed-columns">

   <div class="logo">  

      
        <a href="/">
      <img src="<?php bloginfo('template_directory') ?>/images/planmadi.png" alt="Plan ಮಾಡಿ -logo" class="ftimg">    
    </a>
   </div>

   <div class="header-menu">

      <div class="header-topcover">
      <!-- <a href=""  class="cta-partner-button">Let's Talk</a>  -->
      <!-- <form id="partnerdetailcapture" method="post" action="<?php echo home_url(); ?>/baker-enquiry/">
                        <input type="hidden" value="<?php echo get_field ('partner_name');?>" id="partnername" name="partnername"/>
                        <input type="submit" class="cta-partner-button" value="Let's Talk"/>
                        </form> -->

      </div>

   </div>

</div>

</div>

    </section>
    <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/slick.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/script.js"></script>