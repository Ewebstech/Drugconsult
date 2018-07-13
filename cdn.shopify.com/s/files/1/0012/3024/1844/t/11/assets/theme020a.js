/* Jonathan Snook - MIT License - https://github.com/snookca/prepareTransition */
(function(a){a.fn.prepareTransition=function(){return this.each(function(){var b=a(this);b.one("TransitionEnd webkitTransitionEnd transitionend oTransitionEnd",function(){b.removeClass("is-transitioning")});var c=["transition-duration","-moz-transition-duration","-webkit-transition-duration","-o-transition-duration"];var d=0;a.each(c,function(a,c){d=parseFloat(b.css(c))||d});if(d!=0){b.addClass("is-transitioning");b[0].offsetWidth}})}})(jQuery);

/* Run function after window resize */
var afterResize=(function(){var t={};return function(callback,ms,uniqueId){if(!uniqueId){uniqueId="Don't call this twice without a uniqueId";}if(t[uniqueId]){clearTimeout(t[uniqueId]);}t[uniqueId]=setTimeout(callback,ms);};})();


window.theme = window.theme || {};

theme.cacheSelectors = function () {
  theme.cache = {
    // General
    $w: $(window),
    $body: $('body'),

    // Mobile Nav
    $mobileNavTrigger: $('#MobileNavTrigger'),
    $mobileNav: $('#MobileNav'),
    $mobileSublistTrigger: $('.mobile-nav__sublist-trigger'),

     // Cart Page
    cartNoteAdd: '.cart__note-add',
    cartNote: '.cart__note',
     // Search Page       
    $searchInput: $('.search-bar__input'),
    $searchSubmit: $('.search-bar__submit')
    
  }
};

theme.init = function () {
  theme.cacheSelectors();
  theme.mobileNav();  
 theme.cartPage();
  theme.drawersInit();
};


theme.cartPage = function () {
  

  theme.cache.$body.on('click', theme.cache.cartNoteAdd, function () {
    $(this).addClass('is-hidden');
    $(theme.cache.cartNote).addClass('is-active');   
  });
};
theme.drawersInit = function () {
  // Add required classes to HTML
  $('#PageContainer').addClass('drawer-page-content');  
  $('.js-drawer-open-top').attr('aria-controls', 'SearchDrawer').attr('aria-expanded', 'false');  
  theme.SearchDrawer = new theme.Drawers('SearchDrawer', 'top', {'onDrawerOpen': theme.searchFocus});
};

theme.searchFocus = function () {
  theme.cache.$searchInput.focus();
  // set selection range hack for iOS
  theme.cache.$searchInput[0].setSelectionRange(0, theme.cache.$searchInput[0].value.length);
};

theme.searchSubmit = function () {
  theme.cache.$searchSubmit.on('click', function(evt) {
    if (theme.cache.$searchInput.val().length == 0) {
      evt.preventDefault();
      theme.cache.$searchInput.focus();
    }
  });
};


theme.mobileNav = function () {
  theme.cache.$mobileNavTrigger.on('click', function() {
    theme.cache.$mobileNav.slideToggle(220);
  });

  theme.cache.$mobileSublistTrigger.on('click', function(evt) {
    var $el = $(this);

    // Enable commented out if statement to allow direct clicking on trigger link
    // if (!$el.hasClass('is-active')) {
      evt.preventDefault();
      $el.toggleClass('is-active').next('.mobile-nav__sublist').slideToggle(200);
    // }
  });
};

/*============================================================================
  Drawer modules
==============================================================================*/
theme.Drawers = (function () {
  var Drawer = function (id, position, options) {
    var defaults = {
      close: '.js-drawer-close',
      open: '.js-drawer-open-' + position,
      openClass: 'js-drawer-open',
      dirOpenClass: 'js-drawer-open-' + position
    };

    this.$nodes = {
      parent: $('body, html'),
      page: $('#PageContainer')
    };

    this.config = $.extend(defaults, options);
    this.position = position;

    this.$drawer = $('#' + id);

    if (!this.$drawer.length) {
      return false;
    }

    this.drawerIsOpen = false;
    this.init();
  };

  Drawer.prototype.init = function () {
    $(this.config.open).on('click', $.proxy(this.open, this));
    this.$drawer.on('click', this.config.close, $.proxy(this.close, this));
  };

  Drawer.prototype.open = function (evt) {
    // Keep track if drawer was opened from a click, or called by another function
    var externalCall = false;

    // Prevent following href if link is clicked
    if (evt) {
      evt.preventDefault();
    } else {
      externalCall = true;
    }

    // Without this, the drawer opens, the click event bubbles up to $nodes.page
    // which closes the drawer.
    if (evt && evt.stopPropagation) {
      evt.stopPropagation();
      // save the source of the click, we'll focus to this on close
      this.$activeSource = $(evt.currentTarget);
    }

    if (this.drawerIsOpen && !externalCall) {
      return this.close();
    }

    // Add is-transitioning class to moved elements on open so drawer can have
    // transition for close animation
    this.$drawer.prepareTransition();

    this.$nodes.parent.addClass(this.config.openClass + ' ' + this.config.dirOpenClass);
    this.drawerIsOpen = true;

    // Set focus on drawer
    this.trapFocus({
      $container: this.$drawer,
      $elementToFocus: this.$drawer.find('.drawer__close-button'),
      namespace: 'drawer_focus'
    });

    // Run function when draw opens if set
    if (this.config.onDrawerOpen && typeof(this.config.onDrawerOpen) == 'function') {
      if (!externalCall) {
        this.config.onDrawerOpen();
      }
    }

    if (this.$activeSource && this.$activeSource.attr('aria-expanded')) {
      this.$activeSource.attr('aria-expanded', 'true');
    }

    this.$nodes.parent.on('keyup.drawer', $.proxy(function (evt) {
      // close on 'esc' keypress
      if (evt.keyCode === 27) {
        this.close();
        return false;
      }
    }, this));

    // Lock scrolling on mobile
    this.$nodes.page.on('touchmove.drawer', function () {
      return false;
    });

    this.$nodes.page.on('click.drawer', $.proxy(function () {
      this.close();
      return false;
    }, this));
  };

  Drawer.prototype.close = function () {
    if (!this.drawerIsOpen) { // don't close a closed drawer
      return;
    }

    // deselect any focused form elements
    $(document.activeElement).trigger('blur');

    // Ensure closing transition is applied to moved elements, like the nav
    this.$drawer.prepareTransition();

    this.$nodes.parent.removeClass(this.config.dirOpenClass + ' ' + this.config.openClass);

    this.drawerIsOpen = false;

    // Remove focus on drawer
    this.removeTrapFocus({
      $container: this.$drawer,
      namespace: 'drawer_focus'
    });

    this.$nodes.page.off('.drawer');
    this.$nodes.parent.off('.drawer');
  };

  /**
  * Traps the focus in a particular container
  *
  * @param {object} options - Options to be used
  * @param {jQuery} options.$container - Container to trap focus within
  * @param {jQuery} options.$elementToFocus - Element to be focused when focus leaves container
  * @param {string} options.namespace - Namespace used for new focus event handler
  */
  Drawer.prototype.trapFocus = function (options) {
    var eventName = options.eventNamespace
      ? 'focusin.' + eventNamespace
      : 'focusin';

    if (!options.$elementToFocus) {
      options.$elementToFocus = options.$container;
    }

    options.$container.attr('tabindex', '-1');
    options.$elementToFocus.focus();

    $(document).on(eventName, function (evt) {
      if (options.$container[0] !== evt.target && !options.$container.has(evt.target).length) {
        options.$container.focus();
      }
    });
  };

  /**
   * Removes the trap of focus in a particular container
   *
   * @param {object} options - Options to be used
   * @param {jQuery} options.$container - Container to trap focus within
   * @param {string} options.namespace - Namespace used for new focus event handler
   */
  Drawer.prototype.removeTrapFocus = function (options) {
    var eventName = options.namespace
      ? 'focusin.' + options.namespace
      : 'focusin';

    if (options.$container && options.$container.length) {
      options.$container.removeAttr('tabindex');
    }

    $(document).off(eventName);
  };

  return Drawer;
})();
// Initialize shop's JS on docready
$(theme.init);
