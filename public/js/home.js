const navItems = document.querySelectorAll('.navigation') ;
const title = document.querySelector('#title') ;
const subTitle = document.querySelector('#sub-title') ;
const buton = document.querySelector('.bouton') ;

const transition = new TimelineMax({paused: true}) ;

transition
.from(title, 0.5, {y: -100, opacity: 0})
.from(subTitle, 0.5, {opacity: 0})
.from(buton, 0.2, {y: 100, opacity: 0})

transition.play() ;
