import Flickity from 'flickity';
export default {
  init() {
    // JavaScript to be fired on the home page

    var elem = document.querySelector('.main-carousel');
    new Flickity(elem, {
      // options
      cellAlign: 'left',
      contain: true,
      groupCells: 3,
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
