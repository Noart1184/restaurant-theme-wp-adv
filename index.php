<?php get_header(); ?>

<main class="restaurant-archive-content px-3 py-5 p-md-5">

    <!-- Archive Header -->
    <header class="restaurant-archive-header text-center mb-5">
        <h1 class="archive-title">
            <?php
                if (is_post_type_archive('menu') ) {
                    echo esc_html__('Our Menu', 'wp-adv1');
                } elseif (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } else {
                    esc_html_e('Restaurant Specials', 'wp-adv1');
                }
            ?>
        </h1>
        <p class="archive-description">
            <?php echo category_description(); ?>
        </p>
    </header>

    <!-- Archive Items -->
    <section class="restaurant-archive-items row">
        <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    // Use a custom template for restaurant menu/archive items
                    get_template_part('template-parts/content', 'archive-item');
                }
            } else {
                echo '<p>' . esc_html__('No dishes found at the moment. Please check back soon!', 'wp-adv1') . '</p>';
            }
        ?>
    </section>

    <!-- Pagination -->
    <nav class="restaurant-pagination mt-5 text-center">
        <?php the_posts_pagination([
            'mid_size'  => 2,
            'prev_text' => __('« Previous', 'wp-adv1'),
            'next_text' => __('Next »', 'wp-adv1'),
        ]); ?>
    </nav>

</main>

<?php get_footer(); ?>
