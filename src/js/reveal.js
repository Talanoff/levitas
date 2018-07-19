const ScrollReveal = require('scrollreveal');

window.sr = ScrollReveal();

sr.reveal('section, footer', {
  distance: '50px',
  mobile: false
});

sr.reveal('.section-title', {
  origin: 'left',
  distance: '150px',
  duration: 1000
})

sr.reveal('ol li, ul li, table td', {
  origin: 'top',
  distance: '100px'
}, 20)

sr.reveal('.palisade', {
  origin: 'right',
  distance: '300px',
  duration: 1000
})

sr.reveal('header', {
  origin: 'top',
  distance: '50px'
})