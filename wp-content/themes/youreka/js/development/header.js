$(function () {

    var $parentNavLi = $('.header .menu-item-has-children');

    $parentNavLi.each(function () {
        var $this = $(this),
            $link = $this.children('a'),
            $mobileToggle = $this.find('.mobileToggle'),
            $subMenu = $this.children('.sub-menu'),
            activeMobileClass = 'item-active-mobile',
            activeClass = 'item-active';

        $link.on('mouseenter', function () {
            $this.addClass(activeClass);
        });

        $this.on('mouseleave', function () {
            $this.removeClass(activeClass);
        });

        $mobileToggle.on('click', function (e) {
            e.preventDefault();
            $this.toggleClass(activeMobileClass);
            $subMenu.slideToggle();
        });
    });

    $('[data-class="header"]').USER_MobileNav();

});

(function ($, window, document, undefined) {

    var name = 'MobileNav';

    function MobileNav(element, index, options) {
        this.$el = $(element);
        this.options = $.extend({}, $.USER.fn[name].defaults, options);
        this.init();
    }

    MobileNav.prototype = {

        name: name,

        init: function () {

            var self = this;

            this.$toggle = this.$el.find('[data-class="nav__toggle"]');
            this.activeClass = 'nav__active';

            this.$toggle.on('click', function (e) {
                e.preventDefault();

                self.$el.toggleClass(self.activeClass);
            });
        }
    };

    $.USER.fn.pluginGenerator(MobileNav);

})
(jQuery, window, document);
