var slideindex = 1;

$(document).ready(function() {
  showDivs(slideindex);
})

function plusDivs(n) {
  showDivs(slideindex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("imgSlide");
  if (n > x.length) {slideindex = 1}
  if (n < 1) {slideindex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideindex-1].style.display = "block";
}
