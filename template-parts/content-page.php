<div class="container restaurant-page-content py-5">

    <!-- Optional Dish/Page Hero -->
    <?php if (has_post_thumbnail()) : ?>
        <div class="dish-hero text-center mb-4">
            <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
        </div>
    <?php endif; ?>

    <!-- Dish/Page Title -->
    <h1 class="dish-title text-center mb-4"><?php the_title(); ?></h1>

    <!-- Dish/Page Content -->
    <div class="dish-content">
        <?php the_content(); ?>
    </div>

</div>
