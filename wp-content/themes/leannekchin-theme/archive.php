<?php ?>


<?php get_header(); ?>


<div class="top">

    <div class="tophead">

        <div class="tophead-blob">
            <?php echo file_get_contents(get_template_directory_uri() . '/dist/graphics/think.svg') ?>
        </div>

        <div class="front-title">
            <p class="front-p">
                This is <?php echo single_term_title(); ?>
            </p>

        </div>

        <div class="front-subtitle">
            <p class="front-p">
                <?php echo term_description(); ?>
            </p>

        </div>

    </div>
</div>


<?php if (have_posts()) : ?>

    <div id="articles" class="articles">

        <?php while (have_posts()) : the_post(); ?>
            <!-- this is where the grid is -->

            <?php get_template_part('components/grid') ?>

        <?php endwhile; ?>

    <?php else : ?>

        <div class="oops-arch">
            <div class="oops-description-arch">
                <h1>
                    No Posts, SORRY!
                </h1>
            </div>
        </div>

    <?php endif; ?>

    </div>

    <?php get_footer(); ?>