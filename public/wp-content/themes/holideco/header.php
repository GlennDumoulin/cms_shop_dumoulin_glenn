<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
        <title><?php wp_title(); ?></title>
    </head>
    <body>
        <header>
            <?php if (is_active_sidebar( 'banner' )) { ?>
                <aside class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'banner' ); ?>
                </aside>
            <?php } ?>
            <nav class="navigation">
                <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                ?>
                <div class="regular-menu">
                    <?php wp_nav_menu(array(
                            'menu' => 'header',
                            'theme_location' => 'header-nav'
                        ))
                    ?>
                    <i data-feather="menu" id="open-hamb-btn"></i>
                </div>
                <div class="hamburger-menu hidden">
                    <?php wp_nav_menu(array(
                        'menu' => 'header',
                        'theme_location' => 'header-nav'
                        ))
                        ?>
                    <i data-feather="x" id="close-hamb-btn"></i>
                </div>
            </nav>
        </header>
        <main>