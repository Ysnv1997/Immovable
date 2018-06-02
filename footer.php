   
    <footer class="footer">
        <div class="footer-content">
            <div class="footerIcon">
                <ul>
                    <li><a href="" class="onPjax"><span class="iconfont icon-github"></span></a></li>
                    <li><a href="" class="onPjax"><span class="iconfont icon-qq"></span></a></li>
                    <li><a href="" class="onPjax"><span class="iconfont icon-weixin"></span></a></li>
                    <li><a href="" class="onPjax"><span class="iconfont icon-weibo"></span></a></li>
                    <li><a href="" class="onPjax"><span class="iconfont icon-facebook3"></span></a></li>
                    <li><a href="" class="onPjax"><span class="iconfont icon-twitter"></span></a></li>
                </ul>
            </div>
            <p>所有版权©归属于 www.stayma.cn  一切图标来源于开源图标库 本站LOGO归属马林灯所有</p>
            <p> <a href="">渝ICP备17003755号-2</a> | <a href="">Stay Ma</a> | Powered by <a href="">WordPress</a> | ©2018</p>
        </div>
    </footer>
    <!-- 弹窗集合 -->
    <div class="Popup">
        <!-- 导航菜单弹窗 -->
        <div class="nav-popup" id="nav-popup">
                <?php
                    wp_nav_menu( array(
                         'menu_class'=> 'modal fade',
                         'menu_id'=>'nav',
                         'container'=>'flase',
                         'item_spacing'=>'preserve'
                    ) );?>
        </div>
        <!-- 搜索弹窗 -->
        <div class="searchPopup" id="searchPopup">
            <div class="header-search">
                <form action="" action="<?php echo home_url( '/' ); ?>" method="GET">
                    <input type="text" name="s" value="" placeholder="搜索相关内容" id="searchInput">
                </form>
            </div>
        </div>
    </div>
</body>
<script src="<?php bloginfo('template_url'); ?>/js/macy.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.pjax.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/public.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
</html>