<?php   
/*
Template Name: Home
*/  
?>  
<?php get_header(); ?>
    <div class="Pjax-content">
        <div class="page-content" data-is='index'>
            <div class="blog index">
                <div class="index-info">
                    <div>
                        <h1 class="index-info-name wow bounceInLeft">STAY MA</h1>
                        <p class="index-info-word wow bounceInRight"> 一个蹩脚前端程序员的个人博客</p>
                    </div>
                </div>
                <div class="blog-bg">
                    <div class="blog-bg-img" style="background:url(<?php bloginfo('template_url'); ?>/img/2323.jpg);"></div>
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
                    <div class="list-itme wow bounceInUp"  style="background: url('<?php bloginfo('template_url'); ?>/img/2-2.jpg');">
                        <a href="">
                            <div class="list-itme-bg">
                                <div class="list-itme-content">
                                    <h2>WORDPRESS Immovable 主题</h2>
                                    <p>一个精美、优雅、丝滑的博客主题！</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-itme wow bounceInUp" style="background: url('<?php bloginfo('template_url'); ?>/img/2-3.jpg');">
                        <a href="">
                            <div class="list-itme-bg">
                                <div class="list-itme-content">
                                    <h2>WORDPRESS STAY 主题</h2>
                                    <p>一个精美、优雅、丝滑的博客主题！</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-itme wow bounceInUp" style="background: url('<?php bloginfo('template_url'); ?>/img/4-1.jpg');">
                        <a href="">
                            <div class="list-itme-bg">
                                <div class="list-itme-content">
                                    <h2>关于我</h2>
                                    <p>一个精美、优雅、丝滑的博客主题！</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-itme wow bounceInUp" style="background: url('<?php bloginfo('template_url'); ?>/img/4-3.jpg');">
                        <a href="">
                            <div class="list-itme-bg">
                                <div class="list-itme-content">
                                    <h2>WORDPRESS STAY MA主题</h2>
                                    <p>一个精美、优雅、丝滑的博客主题！</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>