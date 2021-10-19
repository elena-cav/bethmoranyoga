<div class="flex-wrapper">

    <?php
    get_header();
    ?>
    <div class="container in-person">
        <?php
        ?>
        <div class='banner'>
            <div class="thumbnail">
                <img src=" <?php
                            the_post_thumbnail_url('bannerPortrait');
                            ?>" alt="">

            </div>
            <div class="headline">
                <h2><?php
                    the_title();
                    ?></h2>
                <p><?php
                    the_content();
                    ?></p>

            </div>
        </div>
        <div class="classes-wrapper">
            <?php


            $classes = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'class',
                'meta_key' => 'day',
                'orderby' => 'meta_value',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'day',

                    )
                )
            ));

            while ($classes->have_posts()) {
                $classes->the_post();
            ?>
                <div class="class-wrapper">
                    <h3><?php
                        the_title();
                        ?></h3>
                    <p><strong>Where:</strong> <a href="<?php the_field('location_link') ?>"><?php
                                                                                                the_field('location')
                                                                                                ?></a></p>
                    <p><strong>When:</strong> <?php
                                                the_field('day')
                                                ?>s at <?php
                                                        the_field('time');

                                                        ?> </p>
                    <p class=the-content><strong>What:</strong> <?php
                                                                the_content()
                                                                ?></p>
                </div>
            <?php

            }
            ?>
        </div>

    </div>
    <?php
    get_footer()
    ?>
</div>