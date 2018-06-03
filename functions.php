<?php
require get_template_directory() . '/ashuwp_framework/ashuwp_framework_core.php'; //加载ashuwp_framework框架
require get_template_directory() . '/ashuwp_framework/config-example.php'; //加载配置数据，config-example.php为配置范例。
// 主题字段重定义

define("IMMOVABLE",get_option('ashuwp_Immovable'));

add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'top' => '顶部菜单'
));
add_filter('pre_option_link_manager_enabled', '__return_true');
add_filter('wp_revisions_to_keep', 'specs_wp_revisions_to_keep', 10, 2);
function specs_wp_revisions_to_keep($post) {
    return 0;
}
function wpbeginner_remove_version() {
    return;
}
//去除头部无用代码
add_filter('show_admin_bar', '__return_false');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'locale_stylesheet');
remove_action('wp_head', 'noindex', 1);
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('wp_footer', 'wp_print_footer_scripts');
remove_action('publish_future_post', 'check_and_publish_future_post', 10, 1);
remove_action('template_redirect', 'wp_shortlink_header', 11, 0);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4);
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_filter('oembed_response_data', 'get_oembed_response_data_rich', 10, 4);
add_filter('rest_enabled', '__return_false');
add_filter('rest_jsonp_enabled', '__return_false');
//禁用Emoji表情
function disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}
add_action('init', 'disable_emojis');
function disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array(
            'wpemoji'
        ));
    } else {
        return array();
    }
}
// 文章内调用文章
function xx_insert_posts($atts, $content = null) {
    extract(shortcode_atts(array(
        'ids' => ''
    ) , $atts));
    global $post;
    $content = '';
    $postids = explode(',', $ids);
    $inset_posts = get_posts(array(
        'post__in' => $postids
    ));
    foreach ($inset_posts as $key => $post) {
        setup_postdata($post);
        $content.= '<div class="wp-embed-post"><a target="_blank" href="' . get_permalink() . '">';
        if (catch_that_image()) {
            $content.= '<div class="wp-embed-img"><img src="' . catch_that_image() . '" alt=""></div>';
        };
        $content.= '<div class="wp-embed-content"><div><p class="wp-embed-post-heading">' . wp_trim_words(get_the_title() , 22) . '
            </p>
            <div class="wp-embed-post-excerpt">' . wp_trim_words(get_the_content() , 100, '...') . '</div>
        </div>
      </div>
    </a>
</div>';
    }
    wp_reset_postdata();
    return $content;
}
add_shortcode('stayma_get_post', 'xx_insert_posts');
// 评论后可见
function reply_to_read($atts, $content = null) {
    extract(shortcode_atts(array(
        "notice" => '<p class="reply-to-read">温馨提示: 此处内容需要<span id="commentLook"><a href="#respond" title="评论本文">评论本文</a></span>并刷新后才能查看.</p>'
    ) , $atts));
    $email = null;
    $user_ID = (int)wp_get_current_user()->ID;
    if ($user_ID > 0) {
        $email = get_userdata($user_ID)->user_email;
        //对博主直接显示内容
        $admin_email = 'abc@qq.com'; //博主Email
        if ($email == $admin_email) {
            return $content;
        }
    } else if (isset($_COOKIE['comment_author_email_' . COOKIEHASH])) {
        $email = str_replace('%40', '@', $_COOKIE['comment_author_email_' . COOKIEHASH]);
    } else {
        return $notice;
    }
    if (empty($email)) {
        return $notice;
    }
    global $wpdb;
    $post_id = get_the_ID();
    $query = "SELECT `comment_ID` FROM {$wpdb->comments} WHERE `comment_post_ID`={$post_id} and `comment_approved`='1' and `comment_author_email`='{$email}' LIMIT 1";
    if ($wpdb->get_results($query)) {
        return do_shortcode($content);
    } else {
        return $notice;
    }
}
add_shortcode('reply', 'reply_to_read');
//移除菜单的多余CSS选择器
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
    return is_array($var) ? array() : '';
}

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  //获取文章中第一张图片的路径并输出
  $first_img = $matches [1] [0];
  //如果文章无图片，获取自定义图片
  if(empty($first_img)){
    $random = mt_rand(1, 4);
      $first_img = get_template_directory_uri().'/img/bg-'.$random.'.jpg';
   
  //请自行设置一张default.jpg图片
  }
return $first_img;
}
// 下一篇文章
function nav_link_with_thumb(){
         $output = '';
         $prev_post = get_previous_post();
         if ($prev_post){
             $outputimg = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $prev_post->post_content, $matches);
             $first_img = $matches[1][0];
             $prev_post->filter='sample';
             $output .='<div class="blog-article-next-bg" style="background:url('.$first_img.');"></div>
                            <a href="'.get_permalink( $prev_post ).'">
                              <div class="blog-article-next-content">
                                <div>
                                    <h1>NEXT</h1>
                                    <p>'.$prev_post->post_title.'</p>
                                </div>
                              </div>
                            </a>';
         }
         echo $output;
}
// 回复评论添加@
function idevs_comment_add_at($comment_text, $comment = '') {
    if ($comment->comment_parent > 0) {
        $comment_text = '<span id="AtName">@</span><a id="AtName" href="#comment-' . $comment->comment_parent . '">' . get_comment_author($comment->comment_parent) . '</a> ' . $comment_text;
    }
    return $comment_text;
}
add_filter('comment_text', 'idevs_comment_add_at', 20, 2);





?>
<?php 
//添加HTML编辑器自定义快捷标签按钮
add_action('after_wp_tiny_mce', 'add_button_mce');
function add_button_mce($mce_settings) {
?>
<script type="text/javascript">
    QTags.addButton( 'hr', 'hr', "\n<hr />\n", "" );
    QTags.addButton( 'quote', '引用文章', "\n[stayma_get_post ids=??????]\n", "" );
    QTags.addButton( 'd-html', 'HTML高亮', "\n<pre class=\"line-numbers language-html\"><code class=\"language-html\">", "</code></pre>\n" );
    QTags.addButton( 'd-css', 'CSS高亮', "\n<pre class=\"line-numbers language-css\"><code class=\"language-css\">", "</code></pre>\n" );
    QTags.addButton( 'd-javascript', 'javascript高亮', "\n<pre class=\"line-numbers language-javascript\"><code class=\"language-javascript\">", "</code></pre>\n" );
    QTags.addButton( 'd-php', 'php高亮', "\n<pre class=\"line-numbers language-php\"><code class=\"language-php\">", "</code></pre>\n" );
    QTags.addButton( 'commLook', '评论后可见', "[reply]", "[/reply]\n" );
</script>
<?php
}; ?>




<?php
//自定义评论列表模板
function simple_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
   <li class="comment" id="li-comment-<?php
    comment_ID(); ?>">
   <div class="comment-<?php
    comment_ID(); ?>">
      <div class="media comment-body" id="comment-<?php
    comment_ID(); ?>">
        <div class="media-left">
            <?php
    if (function_exists('get_avatar') && get_option('show_avatars')) {
        echo get_avatar($comment, 48);
    } ?>
        </div>
        <div class="media-body">
          <?php
    printf(__('<p class="author_name">%s 说：</p>') , get_comment_author_link()); ?>
            <?php
    if ($comment->comment_approved == '0'): ?>
                <em>评论等待审核...</em><br />
        <?php
    endif; ?>
        <?php
    comment_text(); ?>
        </div>
      </div>
      <div class="comment-metadata">
        <span class="comment-pub-time">
          <?php
    echo get_comment_time('Y-m-d H:i'); ?>
        </span>
        <span class="comment-btn-reply">
        <i class="fa fa-reply"></i>
        <?php
    comment_reply_link(array_merge($args, array(
        'reply_text' => __('回复', 'tangstyle') ,
        'depth' => $depth,
        'max_depth' => $args['max_depth']
    ))); ?>
        </span>
      </div>
</div>
<?php
} ?>