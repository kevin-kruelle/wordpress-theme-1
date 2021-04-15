<?php get_header( 'splash' ); ?>
    <div id="primary" class="content-area excerpt">
       <main id="main" class="site-main" role="main">
           <h1>
            <?php the_archive_title( '' ); ?>
            <?php esc_html_e( ' Posts Only!', 'kevvy_k'); ?>
           </h1>
           <p><?php echo category_description(); ?></p>

           <hr> 
           
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ) ?>

            <?php endif; ?>
        <p>Template: category-17.php</p>
        </main>
    </div>
 <?php get_footer( 'splash' ); ?> 