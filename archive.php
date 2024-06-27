<?php get_header( ); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 p-0">
            <div class="alert alert-secondary" role="alert">
                <?php 
					if(is_tag()) {
						single_tag_title('Tag: ', 'textdomain'); 
						$tag = get_queried_object(); echo ' <i class="small">('.$tag->count.' tulisan ditemukan)</i>';
					}
					else {
						the_archive_title();
						$arch = get_queried_object(); echo ' <i class="small">('.$arch->count.' tulisan ditemukan)</i>';
					}
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