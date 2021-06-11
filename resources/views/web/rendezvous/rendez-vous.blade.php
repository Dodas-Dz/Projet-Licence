<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rendez-vous</title>
<link href="{{asset('rendezvous/css/main.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('rendezvous/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('rendezvous/css/respensive.css')}}">
<link rel="stylesheet" href="{{asset('rendezvous/css/headerfooter.css')}}">
<link rel="stylesheet" href="{{asset('rendezvous/css/error.css')}}">

<link rel="icon" type="image/png" href="rendezvous/img/logo/Sans nom-2.png" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" 
integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
<script src="rendezvous/js/controle.js"></script> 
<script src="'rendezvous/js/email.js"></script> 
<script src="'rendezvous/js/nom.js'"></script> 
<script src="'rendezvous/js/heurs.js"></script> 
<script src="'rendezvous/js/nom.js"></script> 
<script src="'rendezvous/js/tel.js"></script>
</head>

<body>

@include('layouts.header')

<!--------------------------------start_main------------------------------->

<main>
	<section class="grandtitle">
		<h3> Rendez-vous</h3>
		 <h1>Prise de <span> Rendez-vous </span></h1>

	</section>
	<form id="login" name="formulaire" onsubmit=" return Confirmersaisie()" action="/action_page.php">
		
    <section >
 <div class="formulaire">

		  <div class="title">
            <h1 >Formulaire</h1>
          </div>

<div class="input">
	<p>Vos coordonées:</p>
<br>

 <div class="input1"> 
  

  
 
 

  <label for="nom">Nom :</label>
  <input onsubmit=" return Confirmernom()" class="controle"onkeyup='this.value=this.value.toUpperCase()' type="text" id="nom" name="nom" size="20"   minlength="3" maxlength="20" placeholder="nom" required>

  	<span class="error2" id="errornom"></span>
  	<span class="validity2"><img src="img/icon/multiply.png"  width="20px" height="20px"></span>
 

	<label for="prenom">Prénom :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input onsubmit=" return Confirmerprenom()" class="controle" type="text" id="prenom" name="prenom" size="30"  minlength="3" maxlength="20" placeholder="prenom"  required>

	<span class="error3" id="errorprenom"></span>
	<span class="validity3"><img src="img/icon/multiply.png"  width="20px" height="20px"></span>


<br>
	</div>



	<div class="input2"> 
		<label for="datenaissance">Date de naissance :</label>
		<input class="controle" type="date" id="datenaissance" name="daten" max="2005-01-01" placeholder="jj/mm/aa" required>
		
		<span class="error4" id="errordaten"></span>
		<span class="validity4"><img src="img/icon/multiply.png"  width="20px" height="20px"></span>
		<br><br><br>
	
	</div>

	
<br>
<br><br><br><br><br><br>
<p>Votre rendez-vous :</p>
<br><br><br><br><br>
<div class="input2">
	<label for="daterdv">Date rendez-vous :</label>
	<input class="controle" type="date" id="daterdv" name="date" min="2021-06-20"  placeholder="jj/mm/aa" required>

	<span class="error6" id="errordate"></span>
	<span class="validity6"><img src="img/icon/multiply.png"  width="20px" height="20px"></span>
	<br>	<br>	<br>	<br>

	<label for="heurerdv">Heure rendez-vous :</label>
	<input  onsubmit=" return Confirmerheure()"class="controle" type="time"id="heurerdv"name="heure"  min="09:00" max="16:00"  placeholder="hh:mm" required>

	<span class="error7" id="errorheure"></span>
	<span class="validity7"><img src="img/icon/multiply.png"  width="20px" height="20px"></span>
</div>
<br>




<div class="input4">
	
<input type="button" value="Valider" 
onClick="Confirmersaisie() , Confirmeremail() , Confirmernom() , Confirmerheure() , Confirmerprenom() , Confirmertel()">




</div>
</div>

                                         	


 </div>
    
    </section>
</form>

</main>
<!--------------------------------end main-------------------------------> 
<!---------------------------------start_footer-------------------------------->
<footer>
  <div class="subscribe">
    <h2>Abonnez Nous</h2>
    <input type="email" placeholder="Entrer votre Email">
    <input type="button" value="Abonnez">
  </div>
  <div class="all">
    <div class="container">
      <div class="list_footer">
        <div class="lists_footer">
          <div class="logo"> <img src="rendezvous/img/logo/zyrah.png" alt="logo">
            <p>Nos réseaux sociaux :</p>
            <ul>
              <li><a href="https://www.facebook.com/zyrah.grp/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://instagram.com/zyrah_grp?utm_medium=copy_link"target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="lists_footer">
          <h2>Services</h2>
          <ul>
            <li><a href="#"><i class="fas fa-caret-right"></i> Site-web </a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> App-Mobile</a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> Design</a></li>
          </ul>
        </div>
        <div class="lists_footer">
          <h2>Liens importants</h2>
          <ul>
            <li><a href="#"><i class="fas fa-caret-right"></i> Acceuil</a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> Services</a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> Commande</a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> A propos</a></li>
          </ul>
        </div>
        <div class="lists_footer">
          <h2>Adresse entreprise</h2>
          <ul>
            <li><span>Address:</span>Tlemcen,Algérie 13 000</li>
            <li><span>Telephone:</span> +213 54 00 73 071</li>
            <li><span>Email:</span> zyrahgroupe@gmail.com</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="copy_right">
    <div class="container"> &copy;
      <p>Copy-Right © 2021 Disigned By Zyrah.</p>
      <ul>
        <li><a href="#">Terms & Condition</a></li>
        <li><a href="#">Privacy Policy</a></li>
      </ul>
    </div>
  </div>
</footer>
</body>
</html>
