<div class="flex-wrapper">
    <?php
    get_header();
    ?>
    <div class="container">

        <div class="banner">
            <h1>Testimonials</h1>
            <p>Read what my talented students are saying about working with me.</p>
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
    </div>


    <?php

    get_footer()
    ?>
</div>