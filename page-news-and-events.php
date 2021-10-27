<div class="flex-wrapper">

    <?php
    get_header();
    pageBanner(array('subtitle' => 'Stay up to date with all my latest events'));

    ?>
    <div class="container news-events">

        <p><?php
            the_content()
            ?> </p>
        <div class="posts-wrapper">
            <?php

            $newslist_args = array(
                'post_type' => 'post',
                'category_name' => 'news'
            );
            $events_args = array(
                'post_type' => 'event',
            );

            $my_posts = array_merge(get_posts($newslist_args), get_posts($events_args));
            usort($my_posts, function ($post_a, $post_b) {
                // Compare the post_date of the posts, and if $post_b is newer, then it will be displayed first
                return $post_b->post_date <=> $post_a->post_date;
            });
            foreach ($my_posts as $post) : setup_postdata($post);

                if ($post->post_type === 'event') {
                    $name = "event";
                    $date = get_field('date');
                    $class = 'class="name-event name"';
                } else {
                    $date = "";
                    $name = "news";
                    $class = 'class="name-news name"';
                }
            ?>
                <div class="post-wrapper">
                    <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('newsthumbnail') ?>" alt="">
                        <p <?php echo $class; ?>><?php
                                                    echo $name;
                                                    ?></p>
                        <div class="info-wrapper">
                            <p class='title'><?php
                                                the_title()
                                                ?></p>
                            <p><?php
                                echo $date
                                ?></p>
                            <p><?php
                                if (has_excerpt()) {
                                    echo get_the_excerpt();
                                } else {
                                    echo wp_trim_words(get_the_content(), 15);
                                }
                                ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
    get_footer()
    ?>
</div>