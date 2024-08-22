<?php 
add_theme_support('post-thumbnails');
function create_partnersposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('Partners'),



      'singular_name' => __('partners'),



      'all_items' => __('All partners'),



      'add_new_item' => __('Add New Partner'),



      'edit_item' => __('Edit Partner'),



      'view_item' => __('View Partner'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'partners'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'partner',



    'graphql_plural_name' => 'partners',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('partners', $args);



}



add_action('init', 'create_partnersposttype');



add_action('init', 'jss_create_partners_taxonomies', 0);



function jss_create_partners_taxonomies()

{



  register_taxonomy(



    'partner_cat',

    'partners',



    array(



      'hierarchical' => true,



      'label' => 'partners Category',



      'singular_label' => 'partners Category',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'partnerCategory',



      'graphql_plural_name' => 'partnersCategory',

      



    )

  );

}



// makeup

function create_makeupartistposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('Makeup Artists'),



      'singular_name' => __('makeupartists'),



      'all_items' => __('All makeupartist'),



      'add_new_item' => __('Add New makeupartist'),



      'edit_item' => __('Edit makeupartist'),



      'view_item' => __('View makeupartist'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'makeupartists'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'makeupartist',



    'graphql_plural_name' => 'makeupartists',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('makeupartist', $args);



}



add_action('init', 'create_makeupartistposttype');



add_action('init', 'jss_create_makeupartists_taxonomies', 0);



function jss_create_makeupartists_taxonomies()

{



  register_taxonomy(



    'makeup_cat',

    'makeup',



    array(



      'hierarchical' => true,



      'label' => 'makeup Category',



      'singular_label' => 'makeup Category',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'makeupCategory',



      'graphql_plural_name' => 'makeupCategory',

      



    )

  );

}


// Bakers


function create_bakerposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('Baker'),



      'singular_name' => __('Baker'),



      'all_items' => __('All Bakers'),



      'add_new_item' => __('Add New Baker'),



      'edit_item' => __('Edit Baker'),



      'view_item' => __('View Bakers'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'baker'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'baker',



    'graphql_plural_name' => 'bakers',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('baker', $args);



}



add_action('init', 'create_bakerposttype');



add_action('init', 'jss_create_bakers_taxonomies', 0);



function jss_create_bakers_taxonomies()

{



  register_taxonomy(



    'baker_cat',

    'baker',



    array(



      'hierarchical' => true,



      'label' => 'baker Category',



      'singular_label' => 'baker Category',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'bakerCategory',



      'graphql_plural_name' => 'bakerCategory',

      



    )

  );

}



// photography

function create_photographerposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('Photographer'),



      'singular_name' => __('photographers'),



      'all_items' => __('All photographers'),



      'add_new_item' => __('Add New photographer'),



      'edit_item' => __('Edit photographer'),



      'view_item' => __('View photographers'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'photographers'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'photographer',



    'graphql_plural_name' => 'photographers',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('photographer', $args);



}



add_action('init', 'create_photographerposttype');



add_action('init', 'jss_create_photographers_taxonomies', 0);



function jss_create_photographers_taxonomies()

{



  register_taxonomy(



    'photographer_cat',

    'photographer',



    array(



      'hierarchical' => true,



      'label' => 'photography Category',



      'singular_label' => 'photography Category',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'photographyCategory',



      'graphql_plural_name' => 'photographyCategory',

      



    )

  );

}



// gift partners


function create_giftsposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('Gifts'),



      'singular_name' => __('gifts partner'),



      'all_items' => __('All Gifts partner'),



      'add_new_item' => __('Add New gift partner'),



      'edit_item' => __('Edit gift partner'),



      'view_item' => __('View Gifts Partners'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'gifts'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'gift partner',



    'graphql_plural_name' => 'gift partners',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('gifts', $args);



}



add_action('init', 'create_giftsposttype');



add_action('init', 'jss_create_gifts_taxonomies', 0);



function jss_create_gifts_taxonomies()

{



  register_taxonomy(



    'gifts_cat',

    'gift',



    array(



      'hierarchical' => true,



      'label' => 'gift Category',



      'singular_label' => 'gift Category',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'giftCategory',



      'graphql_plural_name' => 'giftCategory',

      



    )

  );

}


// top partners

function create_toppartnersposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('Top Partners'),



      'singular_name' => __('Top partner'),



      'all_items' => __('All Top partner'),



      'add_new_item' => __('Add New Top partner'),



      'edit_item' => __('Edit Top partner'),



      'view_item' => __('View Top Partners'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'toppartners'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'top partner',



    'graphql_plural_name' => 'top partners',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('toppartners', $args);



}



add_action('init', 'create_toppartnersposttype');



add_action('init', 'jss_create_toppartners_taxonomies', 0);



function jss_create_toppartners_taxonomies()

{



  register_taxonomy(



    'toppartners_cat',

    'toppartner',



    array(



      'hierarchical' => true,



      'label' => 'top partner Category',



      'singular_label' => 'top Category',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'topCategory',



      'graphql_plural_name' => 'topCategory',

      



    )

  );

}



// catering


function create_cateringposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('Catering'),



      'singular_name' => __('catering'),



      'all_items' => __('All catering'),



      'add_new_item' => __('Add New catering'),



      'edit_item' => __('Edit catering'),



      'view_item' => __('View catering'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'catering'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'catering',



    'graphql_plural_name' => 'catering',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('catering', $args);



}



add_action('init', 'create_cateringposttype');



add_action('init', 'jss_create_catering_taxonomies', 0);



function jss_create_catering_taxonomies()

{



  register_taxonomy(



    'catering_cat',

    'catering',



    array(



      'hierarchical' => true,



      'label' => 'catering Category',



      'singular_label' => 'catering',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'catering',



      'graphql_plural_name' => 'catering',

      



    )

  );

}


// venues

function create_venuesposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('Venue'),



      'singular_name' => __('venue'),



      'all_items' => __('All Venues'),



      'add_new_item' => __('Add New Venue'),



      'edit_item' => __('Edit venue'),



      'view_item' => __('View venue'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'venue'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'venue',



    'graphql_plural_name' => 'venue',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('venues', $args);



}



add_action('init', 'create_venuesposttype');



add_action('init', 'jss_create_venues_taxonomies', 0);



function jss_create_venues_taxonomies()

{



  register_taxonomy(



    'venues_cat',

    'venue',



    array(



      'hierarchical' => true,



      'label' => 'venue Category',



      'singular_label' => 'venue',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'venue',



      'graphql_plural_name' => 'venue',

      



    )

  );

}


// organizers

function create_organizerposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('organizer'),



      'singular_name' => __('organizer'),



      'all_items' => __('All organizer'),



      'add_new_item' => __('Add New organizer'),



      'edit_item' => __('Edit organizer'),



      'view_item' => __('View organizer'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'organizer'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'organizer',



    'graphql_plural_name' => 'organizer',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('organizer', $args);



}



add_action('init', 'create_organizerposttype');



add_action('init', 'jss_create_organizer_taxonomies', 0);



function jss_create_organizer_taxonomies()

{



  register_taxonomy(



    'organizer_cat',

    'organizer',



    array(



      'hierarchical' => true,



      'label' => 'organizer Category',



      'singular_label' => 'organizer',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'organizer',



      'graphql_plural_name' => 'organizer',

      



    )

  );

}



// Reviews

function create_reviewsposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('reviews'),



      'singular_name' => __('reviews'),



      'all_items' => __('All reviews'),



      'add_new_item' => __('Add New reviews'),



      'edit_item' => __('Edit reviews'),



      'view_item' => __('View reviews'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'reviews'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'reviews',



    'graphql_plural_name' => 'reviews',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('reviews', $args);



}



add_action('init', 'create_reviewsposttype');



add_action('init', 'jss_create_reviews_taxonomies', 0);



function jss_create_reviews_taxonomies()

{



  register_taxonomy(



    'reviews_cat',

    'reviews',



    array(



      'hierarchical' => true,



      'label' => 'reviews Category',



      'singular_label' => 'reviews',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'reviews',



      'graphql_plural_name' => 'reviews',

      



    )

  );

}

function create_decoratorsposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('decorators'),



      'singular_name' => __('decorators'),



      'all_items' => __('All decorators'),



      'add_new_item' => __('Add New decorators'),



      'edit_item' => __('Edit decorators'),



      'view_item' => __('View decorators'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'decorators'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'decorators',



    'graphql_plural_name' => 'decorators',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('decorators', $args);



}



add_action('init', 'create_decoratorsposttype');



add_action('init', 'jss_create_decorators_taxonomies', 0);



function jss_create_decorators_taxonomies()

{



  register_taxonomy(



    'decorators_cat',

    'decorators',



    array(



      'hierarchical' => true,



      'label' => 'decorators Category',



      'singular_label' => 'decorators',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'decorators',



      'graphql_plural_name' => 'decorators',

      



    )

  );

}




// Register an admin action hook for CSV upload handling
add_action('admin_post_handle_csv_upload', 'handle_csv_upload');
add_action('admin_post_nopriv_handle_csv_upload', 'handle_csv_upload'); // allow non-logged in users
 
// Define handle_csv_upload function
function handle_csv_upload() {
    // Check if the form was submitted properly
    if (!isset($_FILES['csv_file'])) {
        wp_die('File upload error.');
    }
 
    // Check file type
    $file_info = pathinfo($_FILES['csv_file']['name']);
    if ($file_info['extension'] !== 'csv') {
        wp_die('Please upload a CSV file.');
    }
 
    // Handle file upload
    $uploaded_file = $_FILES['csv_file']['tmp_name'];
 
    // Read and process the CSV file
    if (($handle = fopen($uploaded_file, 'r')) !== FALSE) {
        $headers = fgetcsv($handle); // Get headers
 
        while (($data = fgetcsv($handle)) !== FALSE) {
            // Sanitize each field value
            $title = sanitize_text_field($data[0]);
            $hero_section_text = sanitize_text_field($data[1]);
            $partner_name = sanitize_text_field($data[2]);
            $about_partner = sanitize_text_field($data[3]);
            $testimonial_heading = sanitize_text_field($data[4]);
            $why_me_title = sanitize_text_field($data[5]);
            $why_me_content = sanitize_text_field($data[6]);
            $post_slug = sanitize_text_field($data[7]);
            $portfolio_images = array_filter(explode(',', $data[8]));
            $partner_image1 = esc_url_raw($data[9]);
            $partner_image2 = esc_url_raw($data[10]);
            $whatido_lists = sanitize_text_field($data[15]);
            $whatido_heading = sanitize_text_field($data[11]);
            $whyme_heading = sanitize_text_field($data[12]);
            $testimonial_name = array_filter(explode(',', $data[13]));
            $testimonial_content = array_filter(explode(',', $data[14]));
            $group_image = esc_url_raw($data[16]);
            $hero_sub_text = sanitize_text_field($data[17]);
            $awards_lists = sanitize_text_field($data[18]);
            $awards_heading = sanitize_text_field($data[19]);
            $awards_image = esc_url_raw($data[20]);
            $post_type = sanitize_text_field($data[21]);
 
            // Initialize arrays
            $gallery_images = array();
            $testimonial_lists = array();
            $idorows = array();
            $awardrows = array();
 
            // Process portfolio images
            foreach ($portfolio_images as $portfolio_image) {
                $portfolio_image = esc_url_raw(trim($portfolio_image));
                $attachment_id = get_attachment_id_from_url($portfolio_image);
                if ($attachment_id) {
                    $gallery_images[] = $attachment_id;
                }
            }
 
            // Process single images
            $imageattachment_id = !empty($partner_image1) ? get_attachment_id_from_url($partner_image1) : false;
            $aboutimageattachment_id = !empty($partner_image2) ? get_attachment_id_from_url($partner_image2) : false;
            $groupimageattachment_id = !empty($group_image) ? get_attachment_id_from_url($group_image) : false;
            $awardimageattachment_id = !empty($awards_image) ? get_attachment_id_from_url($awards_image) : false;
 
            // Insert post
            $post_data = array(
                'post_title'    => $title,
                'post_content'  => '',
                'post_status'   => 'publish',
                'post_type'     => $post_type,
                'post_name'     => $post_slug,
            );
 
            $post_id = wp_insert_post($post_data);
 
            if ($post_id) {
                // Update fields only if values are present
                if (!empty($hero_section_text)) {
                    update_field('hero_section_text', $hero_section_text, $post_id);
                }
                if (!empty($partner_name)) {
                    update_post_meta($post_id, 'partner_name', $partner_name);
                }
                if (!empty($about_partner)) {
                    update_post_meta($post_id, 'about_partner', $about_partner);
                }
                if (!empty($testimonial_heading)) {
                    update_post_meta($post_id, 'testimonial_heading', $testimonial_heading);
                }
                if (!empty($post_slug)) {
                    update_post_meta($post_id, 'post_slug', $post_slug);
                }
                if (!empty($whatido_heading)) {
                    update_post_meta($post_id, 'what_wei_do_heading', $whatido_heading);
                }
                if (!empty($whyme_heading)) {
                    update_post_meta($post_id, 'why_me_heading', $whyme_heading);
                }
                if (!empty($hero_sub_text)) {
                    update_post_meta($post_id, 'hero_sub_text', $hero_sub_text);
                }
                if (!empty($awards_heading)) {
                    update_post_meta($post_id, 'awards_heading', $awards_heading);
                }
 
                if (!empty($gallery_images)) {
                    update_field('portfolio_gallery', $gallery_images, $post_id);
                }
                if ($imageattachment_id) {
                    update_field('service_image', $imageattachment_id, $post_id);
                }
                if ($aboutimageattachment_id) {
                    update_field('partner_about_image', $aboutimageattachment_id, $post_id);
                }
                if ($groupimageattachment_id) {
                    update_field('hero_section_image', $groupimageattachment_id, $post_id);
                }
                if ($awardimageattachment_id) {
                    update_field('awards_image', $awardimageattachment_id, $post_id);
                }
 
                // Process why me repeater
                
                $words = explode(',', $why_me_title);
                $whycontents = explode(';', $why_me_content);
                
                // Initialize the rows array
                $rows = array();
                
                // Combine titles and contents
                for ($i = 0; $i < count($words); $i++) {
                    // Ensure we don't go out of bounds for $whycontents
                    $content = isset($whycontents[$i]) ? trim($whycontents[$i]) : '';
                
                    // Create the array entry with title and content
                    $rows[] = array(
                        'why_me_title_' => sanitize_text_field(trim($words[$i])),
                        'why_me_title_contents' => sanitize_textarea_field($content)
                    );
                }
                
                // Update the field with the combined data
                update_field('why_us_lists', $rows, $post_id);
                   
             
 
                // Process what I do lists
                if (!empty($whatido_lists)) {
                    $whatido = explode(',', $whatido_lists);
                    foreach ($whatido as $servicedos) {
                        $idorows[] = array(
                            'what_i_do_lists' => sanitize_text_field(trim($servicedos)),
                        );
                    }
                    if (!empty($idorows)) {
                        update_field('we_we_do_contents', $idorows, $post_id);
                    }
                }
 
                // Process testimonials
                if (!empty($testimonial_name) && !empty($testimonial_content)) {
                    $num_testimonials = min(count($testimonial_name), count($testimonial_content));
                    for ($i = 0; $i < $num_testimonials; $i++) {
                        $testimonial_lists[] = array(
                            'testimonial_name' => sanitize_text_field(trim($testimonial_name[$i])),
                            'testimonial_content' => sanitize_textarea_field(trim($testimonial_content[$i])),
                        );
                    }
                    if (!empty($testimonial_lists)) {
                        update_field('testimonial_lists', $testimonial_lists, $post_id);
                    }
                }
 
                // Process awards lists
                if (!empty($awards_lists)) {
                    $awardsitems = explode(',', $awards_lists);
                    foreach ($awardsitems as $awardsitem) {
                        $awardrows[] = array(
                            'awards_title' => sanitize_text_field(trim($awardsitem)),
                        );
                    }
                    if (!empty($awardrows)) {
                        update_field('awards', $awardrows, $post_id);
                    }
                }
 
                echo 'Post inserted and ACF fields updated successfully for post ID: ' . $post_id . '<br>';
            } else {
                echo 'Failed to insert post.<br>';
            }
        }
 
        fclose($handle);
    } else {
        echo 'Failed to open CSV file.';
    }
 
    // Redirect back to the upload page with success parameter
    wp_redirect(admin_url('admin.php?page=csv-upload&success=1'));
    exit;
}
 
add_action('admin_menu', 'register_csv_upload_page');
 
function register_csv_upload_page() {
    add_menu_page('CSV Upload', 'CSV Upload', 'manage_options', 'csv-upload', 'csv_upload_page');
}
 
function get_attachment_id_from_url($image_url) {
    global $wpdb;
    $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url));
    return isset($attachment[0]) ? $attachment[0] : false;
}
function csv_upload_page() {
    if (isset($_GET['success']) && $_GET['success'] == 1) {
        echo '<div class="notice notice-success"><p>CSV file uploaded and processed successfully.</p></div>';
    }
    ?>
    <div class="wrap">
        <h2>Upload CSV File</h2>
        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="handle_csv_upload">
            <input type="file" name="csv_file" accept=".csv">
            <input type="submit" value="Upload CSV" name="submit">
        </form>
    </div>
    <?php
}


// Classes

function create_classesposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('classes'),



      'singular_name' => __('classes'),



      'all_items' => __('All classes'),



      'add_new_item' => __('Add New classes'),



      'edit_item' => __('Edit classes'),



      'view_item' => __('View classes'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'classes/baking'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'classes',



    'graphql_plural_name' => 'classes',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('classes', $args);



}



add_action('init', 'create_classesposttype');



add_action('init', 'jss_create_classes_taxonomies', 0);



function jss_create_classes_taxonomies()

{



  register_taxonomy(



    'classes_cat',

    'classes',



    array(



      'hierarchical' => true,



      'label' => 'classes Category',



      'singular_label' => 'classes',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'classes',



      'graphql_plural_name' => 'classes',

      



    )

  );

}

// makeup-classes

register_post_type('makeupclasses',
array(
    'labels'      => array(
        'name'          => __('Makeup-classes'),
        'singular_name' => __('Makeup-classes'),
    ),
    'public'      => true,
    'has_archive' => true,
    'rewrite'     => array('slug' => 'classes/makeup'),
    'supports'    => array('title', 'editor', 'thumbnail'),
)
);


// All Vendors

function create_allvendorsposttype() {
  $args = array(
    'labels' => array(
      'name' => __('All Vendors'),
      'singular_name' => __('All Vendor'),
      'all_items' => __('All Vendors'),
      'add_new_item' => __('Add New Vendor'),
      'edit_item' => __('Edit Vendor'),
      'view_item' => __('View Vendor'),
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'vendor'),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'capability_type' => 'post',
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    'exclude_from_search' => false,
    'menu_position' => 30,
    'show_in_graphql' => true,
    'graphql_single_name' => 'vendor',
    'graphql_plural_name' => 'vendors',
    'menu_icon' => 'dashicons-groups'
  );

  register_post_type('allvendors', $args);
}

add_action('init', 'create_allvendorsposttype');

function jss_create_vendors_taxonomies() {
  register_taxonomy(
    'vendors_cat',
    'allvendors',
    array(
      'hierarchical' => true,
      'label' => 'Vendors Category',
      'singular_label' => 'Vendor Category',
      'rewrite' => array('slug' => 'vendors-category'),
      'show_in_graphql' => true,
      'graphql_single_name' => 'vendorCategory',
      'graphql_plural_name' => 'vendorCategories',
    )
  );
}

add_action('init', 'jss_create_vendors_taxonomies', 0);



// cron job

function custom_cron_intervals($schedules) {
  $schedules['every_five_minutes'] = array(
      'interval' => 30000, // 300 seconds (5 minutes)
      'display'  => __('Every 50 Minutes')
  );
  return $schedules;
}
add_filter('cron_schedules', 'custom_cron_intervals');

// Schedule the cron job
function schedule_reminder_emails() {
  if (!wp_next_scheduled('send_reminder_emails')) {
      wp_schedule_event(time(), 'every_five_minutes', 'send_reminder_emails');
  }
}
add_action('wp', 'schedule_reminder_emails');

// Trigger the mailer script
function trigger_mailer_script() {
  $url = 'https://planmadi.com/wp-content/themes/planmadi/mail/send-reminder-mail.php';
  wp_remote_get($url);
}
add_action('send_reminder_emails', 'trigger_mailer_script');

// influencer

function create_influencersposttype() {
  $args = array(
    'labels' => array(
      'name' => __('influencer'),
      'singular_name' => __('All Influencer'),
      'all_items' => __('All influencers'),
      'add_new_item' => __('Add influencers'),
      'edit_item' => __('Edit influencers'),
      'view_item' => __('View influencers'),
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'influencers'),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'capability_type' => 'post',
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    'exclude_from_search' => false,
    'menu_position' => 30,
    'show_in_graphql' => true,
    'graphql_single_name' => 'influencer',
    'graphql_plural_name' => 'influencers',
    'menu_icon' => 'dashicons-groups'
  );

  register_post_type('influencers', $args);
}

add_action('init', 'create_influencersposttype');

function jss_create_influencers_taxonomies() {
  register_taxonomy(
    'influencers_cat',
    'influencers',
    array(
      'hierarchical' => true,
      'label' => 'Influencers Category',
      'singular_label' => 'Influencers Category',
      'rewrite' => array('slug' => 'influencers-category'),
      'show_in_graphql' => true,
      'graphql_single_name' => 'influencersCategory',
      'graphql_plural_name' => 'influencersCategories',
    )
  );
}

add_action('init', 'jss_create_influencers_taxonomies', 0);

// Video testimonials

function create_videoreviewsposttype() {
  $args = array(
    'labels' => array(
      'name' => __('video reviews'),
      'singular_name' => __('All video reviews'),
      'all_items' => __('All video reviews'),
      'add_new_item' => __('Add video reviews'),
      'edit_item' => __('Edit review videos'),
      'view_item' => __('View review videos'),
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'reviews'),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'capability_type' => 'post',
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    'exclude_from_search' => false,
    'menu_position' => 30,
    'show_in_graphql' => true,
    'graphql_single_name' => 'vendor',
    'graphql_plural_name' => 'vendors',
    'menu_icon' => 'dashicons-groups'
  );

  register_post_type('videoreviews', $args);
}

add_action('init', 'create_videoreviewsposttype');

function jss_create_videoreviews_taxonomies() {
  register_taxonomy(
    'videoreviews_cat',
    'videoreviews',
    array(
      'hierarchical' => true,
      'label' => 'Video reviews Category',
      'singular_label' => 'video reviews Category',
      'rewrite' => array('slug' => 'videoreviews-category'),
      'show_in_graphql' => true,
      'graphql_single_name' => 'videoreviewsCategory',
      'graphql_plural_name' => 'videoreviewsCategories',
    )
  );
}

add_action('init', 'jss_create_videoreviews_taxonomies', 0);





// influencer

// function create_influencerposttype() {
//   $args = array(
//     'labels' => array(
//       'name' => __('influencer'),
//       'singular_name' => __('All Influencer'),
//       'all_items' => __('All influencers'),
//       'add_new_item' => __('Add influencers'),
//       'edit_item' => __('Edit influencers'),
//       'view_item' => __('View influencers'),
//     ),
//     'public' => true,
//     'has_archive' => true,
//     'rewrite' => array('slug' => 'influencers'),
//     'show_ui' => true,
//     'show_in_menu' => true,
//     'show_in_nav_menus' => true,
//     'capability_type' => 'post',
//     'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
//     'exclude_from_search' => false,
//     'menu_position' => 30,
//     'show_in_graphql' => true,
//     'graphql_single_name' => 'influencer',
//     'graphql_plural_name' => 'influencers',
//     'menu_icon' => 'dashicons-groups'
//   );

//   register_post_type('influencers', $args);
// }

// add_action('init', 'create_influencersposttype');

// function jss_create_influencers_taxonomies() {
//   register_taxonomy(
//     'influencers_cat',
//     'influencers',
//     array(
//       'hierarchical' => true,
//       'label' => 'Influencers Category',
//       'singular_label' => 'Influencers Category',
//       'rewrite' => array('slug' => 'influencers-category'),
//       'show_in_graphql' => true,
//       'graphql_single_name' => 'influencersCategory',
//       'graphql_plural_name' => 'influencersCategories',
//     )
//   );
// }

// add_action('init', 'jss_create_videoreviews_taxonomies', 0);

// influencers



// educators
function create_educatorsposttype() {
  $args = array(
    'labels' => array(
      'name' => __('educator'),
      'singular_name' => __('All Educator'),
      'all_items' => __('All educators'),
      'add_new_item' => __('Add educators'),
      'edit_item' => __('Edit educators'),
      'view_item' => __('View educators'),
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'educators'),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'capability_type' => 'post',
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    'exclude_from_search' => false,
    'menu_position' => 30,
    'show_in_graphql' => true,
    'graphql_single_name' => 'educator',
    'graphql_plural_name' => 'educators',
    'menu_icon' => 'dashicons-groups'
  );

  register_post_type('educators', $args);
}

add_action('init', 'create_educatorsposttype');

function jss_create_educators_taxonomies() {
  register_taxonomy(
    'educators_cat',
    'educators',
    array(
      'hierarchical' => true,
      'label' => 'Educators Category',
      'singular_label' => 'Educators Category',
      'rewrite' => array('slug' => 'educators-category'),
      'show_in_graphql' => true,
      'graphql_single_name' => 'educatorsCategory',
      'graphql_plural_name' => 'educatorsCategories',
    )
  );
}

add_action('init', 'jss_create_educators_taxonomies', 0);