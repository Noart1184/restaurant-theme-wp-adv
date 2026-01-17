<div class="container restaurant-dish-page py-5">

    <!-- Dish Header / Meta -->
    <header class="content-header mb-4 text-center">
        <h1 class="dish-title mb-3"><?php the_title(); ?></h1>

        <div class="meta mb-3 text-muted small">
            <!-- Date Posted -->
            <span class="date me-3"><i class="fas fa-calendar-alt me-1"></i><?php echo get_the_date(); ?></span>

            <!-- Dish Tags / Ingredients -->
            <?php
            if (has_tag()) {
                the_tags('<span class="tag me-2"><i class="fas fa-carrot me-1"></i>', '</span><span class="tag me-2"><i class="fas fa-carrot me-1"></i>', '</span>');
            }
            ?>

            <!-- Dish Categories (Appetizer/Main/Dessert) -->
            <?php
            $categories = get_the_category();
            if (!empty($categories)) {
                echo '<span class="category me-3"><i class="fas fa-utensils me-1"></i>';
                $separator = ' ';
                $output = '';
                foreach ($categories as $category) {
                    $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>' . $separator;
                }
                echo trim($output, $separator) . '</span>';
            }
            ?>

            <!-- Reviews -->
            <span class="reviews"><a href="#comments"><i class="fas fa-star me-1"></i>
                <?php comments_number('0 Reviews', '1 Review', '% Reviews'); ?>
            </a></span>
        </div>
    </header>

    <!-- Dish Content / Description -->
    <article class="dish-content mb-5">
        <?php the_content(); ?>
    </article>

    <!-- Guest Reviews / Comments -->
    <section class="dish-reviews">
        <h2 class="text-center mb-4">Guest Reviews</h2>
        <?php comments_template(); ?>
    </section>

</div>
