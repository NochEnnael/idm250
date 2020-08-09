<?php get_header(); ?>

<div class="top">

    <div class="tophead">


        <div class="articleinfo">

            <p class="category">
                <!-- This is called class="post-categories" since wordpress names it -->
                <?php the_category(); ?>
            </p>

            <h1 class="articletitle">
                <?php the_title(); ?>
            </h1>

            <p class="articledes">
                <?php the_excerpt(); ?>
            </p>

        </div>

    </div>
</div>

<div class="arrowsvg" >
    <?php echo file_get_contents(get_template_directory_uri() . '/dist/graphics/arrow.svg') ?>  
</div>

<main class="main_content">

    <?php while (have_posts()) : the_post(); ?>



        <div class="container">
            <!-- Main content  -->
            <div class="content-sidebar">

                <p class="post_meta">
                    <?php the_date('F j, Y') ?>
                </p>

                <div class="thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>

                <div class="page-builder">
                    <?php the_content(); ?>
                </div>

                <?php the_tags(); ?>
            </div>

            <!-- Sidebar content -->

            <?php get_sidebar(); ?>

        </div>




    <?php endwhile; ?>

</main>

<?php get_footer(); ?>