<?php
get_header();

?>
<?php
echo get_the_post_thumbnail(13)
?>

<p><?php
    $homePage = get_post(13);
    echo $homePage->post_content;
    ?></p>


<?php


get_footer();

?>