<?php
$post = $wp_query->post;

if (in_category('news')) {
    include(TEMPLATEPATH . '/single-news.php');
}
