<?php
get_header();
?>

<div id="content" class="two-thirds">
    <h2>front-page.php</h2>
    <article class="post" id="01">
        <h2 class="entry-title">This is the title of a post or page</a></h2>
        <img src="http://localhost/wp/wp-content/uploads/2023/10/featured-image.jpg" class="size-large">

        <section class="entry-meta">Posted on 5 November by Rachel McCollin

        </section><!-- .entry-meta -->

        <section class="entry-content">This is the content of the post. On an archive page it might be an excerpt of the
            post or you might include the entire content.
            <h3>Images in WordPress</h3>
            <img src="http://localhost/wp/wp-content/uploads/2023/10/another-image.jpg" class="alignright">This post has
            some images included - once you've converted this html to a WordPress theme you'll be able to get WordPress
            to handle images for you and life will be so much easier!

            It also has a featured image - again, WordPress will handle these for you and you'll never go back to static
            html again. You'll learn how to add support for featured images to your theme in Part 10 of this series. You
            can use them to automatically display images in your individual posts and pages and in archive pages -
            you'll learn how to set up a custom archive page in Part 11.

        </section><!-- .entry-content -->

        <section class="entry-meta">
            <h3>Post categories and tags</h3>
            In this section you can display information about the categories and tags associated with your post - you'll
            leran how to do this using WordPress template tags in Part 4 of this series.

        </section><!-- .entry-meta -->

    </article><!-- #01-->
</div><!-- #content-->

<?php
get_sidebar();
?>

<?php
get_footer();
?>