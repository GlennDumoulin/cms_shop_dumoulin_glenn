<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HoliDeco</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">
        <h1>Blog</h1>
        <?php
            while (have_posts()) { the_post() ?>
                <div>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                </div>
            <?php }
        ?>
    </div>
</body>
</html>