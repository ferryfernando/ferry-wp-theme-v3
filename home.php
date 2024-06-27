<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 p-0">
            <?php 
                // Post
                // Example argument that defines three posts per page. 
                $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

                $args = array( 
                    'ignore_sticky_posts' => 1,
                    'category__not_in' => 2,
                    'paged' => $paged,
                ); 
                
                // Variable to call WP_Query. 
                $query = new WP_Query( $args ); 
                
                if ( $query->have_posts() ) : 
                    // Start the Loop 
                    while ( $query->have_posts() ) : $query->the_post(); 
                        get_template_part( 'template-parts/content' );
                    // End the Loop 
                    endwhile; 
                    echo bootstrap_pagination($query);
                else: 
                // If no posts match this query, output this text. 
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
                endif;

                wp_reset_postdata(); 
            ?> 
        </div> <!-- /.col-md-9 -->

        <?php get_template_part( 'sidebar' ); ?>
        
    </div> <!-- /row -->
</div> <!-- /container-fluid -->

<?php get_footer(); ?>
