
var fade = true;
function faderbutton() {
  let btn = document.getElementById("$productid");
  if (fade == true) {
    btn.innerHTML = "Remove item";
  
    fade = false;
  } else if (fade == false) {
    btn.innerHTML = "Add to chart";
 
    fade = true;
  }
}

<i style=\"font-size: 11px; position:absolute ;right: 20px; top: 90%;\" class=\"form-text\">$itemleft left</i>
 <i style=\"font-size: 11px; position:absolute ;right: 20px; top: 90%;\" class=\"form-text\">$itemleft left</i>
 <i style=\"font-size: 14px; position:absolute ;left: 2px; top: 64%;\" class=\"form-text mt-lg-4\"> Delivery $$delivery</i>