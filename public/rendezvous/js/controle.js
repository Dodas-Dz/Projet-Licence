
	function Confirmersaisie()
	{  
	
        var x = document.forms["formulaire"]["nom"].value;
        var x1 = document.forms["formulaire"]["prenom"].value;
        var x2 = document.forms["formulaire"]["email"].value;
        var x3 = document.forms["formulaire"]["tel"].value;
        var x4 = document.forms["formulaire"]["daten"].value;
        var x5 = document.forms["formulaire"]["date"].value;
        var x6 = document.forms["formulaire"]["mdp"].value;
        var x7 = document.forms["formulaire"]["heure"].value;

        const error=document.querySelector(".error");
        const error1=document.querySelector(".error1");
        const error2=document.querySelector(".error2");
        const error3=document.querySelector(".error3");
        const error4=document.querySelector(".error4");
        const error5=document.querySelector(".error5");
        const error6=document.querySelector(".error6");
        const error7=document.querySelector(".error7");

        const icons=document.querySelector(".validity");
        const icons1=document.querySelector(".validity1");
        const icons2=document.querySelector(".validity2");
        const icons3=document.querySelector(".validity3");
        const icons4=document.querySelector(".validity4");
        const icons5=document.querySelector(".validity5");
        const icons6=document.querySelector(".validity6");
        const icons7=document.querySelector(".validity7");


        

                 if (x == "" && x1 == "" && x2 == ""&& x3 == "" && x4 =="" && x5 ==""  && x7 =="" && x6 =="") 
                      {       
                          alert("Remplir les champs vide !");

                            document.getElementById('erroremail').innerHTML="&nbsp &nbsp  Remplir les champs vide ";
                            document.getElementById('errornom').innerHTML="&nbsp &nbsp  Remplir les champs vide "; 
                            document.getElementById('errorprenom').innerHTML="&nbsp &nbsp  Remplir les champs vide "; 
                            document.getElementById('errormdp').innerHTML="&nbsp &nbsp  Remplir les champs vide "; 
                            document.getElementById('errortel').innerHTML="&nbsp &nbsp  Remplir les champs vide "; 
                            document.getElementById('errordaten').innerHTML="&nbsp &nbsp  Remplir les champs vide "; 
                            document.getElementById('errordate').innerHTML="&nbsp &nbsp  Remplir les champs vide "; 
                            document.getElementById('errorheure').innerHTML="&nbsp &nbsp  Remplir les champs vide "; 

                            error.style.display="block";
                            error1.style.display="block";
                            error2.style.display="block";
                            error3.style.display="block";
                            error4.style.display="block";
                            error5.style.display="block";
                            error6.style.display="block";
                            error7.style.display="block";
            
                            icons.style.display="block";
                            icons1.style.display="block";
                            icons2.style.display="block";
                            icons3.style.display="block";
                            icons4.style.display="block";
                            icons5.style.display="block";
                            icons6.style.display="block";
                            icons7.style.display="block";
                      
                     return false;
                      }
                     
     else if ((x == "" && x1 == "" && x2 == ""&& x3 == "" && x4 =="" && x5 ==""  && x7 =="" && x6 =="")==false ) 
     {

                     if(x == "")
                    {
                        
                        document.getElementById('errornom').innerHTML="&nbsp &nbsp  Remplir les champs vide "; 
                        error2.style.display="block";
                        icons2.style.display="block";
                        
                    }
                    else{
                        error2.style.display="none";
                        icons2.style.display="none";
                    }
                 
                     if(x1 == "")
                    {
                       
                        document.getElementById('errorprenom').innerHTML="&nbsp &nbsp  Remplir les champs vide "; 
                        error3.style.display="block";
                        icons3.style.display="block";

                        
                    }

                    else{
                        error3.style.display="none";
                        icons3.style.display="none";
                    }
                     if(x2 == "")
                    {
                        
                        document.getElementById('erroremail').innerHTML="&nbsp &nbsp  Remplir les champs vide ";
                        error.style.display="block";
                        icons.style.display="block";

                    }
                    else{
                        error.style.display="none";
                        icons.style.display="none";
                    }

                    
                     if(x3 == "")
                    {
                        
                        document.getElementById('errortel').innerHTML="&nbsp &nbsp  Remplir les champs vide "; 
                        error5.style.display="block";
                        icons5.style.display="block";

                    }
                    else{
                        error5.style.display="none";
                        icons5.style.display="none";
                    }

                     if(x4 == "")
                    {
                       
                        document.getElementById('errordaten').innerHTML="&nbsp &nbsp  Remplir les champs vide ";
                        error4.style.display="block";
                        icons4.style.display="block";
                        
                    }
                    else{
                        error4.style.display="none";
                        icons4.style.display="none";
                    }

                     if(x5 == "")
                    {
                        
                        document.getElementById('errordate').innerHTML="&nbsp &nbsp  Remplir les champs vide "; 
                        error6.style.display="block";
                        icons6.style.display="block";

                     
                    }
                    else{
                        error6.style.display="none";
                        icons6.style.display="none";
                    }

                     if(x6 == "")
                    {

                        document.getElementById('errormdp').innerHTML="&nbsp &nbsp  Remplir les champs vide "; 
                        error1.style.display="block";
                        icons1.style.display="block";
                       
                    }
                    else{
                        error1.style.display="none";
                        icons1.style.display="none";
                    }

                     if(x7 == "")
                    {
                        
                        document.getElementById('errorheure').innerHTML="&nbsp &nbsp  Remplir les champs vide "; 

                        error7.style.display="block";
                        icons7.style.display="block";

                    }
                    else{
                        error7.style.display="none";
                        icons7.style.display="none";
                    }
                   
        }
   
      
         
        if (Confirmeremail()==true && Confirmernom()==true && Confirmerheure()==true && Confirmerprenom()==true  && Confirmertel()==true)
        {              
 onchange=alert("Mr/Mme " + formulaire.nom.value +"  "+ formulaire.prenom.value +  "  Votre rendez-vous est  pris pour le  "+ formulaire.date.value +" à "+ formulaire.heure.value);
                    error.style.display="none";
                    error1.style.display="none";
                    error2.style.display="none";
                    error3.style.display="none";
                    error4.style.display="none";
                    error5.style.display="none";
                    error6.style.display="none";
                    error7.style.display="none";
    
                    icons.style.display="none";
                    icons1.style.display="none";
                    icons2.style.display="none";
                    icons3.style.display="none";
                    icons4.style.display="none";
                    icons5.style.display="none";
                    icons6.style.display="none";
                    icons7.style.display="none";               
                    
                    return true;

        }
                
                
                

               
               
                   /* error.style.display="none";
                    error1.style.display="none";
                    error2.style.display="none";
                    error3.style.display="none";
                    error4.style.display="none";
                    error5.style.display="none";
                    error6.style.display="none";
                    error7.style.display="none";
    
                    icons.style.display="none";
                    icons1.style.display="none";
                    icons2.style.display="none";
                    icons3.style.display="none";
                    icons4.style.display="none";
                    icons5.style.display="none";
                    icons6.style.display="none";
                    icons7.style.display="none";
                    
                */
                    

    }
    formulaire.submit();

               

                
 
               
                

               
               
                 
                
	
	

	
	