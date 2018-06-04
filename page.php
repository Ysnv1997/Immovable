<?php get_header();?>
  <div class="Pjax-content">
    <div class="page-content" data-is='single'>
      <div class="blog article">
        <?php if (have_posts()) {the_post();?>
          <div class="blog-bg">
            <div class="blog-bg-img" style="background:url();"></div>
          </div>
          <div class="blog-content">
            <div class="blog-article">
              <header>
                <h1 class="blog-article-title">
                  <?php the_title();?></h1>
                <p class="blog-article-time">
                  <a href="">
                    <?php the_time('Y·n·j ')?></a>
                    <?php if (!is_page()): ?>
                  <span class="left-prefix">
                    <?php the_category('，');?></span>
                <?php endif;?>
                </p>
              </header>
              <div class="blog-article-content">
                <?php the_content();?></div>
              <footer class="blog-article-footer">
                <p class="blog-article-over">
                  <span class="over">感谢观看</span></p>
                <div>
                  <?php nav_link_with_thumb();?></div>
              </footer>
              <?php }?>
                <div class="comments">
                  <div class="blog-article-tags">
                    <?php the_tags('', '', '');?></div>
                  <div class="comments-butt" data-open="false">
                    <div class="comments-submer">
                      <?php echo number_format_i18n(get_comments_number()); ?></div>
                    <p>点击评论</p>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
    <div class="comment-content">
      <div class="comment-content-z">
        <?php comments_template();?></div>
    </div>
  </div>
  <?php get_footer();?>