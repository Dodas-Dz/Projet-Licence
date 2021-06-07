
function Confirmerheure(){


var x7 = document.forms["formulaire"]["heure"].value;

const error7=document.querySelector(".error7");

const icons7=document.querySelector(".validity7");

if(x7!="")
{

    if (( x7 > "17:00" ||  x7 < "09:00" ))
   {
     document.getElementById('errorheure').innerHTML=" min à 9h max à 17h ";  
     error7.style.display="block";
     icons7.style.display="block";

     
     onchange= alert("Le rendez-vous doit être pris au min à 9h max à 17h  !");
    
     return false;
  }

  else
  {
 
  error7.style.display="none";
  icons7.style.display="none";
  return true;
   }
   
}

}
 heure.submit();