<div class="flex-wrapper">

    <?php
    get_header()
    ?>
    <div class="container single-event">
        <div class="content">
            <h1><?php the_title() ?></h1>
            <img src="<?php the_post_thumbnail_url('landscape') ?>" alt="">
            <?php
            if (has_excerpt()) {
            ?> <div class="excerpt"> <?php
                                        the_excerpt();
                                        ?></div> <?php
                                                }
                                                    ?>
            <p><?php the_content() ?></p>
        </div>
        <div class="details">
            <p class='title'>DETAILS</p>
            <p class='section'><?php
                                the_field('date')
                                ?></p>
            <a class='section' href="<?php
                                        the_field('location_link')
                                        ?>"><?php
                                            the_field('location')
                                            ?></a>
            <p class='section'><?php
                                the_field('time')
                                ?>-<?php
                                    the_field('end_time')
                                    ?></p>
            <button><a href="<?php
                                the_field('event_link')
                                ?>"> Find out more</a></button>
        </div>
    </div>
    <?php
    get_footer()
    ?>
</div>