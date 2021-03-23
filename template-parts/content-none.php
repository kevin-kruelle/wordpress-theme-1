<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <h1><?php esc_html_e( '404 - Page Not Found', 'wphierarchy' ); ?></h1>
    </header>

    <div class="entry-content side-content-404">
        <p><?php esc_html_e( 'Sorry! No content found', 'wphierarchy' ); ?></p>
        
        <p><?php echo get_search_form(); ?></p>
    </div>

</article>
