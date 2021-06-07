 function Confirmertel(){

    var x3 = document.forms["formulaire"]["tel"].value;

    const error5=document.querySelector(".error5");

    const icons5=document.querySelector(".validity5");

    var tel=/^(00213|\+213|0)(5|6|7)[0-9]{8}$/;

    if(x3!="")
{
    
    if( (!tel.test(x3)) )
    {
        
       document.getElementById('errortel').innerHTML="Entrer un num téléphone valide  ";

       error5.style.display="block";
       icons5.style.display="block";
   
    
       onchange= alert("Le numéro de téléphone est incorrect (+21300000000 )");
       

       return false;
   
    }


    else
    {
   
    error5.style.display="none";
    icons5.style.display="none";

    return true;
     }
     
   
    }
 }

  tel.submit();
 