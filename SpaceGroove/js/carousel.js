$('.carousel').flickity({
    cellAlign: 'left',
    contain: true,
    lazyLoad: 2, // load images in selected slide and next 2 slides and previous 2 slides
    wrapAround: true, // At the end of cells, wrap-around to the other end for infinite scrolling
    autoPlay: 2000,
    pauseAutoPlayOnHover: true
});