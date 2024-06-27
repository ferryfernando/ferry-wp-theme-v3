<!-- Blockquote -->
<?php
    $args = array(
        'category_name' => 'kutipan',
        'posts_per_page' => 1,
        'orderby' => 'rand',
        'ignore_sticky_posts' => 1
    );

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) : 
        while ($the_query->have_posts()) : $the_query->the_post();  
        ?>
        <div id="jumbo" class="container-fluid py-4 bg-body-tertiary">
            <?php
                the_content( );
            ?>
        </div>
        <?php
        endwhile;
    endif;
    wp_reset_postdata();
?> <!-- /Blockquote -->