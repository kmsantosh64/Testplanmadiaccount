<?php /* Template Name:all vendors */


get_header();

?>

<section id="home-all-vendors">
    <div class="fixed-columns">
        <h1>Our Valued Partners</h1>

        <?php
        // Get the selected category from URL parameter or default to empty
        $filter_cat = isset($_GET['q']) ? sanitize_text_field($_GET['q']) : '';

        // Get vendor categories
        $categories = get_terms(array(
            'taxonomy' => 'vendors_cat',
            'hide_empty' => false,
        ));
        ?>

        <ul id="desktop-categories" class="cat_cls">
            <?php foreach ($categories as $category) : ?>
                <li class="<?php echo $filter_cat == $category->slug ? 'category-active' : ''; ?>">
                    <a href="#" data-category="<?php echo esc_attr($category->slug); ?>"><?php echo esc_html($category->name); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="scroll-container">
            <ul id="mobile-categories" class="cat_cls">
                <?php foreach ($categories as $category) : ?>
                    <li class="<?php echo $filter_cat == $category->slug ? 'category-active' : ''; ?>">
                        <a href="#" data-category="<?php echo esc_attr($category->slug); ?>"><?php echo esc_html($category->name); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="row" id="vendor-row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row" id="vendor-posts">
                    <?php
                    $args = array(
                        'post_type' => 'allvendors',
                        'posts_per_page' => -1,
                         
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'vendors_cat',
                                'field' => 'slug',
                                'terms' => empty($filter_cat) ? get_terms(array('taxonomy' => 'vendors_cat', 'fields' => 'slugs')) : $filter_cat,
                                'operator' => 'IN',
                            ),
                        ),
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            
                            
                            $partner_image = get_field('partner_image');
                            $title = get_the_title();
                            $partner_profession = get_field('partner_profession');
                            $partner_profile = get_field('partner_profile');
                            ?>

                            <div class="partner-profile-card col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12" data-categories="<?php
                            $terms = wp_get_post_terms(get_the_ID(), 'vendors_cat');
                            $term_slugs = array();
                            foreach ($terms as $term) {
                                $term_slugs[] = esc_attr($term->slug);
                            }
                            echo implode(' ', $term_slugs);
                            ?>">
                                <div class="partner-profile-card-inner">
                                <a href="<?php echo esc_url($partner_profile); ?>">
                                    <?php if (!empty($partner_image)): ?>
                                        <img src="<?php echo esc_url($partner_image['url']); ?>" alt="partner-profile" class="partner-profile-image" />
                                    <?php endif; ?>
                                    <h3><?php echo esc_html($title); ?></h3>
                                    <span><?php echo esc_html($partner_profession); ?></span>
                                    <!-- <div class="partner-profile-detail">
                                        View Profile
                                   
                                    </div> -->
                                    </a>
                                </div>
                            </div>

                        <?php endwhile;
                    else :
                        echo '<p>No vendors found.</p>';
                    endif;

                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        var category = new URLSearchParams(window.location.search).get('q') || '';
        var links = document.querySelectorAll('.cat_cls li');
        var posts = document.querySelectorAll('.partner-profile-card');

        function filterPosts(category) {
            posts.forEach(function (post) {
                var categories = post.getAttribute('data-categories') ? post.getAttribute('data-categories').split(' ') : [];
                if (category === '' || categories.includes(category)) {
                    post.style.display = 'block';
                } else {
                    post.style.display = 'none';
                }
            });
        }

        function updateActiveLink(category) {
            links.forEach(function (link) {
                link.classList.remove('category-active');
                if (link.querySelector('a').getAttribute('data-category') === category) {
                    link.classList.add('category-active');
                }
            });
        }

        filterPosts(category);
        updateActiveLink(category);

        document.querySelectorAll('.cat_cls a').forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                var selectedCategory = link.getAttribute('data-category');
                filterPosts(selectedCategory);
                updateActiveLink(selectedCategory);
                var newUrl = new URL(window.location);
                newUrl.searchParams.set('q', selectedCategory);
                history.pushState(null, '', newUrl);
            });
        });
    });
</script>


<?php get_footer(); ?>