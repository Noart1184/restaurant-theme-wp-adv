<div class="container">
    <div class="post mb-5 border-bottom pb-4">
        <div class="media restaurant-menu-item">
            
            <!-- Dish Image -->
            <?php if (has_post_thumbnail()) : ?>
                <img class="mr-3 img-fluid post-thumb d-none d-md-flex rounded" 
                     src="<?php the_post_thumbnail_url('medium'); ?>" 
                     alt="<?php the_title_attribute(); ?>">
            <?php endif; ?>

            <div class="media-body">

                <!-- Dish Title -->
                <h3 class="title mb-2">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>

                <!-- Meta: Date / Comments / Category -->
                <div class="meta mb-2 text-muted">
                    <span class="date me-3"><i class="fas fa-calendar-alt me-1"></i><?php echo get_the_date(); ?></span>
                    <span class="comments me-3"><i class="fas fa-comment me-1"></i>
                        <a href="<?php the_permalink(); ?>#comments"><?php comments_number('0 Reviews', '1 Review', '% Reviews'); ?></a>
                    </span>
                    <span class="category"><i class="fas fa-utensils me-1"></i><?php the_category(', '); ?></span>
                </div>

                <!-- Dish Excerpt / Description -->
                <div class="intro mb-2">
                    <?php the_excerpt(); ?>
                </div>

                <!-- CTA Button -->
                <a class="btn btn-outline-primary btn-sm" href="<?php the_permalink(); ?>">View Dish &rarr;</a>

            </div><!--//media-body-->
        </div><!--//media-->
    </div><!--//post-->
</div>
