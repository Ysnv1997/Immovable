<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,viewport-fit=cover">
    <meta name="msapplication-tap-highlight" content="no" />
    <title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();echo " - ";bloginfo('description');
    } elseif (is_404() ) {
        echo '页面未找到!';echo " - ";bloginfo('description');
    } else {
        wp_title('',true);echo " - ";bloginfo('description');
    } ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/iconfont.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/Swiper/3.0.0/css/swiper.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <meta name="description" content="<?php echo IMMOVABLE['Immovable_input_upload']['Immovable_description'];?>" />
    <meta name="keywords" content="<?php echo IMMOVABLE['Immovable_input_upload']['Immovable_keywords'];?>" />
</head>
<body class="wow">
    <header id="header" class="header">
        <div class="headerContent">
            <div class="header-left">
                <span class="MyName"><a href="<?php bloginfo('url'); ?>"><?php echo IMMOVABLE['Immovable_input_upload']['Immovable_title'];?></a></span>
            </div>
            <div class="header-right">
                <ul>
                    <li>
                        <span class="iconfont icon-smile comments" id="comments" data-open='false'></span>
                    </li>
                    <li>
                        <span class="iconfont icon-search search" id="search" data-open="false"></span>
                    </li>
                    <li>
                        <span class="iconfont icon-category menu" id="menu" data-open='false'></span>
                    </li>
                </ul>
            </div>
        </div>
    </header>