/* Set the width of the dah-nav to 250px (show it) */
function openNav() {
    document.getElementById("dash").style.width = "250px";
  }
  
  /* Set the width of the dah-nav to 0 (hide it) */
  function closeNav() {
    document.getElementById("dash").style.width = "0px";
  }

/* animation for the programme of the student (adding and removing block) */

let prog = document.getElementsByClassName("prog");
let i;

for (i = 0; i < prog.length; i++) {
  prog[i].addEventListener("click", function() {

    this.classList.toggle("active");

    let panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }

    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

/*tabs system */

let tabs = document.querySelectorAll('.tabs li a') ;
let hash = window.location.hash ;

let affichOnglet = (el)=>{
    let div = el.parentElement.parentElement.parentElement ;
    let li =  div.querySelector('.tabs .tab-active') ;
    let content = div.querySelector('.tab-content.tab-active')  ;
    if(el.parentElement.classList.contains('active')){
        //console.log(false) ;
        return false ;
    }
    li.classList.remove('tab-active') ;
    el.parentElement.classList.add('tab-active') ;

    content.classList.remove('tab-active') ;
    div.querySelector(el.getAttribute('href')).classList.add('tab-active') ;
    content.classList.remove('transit') ;
    window.setTimeout(()=>{
        div.querySelector(el.getAttribute('href')).classList.add('transit') ;
    },100) ;
    
}

tabs.forEach((el)=>{
    

    if(el.href === hash){
        affichOnglet(el) ;
    }else{
        el.addEventListener('click', (e)=>{
            affichOnglet(el) ;
        }) 
    }


    
})

/*animation for the notes system*/

function openNote() {
  document.getElementById("note").style.width = "95%";
}

function closeNote() {
  document.getElementById("note").style.width = "0px";
}