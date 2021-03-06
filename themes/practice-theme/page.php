<?php get_header(); ?>


<?php if (single_post_title()) {; ?>

    <section id="page-title">
        <div class="container clearfix">
            <h1><?php single_post_title(); ?></h1>
            <span>
                <?php
                if (function_exists('the_subtitle')) {
                    the_subtitle();
                }
                ?>
            </span>
        </div>
    </section>

<?php } ?>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="postcontent nobottommargin clearfix">
                <?php
                while (have_posts()) {
                    the_post();

                    global $post;
                    $author_ID      = $post->post_author;
                    $author_URL     = get_author_posts_url('ID')
                ?>
                    <div class="single-post nobottommargin">
                        <div class="entry clearfix">
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
        ?>
        <?php get_sidebar() ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>