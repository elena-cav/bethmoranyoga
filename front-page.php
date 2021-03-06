<div class="flex-wrapper">

    <?php
    get_header();

    ?>
    <div class="front-page-container">

        <div class="parallax">

            <div class="parallax-content">
                <button><a href="<?php
                                    echo site_url('/book-now')
                                    ?>">Book a class</a></button>
            </div>

        </div>


        <div class="front-page-content">
            <div class="introduction">
                <?php
                $homePage = get_post(59);
                $featured_img_url = get_the_post_thumbnail_url(59, 'full');
                ?>
                <div class="intro-wrapper">
                    <h1>Hi, I'm Beth</h1>
                    <p><?php
                        echo $homePage->post_content;
                        ?></p>
                </div>
                <div class="thumbnail">
                    <img src="<?php echo $featured_img_url ?>" alt="">
                </div>


            </div>
            <div class="cards-container">
                <div class="card yellow">
                    <img src="https://bethmoranyoga.co.uk/wp-content/uploads/2021/10/6643378_diet_fitness_meditation_retreat_yoga_icon.png" alt="">
                    <p>Find out where I teach</p>
                    <button><a href="<?php
                                        echo site_url('/in-person-classes')
                                        ?>">Read more</a></button>
                </div>
                <div class="card green">
                    <i class="fa fa-play"></i>
                    <p>Book an online class</p>
                    <button><a href="<?php
                                        echo site_url('/online-classes')
                                        ?>">Read more</a></button>

                </div>
                <div class="card yellow">
                    <i class="fa fa-calendar"></i>
                    <p>Discover my upcoming events</p>
                    <button><a href="<?php
                                        echo site_url('/news-and-events')
                                        ?>">Read more</a></button>
                </div>
            </div>
        </div>
        <div class="newsletter">
            <div class="ml-form-embed" data-account="3523577:s5r9n2p0x6" data-form="4901483:w3j5b3">
            </div>
        </div>
    </div>
    <?php
    get_footer();
    ?>
</div>