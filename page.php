<?php get_header(); ?>

<main class="restaurant-page-content px-3 py-5 p-md-5">

    <!-- Page Header / Hero -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="restaurant-page-header text-center mb-5">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <?php if (has_post_thumbnail()) : ?>
                <div class="page-hero-image mb-4">
                    <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
                </div>
            <?php endif; ?>
        </header>

        <!-- Page Content -->
        <article class="restaurant-page-body">
            <?php get_template_part('template-parts/content', 'page'); ?>
        </article>

    <?php endwhile; else : ?>
        <p><?php esc_html_e('Sorry, no content found.', 'wp-adv1'); ?></p>
    <?php endif; ?>

    <!-- Optional Call-to-Action (Reservation / Contact) -->
    <section class="restaurant-cta mt-5 text-center">
        <p>Want to experience our delicious dishes? Book a table today!</p>
        <a href="<?php echo esc_url(home_url('/reservation')); ?>" class="btn btn-primary btn-lg">Reserve Now</a>
    </section>

</main>

<?php get_footer(); ?>
