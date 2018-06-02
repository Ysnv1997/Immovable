<?php get_header(); ?>
<style>
</style>
<div class="Pjax-content">
    <div class="page-content" data-is='archive'>
        <div class="blog">
            <div class="blog-bg-list">
            </div>
            <div class="blog-content">
                <div id="post-list">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>   
                    <article <?php post_class('post-item wow fadeIn'); ?> id="post">
                        <a href="<?php the_permalink(); ?>">
                        	<?php if(catch_that_image()): ?>
	                            <div class="blog-list-img">
	                                <img src="<?php echo catch_that_image(); ?>" alt="">
	                            </div>
                        	<?php endif; ?>
                            <div class="blog-list-info">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_time('Y - n - j') ?></p>
                            </div>
                        </a>
                    </article>  
				<?php endwhile; ?>   
				<?php else : ?>   
				    <h1>暂无内容，请日后再来！</h1>
				<?php endif; ?>  
                </div>
                <div class="pageNext">
                 <?php 
                     $next_page = get_next_posts_link('加载更多'); 
                     if($next_page) echo '<div class="article-paging mobantu" id="listAjax">'.$next_page.'</div>';
                 ?>
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>