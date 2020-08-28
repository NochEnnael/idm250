<?php

/*
Template Name: About
*/

?>

<?php
get_header(); ?>

<div class="top">

    <div class="tophead">

        <?php (get_field('about_desc')); ?>

        <div class="articleinfo">

            <h1 class="articletitle">
                <?php the_title(); ?>
            </h1>

            <h3 class="articledes">
                <?php echo get_field('about_desc') ?>
            </h3>



        </div>

    </div>
</div>

<div class="about-thumb">
    <?php the_post_thumbnail(); ?>
</div>

<?php (get_field('your_name')); ?>

<?php while (have_posts()) : the_post(); ?>

    <div class="about-des">
        <h1>
            <?php echo get_field('your_name') ?>
        </h1>

        <p>
            <?php the_content(); ?>
        </p>
        
    </div>

<?php endwhile; ?>

<?php
get_footer(); ?>