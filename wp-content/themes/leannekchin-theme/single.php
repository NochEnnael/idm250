<?php get_header(); ?>

<div class="top">

    <div class="tophead">


        <div class="articleinfo">

            <h2 class="category">
                <!-- This is called class="post-categories" since wordpress names it -->
                <?php the_category(); ?>
            </h2>

            <h1 class="articletitle">
                <?php the_title(); ?>
            </h1>

            <h3 class="articledes">
                <?php the_excerpt(); ?>
            </h3>

        </div>

    </div>
</div>

<div class="arrowsvg">
    <?php echo file_get_contents(get_template_directory_uri() . '/dist/graphics/arrow.svg') ?>
</div>

<main class="main_content">

    <?php while (have_posts()) : the_post(); ?>



        <div class="container">
            <!-- Main content  -->
            <div class="content-sidebar">

                <h6 class="post_meta">
                    <?php the_date('F j, Y') ?>
                </h6>

                <div class="thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>

                <div class="page-builder">
                    <h4>
                        <?php the_content(); ?>
                    </h4>

                </div>

                <h5>
                    <?php the_tags(); ?>
                </h5>
            </div>

            <!-- Sidebar content -->

            <?php get_sidebar(); ?>

        </div>




    <?php endwhile; ?>

</main>

<?php get_footer(); ?>