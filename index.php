<?php get_header(); ?>

</header>
    <hr>
    <main class="content">
        <div class="container">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

          <?php endwhile; else : ?>
            <p><?php esc_html_e( '조회 결과가 없습니다' ); ?></p>
          <?php endif; ?>    

        </div>

<?php get_footer();?>