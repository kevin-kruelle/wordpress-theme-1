<?php 
// get_header();
if ( is_front_page() ) :
    get_header( 'home' );
else:
    get_header();
endif;
?>
    <div id="primary" class="content-area">
       <main id="main" class="site-main" role="main">
           <h1<?php wp_title( '' ); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ) ?>

            <?php endif; ?>
        <p>Template: home.php</p>
        </main>
    </div>
    <?php get_sidebar() ?>
 <?php get_footer(); ?> 