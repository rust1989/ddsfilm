(function($){
    $.fn.extend({
        dropMenu: function(menuItem, subMenuItem){
            var root = $(this), // 首先找到菜单（的根节点） 
                CLS_HAS_MENU = 'has-sub-menu', 
                isIE = $.browser.msie, // 是否为 IE 浏览器
                version = $.browser.version; // 浏览器的版本
			
            
            // 没有找到菜单则退出
            // root.find(':first') 都是得到 document.getElementById('top-navigation')
            if (!root[0]) {
                return false;
            }
            
            // 默认的菜单标签为 li 标签（选择器）
            if (!menuItem) {
                menuItem = 'li';
            }

            // 默认的子菜单标签为 ul 标签（选择器）
            if (!subMenuItem) {
                subMenuItem = 'ul';
            }
            
            // $(root).find(menuItem) 找到导航菜单下所有的 li 节点
            // 通过 each() 遍历添加相应的处理事件 mouseover,mouseout 和 tab 操作的支持
           var wid;
		   var left;
		    $(root).find(menuItem).each(function(i, li){
				
            var curMenu = $(li),
			
                // 找到 li 下的第一个 a 标签，添加 tab 键的支持时需要用到的
            curLink = curMenu.is('a') ? curMenu : $(curMenu.find('a:first')), 
            // 找到当前 li 标签下的子菜单
            subMenus = $(subMenuItem, curMenu), 
			
            // 判断是否有子菜单节点
            hasMenu = subMenus.length >= 1, 
            // 当前 li 标签下的子菜单
            curSubMenu = null,
            // 当前子菜单的最后一项（a 标签） 
            curSubMenuLastItem = null;
			var hei=35;
            // 显示子菜单
            show = function(){
                // show sub menu 发现 IE6 中使用 show() 方无法显示二级以下的子菜单
                // 所以很无赖的 hack 了一下
                if (!isIE || (isIE && version > 6)) {
                    curSubMenu.stop().show().animate({'opacity':1,'height':hei},200);
                }
                else {
                    curSubMenu.css('display', 'block');
                }
				//curMenu.addClass("selected");
            }, 
            // 隐藏子菜单
            hide = function(){
                // hide sub menu
                if (!isIE || (isIE && version > 6)) {
                    curSubMenu.stop().hide().animate({'opacity':0,'height':'0px'},200);
                }
                else {
                    curSubMenu.css('display', 'none');
                }
				//curMenu.removeClass("selected");
            };
            
            // 只在有子菜单的时候才做相应的处理
            if (hasMenu) {
                
				
                // 找到当前 li 对应的子菜单，而不是把更次级的子菜单都找到
                // 不习惯用 subMenus.get(0)
                curSubMenu = $(subMenus[0]);
                // 当前子菜单的最后一项（a 标签） 
				curSubMenuLastItem = curSubMenu.find('a:last');
				
                // mouse event
                curMenu.hover(show, hide);
                // key(tab key) event
                // 获得焦点是在当前 li 下的第一个A标签上处理
                curLink.focus(show);
                // 失去焦点则需要是tab让子菜单的最后一个菜单项都走过了，才关闭子菜单
                curSubMenuLastItem.blur(hide);
            }
            });
        }
    });
    
})(jQuery);	// JavaScript Document