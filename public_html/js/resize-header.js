// JavaScript Document

// When the user scrolls down 350px from the top of the document, restyle the header
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 350) {
    document.getElementById("header").style.cssText = "height: 50px; background-color: #ba1c1c;";
  } else {
    document.getElementById("header").style.cssText = "height: 100px;";
  }
}