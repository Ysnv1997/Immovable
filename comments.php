<?php
if ( post_password_required() )
    return;
?>
<div id="comments" class="responsesWrapper">
<div class="comment-z">
    <meta content="UserComments:<?php echo number_format_i18n( get_comments_number() );?>" itemprop="interactionCount">
    <h3 id="ajax-comments-title"></h3>
    <ol class="commentlist">
        <?php
        wp_list_comments( array(
            'style'       => 'ol',
            'short_ping'  => true,
            'avatar_size' => 48,
            'type'        =>'comment',
            'callback'    =>'simple_comment',
        ) );
        ?>
    </ol>
    <nav class="navigation comment-navigation u-textAlignCenter" id="navigation" data-fuck="<?php the_ID();?>">
            <span class="previous-comments-page"><?php previous_comments_link(__('上一页')) ?></span>
            <span class="next-comments-page"><?php next_comments_link(__('下一页')) ?></span>
    </nav>
    <?php if(comments_open()) : ?>
        <div class="comment-from">
        <div id="respond" class="respond" role="form">
            <h2 id="reply-title" class="comments-title"><?php comment_form_title( '', '回复给 %s' ); ?>
            </h2>
            <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
                <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
            <?php else : ?>
                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="commentform" id="commentform">
                    <?php if ( $user_ID ) : ?>
                        <p class="warning-text" style="margin-bottom:10px">以<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>身份登录 | <a class="link-logout" href="<?php echo wp_logout_url(get_permalink()); ?>">注销 »</a></p>
                        <textarea class="form-control" rows="3" id="comment" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};" placeholder="当你的才华还撑不起你的野心时,那你就应该静下心来评论下..." class="form-control" tabindex="1" name="comment"></textarea>
                    <?php else : ?>
                        <textarea class="form-control" rows="3" id="comment" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};" placeholder="当你的才华还撑不起你的野心时,那你就应该静下心来评论下..." tabindex="1" name="comment"></textarea>
                        <div class="commentform-info">
                            <label id="author_name" for="author">
                                <input class="form-control" id="author" type="text" tabindex="2" value="<?php echo $comment_author; ?>" name="author" placeholder="昵称[必填]" required>
                            </label>
                            <label id="author_email" for="email">
                                <input class="form-control" id="email" type="text" tabindex="3" value="<?php echo $comment_author_email; ?>" name="email" placeholder="邮箱[必填]" required>
                            </label>
                            <label id="author_website" for="url">
                                <input class="form-control" id="url" type="text" tabindex="4" value="<?php echo $comment_author_url; ?>" name="url" placeholder="网址(可不填)">
                            </label>
                        </div>
                        
                        <?php endif; ?>
                    <div class="btn-group commentBtn" role="group">
                        <input name="submit" type="submit" id="submit" class="btn btn-sm btn-danger btn-block submit" tabindex="5" value="发表评论" />

                        <small class="onSubmit">
                            <?php cancel_comment_reply_link( '取消', '' ); ?>
                        </small>

                        </div>
                    <?php comment_id_fields(); ?>
                </form>
            <?php endif; ?>
        </div>
        </div>
    <?php endif; ?>
</div></div>