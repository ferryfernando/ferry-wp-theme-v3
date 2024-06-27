<?php
//cek untuk membedakan page lain dengan single. kalau single di kasih padding bawah
if ( is_single() ) :
    ?>
    <ul class="list-inline">
    <?php
else :
    ?>
    <ul class="list-inline mb-0">
    <?php
endif;
?>
    <li class="list-inline-item small"><i class="bi bi-calendar4-event"></i> <?php the_time( 'l, d F Y' ); ?></li>
    <li class="list-inline-item small"><i class="bi bi-folder2"></i> <?php the_category(' '); ?></li>
    <?php
        if(has_tag()) {
            ?>
            <li class="list-inline-item small"><i class="bi bi-tag"></i> <?php the_tags(' '); ?></li>
            <?php
        } 
    ?>
</ul>