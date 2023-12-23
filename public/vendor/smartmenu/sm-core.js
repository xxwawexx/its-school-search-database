(function($) {

    $.SmartMenus.prototype.old_init = $.SmartMenus.prototype.init;
    $.SmartMenus.prototype.init = function(refresh) {
        if (!refresh && !this.$root.hasClass('sm-vertical')) {
            var $originalItems = this.$root.children('li'),
                $moreSub = this.$root.clone().removeAttr('id').removeAttr('class').addClass('dropdown-menu'),
                $moreSubItems = $moreSub.children('li'),
                $moreItem = $('<li><a href="#">More <span class="caret"></span></a></li>').append($moreSub).appendTo(this.$root),
                self = this,
                vieportW,
                hiddenItems = [],
                hiddenMoreItems = [];
        }

        this.old_init(refresh);

        if (!refresh && !this.$root.hasClass('sm-vertical')) {
            function handleResize(force) {
                var curWidth = $(window).width();
                if (vieportW !== curWidth || force) {
                    // hide More item
                    $moreItem.detach();

                    // show all main menu items
                    $.each(hiddenItems, function() {
                        $(this).appendTo(self.$root);
                    });
                    hiddenItems = [];

                    // show all More sub items
                    $.each(hiddenMoreItems, function() {
                        $(this).prependTo($moreSub);
                    });
                    hiddenMoreItems = [];

                    // if in desktop view and the last item is wrapped
                    if (!self.$root.hasClass('sm-vertical') && (/^(left|right)$/.test(self.$firstLink.parent().css('float')) || self.$firstLink.parent().css('display') == 'table-cell') && $originalItems.eq(-1)[0].offsetTop != $originalItems.eq(0)[0].offsetTop) {
                        // show More item
                        $moreItem.appendTo(self.$root);

                        // while the More item is wrapped
                        while ($moreItem[0].offsetTop != $originalItems.eq(0)[0].offsetTop) {
                            hiddenItems.unshift($moreItem.prev('li').detach());
                        };

                        // hide proper More sub items
                        $moreSubItems.slice(0, $moreSubItems.length - hiddenItems.length).each(function() {
                            hiddenMoreItems.unshift($(this).detach());
                        });
                    }

                    // save new viewport width
                    vieportW = curWidth;
                }
            }
            handleResize();

            $(window).bind({
                'load.smartmenus': function() {
                    handleResize(true);
                },
                'resize.smartmenus': handleResize
            });
        }
    };

    // Fix isCollapsible method
    $.SmartMenus.prototype.isCollapsible = function() {
        return this.$root.find('ul').eq(0).css('position') == 'static';
    };

})(jQuery);


// SmartMenus init
$(function() {
    $('#main-menu').smartmenus({
        subMenusSubOffsetX: 1,
        subMenusSubOffsetY: -8,
        showTimeout: 0,
        hideTimeout: 0,
        showFunction: function($ul, complete) { $ul.fadeIn(250, complete); }
    });

    $('#mob-menu-drop').click(function() {
        $('#main-menu').toggle("blind");
        $(this).toggleClass( "active" );
    });

    if ($(window).width() < 767) {
        $('#main-menu .w-sub').click(function(){
            $(this).parent().siblings().hide();
            $(this).hide();
            $(this).parent().find('ul').first().fadeIn(200);

        });

        $('#main-menu .back').click(function(){

            $(this).parent().hide();
            $(this).parent().parent().find('a').first().show();
            $(this).parent().parent().siblings().fadeIn(200);

        });
    }


});
