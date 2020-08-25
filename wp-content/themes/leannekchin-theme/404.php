<?php
get_header('blank'); ?>

<div class="top-error">
    <div class="tophead-error">

        <div class="leftblob">
        <?php echo file_get_contents(get_template_directory_uri() . '/dist/graphics/think.svg') ?>
        </div>


        <div class="oops">
            <div class="oops-description">
                <h1>
                    404 OOPS!
                </h1>
                <h3>
                    Page not found
                </h3>
            </div>
        </div>

        <div class="direct">
            <h3>
                What? This isn’t working?! Don’t worry, I’m here for you. Just use your imagination and hit that button.
            </h3>

            <a href="<?php echo get_site_url(); ?>">
                <button class="oopsbut">
                    Home
                </button>
            </a>
        </div>



    </div>



</div>

<?php

get_footer('blank'); ?>