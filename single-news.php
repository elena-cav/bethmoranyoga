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

    </div>
    <?php
    get_footer()
    ?>
</div>