<?php

if (post_password_required()) {
    return;
}

?>

<div id="comments" class="clearfix">

    <?php

    if (have_comments()) {
    ?>

        <h3 id="comments-title">
            <span><?php comments_number(); ?></span>
        </h3>

        <ol class="commentlist clearfix">
            <?php
            foreach ($comments as $comment) {
            ?>
                <li class="comment even thread-even depth-1" id="li-comment-1">
                    <div id="comment-1" class="comment-wrap clearfix">
                        <div class="comment-meta">
                            <div class="comment-author vcard">
                                <span class="comment-avatar clearfix">
                                    <!-- Pass in the $comment object so that WP can find the ID. -->
                                    <!-- Params => Obj, Size, Default Img, Alt, Options -->
                                    <?php echo get_avatar($comment, 60, "", "", ['class' => 'avatar avatar-60 photo avatar-default']); ?>
                                </span>
                            </div>
                        </div>

                        <div class="comment-content clearfix">
                            <div class="comment-author">
                                <?php comment_author(); ?>
                                <span><?php comment_date(); ?></span>
                            </div>

                            <?php comment_text(); ?>
                        </div>

                        <div class="clear"></div>
                    </div>
                </li>
            <?php
            }
            the_comments_pagination();
            ?>

        </ol>

    <?php
    }
    ?>




    <div class="clear"></div>

    <div id="respond" class="clearfix">

        <?php
        comment_form([
            'fields'            => [
                'author'        => '
                <div class="col_one_third">
                    <label>Name</label>
                    <input type="text" name="author" class="sm-form-control" />
                </div>
                ',
                'email'         => '
                <div class="col_one_third">
                    <label>Email</label>
                    <input type="text" name="email" class="sm-form-control" />
                </div>
                ',
                'url'           => '
                <div class="col_one_third col_last">
                    <label>Website</label>
                    <input type="text" name="url" class="sm-form-control" />
                </div>'
            ],
            'comment_field'     => '<div class="col_full">
                <label>Comment</label>
                <textarea name="comment" cols="58" rows="7" class="sm-form-control"></textarea>
            </div>',
            'class_submit' => 'button button-3d nomargin',
            'label_submit' => __('Submit Comment', 'lc_theme'),
            'title_reply'  => __('Leave a <span>Comment</span>', 'lc_theme')
        ]);
        ?>
    </div>

</div>