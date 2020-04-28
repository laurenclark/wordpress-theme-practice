<?php get_header(); ?>

<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">
            <div class="postcontent nobottommargin clearfix">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();

                        global $post;
                        $author_ID      = $post->post_author;
                        $author_URL     = get_author_posts_url('ID')
                ?>
                        <div class="single-post nobottommargin">
                            <div class="entry clearfix">

                                <div class="entry-title">
                                    <h2>
                                        <?php the_title(); ?>
                                    </h2>
                                </div>

                                <?php
                                if (has_post_thumbnail()) {
                                ?>
                                    <div class="entry-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            the_post_thumbnail('full');
                                            ?>
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>

                                <div class="entry-content notopmargin">
                                    <?php
                                    the_content();

                                    $link_pages_config = array(
                                        'before'    => '<p class="text-center">' . __('Pages:', 'practice_theme'),
                                        'after'     => '</p>'
                                    );

                                    wp_link_pages($link_pages_config);

                                    ?>

                                    <div class="tagcloud clearfix bottommargin">
                                        <?php the_tags('', ' '); ?>
                                    </div>


                                    <div class="clear"></div>
                                </div>
                            </div>

                            <div class="line"></div>


                            <?php

                            if (comments_open() || get_comments_number()) {
                                comments_template();
                            }

                            ?>

                        </div>
            </div>

    <?php
                    }
                }

    ?>

    <?php get_sidebar() ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>