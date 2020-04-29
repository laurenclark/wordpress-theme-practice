<?php get_header(); ?>

<section id="page-title">
    <div class="container clearfix">
        <h1><?php _e('Page Not Found!', 'practice-theme'); ?>
        </h1>
    </div>
</section>

<section id="content">
    <div class="content-wrap error404-wrap">
        <div class="container clearfix">
            <div class="col_half nobottommargin">
                <div class="error404 center">404</div>
            </div>
            <div class="col_half nobottommargin col_last">
                <div class="heading-block nobottomborder">
                    <h4><?php _e("Ooops! The Page you were looking for, couldn't be found.", 'practice-theme'); ?></h4>
                    <span><?php _e("Try searching for the best match or browse the links below:", 'practice-theme'); ?></span>
                </div>
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>