export default {
  init() {
    $('#nav-icon3').click(function() {
      $(this).toggleClass('open');
      $('.banner').removeClass('darkBaner');
      $('#content-mobile').toggleClass('show-mobile-menu');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
