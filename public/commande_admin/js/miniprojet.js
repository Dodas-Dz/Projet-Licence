function myNewFunction(sel) {
  var x = document.getElementById("Etat");
  var y = sel;
  var z = document.getElementById("circle");
  var a = document.getElementById("id_commande");
  var b = document.getElementById("panel");
 
  if(y.value == "pre" ){
    x.innerHTML=y.options[sel.selectedIndex].text;
    z.style.backgroundColor="#9ea7ad";
    a.style["boxShadow"]= "0px -1px 5px 2px  rgba(158, 167, 173, 0.47)";
    b.style["boxShadow"]= "0px 1px 5px 2px  rgba(158, 167, 173, 0.47)";
  }
  else
  if(y.value == "onit" ){
    x.innerHTML=y.options[sel.selectedIndex].text;
    z.style.backgroundColor="	#ffb302";
    a.style["boxShadow"]= "0px -1px 5px 2px rgba(255, 179, 2, 0.70)";
    b.style["boxShadow"]= "0px 1px 5px 2px  rgba(255, 179, 2, 0.70)";
  }else
  if(y.value == "done"){
    x.innerHTML=y.options[sel.selectedIndex].text;
    z.style.backgroundColor="#56f000";
    a.style["boxShadow"]= "0px -1px 5px 2px rgba(86, 240, 0, 0.49)";
    b.style["boxShadow"]= "0px 1px 5px 2px rgba(86, 240, 0, 0.49)";
  }else
  if(y.value == "canceled" ){
    x.innerHTML=y.options[sel.selectedIndex].text;
    z.style.backgroundColor="#ff3838";
    a.style["boxShadow"]= "0px -1px 5px 2px rgba(255, 56, 56, 0.49)";
    b.style["boxShadow"]= "0px 1px 5px 2px rgba(255, 56, 56, 0.49)";
  }else
  if(y.value == "waiting" ){
    x.innerHTML=y.options[sel.selectedIndex].text;
    z.style.backgroundColor="	#2dccff";
    a.style["boxShadow"]= "0px -1px 5px 2px  rgba(45, 204, 255, 0.49)";
    b.style["boxShadow"]= "0px 1px 5px 2px  rgba(45, 204, 255, 0.49)";
  }else sel.selectedIndex="0";

}