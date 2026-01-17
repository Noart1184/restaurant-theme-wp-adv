<?php get_header(); ?>

<main class="restaurant-content px-3 py-5 p-md-5">

    <!-- Hero Section -->
    <section class="restaurant-hero text-center mb-5">
        <h1>Welcome to <?php bloginfo('name'); ?></h1>
        <p>Delicious food served with love.</p>
        <a href="#menu" class="btn btn-primary">View Our Menu</a>
    </section>

    <!-- Menu / Specials Section -->
    <section id="menu" class="restaurant-menu mb-5">
        <h2 class="mb-4">Our Specials</h2>
        <div class="menu-items row">
            <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        // Use a custom template for restaurant menu items
                        get_template_part('template-parts/content', 'menu-item');
                    }
                } else {
                    echo '<p>No menu items found. Please add some delicious dishes!</p>';
                }
            ?>
        </div>
    </section>

    <!-- About / Story Section -->
    <section class="restaurant-about mb-5">
        <h2>About Us</h2>
        <p>At <?php bloginfo('name'); ?>, we pride ourselves on serving fresh, locally-sourced ingredients and creating a cozy dining experience for all our guests.</p>
    </section>

    <!-- Opening Hours -->
    <section class="restaurant-hours mb-5">
        <h2>Opening Hours</h2>
        <ul>
            <li>Monday - Friday: 11:00 AM - 10:00 PM</li>
            <li>Saturday: 12:00 PM - 11:00 PM</li>
            <li>Sunday: 12:00 PM - 9:00 PM</li>
        </ul>
    </section>

</main>

<?php get_footer(); ?>
