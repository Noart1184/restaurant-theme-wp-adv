<?php get_header(); ?>

<main class="restaurant-404-page px-3 py-5 p-md-5 text-center">

    <article class="content">
        <h1 class="page-title display-4 mb-4">Oops! Page Not Found</h1>
        <p class="lead mb-4">
            Sorry, we couldn’t find the page you’re looking for. Maybe you’re craving one of our delicious dishes instead?
        </p>

        <!-- Search Form -->
        <div class="mb-4">
            <?php get_search_form(); ?>
        </div>

        <!-- CTA Buttons -->
        <div class="restaurant-404-cta">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-lg me-2 mb-2">
                Go to Home
            </a>
            <a href="<?php echo esc_url(home_url('/menu')); ?>" class="btn btn-outline-primary btn-lg mb-2">
                View Our Menu
            </a>
        </div>
    </article>

</main>

<?php get_footer(); ?>
