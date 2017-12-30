//slider ảnh

var slideIndex = 1;
(function(){
    showDivs(slideIndex);
});

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlide");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += "active";

}

var index = 0;

(function(){
    carousel();
})
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlide");
    var dots = document.getElementsByClassName("demo");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    index++;
    if (index > x.length) {index = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
        x[index-1].style.display = "block";
        dots[index-1].className += "active";
        setTimeout(carousel, 2000); 
}

function zoomIn(event) {
  var element = document.getElementById("overlay");
  element.style.display = "inline-block";
  var img = document.getElementById("produk");
  var posX = event.offsetX ? (event.offsetX) : event.pageX - img.offsetLeft;
  var posY = event.offsetY ? (event.offsetY) : event.pageY - img.offsetTop;
  element.style.backgroundPosition=(-posX*0.9)+"px "+(-posY*0.9)+"px";

}


function zoomOut() {
  var element = document.getElementById("overlay");
  element.style.display = "none";
}
function clickImage(e){

  document.getElementById("produk").setAttribute("src",e);
  document.getElementById("overlay").style.backgroundImage = "url('"+e+"')";
}