<?php get_header() ?>

<main class="main_content" >

    <section>
        
        <form action="/idm250/" method ="get">

            <label for="searchfield'">Search</label>
            <input type="text" name="s" id='searchfield' value="<?php the_search_query() ?>">   
            <input type="submit" value='go' id="go" >
    
 

        </form>
    </section>
        <!-- "Id" needs to be the same as the "for" -->

    <section>
      
            <?php if(have_posts()): ?>

        <ul class="searchlist">

            <h1 class="results">
                Search Results for "<?php the_search_query() ?>"
            </h1>
            
            <?php while (have_posts()) : the_post(); ?>


            <li class="result_list">
                    <div class="result_thumb">


                        <div class="pic_thumb">
                                <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            
                        </div>

                            <div class="left_thumb">
                                    
                                <a href="<?php the_permalink(); ?>">
                                    <h1 class="titleresult"><?php the_title(); ?></h1>
                                    <h2 class="categoryresult"><?php the_category(); ?></h2> 
                                    
                            </div>
                    
                    </div>
            </li>
        
            <?php endwhile; ?>
        </ul>

            <?php else: ?>

             <h2>Hello no results</h2>
             <?php endif ?>

    </section>

</main>

<?php get_footer() ?>