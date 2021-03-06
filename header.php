<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&family=Lora&family=Reenie+Beanie&display=swap" rel="stylesheet">
    <?php wp_head() ?>
    <script>
        (function(m, a, i, l, e, r) {
            m['MailerLiteObject'] = e;

            function f() {
                var c = {
                    a: arguments,
                    q: []
                };
                var r = this.push(c);
                return "number" != typeof r ? r : f.bind(c.q);
            }
            f.q = f.q || [];
            m[e] = m[e] || f.bind(f.q);
            m[e].q = m[e].q || f.q;
            r = a.createElement(i);
            var _ = a.getElementsByTagName(i)[0];
            r.async = 1;
            r.src = l + '?v' + (~~(new Date().getTime() / 1000000));
            _.parentNode.insertBefore(r, _);
        })(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');

        var ml_account = ml('accounts', '3523577', 's5r9n2p0x6', 'load');
    </script>


</head>

<body>
    <header class="site-header">
        <div class="header-container">
            <span class='logo'>
                <h1><a class='logolink' href="<?php
                                                echo site_url()
                                                ?>">BETH MORAN<p>YOGA</p></a></h1>
            </span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu">
                <nav class="main-navigation">
                    <ul class=menu>
                        <li class='has-sub-menu'>
                            <a class='has-sub' id="has-sub-menu" href="#.html" role="button">Practice with me</a>
                            <ul id='sub-menu' class="sub-menu">
                                <li>
                                    <a href="<?php
                                                echo site_url('/in-person-classes')
                                                ?>">In person classes</a>
                                </li>
                                <li>
                                    <a href="<?php
                                                echo site_url('/online-classes')
                                                ?>">Online classes</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php
                                        echo site_url('/news-and-events')
                                        ?>">News and Events</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>
</body>