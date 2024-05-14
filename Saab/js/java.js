function bigImg(x) {
  x.style.height = "512px";
  x.style.width = "640px";
  x.style.transition="500ms";
}
function normalImg(x) {
  x.style.height = "256px";
  x.style.width = "320px";
}


function mouseOver() {
  document.getElementById("demo").style.color = "darkblue";
}
function mouseOut() {
  document.getElementById("demo").style.color = "black";
}