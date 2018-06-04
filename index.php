<?php get_header();?>
<?php $IMMOVABLE = get_option('ashuwp_Immovable');?>
    <div class="Pjax-content">
        <div class="page-content" data-is='index'>
            <div class="blog index">
                <div class="index-info">
                    <div>
                        <h1 class="index-info-name wow bounceInLeft">
                            <?php echo $IMMOVABLE['Immovable_index_h1']; ?></h1>
                        <p class="index-info-word wow bounceInRight"><?php echo $IMMOVABLE['Immovable_index_p']; ?></p>
                    </div>
                </div>
                <div class="blog-bg">
                    <?php if ($IMMOVABLE['Immovable_swiper']['Immovable_swiper_on'] == 'no'): ?>
                         <div class="blog-bg-img" style="background:url(<?php echo $IMMOVABLE['Immovable_index_bg']; ?>);"></div>
                    <?php elseif ($IMMOVABLE['Immovable_swiper']['Immovable_swiper_on'] == 'yes'): ?>

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php if ($IMMOVABLE['Immovable_swiper']['Immovable_swiper_1']): ?>
                        <div class="swiper-slide">
                            <div class="swiper-slide-bg" style="background: url(<?php echo $IMMOVABLE['Immovable_swiper']['Immovable_swiper_1']; ?>);"></div>
                        </div>
                    <?php endif;?>
                    <?php if ($IMMOVABLE['Immovable_swiper']['Immovable_swiper_2']): ?>
                        <div class="swiper-slide">
                            <div class="swiper-slide-bg" style="background: url(<?php echo $IMMOVABLE['Immovable_swiper']['Immovable_swiper_2']; ?>);"></div>
                        </div>
                    <?php endif;?>
                    <?php if ($IMMOVABLE['Immovable_swiper']['Immovable_swiper_3']): ?>
                        <div class="swiper-slide">
                            <div class="swiper-slide-bg" style="background: url(<?php echo $IMMOVABLE['Immovable_swiper']['Immovable_swiper_3']; ?>);"></div>
                        </div>
                    <?php endif;?>
                    <?php if ($IMMOVABLE['Immovable_swiper']['Immovable_swiper_4']): ?>
                        <div class="swiper-slide">
                            <div class="swiper-slide-bg" style="background: url(<?php echo $IMMOVABLE['Immovable_swiper']['Immovable_swiper_4']; ?>);"></div>
                        </div>
                    <?php endif;?>


                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                    <?php endif;?>
                </div>
            <!--内容-->
            <div class="content" id="content">
                <!-- 个人简介 -->
                <div class="my-Info">
                    <div class="my-info-introduction wow fadeinUp">
                        <p>I'M STAY MA</p>
                        <h2>你好，我是马林灯</h2>
                        <p>一个大学即将毕业准备步入社会的WEB前端开发者。一名热爱前端及各种编程的深度技术宅。</p>
                        <h2>我的专业技能</h2>
                        <p>熟练掌握HTML、CSS以及基础的JAVASCRIPT和最新的HTML5、CSS3。有过开发小程序、VUE、PHP经验。</p>
                        <h2>我能胜任</h2>
                        <p>能将设计师出的PSD完美的转换为网页，能完成各种交互功能及动画。能与后端完成数据交换，能独立开发微信小程序微信端。</p>
                    </div>
                </div>
                <!-- 首页文章分类 -->
                <div class="index-list">
                    <?php if ($IMMOVABLE['Immovable_index_01']['Immovable_title']): ?>
                        <div class="list-itme wow fadeIn"  style="background: url('<?php echo $IMMOVABLE['Immovable_index_01']['Immovable_url']; ?>');">
                            <a href="<?php echo $IMMOVABLE['Immovable_index_01']['Immovable_link']; ?>">
                                <div class="list-itme-bg">
                                    <div class="list-itme-content">
                                        <h2><?php echo $IMMOVABLE['Immovable_index_01']['Immovable_title']; ?></h2>
                                        <p><?php echo $IMMOVABLE['Immovable_index_01']['Immovable_description']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endif?>
                    <?php if ($IMMOVABLE['Immovable_index_02']['Immovable_title']): ?>
                    <div class="list-itme wow fadeIn"  style="background: url('<?php echo $IMMOVABLE['Immovable_index_02']['Immovable_url']; ?>');">
                        <a href="<?php echo $IMMOVABLE['Immovable_index_02']['Immovable_link']; ?>">
                            <div class="list-itme-bg">
                                <div class="list-itme-content">
                                    <h2><?php echo $IMMOVABLE['Immovable_index_02']['Immovable_title']; ?></h2>
                                    <p><?php echo $IMMOVABLE['Immovable_index_02']['Immovable_description']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endif?>
                    <?php if ($IMMOVABLE['Immovable_index_03']['Immovable_title']): ?>
                    <div class="list-itme wow fadeIn"  style="background: url('<?php echo $IMMOVABLE['Immovable_index_03']['Immovable_url']; ?>');">
                        <a href="<?php echo $IMMOVABLE['Immovable_index_03']['Immovable_link']; ?>">
                            <div class="list-itme-bg">
                                <div class="list-itme-content">
                                    <h2><?php echo $IMMOVABLE['Immovable_index_03']['Immovable_title']; ?></h2>
                                    <p><?php echo $IMMOVABLE['Immovable_index_03']['Immovable_description']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endif?>
                    <?php if ($IMMOVABLE['Immovable_index_04']['Immovable_title']): ?>
                    <div class="list-itme wow fadeIn"  style="background: url('<?php echo $IMMOVABLE['Immovable_index_04']['Immovable_url']; ?>');">
                        <a href="<?php echo $IMMOVABLE['Immovable_index_04']['Immovable_link']; ?>">
                            <div class="list-itme-bg">
                                <div class="list-itme-content">
                                    <h2><?php echo $IMMOVABLE['Immovable_index_04']['Immovable_title']; ?></h2>
                                    <p><?php echo $IMMOVABLE['Immovable_index_04']['Immovable_description']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endif?>
                </div>
            </div>
            </div>
        </div>
    </div>

<?php get_footer();?>