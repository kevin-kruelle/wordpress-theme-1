<?php get_header( 'splash' ) ?>
    <div id="primary" class="content-area">
       <main id="main" class="site-main" role="main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="entry-header">
                <?php the_title( '<h1>', '</h1>'); ?>
                    
                </header>

                <div class="entry-content">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'full' ); ?>
                    </a>
                    <?php the_content(); ?>

                    <p>
                        <a href="<?php the_field( 'url' ); ?>">
                        <?php esc_html_e( 'Visit my Github', 'wphierarchy' ); ?>
                    </p>
                </div>

            </article>
            <?php endwhile; endif; ?>
                <!-- <p>Template: single-posttype.php</p> -->
        </main>
    </div>
   
 <?php get_footer(); ?> 