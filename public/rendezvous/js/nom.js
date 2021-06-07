function Confirmernom(){

var x = document.forms["formulaire"]["nom"].value;



const error2=document.querySelector(".error2");

const icons2=document.querySelector(".validity2");

    var nom=/^([A-Z]{3,100})$/;

    if(x!="")
    {
   
 if((!nom.test(x)) )
 {
     
    document.getElementById('errornom').innerHTML=" Entrer un nom valide ";
    error2.style.display="block";
    icons2.style.display="block";

   
    onchange= alert("Le nom saisie est incorrect (lettre majiscule)");
    
    return false;

 }
 else
 {

 error2.style.display="none";
 icons2.style.display="none";
 return true;
  }
  
    }
}


nom.submit();