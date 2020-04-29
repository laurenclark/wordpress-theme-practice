<?php
get_header();
?>

<?php if (the_archive_title()) {; ?>

    <section id="page-title">
        <div class="container clearfix">
            <h1>
                <?php the_archive_title(); ?>
            </h1>
            <span><?php the_archive_description(); ?>
            </span>
        </div>
    </section>

<?php }; ?>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="postcontent nobottommargin clearfix">
                <div id="posts">
                    <?php

                    if (have_posts()) { // Reads the URI to see if any posts belong on the page
                        while (have_posts()) {
                            // Queries database for the current post, and then checks if there are
                            // any more posts, this will return false if there is no next post
                            the_post();
                            get_template_part('templates/post/content', 'excerpt');
                        }
                    }
                    ?>

                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <?php

                        next_posts_link('&larr; Older');

                        previous_posts_link('Newer &rarr;');

                        ?>
                        <!-- <a href="#" class="btn btn-outline-secondary float-left">
                            &larr; Older
                        </a>
                        <a href="#" class="btn btn-outline-dark float-right">
                            Newer &rarr;
                        </a>-->
                    </div>
                </div>
            </div>

            <?php get_sidebar() ?>

        </div>
    </div>
</section>

<?php
get_footer();
?>