<footer class="blog-footer">
    <?php
        wp_nav_menu(array(
            'theme_location' => 'secondary',
            'container' => 'false',
            'menu_class' => 'navbar-nav ml-auto',
            'walker' => new Bootstrap_NavWalker()
        ));
    ?> 

    <p>&copy; Roshan Madusanka. All Rights Reserved.</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>