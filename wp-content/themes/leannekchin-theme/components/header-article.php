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