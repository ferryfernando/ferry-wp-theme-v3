<!-- Carousel -->
<div id="carouselExampleDark" class="carousel slide p-0" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <?php
        $sticky = get_option('sticky_posts');

        $args = array(
            'posts_per_page' => 3,
            'post__in' => $sticky,
            'ignore_sticky_posts' => 1
        );

        $query = new WP_Query($args);

        if ($query->have_posts()):
            $i = 1;
            while ($query->have_posts()):
                $query->the_post(); ?>

                <div class="carousel-item <?php if ($i == 1) echo 'active'; ?>">
                    <?php
                    if (has_post_thumbnail()) {
                        ferrywptheme_image();
                    } else { ?>
                        <img class='d-block w-100 object-fit-cover' src='https://placehold.co/1200x900?text=Carousel Image Is Empty' alt="caraousel-image" >
                        <?php
                    }
                    ?>
                    <div class="carousel-caption">
                        <h3 class="bg-dark"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <ul class="list-inline bg-dark">
                            <li class="list-inline-item small"><i class="bi bi-calendar4-event"></i> <?php the_time('l, d F Y'); ?></li>
                            <li class="list-inline-item small"><i class="bi bi-folder2"></i> <?php the_category(' '); ?></li>
                            <?php
                            if (has_tag()) {
                                ?>
                                <li class="list-inline-item small"><i class="bi bi-tag"></i> <?php the_tags(' '); ?></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <?php $i++; endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> <!-- /Carousel -->