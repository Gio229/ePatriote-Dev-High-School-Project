const navItems = document.querySelectorAll('.navigation') ;
const title = document.querySelector('#title') ;
const subTitle = document.querySelector('#sub-title') ;
const buton = document.querySelector('#sub-title') ;

const transition = new DocumentTimeline({paused: true}) ;

transition
.from(title, 1, {y: -100, opacity: 0}) ;

transition.play() ;
