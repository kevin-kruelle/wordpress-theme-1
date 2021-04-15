<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
    <header class="entry-header">
        <h1><?php esc_html_e( '404 - Page Not Found', 'kevvy_k' ); ?></h1>
    </header>

    <div class="entry-content side-content-404">
        <p><?php esc_html_e( 'Sorry! No content found', 'kevvy_k' ); ?></p>
        
        <p id='search-bar'><?php echo get_search_form(); ?></p>
    </div>
 
</article>
