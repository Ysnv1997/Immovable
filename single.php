<?php get_header(); ?>
<style>
    body{
        background:#f2f2f2;
    }
</style>
<div class="Pjax-content">
    <div class="page-content" data-is='single'>
        <div class="blog">
        	<?php if( have_posts() ){ the_post();?>
            <div class="blog-bg">
                <div class="blog-bg-img" style="background:url();"></div>
            </div>
            <div class="blog-content">
                <div class="blog-article">
                    <header>
                        <h1><?php the_title(); ?></h1>
                        <p class="blog-article-time"><a href=""><?php the_time('Y·n·j ') ?> </a><span class="left-prefix"><?php the_category('，'); ?></span></p>
                    </header>
                    
                    <div class="blog-article-content">
						<?php the_content(); ?>
                    </div>
                    <footer class="blog-article-footer">
                        <p class="blog-article-over"><span class="over">感谢观看</span></p>
                        <div class="blog-article-next">
                            <?php nav_link_with_thumb(); ?>

                        </div>
                    </footer>
                    <?php } ?>
                    <div class="comments">
                        <div class="comments-butt" data-open="false">
                            <span><?php echo number_format_i18n( get_comments_number() );?></span>
                            评论
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="comment-content">
        <div class="comment-content-z">
        <?php comments_template() ;?>
        </div>
    </div>
</div>
<?php get_footer(); ?>