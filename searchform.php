<!-- Search-->
<form role="search" method="get" class="" action="<?php echo home_url( '/' ); ?>" name="pencarian">
    <div class="input-group mb-4 px-md-0 px-3">
        <input type="text" class="form-control rounded-0" placeholder="Kotak pencarian" value="<?php echo get_search_query() ?>" name="s" required>
        <button class="btn btn-outline-primary rounded-0" type="submit">Cari</button>
    </div> 
</form> <!--/search-->