<?php

get_header(); ?>

<div class="top">

    <div class="tophead">

        <?php echo file_get_contents(get_template_directory_uri() . '/dist/graphics/think.svg') ?>


        <div class="front-title">
            <p class="front-p">
                This is <?php the_title(); ?>
            </p>

        </div>

        <?php (get_field('hero_intro')); ?>

        <div class="front-subtitle">
            <p class="front-p">
                <?php echo get_field('hero_intro') ?>
               <!--< ?php the_excerpt() ?php >-->
            </p>
        </div>

        <?php
        $cta = get_field('hero_cta');
        if ($cta) : ?>

            <a target="<?php echo $cta['target'] ?>" href="<?php echo $cta['url'] ?>">
                <button>
                    <?php echo $cta['title']; ?>
                </button></a>
        <?php endif; ?>

    </div>
</div>


<?php
// wp-query to get all published posts without pagination
$allPostsWPQuery = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 6,
)); ?>

<?php if ($allPostsWPQuery->have_posts()) : ?>

    <div id="articles" class="articles">

        <?php while ($allPostsWPQuery->have_posts()) : $allPostsWPQuery->the_post(); ?>

            <!-- this is where the grid is -->
            <?php get_template_part('components/grid') ?>


        <?php endwhile; ?>

        <?php else : ?>

        <h2>Sorry No Post Found</h2>

        <?php endif; ?>

    </div>

    <?php get_footer(); ?>