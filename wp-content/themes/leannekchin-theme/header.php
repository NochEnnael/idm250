<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <!--     <link rel="stylesheet" href="/wp-content/themes/leannekchin-theme/dist/css/st
    yle.css"> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>


        <div class="menu-container">
            <nav role="navigation">

                <div id="menuToggle">
                    <!--
                    A fake / hidden checkbox is used as click reciever, so you can use the :checked selector on it.
                    -->
                    <input type="checkbox" />

                    <span></span>
                    <span></span>
                    <span></span>

                    <ul id="menu">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'primary_menu'
                        ]);
                        ?>

                    </ul>
                </div>
            </nav>



            <header class="heading">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary_menu'
                ]);
                ?>

            </header>
        </div>



    </header>