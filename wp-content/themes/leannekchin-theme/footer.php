<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="footer">
        <div id="foot-head">
            <h1>Leanne C. Design</h1>
            <h2>Welcome to my Inner Thoughts</h2>
        </div>
        <div id="foot-right">
            <ul id="footer-menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary_menu'
                ]);
                ?>
            </ul>
        </div>
    </div>
</body>

</html>