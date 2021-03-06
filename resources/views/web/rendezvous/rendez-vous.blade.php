<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zyrah | Rendez-vous</title>
<link href="{{asset('rendezvous/css/main.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('rendezvous/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('rendezvous/css/respensive.css')}}">
<link rel="stylesheet" href="{{asset('apropos/css/headerfooter.css')}}">
<link rel="stylesheet" href="{{asset('rendezvous/css/error.css')}}">
<link rel="icon" href="web/img/logo/Sans nom-2.png">
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
		 <h1>Prise de <span> Rendez-vous  </span></h1>

	</section>
	<form id="login" name="formulaire" onsubmit=" return Confirmersaisie()"  action="{{ route('rendez_vous') }}" method="post">
		
    <section >
 <div class="formulaire">

		  <div class="title">
            <h1 >Formulaire commande id  {{request()->route('id')}}  </h1>
          </div>

<div class="input">
	<p>Vos coordonées:</p>
<br>

 <div class="input1"> 
  

  
 
 
 <input type="hidden" id="commande_id" name="id_commande" value=" {{request()->route('id')}} ">
  <label for="nom">Nom :</label>
  <input onsubmit=" return Confirmernom()" class="controle"onkeyup='this.value=this.value.toUpperCase()' type="text" id="nom" name="nom" size="20"   minlength="3" maxlength="20" placeholder="nom" required>

  	<span class="error2" id="errornom"></span>
  	<span class="validity2"><img src="img/icon/multiply.png"  width="20px" height="20px"></span>
 

	<label for="prenom">Prénom :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input onsubmit=" return Confirmerprenom()" class="controle" type="text" id="prenom" name="prenom" size="30"  minlength="3" maxlength="20" placeholder="prenom"  required>

	<span class="error3" id="errorprenom"></span>
	<span class="validity3"><img src="img/icon/multiply.png"  width="20px" height="20px"></span>


<br>
<label for="prenom">pseudo skype:&nbsp;&nbsp;</label>
	<input onsubmit=" return Confirmerprenom()" class="controle" type="text" id="pseudo" name="pseudo" size="30"  minlength="3" maxlength="20" placeholder="psedo"  required>
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

<a><button type="submit" onClick="Confirmersaisie() , Confirmeremail() , Confirmernom() , Confirmerheure() , Confirmerprenom() , Confirmertel()"> Valider  </button></a>




</div>
</div>

                                         	


 </div>
    
    </section>
</form>

</main>
<!--------------------------------end main-------------------------------> 
<!---------------------------------start_footer-------------------------------->
@include('layouts.footer')
</body>
</html>
