<div class="entry clearfix">

    <?php
    if (has_post_thumbnail()) {
    ?>
        <div class="entry-image">
            <a href="<?php the_permalink(); ?>">
                <!-- Echo out the thumbnail as an image elem -->
                <!-- The second param is a list of attr you want to override and the new val -->
                <?php the_post_thumbnail('full', ['class' => 'image_fade']); ?>
            </a>
        <?php
    }
        ?>
        </div>
        <div class="entry-title">
            <h2>
                <a href="<?php the_permalink() ?>">
                    <?php the_title() ?>
                </a>
            </h2>
        </div>
        <ul class="entry-meta clearfix">
            <li><i class="icon-calendar3"></i><?php echo get_the_date() ?></li>
            <li>
                <!-- get_the_author_meta() is not loop-aware so pass in the ID param -->
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                    <i class="icon-user"></i>
                    <?php the_author(); ?>
                </a>
            </li>
            <li>
                <i class="icon-folder-open"></i>
                <?php the_category(' '); ?>
            </li>
            <li>
                <a href="#">
                    <i class="icon-comments"></i>
                    <?php comments_number('0'); ?>
                </a>
            </li>
        </ul>
        <div class="entry-content">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>" class="more-link">Read More</a>
        </div>
</div>