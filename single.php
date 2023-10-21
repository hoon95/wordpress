<?php get_header('single'); ?>

</header>
   
    <main class="content portoflio-single">
        <div class="container">
            <div class="row">
                <div class="col-md-8 decription">
                    <div class="contents shadow">
                        <img src="<?php the_field('image1'); ?>" alt="대표 이미지1">                        
                    </div>
                    <div class="contents shadow">
                      <img src="<?php the_field('image2'); ?>" alt="대표 이미지2">                        
                    </div>
                </div>
                <div class="col-md-4 portfolio_info">
                    <div class="contents shadow">
                        <h2><?php the_title(); ?></h2>
                        <div><?php the_content(); ?></div>
                        <p class="link">
                            <a href="<?php the_field('site'); ?>">Visit site &rarr;</a>
                        </p>
                        <hr class="double">
                        <blockquote>
                            <div>
                            <?php the_field('review'); ?>
                            </div>
                            <small>- <?php the_field('reviewer'); ?> -</small>
                        </blockquote>
                        <p class="nav">
                            <!-- <a href="" class="secondary-btn">&larr; Previous Project</a>
                            <a href="" class="secondary-btn">Next Project &rarr;</a> -->
                            
                            <?php previous_post_link($format = '&larr; %link', $link =  'Previous Project'); ?>                               
                           
                            <?php next_post_link($format = '%link &rarr;' , $link =  'Next Project'); ?>    
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>          
    </main>
    <div class="related_portfolio">
        <div class="container latest_portfolio">
            <h3 class="heading6">Related portfolio entries</h3>
            <div class="row list">
            <?php
                query_posts( array('category_name'  => 'portfolio','posts_per_page' => 3) );

                // The Loop
                while ( have_posts() ) : the_post();
                ?>

                <div class="col-md-4">
                    <div class="contents shadow">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('full');
                        }
                        ?>
                        <div class="hover_contents">
                            <div class="list_info">
                                <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><img src="<?php echo IMAGES; ?>/portfolio_list_arrow.png" alt="list arrow"></h3>
                                <p><a href="<?php the_permalink(); ?>">Click to see project</a></p>
                            </div>
                        </div>
                    </div>
                </div>       

                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>

<?php get_footer('single');?>