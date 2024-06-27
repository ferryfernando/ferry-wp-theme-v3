<!-- Tags-->
<div class="card mb-4 border-0 rounded-0">
    <div class="card-header border-0 rounded-0">Tags</div>
    <div class="card-body">

        <?php 
            $args = array(

            );

            $tags = get_tags( $args );
            
            foreach( $tags as $tag ) {
                echo '<a href="'. get_tag_link( $tag->term_id ) .'" class="btn btn-outline-primary btn-sm rounded-0 m-1 position-relative'. (get_tag_link( $tag->term_id ) == get_tag_link( get_query_var( 'tag_id' ) ) ? 'active' : '') .' ">' . $tag->name. ' <span class="badge rounded-pill text-bg-primary">' . $tag->count . '</span> </a>';
            } 
            wp_reset_postdata();
        ?>
    </div>
</div> <!-- /tags -->