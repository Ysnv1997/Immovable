(function() {
    var App = {
        SetBodyColor:function(){
            var content = $('.page-content'),
                isPage = content.attr('data-is'),
                searchInput = $('#searchInput'),
                setBgColor = $('body,#searchPopup,#nav-popup');
            if(isPage == 'index'){
                setBgColor.css({
                    background: 'rgba(0,0,0,1)'
                });
                searchInput.css('color',"#fff")
                $()
            }else if(isPage == 'archive'){
                setBgColor.css({
                    background: 'rgba(242,242,242,1)'
                });
                searchInput.css('color',"#000")
            }else if(isPage == 'single'){
                setBgColor.css({
                    background: 'rgba(242,242,242,1)'
                });
                searchInput.css('color',"#000")
            }
        },
        MyMacy:function(){
            if(document.getElementById('post-list')){
                macy = Macy({
                    container: '#post-list',
                    trueOrder: false,
                    waitForImages: false,
                    margin: 20,
                    columns: 3,
                    breakAt: {
                        768:{
                          columns: 1,
                          margin: 10,
                        },
                        920:{
                          columns: 2,
                          margin: 15,
                        }
                    }
                });
            }
        },
        Window: function() {
            // 禁止复制
            document.onselectstart = function() {
                return false;
            }
            // 滚动特效配置
            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: true,
                live: true
            });
            wow.init();

            // 图片懒加载配置
            $("img.lazy").lazyload({
                effect: "fadeIn"
            });

            // 图片灯箱配置
            $(".blog-article-content img").each(function() {
                var strA = "<a href='" + this.src + "' class='image-link wow bounceInUp onPjax'></a>";
                $(this).wrap(strA);
            });
            $('.image-link').magnificPopup({ type: 'image' });

            // 首页轮播图配置
            var mySwiper = new Swiper('.swiper-container', {
                loop: true,
                pagination: '.swiper-pagination',
                autoplay: 5000
            });
            // 瀑布流

            // PJAX
            $(document).pjax('a[target!=_blank][class!=onPjax]', '.Pjax-content', {
                        fragment: '.Pjax-content',
                        timeout: 1300
                    });
                    $(document).on('pjax:send', function() {
                        NProgress.start();

                    });
                    $(document).on('pjax:complete', function() {
                        NProgress.done();
                        App.SetBodyColor();
                        App.MyMacy();
                        App.ListAjax();
                        App.Popup.OnPopup('#menu', '#nav-popup', 'icon-category', 'icon-close', 'nav-popup-look')
                        App.Popup.OnPopup('#menu', '#nav-popup', 'icon-category', 'icon-close', 'nav-popup-look')
                    });
        },
        //     点击id   弹窗id   点前图标  点后图标    弹窗显示动画
        Popup:{
            ClickPopup:function(clickId, popupId, iconQClass, iconHClass, lookClass) {
                var menu = $(clickId),
                    Popup = $(popupId);
                menu.on('click', function() {
                    if (menu.attr('data-open') == 'false'){
                        menu.attr('data-open', 'true').removeClass(iconQClass).addClass(iconHClass);
                        Popup.addClass(lookClass)
                    } else {
                        menu.attr('data-open', 'false').removeClass(iconHClass).addClass(iconQClass);
                        Popup.removeClass(lookClass)
                    }
                })
            },
            OnPopup:function(clickId, popupId, iconQClass, iconHClass, lookClass){
                    var menu = $(clickId),
                        Popup = $(popupId);
                            menu.attr('data-open', 'false').removeClass(iconHClass).addClass(iconQClass);
                            Popup.removeClass(lookClass)
            }
        },
        Scroll: function(BgImgId, BgCssClass) {
            var iBgCo = $(BgImgId)
            scrollTop = $(window).scrollTop();
            if (scrollTop == '0') {
                iBgCo.removeClass(BgCssClass)
            } else if (scrollTop = 80) {
                iBgCo.addClass(BgCssClass)
            }
        },
        ListAjax: function() {

            var nextButt = $('#listAjax'),
                list = $('#post-list');
            // 处理加载pjax冲突
            $('#listAjax a').addClass('onPjax');
            nextButt.on('click', 'a', function() {
                var _herf = this.href;
                if (_herf != undefined) {
                    $.ajax({
                        url: _herf,
                        type: "get",
                        beforeSend: function() {},
                        error: function(request) {},
                        success: function(data) {
                            var $res = $(data).find("#post");
                            $('#post-list').append($res);
                            macy.runOnImageLoad(function() {
                                macy.recalculate(true);
                            }, true);
                            var newhref = $(data).find('#listAjax > a').attr("href");
                            if (newhref != undefined) {
                                $('#listAjax > a').attr("href", newhref);
                            } else {
                                $('#listAjax > a').hide();
                            }
                        }
                    });
                }
                return false;
            })
        },
        Comment: function() {
            var commBut = $('.comments-butt'),
                commCon = $('.comment-content');
            commBut.on('click', function() {
                if ($(this).attr('data-open') == 'false') {
                    $(this).attr('data-open', 'true');
                    commCon.fadeIn(600);
                } else {
                    $(this).attr('data-open', 'false');
                    commCon.fadeOut(600);
                }
            })

        }
    };
    App.SetBodyColor();
    App.MyMacy();
    App.Window();
    App.Popup.ClickPopup('#menu', '#nav-popup', 'icon-category', 'icon-close', 'nav-popup-look');
    // 展开弹窗1时，关闭其他弹窗
    $('#menu').on('click',function(){
        App.Popup.OnPopup('#search', '#searchPopup', 'icon-search', 'icon-close', 'searchPopup-look')
    })
    App.Popup.ClickPopup('#search', '#searchPopup', 'icon-search', 'icon-close', 'searchPopup-look');
    // 展开弹窗2时，关闭其他弹窗
    $('#search').on('click',function(){
        App.Popup.OnPopup('#menu', '#nav-popup', 'icon-category', 'icon-close', 'nav-popup-look')
    })
    App.ListAjax();
    App.Comment();


    // 滚动条事件
    $(window).scroll(function(e) {
        App.Scroll('.blog-bg', 'blog-bg-opacity');
    });



    commentsAjax();

    function commentsAjax() {
        $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
        $('#navigation a').on('click', function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: $(this).attr('href'),
                beforeSend: function() {
                    $body.animate({
                        scrollTop: $('.comments').offset().top - 65
                    }, 1500);
                    $('#navigation').remove();
                    $('.commentlist').fadeOut(800);
                },
                dataType: "html",
                success: function(out) {
                    var result = $(out).find('.commentlist');
                    var belownav = $(out).find('#navigation');
                    $('#ajax-comments-title').after(result.fadeIn(800));
                    setTimeout(function() {
                        result.after(belownav);
                        commentsAjax();
                    }, 1000)
                }
            });
        });
    }

    ajax_comment();

    function ajax_comment() {
        var i = 0,
            got = -1,
            len = document.getElementsByTagName('script').length;
        while (i <= len && got == -1) {
            var js_url = document.getElementsByTagName('script')[i].src,
                got = js_url.indexOf('app.js');
            i++;
        }
        var ajax_php_url = js_url.replace('js/app.js', 'inc/comments-ajax.php'),
            wp_url = js_url.substr(0, js_url.indexOf('/wp-content/')),
            pic_sb_url = wp_url + '/wp-admin/images/wpspin_light.gif',
            pic_no_url = wp_url + '/wp-admin/images/no.png',
            pic_ys_url = wp_url + '/wp-admin/images/yes.png',
            txt1 = ' style="display: none;background: url(',
            txt2 = ') no-repeat left;padding-left:20px;',
            txt3 = '<div id="commentload"' + txt1 + pic_sb_url + txt2 + '">正在提交, 请稍候...</div>',
            txt4 = '<div id="commenterror"' + txt1 + pic_no_url + txt2 + 'margin: 0 auto;">#</div>',
            txt5 = '\n<div style="border:1px solid #ccf;margin-top:1em;"><ol class="commentlist" id="new_comm_',
            txt6 = '\n<ul class="children" id="new_comm_',
            txt7 = '" style="display: none;">',
            txt8 = '\n<span id="success_',
            txt9 = '" style="display:none; background: url(' + pic_ys_url + txt2 + '">提交成功</span></div>\n',
            txtb, num = 0,
            $new_comm;
        $('#submit').attr("disabled", false);
        $('#submit').after(txt3 + txt4);
        $('#commentform').submit(function() {
            $('#submit').attr("disabled", true).fadeTo('slow', 0.2);
            $.ajax({
                url: ajax_php_url,
                data: $('#commentform').serialize(),
                type: 'POST',
                beforeSend: function() {
                    $('#commenterror').hide();
                    $('#commentload').slideDown();
                },
                error: function(request) {
                    $('#commentload').slideUp();
                    $('#commenterror').show('slow').html(request.responseText);
                    setTimeout(function() {
                        $('#submit').attr('disabled', false).fadeTo('slow', 1);
                        $('#commenterror').slideUp();
                    }, 3000);
                },
                success: function(data) {
                    $('textarea').each(function() {
                        this.value = ''
                    });
                    $('#commentload').hide();
                    var t = addComment,
                        cancel = t.I('cancel-comment-reply-link'),
                        temp = t.I('wp-temp-form-div'),
                        respond = t.I(t.respondId),
                        post = t.I('comment_post_ID').value,
                        parent = t.I('comment_parent').value,
                        num_text = num.toString();
                    if (parent == '0') {
                        new_htm = txt5 + num_text + txt7 + '</ol>'
                    } else {
                        new_htm = txt6 + num_text + txt7 + '</ul>';
                        is_div = document.getElementsByTagName('ol')[0].innerHTML.indexOf('div-');
                        if (is_div == -1) {
                            txtb = ''
                        } else {
                            txtb = 'div-'
                        };
                    }
                    new_htm = new_htm + txt8 + num_text + txt9;
                    $('#respond').before(new_htm);
                    var $new_comm = $('#new_comm_' + num_text);
                    $new_comm.append(data).fadeIn(4000);
                    countdown();
                    num++;
                    cancel.style.display = 'none';
                    cancel.onclick = null;
                    t.I('comment_parent').value = '0';
                    if (temp && respond) {
                        temp.parentNode.insertBefore(respond, temp);
                        temp.parentNode.removeChild(temp)
                    }
                }
            });
            return false;
        });
        addComment = {
            moveForm: function(commId, parentId, respondId, postId) {
                var t = this,
                    div, comm = t.I(commId),
                    respond = t.I(respondId),
                    cancel = t.I('cancel-comment-reply-link'),
                    parent = t.I('comment_parent'),
                    post = t.I('comment_post_ID');
                $('#commenterror').hide();
                t.respondId = respondId;
                postId = postId || false;
                if (!t.I('wp-temp-form-div')) {
                    div = document.createElement('div');
                    div.id = 'wp-temp-form-div';
                    div.style.display = 'none';
                    respond.parentNode.insertBefore(div, respond)
                }
                if (post && postId && comm)
                    comm.parentNode.insertBefore(respond, comm.nextSibling);
                post.value = postId;
                parent.value = parentId;
                cancel.style.display = '';
                cancel.onclick = function() {
                    var t = addComment,
                        temp = t.I('wp-temp-form-div'),
                        respond = t.I(t.respondId);
                    $('#commenterror').hide();
                    this.style.display = 'none';
                    this.onclick = null;
                    t.I('comment_parent').value = '0';
                    if (temp && respond) {
                        temp.parentNode.insertBefore(respond, temp);
                        temp.parentNode.removeChild(temp);
                    }
                    return false;
                };
                try {
                    t.I('comment').focus();
                } catch (e) {}
                return false;
            },
            I: function(e) {
                return document.getElementById(e)
            }
        };
        var wait = 15,
            submit_val = $('#submit').val();

        function countdown() {
            if (wait == 0) {
                $('#submit').val(submit_val).attr('disabled', false).fadeTo('slow', 1);
                wait = 15;
            } else {
                $('#submit').val(wait);
                wait--;
                setTimeout(countdown, 1000);
            }
        };
    }


})()