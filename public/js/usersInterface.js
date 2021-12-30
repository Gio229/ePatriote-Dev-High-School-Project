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
  document.getElementById("note").style.display = "block";
  //document.getElementById("note").style.height = "30vh";
}

function closeNote() {
  //document.getElementById("note").style.height = "0px";  
  document.getElementById("note").style.display = "none";

}

/*animation for the manag-parents system*/

function openManagParents() {
  document.getElementById("manag-parents").style.width = "95%";
}

function closeManagParents() {
  document.getElementById("manag-parents").style.width = "0px";
}


   /* if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }*/

  /*  let forms = document.querySelectorAll('form');

    forms.forEach((form)=>{
    

     form.onsubmit = (e)=>{
       e.preventDefault();
        return true ;
     }
  
  })*/

    let next = document.querySelector(".next");
    
    next.addEventListener("click", ()=>{
  
      
      let nextForm = document.querySelector(".nextForm");

      if(next.classList.contains('active')){
        next.classList.remove('active') ;
        nextForm.style.maxHeight = '0px';
        nextForm.style.display = 'none'
        
      }else{
        next.classList.add('active');
        nextForm.style.display = 'block';
        nextForm.style.maxHeight = nextForm.scrollHeight + "px";
      }
  
    });