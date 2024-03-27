
var fade = true;
function faderbutton() {
  var added =document.getElementById("buy");
  let btn = document.getElementById("click");
  if (fade == true) {
    btn.innerHTML = "Remove item";
  
    fade = false;
  } else if (fade == false) {
    btn.innerHTML = "Add to chart";
 
    fade = true;
  }
}