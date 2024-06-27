<!-- Kategori -->
<div class="card mb-4 border-0 rounded-0">
    <div class="card-header border-0 rounded-0">
        <p class="m-0">Kategori</p>
    </div>
    <div class="card-body list-group py-0 pe-0">
        <?php 
            $args = array(
                'exclude' => 2,
            );

            $categories = get_categories( $args );
            
            foreach( $categories as $category ) {
                echo '<a href="'. get_category_link( $category->term_id ) .'" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 '. (get_category_link( $category->term_id ) == get_category_link( get_query_var( 'cat' ) ) ? 'active' : '') .' ">' . $category->name . ' <span class="badge rounded-pill text-bg-primary">' . $category->category_count . '</span></a>';
            } 
            wp_reset_postdata();
        ?>
    </div>
</div> <!--/kategori-->