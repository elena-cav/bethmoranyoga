<div class="flex-wrapper">

    <?php
    get_header();
    pageBanner();

    ?>
    <div class="container news single-event">
        <div class="news-content">
            <div class="thumbnail">
                <img src="<?php the_post_thumbnail_url('landscape') ?>" alt="">
            </div>
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