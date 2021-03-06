<div class="flex-wrapper">

    <?php
    get_header();
    pageBanner();

    ?>
    <div class="container single-event">
        <div class="event-content">
            <div class="thumbnail">
                <img src="<?php the_post_thumbnail_url('landscape') ?>" alt="">
            </div> <?php
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
            <?php
            $date
            ?>
            <a class='section' href="<?php
                                        the_field('location_link')
                                        ?>"><?php
                                            the_field('location')
                                            ?></a>
            <p class='section'> <?php
                                if (get_field('end_date')) :
                                    the_field('date');
                                ?> - <?php
                                        the_field('end_date');
                                    else :
                                        the_field('date');
                                    endif ?></p>
            <p class='section'>
                <?php
                if (get_field('end_time')) :
                    the_field('time');
                ?> - <?php
                        the_field('end_time');
                    else :
                        the_field('time');
                    endif ?>
            </p>
            <button><a href="<?php
                                the_field('event_link')
                                ?>"> Find out more</a></button>
        </div>
    </div>
    <?php
    get_footer()
    ?>
</div>