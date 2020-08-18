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