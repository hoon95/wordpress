<?php
get_header();
?>


<div id="content" class="two-thirds">
    <!-- loop start -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li>
        <!-- Display the Title as a link to the Post's permalink. -->
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark"
                title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    </li>

    <?php endwhile; else : ?>

    <!-- loop stop -->
    <?php endif; ?>

</div><!-- #content-->

<?php
get_footer();

?>