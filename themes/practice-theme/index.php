<?php
get_header();
?>
<section id="content">
    <div class="content-wrap">
        <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
            <div>
                <div class="container clearfix">
                    <span class="badge badge-danger bnews-title">Breaking News:</span>

                    <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide">
                                    <a href="#">
                                        <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </strong>
                                    </a>
                                </div>
                                <div class="slide">
                                    <a href="#">
                                        <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </strong>
                                    </a>
                                </div>
                                <div class="slide">
                                    <a href="#">
                                        <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                        <a href="#" class="btn btn-outline-secondary float-left">
                            &larr; Older
                        </a>
                        <a href="#" class="btn btn-outline-dark float-right">
                            Newer &rarr;
                        </a>
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