   
    <footer class="footer">
        <div class="footer-content">
            <div class="footerIcon">
                <ul>
                    <?php if(IMMOVABLE['Immovable_Social']['Immovable_GitHub']): ?>
                    <li><a target="_blank" href="<?php echo IMMOVABLE['Immovable_Social']['Immovable_GitHub'];?>" class="onPjax"><span class="iconfont icon-github"></span></a></li>
                    <?php endif; ?>
                    <?php if(IMMOVABLE['Immovable_Social']['Immovable_QQ']): ?>
                    <li><a target="_blank" href="<?php echo IMMOVABLE['Immovable_Social']['Immovable_QQ'] ?>" class="onPjax"><span class="iconfont icon-qq"></span></a></li>
                    <?php endif; ?>
                    <?php if(IMMOVABLE['Immovable_Social']['Immovable_WeiXin']): ?>
                    <li><a target="_blank" href="<?php echo IMMOVABLE['Immovable_Social']['Immovable_WeiXin'] ?>" class="onPjax"><span class="iconfont icon-weixin"></span></a></li>
                    <?php endif; ?>
                    <?php if(IMMOVABLE['Immovable_Social']['Immovable_WeiBo']): ?>
                    <li><a target="_blank" href="<?php echo IMMOVABLE['Immovable_Social']['Immovable_WeiBo'] ?>" class="onPjax"><span class="iconfont icon-weibo"></span></a></li>
                    <?php endif; ?>
                    <?php if(IMMOVABLE['Immovable_Social']['Immovable_Facebook']): ?>
                    <li><a target="_blank" href="<?php echo IMMOVABLE['Immovable_Social']['Immovable_Facebook'] ?>" class="onPjax"><span class="iconfont icon-facebook3"></span></a></li>
                    <?php endif; ?>
                    <?php if(IMMOVABLE['Immovable_Social']['Immovable_Twitter']): ?>
                    <li><a target="_blank" href="<?php echo IMMOVABLE['Immovable_Social']['Immovable_Twitter'] ?>" class="onPjax"><span class="iconfont icon-twitter"></span></a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <p>所有版权©归属于 www.stayma.cn  一切图标来源于开源图标库 本站LOGO归属马林灯所有</p>
            <p> <a href=""><?php echo IMMOVABLE['Immovable_input_upload']['Immovable_Icp'];?></a> | <a href="https://www.stayma.cn">Stay Ma</a> | Powered by <a href="">WordPress</a> | ©2018</p>
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
                <form action="<?php echo home_url( '/' ); ?>" method="GET">
                    <input type="text" name="s" value="" placeholder="搜索相关内容" id="searchInput">
                </form>
            </div>
        </div>
        <!-- 分享窗口 -->
        <div class="share-popup" id="share-popup">
            <div class="share-content">
                <p>分享本站</p>
                <ul>
                    <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php bloginfo('url'); ?>&t=<?php bloginfo('name'); ?>"><span class="iconfont icon-facebook3"></span></a></li>
                    <li><a target="_blank" href="https://service.weibo.com/share/share.php?title=<?php bloginfo('name'); ?>&url=<?php bloginfo('url'); ?>&source=bookmark&appkey=2992571369"><span class="iconfont icon-weibo"></span></a></li>
                    <li><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php bloginfo('name'); ?>&url=<?php bloginfo('url'); ?>"><span class="iconfont icon-twitter"></span></a></li>
                    <p></p>
                    <li><a target="_blank" href=""><span class="iconfont icon-weixin"></span></a></li>
                    <li><a target="_blank" href="http://v.t.qq.com/share/share.php?title=<?php bloginfo('name'); ?>&url=<?php bloginfo('url'); ?>&appkey=118cd1d635c44eab9a4840b2fbf8b0fb"><span class="iconfont icon-qq"></span></a></li>
                    <li><a target="_blank" href="http://connect.qq.com/widget/shareqq/index.html?url=<?php bloginfo('url'); ?>&sharesource=qzone&title=<?php bloginfo('name'); ?>&summary=<?php bloginfo('description'); ?>"><span class="iconfont icon-favoritesfilling"></span></a></li>

                </ul>
            </div>
        </div>
        <!-- 底层黑层 -->
        <div class="buttomBg"></div>
    </div>
</body>
<script src="<?php bloginfo('template_url'); ?>/js/polyfill.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/macy.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.pjax.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/public.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
</html>