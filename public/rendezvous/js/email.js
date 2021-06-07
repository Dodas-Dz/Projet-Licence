
function Confirmeremail(){


var x2 = document.forms["formulaire"]["email"].value;


const error=document.querySelector(".error");


const icons=document.querySelector(".validity");


    var expressionReguliere = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;

   
    if(x2!="")
{
  if((!expressionReguliere.test(x2)) )
 {
     
    document.getElementById('erroremail').innerHTML=" Entrer un email valide ";
    error.style.display="block";
    icons.style.display="block";
    
   
        onchange=alert("Le mail saisie est incorrect admin@gmail.com");
    
    return false;
 }

 else
 {

 error.style.display="none";
 icons.style.display="none";
 return true;
  }
  
}
}



email.submit();