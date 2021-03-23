<?php get_header( 'splash' ); ?>
    <div id="primary" class="content-area extended">
       <main id="main" class="site-main" role="main">
           <?php
                post_type_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description( '<h3 class="archive-description">', '</h3>' );
            ?>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content-posts', 'portfolio' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ) ?>

            <?php endif; ?>
        <!-- <p>Template: archive-portfolio.php</p> -->
        </main>
        </div>
 <?php get_footer(); ?> 