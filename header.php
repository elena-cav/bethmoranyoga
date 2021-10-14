<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>
    <header class="site-header">
        <div class="container">
            <span class='logo'>
                <h1><a href="<?php
                                echo site_url()
                                ?>">Beth Moran</a></h1>
            </span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
                <nav class="main-navigation">
                    <ul>
                        <li>
                            <a href="<?php
                                        echo site_url('/book-now')
                                        ?>"> Book a lesson</a>
                        </li>
                        <li>
                            My Teaching approach
                        </li>
                        <li>
                            Lesson Example
                        </li>
                        <li>
                            Testimonials
                        </li>

                        <!-- <li <?php
                                    if (is_page("about-us")) echo 'class="current-menu-item"'
                                    ?>>
                            <a href="<?php
                                        echo site_url('/about-us')
                                        ?>">About Us</a>
                        </li> -->

                    </ul>
                </nav>

            </div>
        </div>
    </header>