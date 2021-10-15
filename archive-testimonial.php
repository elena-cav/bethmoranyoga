    <?php
    get_header();
    ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']
                                                                        ?>)"></div>
        <div class="page-banner__content container container--narrow">

            <h1 class="page-banner__title"><?php
                                            echo $args['title'];
                                            ?></h1>
            <div class="page-banner__intro">

                <p><?php
                    echo $args['subtitle'];
                    ?></p>

            </div>
        </div>
    </div>
    <div class="testimonials">

        <?php


        while (have_posts()) {
            the_post();

            if (has_post_thumbnail()) {

        ?>
                <div class="testimonial-card">

                    <div class='bubble-image'>
                        <span class="elena" style="background-image: url(<?php the_post_thumbnail_url('testimonialLandscape') ?>)"></span>
                        <li>
                            <div class="text">
                                <p><?php
                                    the_content()
                                    ?></p>
                            </div>
                        </li>
                    </div>
                    <div class="pointer-img"></div>
                    <div class="info">
                        <p class="name"><?php
                                        the_title();

                                        ?></p>
                        <p class="prof"><?php
                                        echo get_field('profession');
                                        ?></p>
                    </div>
                </div>
            <?php


            } else {
            ?> <div class="testimonial-card">
                    <div class='bubble'>

                        <li>
                            <div class="text">
                                <p><?php
                                    the_content()
                                    ?></p>
                            </div>
                        </li>
                    </div>
                    <div class="pointer"></div>
                    <div class="info">
                        <p class="name"><?php
                                        the_title();

                                        ?></p>
                        <p class="prof"><?php
                                        echo get_field('profession');
                                        ?></p>
                    </div>
                </div>

        <?php
            }



            echo paginate_links();
        }
        ?>
    </div>
    <?php

    get_footer()
    ?>