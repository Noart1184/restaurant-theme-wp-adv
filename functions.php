<?php
// Theme support
function wp_adv_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'wp_adv_theme_support');

// Menus
function wp_adv_menus() {
    $locations = [
        'primary'    => 'Main Restaurant Menu',
        'footer'     => 'Footer Links',
        'reservation'=> 'Reservation Button Menu'
    ];
    register_nav_menus($locations);
}
add_action('init', 'wp_adv_menus');

// Styles
function wp_adv_register_styles() {
    // Bootstrap
    wp_enqueue_style(
        'wp-adv-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
        [],
        '5.0.2',
        'all'
    );

    // Font Awesome
    wp_enqueue_style(
        'wp-adv-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css',
        [],
        '7.0.1',
        'all'
    );

    // Your restaurant CSS
   wp_enqueue_style(
    'wp-adv-restaurant',
    get_template_directory_uri() . '/assets/css/restaurant.css',
    ['wp-adv-bootstrap'],
    '1.0',
    'all'
);

}
add_action('wp_enqueue_scripts', 'wp_adv_register_styles');


// Scripts
function wp_adv_register_scripts() {
    wp_enqueue_script(
        'wp-adv-bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',
        ['jquery'],
        '5.0.2',
        true
    );
    wp_enqueue_script(
        'wp-adv-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'wp_adv_register_scripts');

// Add classes to nav menu items
function wp_adv_nav_menu_li_class($classes, $item, $args, $depth) {
    if (isset($args->menu_class) && strpos($args->menu_class, 'navbar-nav') !== false) {
        $classes[] = 'nav-item text-decoration-none';
        if (in_array('current-menu-item', $classes) || in_array('current_page_item', $classes)) {
            $classes[] = 'active';
        }
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'wp_adv_nav_menu_li_class', 10, 4);

// Add classes to nav menu links
function wp_adv_nav_menu_link_atts($atts, $item, $args, $depth) {
    if (isset($args->menu_class) && strpos($args->menu_class, 'navbar-nav') !== false) {
        $existing      = isset($atts['class']) ? $atts['class'] . ' ' : '';
        $atts['class'] = trim($existing . 'nav-link');

        // Make reservation or contact items a button
        $title = strtolower(trim($item->title));
        if (strpos($title, 'contact') !== false || strpos($title, 'reservation') !== false || in_array('contact', $item->classes)) {
            $atts['class'] .= ' btn btn-primary text-white ms-2';
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'wp_adv_nav_menu_link_atts', 10, 4);

// Add icons to menu items
function wp_adv_nav_menu_item_title($title, $item, $args, $depth) {
    if (isset($args->menu_class) && strpos($args->menu_class, 'navbar-nav') !== false) {
        $icon_class = '';
        foreach ($item->classes as $c) {
            if (strpos($c, 'fa-') === 0 || strpos($c, 'fab-') === 0 || strpos($c, 'fas-') === 0 || strpos($c, 'far-') === 0) {
                $icon_class = $c;
                break;
            }
        }
        if ($icon_class) {
            $title = '<i class="' . esc_attr($icon_class) . ' fa-fw me-2"></i>' . $title;
        }
    }
    return $title;
}
add_filter('nav_menu_item_title', 'wp_adv_nav_menu_item_title', 10, 4);

// Widget Areas
function wp_adv_widget_areas() {
    register_sidebar([
        'name' => 'Sidebar Area',
        'id' => 'sidebar-1',
        'description' => 'Sidebar Widget Area',
        'before_widget' => '<div class="widget %2$s mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title mb-3">',
        'after_title'   => '</h3>',
    ]);
    register_sidebar([
        'name' => 'Footer Area',
        'id' => 'footer-1',
        'description' => 'Footer Widget Area',
        'before_widget' => '<div class="widget %2$s mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title mb-3">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'wp_adv_widget_areas');

// Fallback Menu
function wp_adv_fallback_menu() {
    $home = esc_url(home_url('/'));
    echo '<ul class="navbar-nav flex-column text-center">';
    echo '<li class="nav-item"><a class="nav-link" href="' . $home . '"><i class="fas fa-home fa-fw me-2"></i>' . esc_html__('Home', 'wp-adv1') . '</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-utensils fa-fw me-2"></i>' . esc_html__('Menu', 'wp-adv1') . '</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user-chef fa-fw me-2"></i>' . esc_html__('About', 'wp-adv1') . '</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-image fa-fw me-2"></i>' . esc_html__('Gallery', 'wp-adv1') . '</a></li>';
    echo '<li class="nav-item"><a class="nav-link btn btn-primary text-white" href="#"><i class="fas fa-calendar-check fa-fw me-2"></i>' . esc_html__('Reservation', 'wp-adv1') . '</a></li>';
    echo '</ul>';
}

