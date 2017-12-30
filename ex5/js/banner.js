var slideIndex = 1;

$(function(){
  showSlides(slideIndex);
});


function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}   
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


var slideIndex = 1;

$(function(){
  show_beach(slideIndex);
});


var slideIndex = 1;

$(function(){
  show_beach(slideIndex);
});


function plusBeach(n) {
  show_beach(slideIndex += n);
}

function currentplusBeach(n) {
  show_beach(slideIndex = n);
}

function show_beach(n) {
  var i;
  var beach = document.getElementsByClassName("banner");
  var dotss = document.getElementsByClassName("dots");
  if (n > beach.length) {slideIndex = 1}   
  if (n < 1) {slideIndex = beach.length}
  for (i = 0; i < beach.length; i++) {
      beach[i].style.display = "none";  
  }
  for (i = 0; i < dotss.length; i++) {
      dotss[i].className = dotss[i].className.replace(" active", "");
  }

  beach[slideIndex-1].style.display = "block";
  dotss[slideIndex-1].className += " active";
}
 
var slideIndex = 1;

$(function(){
  show_mysline(slideIndex);
});
function mysline(n) {
  show_mysline(slideIndex += n);
}

// function currentSlide(n) {
//   show_mysline(slideIndex = n);
// }

function show_mysline(n) {
  var i;
  var sli = document.getElementsByClassName("sline");
  if (n > sli.length) {slideIndex = 1}   
  if (n < 1) {slideIndex = sli.length}
  for (i = 0; i < sli.length; i++) {
      sli[i].style.display = "none";  
  }
  sli[slideIndex-1].style.display = "block";
}

var slideIndex = 1;

$(function(){
  show_myteacher(slideIndex);
});
function myteacher(n) {
  show_myteacher(slideIndex += n);
}

// function currentSlide(n) {
//   show_myteacher(slideIndex = n);
// }

function show_myteacher(n) {
  var i;
  var sli = document.getElementsByClassName("testimoni");
  if (n > sli.length) {slideIndex = 1}   
  if (n < 1) {slideIndex = sli.length}
  for (i = 0; i < sli.length; i++) {
      sli[i].style.display = "none";  
  }
  sli[slideIndex-1].style.display = "block";
}
