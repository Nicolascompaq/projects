
var fade = true;
function faderbutton() {
  let btn = document.getElementById("click");
  if (fade == true) {
    btn.innerHTML = "Entered bond";
  
    fade = false;
  } else if (fade == false) {
    btn.innerHTML = "Enter bond";
 
    fade = true;
  }
}

