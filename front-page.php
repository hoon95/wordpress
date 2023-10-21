<?php get_header(); ?>

</header>
    <hr>
    <main class="content">
        <div class="container latest_portfolio">
            <div class="row intro">
                <div class="col-md-4">
                    <div class="contents shadow">
                        <h2 class="heading2">I’m alikerock</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contents shadow">
                        <h2 class="heading2">I create super awesome stuff</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contents shadow">
                        <h2 class="heading2">I’m available for freelance projects</h2>
                    </div>
                </div>
            </div>
            <div class="row list">

                <!-- 카테고리 portfolio 최근 3개 출력 -->

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
            <p class="porfolio_readmore">
                <a href="" class="primary-btn">See my full portfolio</a>        
            </p>
        </div>
        
<?php get_footer();?>