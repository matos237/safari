
/* SLIDESHOW */

let slideIndex = 0;
slideshow();

function slideshow() {
  let i;
  let slides = document.getElementsByClassName("slide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(slideshow, 4000);
}

/* STICKY NAVBAR */

window.onscroll = function() {
    stickyNavbar()
};

var navbar = document.getElementById("nav");

var sticky = navbar.offsetTop;

function stickyNavbar() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }

var accordion = document.getElementsByClassName('accordion');

for(a of accordion){
a.addEventListener("click",function(){
    this.classList.toggle('active');
})
}

function rezervuj(){
  alert("Funkcia je momentálne nedostupná. Skúste prosím neskôr.")
}

function validateTextArea() {
  let x = document.forms["formular"]["textarea"].value;
  if (x == "") {
    alert("Píšeš sťažnosť bez sťažnosti?");
    return false;
  }
}