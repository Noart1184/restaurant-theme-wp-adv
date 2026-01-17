<footer class="footer text-center py-4 theme-bg-dark text-white">
    <div class="container">

        <!-- Restaurant Name / Logo -->
        <div class="footer-logo mb-3">
            <?php 
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h2 class="mb-0">Noart Ramadani</h2>';
            }
            ?>
        </div>

        <!-- Contact Info -->
        <div class="footer-contact mb-3">
            <p><i class="fas fa-map-marker-alt me-2"></i>123 Delicious St, Food City</p>
            <p><i class="fas fa-phone me-2"></i>(123) 456-7890</p>
            <p><i class="fas fa-envelope me-2"></i><a href="mailto:info@restaurant.com" class="text-white">info@restaurant.com</a></p>
        </div>

        <!-- Opening Hours -->
        <div class="footer-hours mb-3">
            <h5>Opening Hours</h5>
            <p>Mon - Fri: 11:00 AM - 10:00 PM</p>
            <p>Sat: 12:00 PM - 11:00 PM | Sun: 12:00 PM - 9:00 PM</p>
        </div>

        <!-- Footer Widgets -->
        <div class="footer-widgets mb-3">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>

        <!-- Social Media Links -->
        <div class="footer-social mb-3">
            <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
        </div>

        <p class="mb-0">&copy; <?php echo date('Y'); ?> Noart Ramadani. All Rights Reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
