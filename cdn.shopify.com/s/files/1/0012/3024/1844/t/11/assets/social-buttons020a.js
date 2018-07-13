window.timberSocial = window.timberSocial || {};

timberSocial.cacheSelectors = function () {
  timberSocial.cache = {
    $shareButtons: $('.social-sharing'),
  }
};

timberSocial.init = function () {
  timberSocial.cacheSelectors();
  timberSocial.sliders();
};

timberSocial.socialSharing = function () {

  timberSocial.cacheSelectors();

  // General selectors
  var $buttons = timberSocial.cache.$shareButtons,
      $shareLinks = $buttons.find('a'),
      permalink = $buttons.attr('data-permalink');

  // Share button selectors
  var $fbLink = $('.share-facebook'),
      $twitLink = $('.share-twitter'),
      $pinLink = $('.share-pinterest'),
      $googleLink = $('.share-google');

  if ( $fbLink.length ) {
    $.getJSON('https://graph.facebook.com/?id=' + permalink + '&callback=?', function(data) {
      if (data.shares) {
        $fbLink.find('.share-count').text(data.shares).addClass('is-loaded');
      } else {
        $fbLink.find('.share-count').remove();
      }
    });
  };

  if ( $twitLink.length ) {
    $.getJSON('https://cdn.api.twitter.com/1/urls/count.json?url=' + permalink + '&callback=?', function(data) {
      if (data.count > 0) {
        $twitLink.find('.share-count').text(data.count).addClass('is-loaded');
      } else {
        $twitLink.find('.share-count').remove();
      }
    });
  };

  if ( $pinLink.length ) {
    $.getJSON('https://api.pinterest.com/v1/urls/count.json?url=' + permalink + '&callback=?', function(data) {
      if (data.count > 0) {
        $pinLink.find('.share-count').text(data.count).addClass('is-loaded');
      } else {
        $pinLink.find('.share-count').remove();
      }
    });
  };

  if ( $googleLink.length ) {
    // Can't currently get Google+ count with JS, so just pretend it loaded
    $googleLink.find('.share-count').addClass('is-loaded');
  }

  // Share popups
  $shareLinks.on('click', function(e) {
    e.preventDefault();
    var el = $(this),
        popup = el.attr('class').replace('-','_'),
        link = el.attr('href'),
        w = 700,
        h = 400;

    // Set popup sizes
    switch (popup) {
      case 'share-twitter':
        h = 300;
        break;
      case 'share-fancy':
        w = 480;
        h = 720;
        break;
      case 'share-google':
        w = 500;
        break;
    }

    window.open(link, popup, 'width=' + w + ', height=' + h);
  });
}


$(timberSocial.socialSharing)

