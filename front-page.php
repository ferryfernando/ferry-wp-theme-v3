<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 p-0">
            <?php 
                // Carousel
                get_template_part( 'template-parts/carousel' );

                // Jumbotron
                get_template_part( 'template-parts/jumbotron' );
            
                // Post
                // Example argument that defines three posts per page. 
                $args = array( 
                    'posts_per_page' => 3,
                    'category__not_in' => 2,
                    'post__not_in' => get_option( 'sticky_posts' ) 
                ); 
                
                // Variable to call WP_Query. 
                $query = new WP_Query( $args ); 
                
                if ( $query->have_posts() ) : 
                    // Start the Loop 
                    while ( $query->have_posts() ) : $query->the_post(); 
                        get_template_part( 'template-parts/content' );
                    // End the Loop 
                    endwhile; 
                else: 
                // If no posts match this query, output this text. 
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
                endif;

                wp_reset_postdata(); 
            ?> 

            <!-- pagination -->
            <nav class="nav-bb py-4 d-flex justify-content-center">
                <a href="blog" class="btn btn-sm btn-outline-primary rounded-0">Lihat Post Lainnya</a>
            </nav> <!-- /pagination-->
            
        </div> <!-- /.col-md-9 -->

        <?php get_template_part( 'sidebar' ); ?>
        
    </div> <!-- /row -->
</div> <!-- /container-fluid -->

<?php get_footer(); ?>
