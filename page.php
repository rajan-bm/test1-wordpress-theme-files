<?php /**
 * 
 * Page
 * 
 */ ?>
<?php get_header(); ?>
<main id="main">
    <div class="page">
        <div class="container">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h2 class="page-title"><?php the_title(); ?></h2>
                    <div class="page-content">
                        <?php echo do_shortcode('[api_table]'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
