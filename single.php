<?php
get_header();
?>

<div id="content" class="two-thirds">
    <h2>Single Template</h2>
    <h3><?php the_title();?> </h3>
    <?php the_content(); ?>
</div><!-- #content-->

<aside class="sidebar widget-area one-third right" role="complementary">

    <div class="widget-container">
        <h3 class="widget-title">A sidebar widget</h3>
        <p>This is a sidebar widget - in your WordPress theme you can set these up to display across your site.</p>
    </div><!-- .widget-container -->

    <div class="widget-container">
        <h3 class="widget-title" 3>Another sidebar widget</h3>
        <p>A second sidebar widget - maybe you could use a plugin to display a social media feed, or simply list your
            most recent posts.</p>
    </div><!-- .widget-container -->

</aside>

<?php
get_footer();

?>