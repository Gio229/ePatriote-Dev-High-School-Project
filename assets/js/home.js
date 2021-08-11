const navItems = document.querySelectorAll('.navigation') ;
const title = document.querySelector('#title') ;
const subTitle = document.querySelector('#sub-title') ;
const buton = document.querySelector('.bouton') ;

const transition = new TimelineMax({paused: true}) ;

transition
.from(title, 1, {y: -100, opacity: 0})
.from(subTitle, 1, {opacity: 0})
.from(buton, 0.8, {y: 100, opacity: 0})
.staggerFrom(navItems, 0.5, {y: -50, opacity: 0}, 0.2, '-=1')

transition.play() ;
