<?php get_header();?>

<div class="s-container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main -hide-title">

            <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php endwhile;?>

        </main>
    </div>
</div>


<?php get_footer(); ?>