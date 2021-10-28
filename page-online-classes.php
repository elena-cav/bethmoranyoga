<div class="flex-wrapper">

    <?php
    get_header();
    pageBanner(array('subtitle' => 'Join me from anywhere you are'));

    ?>
    <div class="container online-classes">

        <?php
        the_content();
        ?></div>
    <?php
    get_footer()
    ?>
</div>