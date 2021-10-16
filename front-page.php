<div class="flex-wrapper">

    <?php
    get_header();

    ?>
    <div class="front-page-container">

        <div class="parallax">

            <div class="parallax-content">
                <button><a href="<?php
                                    echo site_url('/book-now')
                                    ?>">Book a singing lesson</a></button>
            </div>

        </div>


        <div class="front-page-content">
            <p><?php
                $homePage = get_post(13);
                echo $homePage->post_content;
                ?></p>
            <h2>Hi, I'm Beth</h2>
            <h1>Beth is a great singer "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </h1>
        </div>
    </div>


    <?php


    get_footer();

    ?>
</div>