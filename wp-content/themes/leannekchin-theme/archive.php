<?php ?>


<?php get_header(); ?>


<div class="top">

    <div class="tophead">

        <?php echo file_get_contents(get_template_directory_uri() . '/dist/graphics/blob.svg') ?>

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

        <a href="#articles">
            <button>
                Ready to Read?
            </button>
        </a>

    </div>
</div>


<?php if (have_posts()) : ?>

    <div id="articles" class="articles">

        <?php while (have_posts()) : the_post(); ?>

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
                            <!-- takes all of the posts with the cateorgory of culture -->  
                        </a>
                    </div>

                    <!-- <img class="previmg"> -->



                </div>

            </div>



        <?php endwhile; ?>


        <?php else : ?>

        <h2>sorry no post found</h2>

        <?php endif; ?>

    </div>

    <?php get_footer(); ?>