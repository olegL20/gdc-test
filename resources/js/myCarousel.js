$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: false,
  
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    },
    1600: {
      items: 4
    },
    1920: {
      items: 5
    }
  }
})