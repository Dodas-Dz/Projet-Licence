<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('commande/css/headerfooter.css')}}">
    <link rel="stylesheet" href="{{asset('commande/css/command.css')}}">
    
    <title>Zyrah | my commande</title>
</head>
<body>
@include('layouts.header')

    <main>
    <div class="containall">
		<div class="text">
			<h1 class="votre"> Votre  </h1><h1 class="command"> commandes</h1>
		</div>


        <div class="commande">
             <button class="accordion" class="id_commande" >#idcommande
             </button>
             <div class="panel">
                <div class="dsc">
                     <b>Nom commande </b>
                    <b>Date de commande </b>
                     <b>Date de rendez-vous </b>
                    <b>Etat de commande </b>
                </div>
                <div class="values">
                    <div class="nom_commande">Nom commande </div>
                    <div class="date_commande">Date de commande </div>
                     <div class="date_rdv">Date de rendez-vous </div>
                     <div class="Etat">Etat de commande </div>
                </div>


            </div>
  
      








    </div>
</main>
@include('layouts.footer')
  <script src="commande/js/command.js"></script>
</body>
</html>