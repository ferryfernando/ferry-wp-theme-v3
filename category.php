<?php get_header( ); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 p-0">
            <div class="alert alert-secondary" role="alert">
                <?php 
                    single_cat_title('Kategori: ', 'textdomain'); 
                    $category = get_queried_object(); echo ' <i class="small">('.$category->count.' tulisan ditemukan)</i>';
                ?>
            </div>
            <?php 
                if (have_posts()) : 
                    while (have_posts()) : the_post(); 
                        get_template_part('template-parts/content');
                    endwhile; 
                        echo bootstrap_pagination();
                else: 
                    _e('Sorry, no posts matched your criteria.', 'textdomain'); 
                endif;
                wp_reset_postdata();
            ?> 
        </div> <!-- /.col-md-9 -->

        <?php get_template_part( 'sidebar' ); ?>
        
    </div> <!-- /row -->
</div> <!-- /container-fluid -->

<?php get_footer(); ?>


