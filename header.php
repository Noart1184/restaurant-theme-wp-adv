<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-lg bg-dark">
    <div class="container">
        <?php 
        if (has_custom_logo()) {
            the_custom_logo();
        } else { ?>
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        <?php } ?>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => 'div',
            'container_class'=> 'collapse navbar-collapse',
            'container_id'   => 'mainNav',
            'menu_class'     => 'navbar-nav ms-auto',
            'fallback_cb'    => 'wp_adv_fallback_menu',
        ]);
        ?>
    </div>
</nav>

<!-- FULLSCREEN HERO / WELCOME SECTION -->
<header class="restaurant-hero d-flex align-items-center justify-content-center text-center">
    <div class="container-fluid px-5">
        <h1 class="welcome-title display-3 fw-bold text-danger glow-text mb-3">
            Welcome to <?php bloginfo('name'); ?>
        </h1>
        <p class="lead text-light glow-text-subtitle mb-4">
            The finest flavors, unforgettable experiences, and exquisite dining.
        </p>
        <a href="#reservation" class="btn btn-primary btn-lg">Reserve a Table</a>
    </div>
</header>


<style>
/* === FULLSCREEN HERO === */
.restaurant-hero {
    height: 100vh; /* Full viewport height */
    background: linear-gradient(135deg, #fff4f0, #ffe8dc);
    position: relative;
    top: 0;
    left: 0;
    z-index: 1;
    padding-top: 0;
    padding-bottom: 0;
}

/* GLOWING TEXT */
.glow-text {
    text-shadow: 0 0 15px #b22222, 0 0 30px #ff4500, 0 0 45px #b22222;
}

.glow-text-subtitle {
    text-shadow: 0 0 8px #b22222, 0 0 16px #ff4500;
}

/* NAVBAR GLOW EFFECT */
.navbar-nav .nav-link {
    color: #fff;
    transition: 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #ff4500;
    text-shadow: 0 0 8px #ff4500, 0 0 15px #b22222;
}

.navbar-nav .nav-item.active .nav-link {
    color: #ff4500;
    text-shadow: 0 0 12px #ff4500, 0 0 20px #b22222;
}

/* BUTTON */
.btn-primary {
    border-radius: 50px;
    padding: 0.75rem 2rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 8px 25px rgba(178,34,34,0.4);
    transition: all 0.4s ease;
}

.btn-primary:hover {
    background-color: #ff4500;
    box-shadow: 0 12px 35px rgba(255,69,0,0.5);
}
</style>
