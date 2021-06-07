function Confirmerprenom()
	{  


var x1 = document.forms["formulaire"]["prenom"].value;


const error3=document.querySelector(".error3");

const icons3=document.querySelector(".validity3");


var prenom=/^([a-z]{3,100})$/;

if(x1!="")
{

if(!prenom.test(x1))
{
    
   document.getElementById('errorprenom').innerHTML=" Entrer un prénom valide ";
   error3.style.display="block";
   icons3.style.display="block";

   
   onchange=alert("Le prénom saisie est incorrect (lettre miniscule)");
  
   
   return false;

}
else
{

error3.style.display="none";
icons3.style.display="none";
return true;
 }
}
    
   }
    prenom.submi();