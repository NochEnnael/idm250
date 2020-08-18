<?php get_header(); ?>

    <?php get_template_part('components/header-article') ?>


    <div class="arrowsvg">
        <?php echo file_get_contents(get_template_directory_uri() . '/dist/graphics/arrow.svg') ?>
    </div>

    <!-- Below is the content for the article under the orange header -->
    
    <?php get_template_part('components/info-article') ?>

<?php get_footer(); ?>