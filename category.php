<?php get_header(); ?>

    <hr class="portfolio">
       <ul class="portfolio_links">
           
           <!-- <li><a href="" class="secondary-btn">Print</a></li>
           <li><a href="" class="secondary-btn">Web</a></li>
           <li><a href="" class="secondary-btn">Mobile</a></li> -->

           <?php
           $currentUri = $_SERVER['REQUEST_URI']; 

            $categories = get_categories( array(
              'orderby' => 'name',
              'order'   => 'ASC',
              'hide_empty' => true,
              'child_of' =>  '5' //현 테마의 portfolio 카테고리의 id
            ) );

            $urlArr = explode('/',$currentUri);
            $urlArrCount = count($urlArr);
            $lastUrl = $urlArr[$urlArrCount-2];

            if($lastUrl === 'portfolio'){$allClass='active';} else{$allClass='';}

            echo '<li><a href="http://localhost/wp/category/portfolio/" class="secondary-btn '.$allClass.'">All</a></li>';

            foreach( $categories as $category ) {
              $is_current = strpos($currentUri,strtolower($category->name));    
              $is_current ? $activeClass = 'active':$activeClass = '';

              $category_link = sprintf( 
                '<a class="secondary-btn '.$activeClass.'" href="%1$s" >%2$s</a>',
                esc_url( get_category_link( $category->term_id ) ),
                esc_html( $category->name )
              );
              
              echo '<li>' . sprintf( esc_html__( '%s', 'minimal' ), $category_link ) . '</li> ';
            } 
            ?>

       </ul>
    </header>
   
    <main class="content">
        <div class="container latest_portfolio">            
          <div class="row list">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

          <?php endwhile; else : ?>
            <p><?php esc_html_e( '조회 결과가 없습니다' ); ?></p>
          <?php endif; ?>    
          </div>
          <p class="pagenation shadow">
                <!-- <a href="" class="secondary-btn active">1</a>      
                <a href="" class="secondary-btn">2</a>      
                <a href="" class="secondary-btn">3</a>      
                <a href="" class="secondary-btn">4</a>       -->
                <?php echo minimal_paginate_links(); ?>
            </p>
        </div>

<?php get_footer();?>