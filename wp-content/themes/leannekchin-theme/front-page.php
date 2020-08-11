<?php get_header(); ?>

<div class="top">

    <div class="tophead">

        <?php echo file_get_contents(get_template_directory_uri() . '/dist/graphics/blob.svg') ?>

        <div class="front-title">
            <p class="front-p">
                This is <?php the_title(); ?>
            </p>

        </div>

        <div class="front-subtitle">
            <p class="front-p">
                <?php the_excerpt(); ?>
            </p>

        </div>

        <a href="#articles">
            <button>
                Ready to Read?
            </button>
        </a>


    </div>
</div>





<?php
// wp-query to get all published posts without pagination
$allPostsWPQuery = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>

<?php if ($allPostsWPQuery->have_posts()) : ?>

    <div id="articles" class="articles">

        <?php while ($allPostsWPQuery->have_posts()) : $allPostsWPQuery->the_post(); ?>


            <div class="grid">

                <div class="articleimg">

                    <div class="thumb">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>

                            <p class="arttitle">
                                <?php the_title(); ?>
                            </p>

                            <p class="date">
                                <?php the_date('F j, Y') ?>
                            </p>
                        </a>

                    </div>

                    <!-- <img class="previmg"> -->

                    <!-- takes all of the posts with the cateorgory of culture -->

                </div>

            </div>

        <?php endwhile; ?>

        <?php else : ?>

        <?php endif; ?>

    </div>

    <?php get_footer(); ?>