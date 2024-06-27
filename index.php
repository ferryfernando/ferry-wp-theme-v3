<?php get_header( ); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 p-0">
			<?php
				if (have_posts()) :
					while (have_posts()) : the_post();
				?>
            <article class="px-3">
				<h1 class="mt-4 fw-bold text-primary"><?php the_title( ); ?></h1>
				<?php get_template_part( 'template-parts/post-meta' ) ?>                    
				<?php the_content() ?>
            </article> 
			<?php endwhile;
				else :
				?>
				<div class="alert alert-danger" role="alert">
                	Halaman yang dimaksud tidak ada.
            	</div>
				<?php
				endif; 
            ?>
        </div> <!-- /.col-md-9 -->

        <?php get_template_part( 'sidebar' ); ?>
        
    </div> <!-- /row -->
</div> <!-- /container-fluid -->

<?php get_footer(); ?>
