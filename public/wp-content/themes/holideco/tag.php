<?php get_header(); ?>

<div class="container page--archive">
    <h1>
        <?php _e('Tag:', 'holideco'); ?> <?php single_tag_title(); ?>
    </h1>
    <div class="row posts">
        <?php
            while (have_posts()) { the_post();
                get_template_part('components/posts/card');
            }
        ?>
    </div>
    <?php get_template_part('components/pagination', null, array(
        'previous_label' => 'Vorige',
        'next_label' => 'Volgende',
    )) ?>
    <div class="other-archives">
        <h2><?php _e('Also watch other tags', 'holideco'); ?></h2>
        <?php
            $tags = get_tags();
            if ( $tags ) {
                foreach ( $tags as $tag ) { ?>
                    <li class="tag-item"><a class="tag" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
                <?php }
            }
        ?>
    </div>
</div>

<?php get_footer(); ?>