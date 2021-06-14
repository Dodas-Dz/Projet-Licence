<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('accueil/css/headerfooter.css')}}">
    <link rel="stylesheet" href="{{asset('commande/css/command.css')}}">
    
    <title>Zyrah | my commande</title>
</head>
<body>
@include('layouts.header')

   

    <main>
    @forelse($commandes as $commande)
    <div class="containall">
		<div class="text">
			<h1 class="votre"> Votre  </h1><h1 class="command"> commandes</h1>
		</div>
        <div class="commande">
             <button class="accordion" class="id_commande" >Id commande={{$commande->id}}
             </button>
             <div class="panel">
                <div class="dsc">
                     <b>Nom commande </b>
                    <b>Date de commande </b>
                     <b>Date de rendez-vous </b>
                    <b>Etat de commande </b>
                </div>
                <div class="values">
                    <div class="nom_commande">{{$commande->name}} </div>
                    <div class="date_commande">{{$commande->created_at}} </div>
                     <div class="date_rdv">{{$commande->rendez_vous->date}} </div>
                     <div class="Etat">{{$commande->etat}} </div>
                </div>
            </div>
            </div>
            @empty
            <div class="containall">
		<div class="text">
			<h1 class="votre"> aucune  </h1><h1 class="command"> commandes</h1>
		</div>
        
            </div>
            </div>

    
  
 @endforelse
</main>
@include('layouts.footer')
  <script src="commande/js/command.js"></script>
</body>
</html>