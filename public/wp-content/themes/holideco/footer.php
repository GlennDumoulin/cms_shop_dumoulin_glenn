        </main>
        <footer>
            <div class="container">
                <div class="row footer-content">
                    <div class="col-lg-3 col-md-6 col-12 contact-info">
                        <?php if (is_active_sidebar( 'footer-address' )) { ?>
                            <aside class="widget-area" role="complementary">
                                <?php dynamic_sidebar( 'footer-address' ); ?>
                            </aside>
                        <?php } ?>
                    </div>
                    <nav class="col-lg-3 col-md-6 col-12 navigation">
                            <h1><?php _e('Collections', 'holideco'); ?></h1>
                            <?php wp_nav_menu(array(
                                'menu' => 'footer',
                                'theme_location' => 'footer-nav'
                            )) ?>
                    </nav>
                    <div class="col-lg-6 col-md-12 newsletter">
                        <?php if (is_active_sidebar( 'footer-form' )) { ?>
                            <aside class="widget-area" role="complementary">
                                <?php dynamic_sidebar( 'footer-form' ); ?>
                            </aside>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="legal">
                <p class="small"><?php _e('©2020', 'holideco'); ?></p>
                <p class="small"><?php _e('Made by Glenn Dumoulin', 'holideco'); ?></p>
            </div>
        </footer>
        <script>
            feather.replace();
        </script>
        <?php wp_footer(); ?>
    </body>
</html>